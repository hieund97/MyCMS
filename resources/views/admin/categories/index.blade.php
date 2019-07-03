@extends('admin.layout.main')
@section('title', 'Category')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (session()->has('create_category'))
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
                @if (session()->has('update_category'))
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
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Danh sách danh mục</h4>
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
                            <table class="table table-striped">
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
                                    {{showCategory($categories, 0, '')}}
                                </tbody>
                            </table>
                            {{-- <div>
                                <a href="/admin/categories/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm danh mục</a>
                                {{$categories->links()}}
                            </div> --}}
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
                        <h4 class="card-title">Thêm danh mục</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/categories" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên danh mục</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="category" class="form-control" required>
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('category'))
                            <div class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>LỖI</b> DANH MỤC BỊ TRÙNG
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <label class="bmd-label-floating"
                                    style="padding-left: 15px; padding-right: 30px;padding-top: 15px;">
                                    <h4>Danh mục cha</h4>
                                </label>

                                <select class="selectpicker" data-size="7" name="parent"
                                    data-style="btn btn-primary btn-round" title="Single Select">
                                    <option selected value="0">Danh mục gốc</option>
                                    {{getCategory($categories, 0, '')}}

                                </select>

                            </div>

                            <button type="submit" class="btn btn-rose pull-right">Tạo danh mục</button>
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
            console.log('im in');        
            	
			let CategoryId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa người dùng',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/categories/' + CategoryId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Người dùng đã bị xóa',
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