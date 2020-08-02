@extends('admin.layout.main')
@section('title', 'Brand')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (session()->has('add_brand'))
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
                @if (session()->has('update_brand'))
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
                        <div class="col-md-6" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h2 class="card-title">Danh sách nhà cung cấp</h2>
                        </div>
                        
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="brandtable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 66px;">id</th>
                                        <th style="width: 46px;">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </th>
                                        <th style="width: 416px;">Tên chủ đề</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 186px;">Ngày cập nhật</th>
                                        <th class="text-center" style="width: 156px;">Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                    <tr>
                                        <td class='text-center'>{{$brand->id}}</td>
                                        <td>
                                            <div class='form-check'>
                                                <label class='form-check-label'>
                                                    <input class='form-check-input' type='checkbox'>
                                                    <span class='form-check-sign'>
                                                        <span class='check'></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td><a style='font-weight: bold; font-size: 120%;' href=''>{{$brand->name}}</a>
                                        </td>
                                        <td class='text-center'>{{$brand->created_at}}</td>
                                        <td class='text-center'>{{$brand->updated_at}}</td>

                                        <td class='text-center'>
                                            <label style='padding-right: 10px;padding-left: 10px;'
                                                class='btn btn-info'>Published</label>
                                        </td>
                                        <td class='td-actions'
                                            style='width: 106px;padding-right: 0px;padding-left: 20px;'>
                                            <button type='button' class='btn btn-success btn-round'
                                                data-original-title='Sửa'>
                                                <a style='color:white;'
                                                    href='/admin/products/brand/{{$brand->id}}/edit'><i
                                                        class='material-icons'>edit</i></a>
                                            </button>
                                            <button type='button' class='btn btn-danger btn-round btn-del'
                                                data-id='{{$brand->id}}' data-original-title='Xóa'>
                                                <i class='material-icons'>close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thêm thương hiệu</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/products/brand" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên thương hiệu</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" style="" name="brand" class="form-control" value="{{old('brand')}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <div class="container">
                                            <div class="alert-icon">
                                                <i class="material-icons">error_outline</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                        <b>{{$error}}</b>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <button type="submit" class="btn btn-rose pull-right">Thêm thương hiệu</button>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}

                    </div>
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
			let brandId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa Chủ đề',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/products/brand/' + brandId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Chủ đề đã bị xóa',
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
$(document).ready( function () {
    $('#brandtable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    });
} );
</script>
@endpush