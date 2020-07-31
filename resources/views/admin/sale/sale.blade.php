@extends('admin.layout.main')
@section('title', 'Sale')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="col-md-6" style="float:left">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h2 class="card-title">Danh sách hàng trả về</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="brandtable">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 66px;">id</th>
                                        <th style="width: 300px;">Tên sản phẩm</th>
                                        <th class="text-center" style="width: 156px;">Số lượng</th>
                                        <th class="text-center" style="width: 156px;">Phần trăm giảm giá</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 186px;">Ngày cập nhật</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listSale as $sale)
                                    <tr>
                                        <td class='text-center'>{{$sale->id}}</td>
                                        <td><a style='font-weight: bold; font-size: 120%;' href='javascript:void(0)'>{{$sale->name}}</a>
                                        </td>
                                        <td class='text-center'>
                                            <label style='padding-right: 10px;padding-left: 10px;'
                                                class='btn-info'>{{ $sale->code_sale }}</label>
                                        </td>
                                        <td class='text-center'>{{$sale->percent_sale}}%</td>
                                        <td class='text-center'>{{$sale->created_at}}</td>
                                        <td class='text-center'>{{$sale->updated_at}}</td>
                                        <td class='td-actions'
                                            style='width: 106px;padding-right: 0px;padding-left: 20px;'>
                                            <button type='button' class='btn btn-success btn-round'
                                                data-original-title='Sửa'>
                                                <a style='color:white;'
                                                    href='/admin/products/sale/{{$sale->id}}/edit'><i
                                                        class='material-icons'>edit</i></a>
                                            </button>
                                            <button type='button' class='btn btn-danger btn-round btn-del'
                                                data-id='{{$sale->id}}' data-original-title='Xóa'>
                                                <i class='material-icons'>close</i>
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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thêm khuyến mại</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/products/add-sale" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên khuyến mại</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Mã code</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="text" name="code_sale" class="form-control" value="{{old('code')}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Phần trăm khuyến mãi</h4>
                                    </label>
                                    <div class="form-group">
                                    <input type="number" min="0" name="percent_sale" class="form-control" value="{{old('percent_sale')}}">
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose pull-right">Thêm khuyến mại</button>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}
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
			let brandId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa khuyến mại',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/products/sale/' + brandId + '/delete',
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

        $('#brandtable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ]
        });
    });


    @if ($errors->any())
    @foreach ($errors->all() as $error)
    Command: toastr["error"]("{{$error}}")

            toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    @endforeach
    @endif

    @if (session()->has('create_sale'))
    Command: toastr["success"]("Thêm mới khuyến mại thành công")

        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @endif

    @if (session()->has('update_sale'))
    Command: toastr["success"]("Cập nhật khuyến mại thành công")

        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @endif
</script>
@endpush