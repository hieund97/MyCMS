@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="col-md-12">
        @if (session()->has('edit_price'))
        <div class="alert alert-success">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>THÊM THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
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
                                <th class="text-center" style="width: 56px;">#</th>
                                <th class="text-left" style="width: 196px">Ảnh Sản Phẩm</th>
                                <th style="width: 308px;">Tên sản Phẩm</th>
                                <th class="th-description" style="width: 136px;">Mã sản phẩm</th>
                                <th class="text-center" style="width: 166px;">Danh mục</th>
                                <th class="th-description" style="width: 66px;">Số lượng</th>
                                <th class="th-description" style="width: 116px;">SP Nổi bật</th>
                                <th class="text-center" style="width: 126px;">Giá chung</th>
                                <th class="text-center" style="width: 163px;">Ngày cập nhật</th>
                                <th class="text-center" style="width: 17px;">Tình trạng</th>
                                <th class="text-center" style="width: 116px;">Hành động</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="text-center">{{$product->id}}</td>
                                <td>
                                    <a href="/admin/products/{{$product->id}}/edit">
                                        <div class="img-container">
                                            <img src="{{ $product->avatar }}" title="{{$product->name}}">
                                        </div>
                                    </a>
                                </td>
                                <td class="td-name">
                                    <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                                    <br />
                                    <small>by {{$product->brand->name}}</small>
                                </td>
                                <td>
                                    {{$product->product_code}}
                                </td>
                                <td class="text-center">
                                    @foreach ($product->categories as $cate)
                                    <a href="#"><b>{{$cate->name}},</b></a>
                                    @endforeach
                                </td>
                                <td>
                                    {{$product->quantity}}
                                </td>
                                <td>
                                    <span
                                        style="color: {{$product->highlight == 1? 'Red':'darkgray'}}">{{$product->highlight == 1? 'Có':'Không'}}</span>
                                </td>
                                <td class="td-number text-center">
                                    {{number_format($product->price)}} VNĐ
                                </td>
                                <td class="text-center">
                                    {{$product->updated_at}}
                                </td>
                                <td class="td-number text-center">
                                    <label class="btn btn-{{$product->quantity ==  0? 'danger':'success'}}"
                                        style="padding-left: 15px;padding-right: 15px;">{{$product->quantity ==  0? 'Hết hàng':'Còn hàng'}}</label>
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-round"
                                        data-original-title="Giá tùy chỉnh">
                                        <a style="color:white;" href="/admin/products/price/{{$product->id}}/edit"><i
                                                class="material-icons">assessment</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                        data-original-title="Chỉnh sửa">
                                        <a style="color:white;" href="/admin/products/{{$product->id}}/edit"><i
                                                class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                        data-id="{{$product->id}}" data-original-title="Xóa">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{$products->links()}}
                <a href="/admin/products/create" style="padding-left: 15px; padding-right: 15px;"
                    class="btn btn-primary pull-right">Thêm sản phẩm</a>
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
            	
			let productId = $(this).attr('data-id')
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: 'Bạn có chắc chắn muốn xóa',
					text: "Hành động sẽ không thể hoàn tác",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Có, Xóa sản phẩm',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/products/' + productId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Sản phẩm đã bị xóa',
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