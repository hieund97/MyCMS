@extends('admin.layout.main')
@section('title', 'Blog')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Danh sách bài viết</h4>
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
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="photo">
                                                <img style=" width: 80px; height: 80px;" src="{{asset ('manage/img/placeholder.jpg') }}" />
                                                {{-- src="{{$blog->thumbnail&&$blog->thumbnail!==''?$blog->thumbnail:asset ('manage/img/placeholder.jpg') }} --}}
                                            </div>
                                        </td>
                                    <td class="text-center">{{$blog->title}}</td>
                                        <td class="text-center">{{$blog->category}}</td>
                                        <td class="text-center"> {{$blog->author}}</td>
                                        <td class="text-center"> {{$blog->created_at}}</td>
                                        <td class="text-center">
                                            <label style="padding-right: 10px;padding-left: 10px;" class="btn btn-info">Published</label>
                                        </td>
                                        <td class="td-actions"
                                            style="width: 106px;padding-right: 0px;padding-left: 20px;">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="#"><i class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
            	
			let userId = $(this).attr('data-id')
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
							url: '/admin/user/' + userId,
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