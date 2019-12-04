@extends('admin.layout.main')
@section('title', 'Bình luận')
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
                                <i class="material-icons">description</i>
                            </div>
                            <h2 class="card-title">Danh sách bình luận</h2>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="cmttable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 56px;">ID</th>
                                        <th style="width: 350px;">User Name</th>
                                        <th style="width: 86px; display: inline-block; margin-right: 30px;" class="text-center">Vị trí</th>
                                        <th class="text-center">Comment</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-right" style="width: 100px;">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comment as $cmt)
                                    <tr>
                                        <td class="text-center">{{$cmt->id}}</td>
                                        <td>
                                            <div class="photo" style="float: left;">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$cmt->user_id == null? 'http://cms.local/manage/img/default-avatar.png': $cmt->user->avatar}}" />
                                            </div>
                                            <div style="float: left; margin-left: 20px;">
                                            <a style="font-weight: bold; font-size: 120%;" href="{{$cmt->guest_id == null? '/admin/user/'.$cmt->user_id.'/edit' : '#'}}">
                                                    {{$cmt->user_id == null? $cmt->guest->client_name:$cmt->user->last_name }} {{$cmt->user_id == null? '':$cmt->user->first_name }}
                                                </a>
                                                <br>
                                                <span>{{$cmt->user_id == null? $cmt->guest->email:$cmt->user->email }}</span>
                                            </div>

                                        </td>
                                        <td>
                                        <label style="padding: 10px;" class="btn btn-{{$cmt->user_id == null? 'warning':'success'}}">{{$cmt->user_id == null? 'Guest':'Member'}}</label>
                                        </td>
                                        <td class="text-justify">
                                            <p>{{$cmt->content}}</p>
                                        </td>
                                        <td class='text-center'>{{$cmt->created_at}}</td>
                                        <td class="td-actions text-right" style="padding-right: 15px;">
                                            <button type="button" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                        <a style="color:white;" href="/admin/user/{{$cmt->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-round btn-del" data-id=""
                                                data-original-title="Xóa">
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
    
// $(document).ready( function () {
//     $('#cmttable').DataTable();
// } );
</script>
@endpush