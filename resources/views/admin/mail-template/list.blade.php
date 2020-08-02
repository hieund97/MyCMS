@extends('admin.layout.main')
@section('title', 'Email-Tempate')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="col-md-8" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">book</i>
                            </div>
                            <h2 class="card-title">Danh sách Email</h2>
                        </div>
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <table class="table table-striped" id="blogtable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 66px;">ID</th>
                                        <th class="text-center" style="width: 416px;">Tên</th>
                                        <th class="text-center" style="width: 166px;">Chủ đề</th>
                                        <th class="text-center" style="width: 166px;">Subject</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_template as $list)
                                    <tr>
                                        <td class="text-center">{{$list->id}}</td>
                                        <td class="text-center">
                                            {{$list->name}}
                                        </td>
                                        <td class="text-center">
                                            {{$list->category}}
                                        </td>
                                        <td class="text-center">
                                            {{ $list->subject  }}
                                        </td>
                                        <td class="text-center"> {{$list->created_at}}</td>
                                        <td class="td-actions" style="width: 106px;padding-right: 0px;">
                                            <button type="button" class="btn btn-success btn-round"
                                                title="Sửa">
                                                <a style="color:white;" href="/admin/email-template/{{$list->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$list->id}}" title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/admin/email-template/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm email</a>
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
    @if (session()->has('create_email'))
    toastr.success('Thêm mới email thành công');
    @endif

    @if (session()->has('update_email'))
    toastr.success('Cập nhật email thành công');
    @endif
    $(document).ready(function(){
		$('.btn-del').click(function(e){
            e.preventDefault();
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
							url: '/admin/email-template/' + blogId + '/delete',
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

        $('#blogtable').DataTable();
    });
</script>
@endpush