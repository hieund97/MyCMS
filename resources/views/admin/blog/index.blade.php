@extends('admin.layout.main')
@section('title', 'Blog')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('create_blog'))
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
                                        <th class="text-center" style="width: 66px;">ID</th>
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
                                        <th class="text-center" style="width: 156px;">Ảnh bài viết</th>
                                        <th class="text-center" style="width: 416px;">Tên bài viết</th>
                                        <th class="text-center" style="width: 166px;">Chủ đề</th>
                                        <th class="text-center" style="width: 196px;">Tác giả</th>
                                        <th class="text-center" style="width: 186px;">Xuất bản ngày</th>
                                        <th class="text-center" style="width: 156px;">Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                    <tr>
                                        <td class="text-center">{{$blog->id}}</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="photo">
                                                <a href="/admin/blog/{{$blog->id}}/edit"><img style=" width: 100px; height: 80px;"
                                                    src="{{$blog->thumbnail&&$blog->thumbnail!==''?$blog->thumbnail:asset ('manage/img/noimage.png') }}" /></a>
                                            </div>
                                        </td>
                                        <td><a style="font-weight: bold; font-size: 120%;" href="/admin/blog/{{$blog->id}}/edit">{{$blog->title}}</a>
                                        </td>
                                        <td class="text-center">
                                            {{$blog->blog_category->name}}
                                        </td>
                                        <td class="text-center">
                                            {{ $blog->users->last_name  }} {{ $blog->users->first_name }}
                                        </td>
                                        <td class="text-center"> {{$blog->created_at}}</td>
                                        <td class="text-center">
                                            <label style="padding-right: 10px;padding-left: 10px;"
                                                class="btn btn-info">Published</label>
                                        </td>
                                        <td class="td-actions"
                                            style="width: 106px;padding-right: 0px;">
                                            <button type="button" rel="tooltip" class="btn btn-info btn-round"
                                                data-id="" data-original-title="Xem">
                                                <a style="color:white;" href="/bai-viet/{{$blog->slug}}" target="_blank"><i class="material-icons">visibility</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/blog/{{$blog->id}}/edit"><i class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$blog->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$blogs->links()}}
                                <a href="/admin/blog/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm bài viết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
                @push('js')

                {{-- <link rel="stylesheet" type="text/css" href="{{ asset ('node_modules/sweetalert2/dist/sweetalert2.css') }}">
                --}}
                {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}

                <script>
                    $(document).ready(function(){
		$('.btn-del').click(function(e){		
            e.preventDefault();
            console.log('im in');
            	
			let blogId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa bài viết',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/blog/' + blogId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Bài viết đã bị xóa',
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