@extends('admin.layout.main')
@section('title', 'Product Back')
@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="row">
                    <div class="col-md-11">
                        <div class="card-icon">
                            <i class="material-icons">card_travel</i>
                        </div>
                        <h2 class="card-title">Danh sách hàng trả về</h2>
                    </div>
                    <div class="col-md-1" style="right: 15px;top: 15px;">
                        <a href="/admin/product-back" class="btn btn-info" id="btn-pdf" >Xuất pdf</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-hover">
                <div class="table-responsive">
                    <table class="table table-shopping" id="ordertable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 116px;">Mã đơn hàng</th>
                                <th style="width: 236px;">Tên khách hàng</th>
                                <th class="th-description text-center" style="width: 66px;">Level</th>
                                <th class="text-left" style="width: 196px">Ảnh Sản Phẩm</th>
                                <th style="width: 256px;">Tên sản Phẩm</th>
                                <th class="th-description" style="width: 66px;">Màu sắc</th>
                                <th class="text-center" style="width: 66px;">Size</th>
                                <th class="th-description text-center" style="width: 116px;">Trạng thái</th>
                                <th class="th-description text-right" style="width: 86px;">Số lượng</th>
                                <th class="text-center" style="width: 126px;">Giá</th>
                                <th class="text-center" style="width: 163px;">Ngày cập nhật</th>
                                {{-- <th class="text-center" style="width: 96px;">Hành động</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($list_product_back as $item)
                            @php
                            $infoVariant = getInfoProductFromVariant($item->variant_id);
                            $variant = $infoVariant['variant'];
                            $valueVariant = $infoVariant['value'];
                            @endphp
                            @php
                            $order = getInfoOrder($item->order_id);
                            $product = getInfoProduct($item->product_id);
                            if ($order->user_id != null) {
                            $user = getInfoUser($order->user_id);
                            }
                            else {
                            $user = getInfoGuest($order->guest_id);
                            }
                            @endphp
                            @if ($product != null)
                            <tr>
                                <td class="text-center">{{$order->order_code}}</td>
                                <td class="td-name">
                                    <a
                                        href="/thanh-vien/{{isset($user->user_name) ? $user->user_name : 'javascript:void(0)'}}">{{isset($user->client_name) ? $user->client_name : $user->last_name .' '. $user->first_name }}</a>
                                    <br />
                                    <small>SĐT:
                                        {{ $user->phone }}</small>
                                    <br />
                                    <small>Địa chỉ nhận hàng:<br />
                                        {{$order->address}}</small>
                                </td>
                                <td>
                                    <label
                                        class="btn-{{isset($user->client_name)?'warning':'success'}}">{{isset($user->client_name)?'Guest':'Member'}}</small></label>
                                </td>
                                <td>
                                    <a href="/san-pham/{{$product->p_slug}}" target="_blank">
                                        <div class="img-container">
                                            <img src="{{$product->avatar }}" title="{{$product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="td-name">
                                    <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                                </td>
                                <td>
                                    {{isset($valueVariant[1]) ? $valueVariant[1]['value'] : 'Không có thuộc tính'}}
                                </td>
                                <td class="text-center">
                                    {{isset($valueVariant[0]) ? $valueVariant[0]['value'] : 'Không có thuộc tính'}}
                                </td>
                                <td>
                                    @switch($item->status)
                                    @case(0)
                                    @php
                                    $status = 'Hàng trả về';
                                    $button = 'warning';
                                    @endphp
                                    @break
                                    @case(1)
                                    @php
                                    $status = 'Hàng hỏng hóc';
                                    $button = 'danger';
                                    @endphp
                                    @break
                                    @case(2)
                                    @php
                                    $status = 'Chuyển hàng bán lại';
                                    $button = 'info';
                                    @endphp
                                    @break
                                    @endswitch

                                    <button class="text-center btn-{{$button}} status-order" data-toggle="modal"
                                        data-target="#status-modal" data-id="{{$item->id}}">{{ $status }}</button>
                                </td>
                                <td class="text-center">
                                    {{$item->quantity}}
                                </td>
                                <td class="td-number text-center">
                                    {{number_format($variant->price)}}đ
                                </td>
                                <td>
                                    {{$item->updated_at}}
                                </td>
                            </tr>
                            @endif
                            @empty
                            <tr>Không sản phẩm nào</tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật trạng thái</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="0" checked> Hàng trả về
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="1"> Hàng hỏng hóc
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="2"> Hàng chuyển bán lại
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="btn-update-status">Lưu</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
		$('.btn-del').click(function(e){
            e.preventDefault();
			let cancelId = $(this).attr('data-id')
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: 'Bạn có chắc chắn muốn hủy',
					text: "Hành động sẽ không thể hoàn tác",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Có, Hủy đơn hàng',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/order/cancel/' + cancelId,
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
                                status: $('#status').val(),
								_method: "PUT"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã hủy!',
								'Đơn hàng đã hủy',
								'success'
								).then((result2) => {
									if(result2.value){
									window.location.reload();
									}
								});
							}
						});
						
					} else if (
						// Read more about handling dismissals
						result.dismiss === Swal.DismissReason.cancel
					) {
						swalWithBootstrapButtons.fire(
						'Đã hủy',
						'Dữ liệu của bạn vẫn an toàn :)',
						'error'
						)
					}
				})	
		});

        $('.status-order').click(function(){
            var backid = $(this).attr('data-id');
            $('#btn-update-status').click(function(){
                var status = $('input[name=status]:checked').val();
                $.ajax({
                    url: '/admin/products/update-status-product-back/' + backid,
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        status: status
                    },
                    success: function(){
                        $('#status-modal').modal('hide');
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Trạng thái sản phẩm đã được cập nhật',
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }
                });
            });
        });

        $('#btn-pdf').click(function (){
            toastr.info('Đang xử lý');
        });
    });

    $('#ordertable').DataTable();
</script>
@endpush