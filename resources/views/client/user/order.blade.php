@extends('client.layout.main')
@section('title', 'Đơn hàng')
@section('content')

@include('client.partial.header')

<div class="main main-raised">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 35px;">
            <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th class="th-description">Màu sắc</th>
                            <th class="th-description">Size</th>
                            <th class="text-center">Trang thái</th>
                            <th class="text-right">Số lượng</th>
                            <th class="text-right">Phí vận chuyển</th>
                            <th class="text-right">Giá</th>
                            <th class="text-center">Hủy</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        @foreach ($order->attr_order as $item)
                        <tr>
                            <td>
                                {{$item->order->order_code}}
                            </td>
                            <td>
                                <div class="img-container">

                                    <img src="{{$item->product->avatar}}" alt="...">


                                </div>
                            </td>
                            <td class="td-name text-primary">

                                {{$item->product->name}}

                            </td>
                            <td>

                                {{$item->color}}


                            </td>
                            <td>

                                {{$item->size}}

                            </td>
                            <td class="text-left">
                                @if ($item->status == 0)
                                <label class="btn-info">Đã tiếp nhận yêu cầu</label>
                                @endif

                                @if ($item->status == 1)
                                <label class="btn-warning">Đã xác nhận đơn hàng</label>
                                @endif

                                @if ($item->status == 2)
                                <label class="btn-danger">Đã hủy</label>
                                @endif

                                @if ($item->status == 3)
                                <label class="btn-primary">Đang giao hàng</label>
                                @endif

                                @if ($item->status == 4)
                                <label class="btn-success">Giao hàng thành công</label>
                                @endif

                                @if ($item->status == 5)
                                <label style="color: white;background-color: #9E9E9E;">Không liên lạc được</label>
                                @endif
                            </td>
                            <td class="td-number">
                                {{$item->quantity}}
                            </td>
                            <td class="td-number" style="{{$item->status == 2? 'text-decoration: line-through':''}}">
                                {{number_format($order->ship->price)}}đ
                            </td>
                            <td class="td-number" style="{{$item->status == 2? 'text-decoration: line-through':''}}">
                                {{number_format($item->price * $item->quantity)}}đ
                            </td>
                            <td class="td-action text-right">
                                @if ($item->status == 2 || $item->status == 5)
                                <a href="/san-pham/{{$item->product->p_slug}}" class="btn btn-primary">Mua lại</a>
                                @elseif ($item->status == 4)
                                <button disabled data-id="{{$item->id}}" class="btn btn-danger btn-del"
                                    style="padding: 12px 10px">Hủy đơn hàng</button>                                
                                @else
                                <button data-id="{{$item->id}}" class="btn btn-danger btn-del"
                                    style="padding: 12px 10px">Hủy đơn hàng</button>
                                @endif
                                <input type="hidden" id="status" name="status" value="2">
                            </td>
                        </tr>
                        @endforeach
                        @empty
                        <tr>
                            <p class="text-danger">Không có sản phẩm nào</p>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{$orders->links()}}
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
							url: '/thanh-vien/huy-don-hang/' + cancelId,
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