@extends('admin.layout.main')
@section('title', 'Ship Method')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (session()->has('create_ship'))
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
                @if (session()->has('update_ship'))
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
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Danh sách đơn vị vận chuyển</h4>                        
                    </div>
                    <div class="card-body table-hover">
                        <div class="table-responsive">
                            <table class="table table-striped" id="shiptable">
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
                                        <th class="text-left" style="width: 116px">Logo</th>
                                        <th style="width: 316px;">Tên đơn vị</th>
                                        <th class="text-left" style="width: 116px">Giá</th>
                                        <th class="text-center" style="width: 186px;">Ngày tạo</th>
                                        <th class="text-center" style="width: 186px;">Ngày cập nhật</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ship_method as $ship)
                                    <tr>
                                        <td class="text-center">{{$ship->id}}</td>
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
                                            <a href="" target="_blank">
                                                <div style="display: {{$ship->logo == NULL? 'none':'block'}}"
                                                    class="img-container">
                                                    <img src="{{ $ship->logo }}" title="{{$ship->name}}">
                                                </div>
                                            </a>
                                        </td>
                                        <td><a style="font-weight: bold; font-size: 120%;"
                                                href="/admin/ship-method/{{$ship->id}}/edit">{{$ship->name}}</a>
                                        </td>
                                        <td>{{number_format($ship->price)}} VNĐ</td>
                                        <td class="text-center">{{$ship->created_at}}</td>
                                        <td class="text-center">{{$ship->updated_at}}</td>

                                        <td class="td-actions"
                                            style="width: 106px;padding-right: 0px;padding-left: 20px;">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/ship-method/{{$ship->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                data-id="{{$ship->id}}" data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$ship_method->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Thêm đơn vị vận chuyển</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/ship-method" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên đơn vị vận chuyển</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text"  name="name" class="form-control" required>
                                        </ <input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Giá vận chuyển</h4>
                                    </label>
                                    <div class="form-group">
                                        <input onkeyup="this.value=FormatNumber(this.value);" type="text" name="price" class="form-control">
                                        </ <input>
                                        {{-- Hàm định dạng tiền tệ --}}
                                        <script>
                                        var inputnumber = 'Giá trị nhập vào không phải là số';
                                        function FormatNumber(str) {
                                            var strTemp = GetNumber(str);
                                            if (strTemp.length <= 3)
                                                return strTemp;
                                            strResult = "";
                                            for (var i = 0; i < strTemp.length; i++)
                                                strTemp = strTemp.replace(",", "");
                                            var m = strTemp.lastIndexOf(".");
                                            if (m == -1) {
                                                for (var i = strTemp.length; i >= 0; i--) {
                                                    if (strResult.length > 0 && (strTemp.length - i - 1) % 3 == 0)
                                                        strResult = "," + strResult;
                                                    strResult = strTemp.substring(i, i + 1) + strResult;
                                                }
                                            } else {
                                                var strphannguyen = strTemp.substring(0, strTemp.lastIndexOf("."));
                                                var strphanthapphan = strTemp.substring(strTemp.lastIndexOf("."),
                                                        strTemp.length);
                                                var tam = 0;
                                                for (var i = strphannguyen.length; i >= 0; i--) {
    
                                                    if (strResult.length > 0 && tam == 4) {
                                                        strResult = "," + strResult;
                                                        tam = 1;
                                                    }
    
                                                    strResult = strphannguyen.substring(i, i + 1) + strResult;
                                                    tam = tam + 1;
                                                }
                                                strResult = strResult + strphanthapphan;
                                            }
                                            return strResult;
                                        }
    
                                        function GetNumber(str) {
                                            var count = 0;
                                            for (var i = 0; i < str.length; i++) {
                                                var temp = str.substring(i, i + 1);
                                                if (!(temp == "," || temp == "." || (temp >= 0 && temp <= 9))) {
                                                    alert(inputnumber);
                                                    return str.substring(0, i);
                                                }
                                                if (temp == " ")
                                                    return str.substring(0, i);
                                                if (temp == ".") {
                                                    if (count > 0)
                                                        return str.substring(0, ipubl_date);
                                                    count++;
                                                }
                                            }
                                            return str;
                                        }
    
                                        function IsNumberInt(str) {
                                            for (var i = 0; i < str.length; i++) {
                                                var temp = str.substring(i, i + 1);
                                                if (!(temp == "." || (temp >= 0 && temp <= 9))) {
                                                    alert(inputnumber);
                                                    return str.substring(0, i);
                                                }
                                                if (temp == ",") {
                                                    return str.substring(0, i);
                                                }
                                            }
                                            return str;
                                        }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating">
                                        <h4>Logo</h4>
                                    </label>
                                    <div class="card card-profile" style="width: 250px;margin-top: 0px;">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                <img src="{{asset ('manage/img/placeholder.jpg') }}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="logo" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('category'))
                            <div class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>LỖI</b> CHỦ ĐỀ BỊ TRÙNG
                                </div>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary pull-right">Tạo đơn vị vận chuyển</button>
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
            console.log('im in');
        
            	
			let shipId = $(this).attr('data-id')
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
					confirmButtonText: 'Có, Xóa đơn vị vận chuyển',
					cancelButtonText: 'Không, Hủy bỏ!',
					reverseButtons: true
					}).then((result) => {
					if (result.value) {
						$.ajax({
							url: '/admin/ship-method/' + shipId + '/delete',
							method: 'POST',
							data: {
								_token: "{{csrf_token()}}",
								_method: "DELETE"
							},
							success: function(){
								swalWithBootstrapButtons.fire(
								'Đã xóa!',
								'Đơn vị vận chuyển đã bị xóa',
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
    $('#shiptable').DataTable();
} ); 
</script>
@endpush