@extends('admin.layout.main')
@section('title', 'Edit Blog-Category')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">book</i>
                        </div>
                        <h4 class="card-title">Sửa đơn vị vận chuyển</h4>
                    </div>
                    <div class="card-body">

                        {{-- form --}}
                        <form action="/admin/ship-method/{{$ship_method->id}}/edit" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên chủ đề</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" style="" name="name" class="form-control"
                                            value="{{$ship_method->name}}" required>
                                        </<input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Giá vận chuyển</h4>
                                    </label>
                                    <div class="form-group">
                                        <input onkeyup="this.value=FormatNumber(this.value);" value="{{$ship_method->price}}" type="text" name="price"
                                            class="form-control" required>
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
                                                <img src="{{$ship_method->logo}}">
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
                            <button type="submit" class="btn btn-rose pull-right">Sửa đơn vị vận chuyển</button>
                            <div class="clearfix"></div>
                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection