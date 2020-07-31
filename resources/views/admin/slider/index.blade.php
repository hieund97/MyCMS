@extends("admin.layout.main")
@section("title", "Slider")
@section("content")
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has("create_slider"))
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
                @if (session()->has("update_slider"))
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
                    <div class="card-header card-header-rose card-header-icon" style="height: 80px;">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title">Danh sách ảnh</h2>                        
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <h3 style="color:crimson;margin-bottom: 40px;margin-left: 60px;">*Ảnh có thuộc tính active
                                sẽ xuất hiện trên trang chủ (tối đa 5 ảnh)*</h3>
                            <table class="table table-striped" id="slidertable">
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
                                        <th class="text-left" style="width: 466px">Ảnh</th>
                                        <th class="text-center" style="width: 216px;">Tên ảnh </th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 186px;">Ngày cập nhật</th>
                                        <th class="text-center" style="width: 156px;">Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                    <tr>
                                        <td class="text-center">{{$slider->id}}</td>
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
                                        <td>
                                            <a href="/admin/slider/{{$slider->id}}/edit">
                                                <div class="img-container">
                                                    <img src="{{$slider->image}}" title="{{$slider->name}}"
                                                        style="border: solid 1px lightgray;" >
                                                </div>
                                            </a>
                                        </td>
                                        <td  class="text-center"><a style="font-weight: bold; font-size: 120%;"
                                                href="/admin/slider/{{$slider->id}}/edit">{{$slider->name}}</a>
                                        </td>
                                        <td class="text-center">{{$slider->created_at}}</td>
                                        <td class="text-center">{{$slider->updated_at}}</td>

                                        <td class="text-center">
                                            <button type="button" style="padding-right: 10px;padding-left: 10px;" data-id="{{$slider->id}}" data-toggle="modal" data-target="#status-modal"
                                                class="btn btn-{{$slider->active == 1? "danger": "success"}} status-slider">{{$slider->active == 1? "Active": "Normal"}}</button>
                                        </td>
                                        <td class="td-actions"
                                            style="width: 106px;padding-right: 0px;padding-left: 20px;">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/slider/{{$slider->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$slider->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div>
                                <a href="/admin/slider/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm ảnh</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật trạng thái</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="0" checked> Normal
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="1"> Active
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="btn-update-status">Lưu</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@push("js")



<script>
    $(document).ready(function(){
        $(".btn-del").click(function(e){
            e.preventDefault();
			let sliderId = $(this).attr("data-id")
			const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: "btn btn-success",
						cancelButton: "btn btn-danger"
					},
					buttonsStyling: false,
					})

					swalWithBootstrapButtons.fire({
					title: "Bạn có chắc chắn muốn xóa",
					text: "Hành động sẽ không thể hoàn tác",
					type: "warning",
					showCancelButton: true,
					confirmButtonText: "Có, Xóa ảnh",
					cancelButtonText: "Không, Hủy bỏ!",
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: "/admin/slider/" + sliderId + "/delete",
							method: "POST",
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								"Đã xóa!",
								"Ảnh đã bị xóa",
								"success"
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
						"Đã hủy",
						"Dữ liệu của bạn vẫn an toàn :)",
						"error"
						)
					}
				})	
		});

        $('.status-slider').click(function(){
            var sliderId = $(this).attr('data-id');
            $('#btn-update-status').click(function(){
                var status = $('input[name=status]:checked').val();
                $.ajax({
                    url: '/admin/slider/update-status/' + sliderId,
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        status: status
                    },
                    success: function(){
                        $('#status-modal').modal('hide');
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Trạng thái sản phẩm đã được cập nhật',
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }
                });
            });
        });

        $('#slidertable').DataTable({
            "order": [[ 0, "desc" ]]
        });
    });
</script>
@endpush