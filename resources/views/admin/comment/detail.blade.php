@extends('admin.layout.main')
@section('title', 'Bình luận')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('reply'))
                <div class="alert alert-success">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>REPLY THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="col-md-8" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">description</i>
                            </div>
                            <h2 class="card-title">Chi tiết bình luận</h2>
                        </div>
                    </div>


                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <table class="table" id="cmttable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 56px;">ID</th>
                                        <th style="width: 350px;">User Name</th>
                                        <th class="text-center">Vị trí</th>
                                        <th class="text-center">Comment</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{$review->id}}</td>
                                        <td>
                                            <div class="photo" style="float: left;">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$review->user_id == null? 'http://cms.local/manage/img/default-avatar.png': $review->user->avatar}}" />
                                            </div>
                                            <div style="float: left; margin-left: 20px;">
                                                <a style="font-weight: bold; font-size: 120%;"
                                                    href="{{$review->guest_id == null? '/admin/user/'.$review->user_id.'/edit' : '#'}}">
                                                    {{$review->user_id == null? $review->guest->client_name:$review->user->last_name }}
                                                    {{$review->user_id == null? '':$review->user->first_name }}
                                                </a>
                                                <br>
                                                <span>{{$review->user_id == null? $review->guest->email:$review->user->email }}</span>
                                            </div>

                                        </td>
                                        <td>
                                            <label style="padding: 10px;"
                                                class="btn btn-{{$review->user_id == null? 'warning':'success'}}">{{$review->user_id == null? 'Guest':'Member'}}</label>
                                        </td>
                                        <td class="text-justify" style="padding-left: 30px;">
                                            <div class="row" style="margin: 0">
                                                <p>{{$review->content}}</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <button type="button" style="padding: 12px;"
                                                        class="btn btn-success btn-round" rel="tooltip" title="Sửa">
                                                        <a style="color:white;"
                                                            href="/admin/comment/{{$review->id}}/detail"><i
                                                                class="material-icons">edit</i> Xem chi tiết</a>
                                                    </button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" style="padding: 12px;"
                                                        class="btn btn-warning btn-round bt-block"
                                                        data-id="{{$review->id}}" rel="tooltip" title="Block">
                                                        <a style="color:white;"
                                                            href="/admin/comment/{{$review->id}}/block"><i
                                                                class="material-icons">lock</i>Block</a>
                                                    </button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" style="padding: 12px;"
                                                        class="btn btn-danger btn-round btn-del"
                                                        data-id="{{$review->id}}" rel="tooltip" title="Xóa">
                                                        <i class="material-icons">close</i>Xóa
                                                    </button>
                                                </div>
                                            </div>
                                            <form action="/admin/comment/reply" style="width: 100%; height: 100%" method="POST">
                                                @csrf
                                                <input type="hidden" name="commentid" value="{{$review->id}}">
                                            <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                                                <div class="row" style="padding-top: 30px;">

                                                    <div class="col-md-8">
                                                        <span class="bmd-form-group"><input type="text" name="content"
                                                                class="form-control" placeholder="Trả lời bình luận"
                                                                style="width: 500px;"></span>
                                                    </div>
                                                    <div class="col-md-1" style="width: 110px;padding: 0px;">
                                                        <button type="submit"
                                                            style="width: 80px;padding-left: 0px;margin-left: 0px;padding-right: 0px;padding-top: 10px;padding-bottom: 10px;margin-right: 0px;"
                                                            class="btn btn-rose pull-right">Trả lời</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </td>
                                        <td class='text-center'>{{$review->created_at}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h3 class="card-title ">Người dùng trả lời</h3>
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="">
                                    <th class="text-center" style="width: 76px;">
                                        ID
                                    </th>
                                    <th style="width: 350px;">
                                        UserName
                                    </th>
                                    <th style="width: 88px;" class="text-center">
                                        Vị Trí
                                    </th>
                                    <th class="text-center">
                                        Reply
                                    </th>
                                    <th class="text-center" style="width: 186px;">
                                        Ngày tạo
                                    </th>
                                    <th style="width: 200px;" class="text-right">Hành động</th>
                                </thead>
                                <tbody>
                                    @forelse ($reply as $rep)
                                    <tr class="{{$rep->block == 1?'table-danger':''}}">
                                        <td class="text-center">
                                            {!! $rep->block == 1? '<i class="material-icons" style="color: red;">lock</i>':'' !!}                                            
                                            <span>{{$rep->id}}</span>
                                        </td>
                                        <td>
                                            <div class="photo" style="float: left;">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$rep->user_id == null? 'http://cms.local/manage/img/default-avatar.png': $rep->user->avatar}}" />
                                            </div>
                                            <div style="float: left; margin-left: 20px;">
                                                <a style="font-weight: bold; font-size: 120%;"
                                                    href="{{$rep->guest_id == null? '/admin/user/'.$rep->user_id.'/edit' : '#'}}">
                                                    {{$rep->user_id == null? $rep->guest->client_name:$rep->user->last_name }}
                                                    {{$rep->user_id == null? '':$rep->user->first_name }}
                                                </a>
                                                <br>
                                                <span>{{$rep->user_id == null? $rep->guest->email:$rep->user->email }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <label style="padding: 10px;"
                                                class="btn btn-{{$rep->user_id == null? 'warning':'success'}}">{{$rep->user_id == null? 'Guest':'Member'}}
                                        </td>
                                        </td>
                                        <td class="text-justify" style="padding-left: 30px;">
                                            <p>{{$rep->content}}</p>
                                        </td>
                                        <td class="text-center">
                                            {{$rep->created_at}}
                                        </td>
                                        <td class="td-actions text-right" style="padding-right: 15px;">
                                            @if ($rep->block == 0)
                                            <button type="button" style="padding: 12px;"
                                                class="btn btn-warning btn-round bt-repblock" data-id="{{$rep->id}}"
                                                rel="tooltip" title="Block">
                                                <a style="color:white;" href="/admin/comment/{{$rep->id}}/repblock"><i
                                                        class="material-icons">lock</i>Block</a></i>
                                            </button>
                                            @else
                                            <button type="button" style="padding: 12px;"
                                                class="btn btn-info btn-round bt-unrepblock" data-id="{{$rep->id}}"
                                                rel="tooltip" title="Gỡ Block">
                                                <a style="color:white;" href="/admin/comment/{{$rep->id}}/unrepblock"><i
                                                        class="material-icons">lock_open</i>Gỡ block</a>
                                            </button>
                                            @endif

                                            <button type="button" style="padding: 12px;"
                                                class="btn btn-danger btn-round btn-del" data-id="{{$review->id}}"
                                                rel="tooltip" title="Xóa">
                                                <i class="material-icons">close</i>Xóa
                                            </button>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse

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
            	
			let repId = $(this).attr('data-id')
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: 'Bạn có chắc chắn muốn xóa bình luận',
					text: "Hành động sẽ không thể hoàn tác",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Có, Xóa bình luận',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/comment/' + repId + '/deletereply',
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

    $(document).ready(function(){
		$('.bt-repblock').click(function(e){		
            e.preventDefault();
            console.log('im in');
            	
			let repBlockId = $(this).attr('data-id')
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: 'Bạn có chắc chắn muốn block bình luận',
					text: "Hành động sẽ không thể hoàn tác",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Có, Block bình luận',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/comment/' + repBlockId + '/repblock',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",								
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã Block!',
								'Bình luận đã bị Block',
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

    $(document).ready(function(){
		$('.bt-unrepblock').click(function(e){		
            e.preventDefault();
            console.log('im in');
            	
			let unRepBlockId = $(this).attr('data-id')
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: 'Bạn có chắc chắn muốn block bình luận',
					text: "Hành động sẽ không thể hoàn tác",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Có, Block bình luận',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/comment/' + unRepBlockId + '/unrepblock',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",								
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã gỡ Block!',
								'Bình luận đã được gỡ block',
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