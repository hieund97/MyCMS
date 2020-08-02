@extends('admin.layout.main')
@section('title', 'Order')
@section('content')
<div class="content">
    <div class="col-md-12">
        @if (session()->has('update_order'))
        <div class="alert alert-success">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>CẬP NHẬT THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
            </div>
        </div>
        @endif

        <div class="card">
            <div class="card-header card-header-rose card-header-icon">
                <div class="col-md-8" style="float:left">
                    <div class="card-icon">
                        <i class="material-icons">card_travel</i>
                    </div>
                    <h2 class="card-title">Danh sách đơn hàng</h2>
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
                                <th class="text-center" style="width: 163px;">Ngày tạo</th>
                                <th class="text-center" style="width: 96px;">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order as $item)
                            @foreach ($item->attr_order as $product)
                            <tr>
                                <td class="text-center">{{$product->order->order_code}}</td>
                                <td class="td-name">
                                    <a
                                href="/thanh-vien/{{isset($product->order->user->user_name) ? $product->order->user->user_name : 'javascript:void(0)'}}">{{$product->order->user_id == NULL?$product->order->guest->client_name: $product->order->user->last_name .' '. $product->order->user->first_name }}</a>
                                    <br />
                                    <small>SĐT:
                                        {{$product->order->user_id == NULL?$product->order->guest->phone:$product->order->user->phone}}</small>
                                    <br />
                                    <small>Địa chỉ nhận hàng:<br />
                                        {{$product->order->address}}</small>
                                </td>
                                <td>
                                    <label
                                        class="btn-{{$product->order->user_id == NULL?'warning':'success'}}">{{$product->order->user_id == NULL?'Guest':'Member'}}</small></label>
                                </td>
                                <td>
                                    <a href="/san-pham/{{$product->product->p_slug}}" target="_blank">
                                        <div class="img-container">
                                            <img src="{{$product->product->avatar }}"
                                                title="{{$product->product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="td-name">
                                    <a href="/admin/order/{{$product->id}}/edit">{{$product->product->name}}</a>
                                </td>
                                <td>
                                    {{$product->color}}
                                </td>
                                <td class="text-center">
                                    {{$product->size}}
                                </td>
                                <td>
                                    @switch($product->status)
                                        @case(0)
                                            @php
                                                $status = 'Đã tiếp nhận yêu cầu';
                                                $button = 'info';
                                            @endphp
                                            @break
                                        @case(1)
                                            @php
                                                $status = 'Đã xác nhận đơn hàng';
                                                $button = 'warning';
                                            @endphp
                                            @break
                                        @case(2)
                                            @php
                                                $status = 'Đã hủy';
                                                $button = 'danger';
                                            @endphp
                                            @break
                                        @case(3)
                                            @php
                                                $status = 'Đang giao hàng';
                                                $button = 'primary';
                                            @endphp
                                            @break
                                        @case(4)
                                            @php
                                                $status = 'Giao hàng thành công';
                                                $button = 'success';
                                            @endphp
                                            @break
                                        @case(5)
                                            @php
                                                $status = 'Không liện lạc được, hàng trả về';
                                                $button = 'default';
                                            @endphp
                                            @break
                                        @default
                                            
                                    @endswitch
                                   
                                <button class="text-center btn-{{$button}} status-order" data-toggle="modal" data-target="#status-modal" data-id="{{$product->id}}">{{ $status }}</button>
                                </td>
                                <td class="text-center">
                                    {{$product->quantity}}
                                </td>
                                <td class="td-number text-center"
                                    style="{{$product->status == 2? 'text-decoration: line-through':''}}">
                                    {{number_format($product->price)}}đ
                                </td>
                                <td>
                                    {{$product->updated_at}}
                                </td>
                                <td class="td-actions">
                                    <button type="button" class="btn btn-success btn-round"
                                        data-original-title="Cập nhật">
                                        <a style="color:white;" href="/admin/order/{{$product->id}}/edit"><i
                                                class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-round btn-del"
                                        data-id="{{$product->id}}" data-original-title="Hủy đơn hàng">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <input type="hidden" id="status" name="status" value="2">
                                </td>
                            </tr>

                            @endforeach

                            @empty
                            <tr>Không có sản phẩm nào</tr>
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
                  <input class="form-check-input" type="radio" name="status" value="0" checked> Đã tiếp nhận đơn hàng
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="1"> Đã xác nhận đơn hàng
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="2"> Đã hủy
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="3"> Đang giao hàng
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="4"> Giao hàng thành công
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="5"> Không liện lạc được, hàng trả về
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
            console.log('im in');
            	
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
            var orderid = $(this).attr('data-id');
            $('#btn-update-status').click(function(){
                var status = $('input[name=status]:checked').val();
                $.ajax({
                    url: '/admin/order/update-status/' + orderid,
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

        $('#ordertable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 4, 5, 6, 7, 8, 9, 10 ]
                    }, 
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    title: function () { return 'Danh sách đơn hàng' },
                    customize : function(doc) {
                        doc.content[1].table.widths = [ '10%', '20%', '20%', '5%', '5%', '15%', '5%', '10%', '10%' ];
                    },
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [ 0, 1, 4, 5, 6, 7, 8, 9, 10 ]
                    }, 
                    title: function () { return 'Danh sách đơn hàng' },
                }
            ],
            "order": [[ 11, "desc" ]]
        });
    });
</script>
@endpush