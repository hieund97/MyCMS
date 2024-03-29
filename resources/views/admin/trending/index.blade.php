@extends('admin.layout.main')
@section('title', 'Trending')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('create_trending'))
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
                @if (session()->has('update_trending'))
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
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="col-md-8" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h2 class="card-title">Danh sách danh mục</h2>
                        </div>
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <h4 style="color:crimson;margin-left: 60px;">*Danh mục
                                chọn active sẽ xuất hiện trên trang chủ (tối đa 6 danh
                                mục)*</h4>
                            <h4 style="color:crimson;margin-bottom: 40px;margin-left: 60px;">*Danh mục chọn Navbar
                                active sẽ xuất hiện trên thanh navbar trên trang chủ (tối đa 4 danh
                                mục)*</h4>
                            <table class="table table-striped" id="trendingtable">
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
                                        <th class="text-left" style="width: 266px">Ảnh Sản Phẩm</th>
                                        <th style="width: 416px;">Tên chủ đề </th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 186px;">Ngày cập nhật</th>
                                        <th class="text-center" style="width: 156px;">Trạng thái</th>
                                        <th class="text-center" style="width: 156px;">Navbar</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trending as $trend)
                                    <tr>
                                    <td class='text-center'>{{$trend->id}}</td>
                                        <td>
                                            <div class='form-check'>
                                                <label class='form-check-label'>
                                                    <input class='form-check-input' type='checkbox'>
                                                    <span class='form-check-sign'>
                                                        <span class='check'></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='' target='_blank'>
                                                <div class='img-container'>
                                                <img src="{{$trend->avatar}}" title="{{$trend->name}}"
                                                        style='width: 150px; border: solid 1px lightgray;'>
                                                </div>
                                            </a>
                                        </td>
                                        <td><a style='font-weight: bold; font-size: 120%;'
                                                href='/admin/categories/$row->id/edit'>{{$trend->name}}</a>
                                        </td>
                                        <td class='text-center'>{{$trend->created_at}}</td>
                                        <td class='text-center'>{{$trend->updated_at}}</td>

                                        <td class='text-center'>
                                            <button type="button" style='padding-right: 10px;padding-left: 10px;' data-id="{{$trend->id}}" data-toggle="modal" data-target="#status-modal"
                                        class='btn btn-{{$trend->active == 0?'success':'danger'}} status-trend'>{{$trend->active == 0?'Normal':'Active'}}</button>
                                        </td>
                                        <td class='text-center'>
                                            <button type="button" style='padding-right: 10px;padding-left: 10px;' data-id="{{$trend->id}}" data-toggle="modal" data-target="#status-modal-nav"
                                                class='btn btn-{{$trend->navactive == 0?'success':'danger'}} status-trend-nav'>{{$trend->navactive == 0?'Normal':'Active'}}</button>
                                        </td>
                                        <td class='td-actions'
                                            style='width: 106px;padding-right: 0px;padding-left: 20px;'>
                                            <button type='button' class='btn btn-success btn-round'
                                                data-original-title='Sửa'>
                                    <a style='color:white;' href='/admin/trending/{{$trend->id}}/edit'><i
                                                        class='material-icons'>edit</i></a>
                                            </button>
                                            <button type='button' class='btn btn-danger btn-round btn-del'
                                                data-id="{{$trend->id}}" data-original-title='Xóa'>
                                                <i class='material-icons'>close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/admin/trending/create" style="padding-left: 15px; padding-right: 15px;"
                                    class="btn btn-primary pull-right">Thêm Trending</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal nav -->
<div class="modal fade" id="status-modal-nav" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <input class="form-check-input" type="radio" name="status_nav" value="0" checked> Normal
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status_nav" value="1"> Active
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="btn-update-status-nav">Lưu</button>
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
@push('js')



<script>
    $(document).ready(function(){
        $('.btn-del').click(function(e){
            e.preventDefault();
			let CategoryId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa Chủ đề',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/categories/' + CategoryId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Chủ đề đã bị xóa',
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

        $('.status-trend-nav').click(function(){
            debugger;
            var trendIdNav = $(this).attr('data-id');
            $('#btn-update-status-nav').click(function(){
                var statusNav = $('input[name=status_nav]:checked').val();
                $.ajax({
                    url: '/admin/trending/update-status-navbar/' + trendIdNav,
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        status: statusNav
                    },
                    success: function(){
                        $('#status-modal-nav').modal('hide');
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Trạng thái đã được cập nhật',
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }
                });
            });
        });

        $('.status-trend').click(function(){
            var trendId = $(this).attr('data-id');
            $('#btn-update-status').click(function(){
                var status = $('input[name=status]:checked').val();
                $.ajax({
                    url: '/admin/trending/update-status/' + trendId,
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        status: status
                    },
                    success: function(){
                        $('#status-modal').modal('hide');
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Trạng thái đã được cập nhật',
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }
                });
            });
        });


        $('#trendingtable').DataTable({
            "order": [[ 0, "desc" ]]
        });
    });
</script>
@endpush