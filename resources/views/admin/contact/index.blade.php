@extends("admin.layout.main")
@section("title", "Contact")
@section("content")
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="col-md-8" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h2 class="card-title">Danh sách thông tin liên hệ</h2>
                        </div>
                        <div class="col-md-4" style="float:right;margin-top: 15px;">
                            <form action="/admin/contact/import" method="post" enctype="multipart/form-data">
                                @csrf
                                <span style=" color: black;">Nhập file excel</span>
                                <input type="file" name="file" style="color:brown; width: 200px;" required>
                                <button type="submit" style="padding: 10px" class="btn btn-success">Nhập</button>
                                <a href="/admin/contact/export" style="padding: 10px" class="btn btn-warning">Xuất ra
                                    file
                                    excel</a>
                            </form>
                        </div>
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <table class="table table-striped" id="contacttable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">id</th>
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
                                        <th style="width: 216px;">Tên</th>
                                        <th style="width: 316px;">Email </th>
                                        <th style="width: 516px;">Message </th>
                                        <th style="width: 216px;">Ngày tạo</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="text-center">{{$contact->id}}</td>
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
                                        <td><b>{{$contact->name}}</b></td>
                                        <td><b>{{$contact->email}}</b></td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->created_at}}</td>

                                        <td class="td-actions text-center">
                                            <button type="button" class="btn btn-success" data-original-title="Gửi">
                                                <a style="color:white;" href="/admin/contact/{{$contact->id}}/reply">Phản hồi</a>
                                            </button>
                                            <button type="button" style="margin-left: 20px;"
                                                class="btn btn-danger btn-round btn-del" data-id="{{$contact->id}}"
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
            	
			let contactId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa email',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/contact/' + contactId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Email đã bị xóa',
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
    $('#contacttable').DataTable();
} );
</script>
@endpush