@extends('admin.layout.main')
@section('title', 'User')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('create_user'))
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
                @if (session()->has('import_user'))
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
                        <div class="col-md-8" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">face</i>
                            </div>
                            <h2 class="card-title">Danh sách thành viên</h2>
                        </div>
                        <div class="col-md-4" style="float:right;margin-top: 15px;">
                            <form action="/admin/user/import" method="post" enctype="multipart/form-data">
                                @csrf
                                <span style=" color: black;">Nhập file excel</span>
                                <input type="file" name="file" style="color:brown; width: 200px;" required>
                                <button type="submit" style="padding: 10px" class="btn btn-success">Nhập</button>
                                <a href="/admin/user/export" style="padding: 10px" class="btn btn-warning">Xuất ra file
                                    excel</a>
                            </form>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="usertable">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Tên</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th style="padding-left: 45px;">Vị trí</th>
                                        <th>Avatar</th>
                                        <th class="text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $member)
                                    <tr>
                                        <td class="text-center">{{$member->id}}</td>
                                        <td><a style="font-weight: bold; font-size: 120%;"
                                                href="/admin/user/{{$member->id}}/edit">{{$member->last_name}}
                                                {{$member->first_name}}</a></td>
                                        <td>{{$member->user_name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->phone}}</td>
                                        <td>
                                            <label style="width: 110px;"
                                                class="btn btn-{{$member->level==1?'danger':'success'}}">{{$member->level==1?'Admin':'Member'}}</label>
                                        </td>
                                        <td>
                                            <div class="photo">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$member->avatar&&$member->avatar!==''?$member->avatar:asset ('manage/img/default-avatar.png') }}" />
                                            </div>
                                        </td>
                                        <td class="td-actions text-right" style="padding-right: 15px;">
                                            <button type="button" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/user/{{$member->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$member->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>

                                <a href="/admin/user/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm thành viên</a>

                            </div>
                        </div>
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
    
$(document).ready( function () {
    $('#usertable').DataTable();
} );
</script>
@endpush