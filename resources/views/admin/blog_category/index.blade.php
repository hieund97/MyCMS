@extends('admin.layout.main')
@section('title', 'Category')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (session()->has('create_blog_category'))
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
                @if (session()->has('update_blog_category'))
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
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Danh sách bài viết</h4>
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
                                    @foreach ($blog_categories as $blog_category)
                                    <tr>
                                        <td class="text-center">{{$blog_category->id}}</td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td><a style="font-weight: bold; font-size: 120%;"
                                                href="/admin/blog-category/{{$blog_category->id}}/edit">{{$blog_category->name}}</a>
                                        </td>
                                        <td class="text-center">{{$blog_category->created_at}}</td>
                                        <td class="text-center">{{$blog_category->updated_at}}</td>

                                        <td class="text-center">
                                            <label style="padding-right: 10px;padding-left: 10px;"
                                                class="btn btn-info">Published</label>
                                        </td>
                                        <td class="td-actions"
                                            style="width: 106px;padding-right: 0px;padding-left: 20px;">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;"
                                                    href="/admin/blog-category/{{$blog_category->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$blog_category->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$blog_categories->links()}}                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Thêm chủ đề</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/blog-category" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên chủ đề</h4>
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
                                    <b>LỖI</b> CHỦ ĐỀ BỊ TRÙNG
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="card card-profile">
                                    <label class="bmd-label-floating">
                                        <h4>Mô tả ngắn</h4>
                                    </label>
                                    <div class="form-group">                                        
                                        <textarea class="form-control" name="short_decription"
                                            style="padding-left: 15px; padding-right: 15px;" required rows="8">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Tạo chủ đề</button>
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
        
            	
			let blogCategoryId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa chủ đề',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/blog-category/' + blogCategoryId + '/delete',
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
</script>
@endpush