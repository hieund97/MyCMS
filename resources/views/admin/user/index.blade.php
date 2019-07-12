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
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">face</i>
                        </div>
                        <h4 class="card-title">Danh sách thành viên</h4>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
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
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{$user->id}}</td>
                                        <td><a style="font-weight: bold; font-size: 120%;" href="/admin/user/{{$user->id}}/edit">{{$user->last_name}} {{$user->first_name}}</a></td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            <label style="width: 110px;"
                                                class="btn btn-{{$user->level==1?'danger':'success'}}">{{$user->level==1?'Admin':'Member'}}</label>
                                        </td>
                                        <td>
                                            <div class="photo">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$user->avatar&&$user->avatar!==''?$user->avatar:asset ('manage/img/default-avatar.png') }}" />
                                            </div>
                                        </td>
                                        <td class="td-actions text-right" style="padding-right: 15px;">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/user/{{$user->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$user->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$users->links()}}
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

{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('node_modules/sweetalert2/dist/sweetalert2.css') }}"> --}}
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