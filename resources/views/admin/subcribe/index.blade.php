@extends("admin.layout.main")
@section("title", "Subcribe")
@section("content")
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon" style="height: 80px;">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title">Danh sách email đăng ký</h2>                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="subscribetable">
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
                                        <th class="text-center" style="width: 516px;">Tên chủ đề </th>
                                        <th class="text-center" style="width: 316px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 316px;">Ngày cập nhật</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcribe as $sub)
                                    <tr>
                                        <td class="text-center">{{$sub->id}}</td>
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
                                        <td class="text-center"><b>{{$sub->email}}</b></td>
                                        <td class="text-center">{{$sub->created_at}}</td>
                                        <td class="text-center">{{$sub->updated_at}}</td>
                                        <td class="td-actions text-center">
                                            <button type="button" rel="tooltip" class="btn btn-success"
                                                data-original-title="Gửi">
                                                <a style="color:white;" href="#">Gửi thông tin khuyến mãi</a>
                                            </button>
                                            <button type="button" style="margin-left: 20px;" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$sub->id}}" data-original-title="Xóa">
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
            	
			let subId = $(this).attr('data-id')
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
							url: '/admin/subcribe/' + subId + '/delete',
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
    $('#subscribetable').DataTable();
} );
</script>
@endpush