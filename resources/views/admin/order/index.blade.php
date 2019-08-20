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
                <div class="card-icon">
                    <i class="material-icons">card_travel</i>
                </div>
                <h4 class="card-title">Danh sách sản phẩm</h4>
                <div style="float:right;">
                    <div id="datatables_filter" class="dataTables_filter">
                        <label>
                            <span class="bmd-form-group bmd-form-group-sm"><input type="search"
                                    class="form-control form-control-sm" placeholder="Search records"
                                    aria-controls="datatables"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-shopping">
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
                                        href="/">{{$product->order->user_id == NULL?$product->order->guest->client_name: $product->order->user->last_name .' '. $product->order->user->first_name }}</a>
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
                                    <a href="/" target="_blank">
                                        <div class="img-container">
                                            <img src="{{ $product->product->avatar }}"
                                                title="{{$product->product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="td-name">
                                    <a href="/">{{$product->product->name}}</a>

                                </td>
                                <td>
                                    {{$product->color}}
                                </td>
                                <td class="text-center">
                                    {{$product->size}}
                                </td>
                                <td>
                                    @if ($product->status == 0)
                                    <label class="text-center btn-info">Đã tiếp nhận yêu cầu</label>
                                    @endif

                                    @if ($product->status == 1)
                                    <label class="text-center btn-warning">Đã xác nhận đơn hàng</label>
                                    @endif

                                    @if ($product->status == 2)
                                    <label class="text-center btn-danger">Đã hủy</label>
                                    @endif

                                    @if ($product->status == 3)
                                    <label class="text-center btn-primary">Đang giao hàng</label>
                                    @endif

                                    @if ($product->status == 4)
                                    <label class="text-center btn-success">Giao hàng thành công</label>
                                    @endif
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
                                    <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                        data-original-title="Cập nhật">
                                        <a style="color:white;" href="/admin/order/{{$product->id}}/edit"><i
                                                class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
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
	});    
</script>
@endpush