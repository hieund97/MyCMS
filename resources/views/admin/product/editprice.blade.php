@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="float:left;">
                @if (session()->has('create_product'))
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
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title">Giá theo biển thể sản phẩm: <span style="color:darkmagenta">{{$product->name}}</span> </h2>                        
                    </div>                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST">
                                @method('PUT')
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 56px;">#</th>
                                            <th style="width: 516px;">Thuộc tính</th>
                                            <th style="width: 616px;">Giá</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->variant as $variant)
                                        <tr>
                                            <td class="text-center">{{$variant->id}}</td>
                                            <td>
                                                @foreach ($variant->value as $value)
                                                {{$value->attribute->name}}: {{$value->value}},
                                                @endforeach
                                            <td>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá cho biến thể</label>
                                                    <input style="width: 400px;" type="text" onkeyup="this.value=FormatNumber(this.value);"
                                                        name="price[{{$variant->id}}]" class="form-control"
                                                        value="{{number_format($variant->price)}}">
                                                </div>
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
                                            </td>
                                            <td class="td-actions">
                                                <button style=" margin-right: 50px;  margin-bottom: 15px;" type="button"
                                                    rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                    data-id="{{$variant->id}}" data-original-title="Xóa">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 style="margin-left: 50px; color:crimson">Note *Bạn có thể bỏ qua nếu sản phẩm chỉ dùng MỘT GIÁ DUY NHẤT*</h4>
                                <div>
                                    <a href="/admin/products/image/{{$product->id}}/edit" style="padding-left: 15px; padding-right: 15px;"
                                        class="btn btn-warning pull-right"><i class="material-icons">cached</i> Bỏ
                                        qua</a>
                                    <button type="submit" style="padding-left: 15px; padding-right: 15px;"
                                        class="btn btn-success pull-right"><a style="color:white;" href=""><i
                                                class="material-icons">edit</i></a> Cập nhật</button>
                                </div>
                            </form>
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
                    
                let variantId = $(this).attr('data-id')
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
                        confirmButtonText: 'Có, Xóa giá trị',
                        cancelButtonText: 'Không, Hủy bỏ!',
                        reverseButtons: true
                        }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url: '/admin/products/price/' + variantId + '/delete',
                                method: 'POST',
                                data: {
                                    _token: "{{csrf_token()}}",
                                    _method: "DELETE"
                                },
                                success: function(){
                                    swalWithBootstrapButtons.fire(
                                    'Đã xóa!',
                                    'Giá trị đã bị xóa',
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