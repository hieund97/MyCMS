@extends('admin.layout.main')
@section('title', 'Create Product')
@section('content')
<style>
    .padding {
        padding-bottom: 40px;
    }

    .martop {
        margin-top: 40px;
    }
</style>
<div class="content">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                        <i class="material-icons">card_travel</i>
                    </div>
                    <h4 class="card-title">Thêm sản phẩm</h4>
                </div>
                <div class="card-body">

                    <form action="/admin/products" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- area 1 --}}
                        <div class="col-md-5 martop" style="float:left;">
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mã sản phẩm</label>
                                        <input type="text" name="product_code" class="form-control">
                                    </div>
                                </div>
                                @if ($errors->has('product_code'))
                                <div style="width: 470px;" class="alert alert-danger">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>LỖI</b> MÃ SẢN PHẨM KHÔNG ĐƯỢC TRÙNG
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá sản phẩm (Giá chung)</label>
                                        <input onkeyup="this.value=FormatNumber(this.value);" type="text" name="price"
                                            class="form-control">
                                    </div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số lượng</label>
                                        <input type="number" name="quantity" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating">Mô tả ngắn</label>
                                    <div class="form-group">
                                        <textarea name="description" cols="60" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating">Chi tiết sản phẩm</label>
                                    <div class="form-group">
                                        <textarea name="detail" cols="60" rows="7"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end area 1 --}}

                        {{-- area 2 --}}
                        <div class="col-md-3 martop" style=" float:left;">
                            <div class="row">
                                <div class="col-md-9 padding">
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
                                                    <input type="file" name="avatar" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10" style="padding-bottom: 50px;">
                                    <select class="selectpicker" name="category[]" data-style="select-with-transition"
                                        multiple title="Chọn danh mục" data-size="10">
                                        {{getCategory($categories, 0, '')}}
                                    </select>
                                    <a href="/admin/categories" title="Quản lý danh mục"><i
                                            style="margin-left: 10px;margin-top: 10px;"
                                            class="material-icons">settings</i></a>
                                </div>
                                @if ($errors->has('category'))
                                <div style="width: 300px;" class="alert alert-danger">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>LỖI</b> DANH MỤC KHÔNG ĐƯỢC ĐỂ TRỐNG
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-9" style="margin-top: 20px;">
                                    <select class="selectpicker" data-size="7" name="brand" data-style="btn btn-primary btn-round"
                                        title="Chọn thương hiệu">
                                        @if (isset($brands))
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                        @endif                                        
                                    </select>
                                </div>
                            </div>
                            @if ($errors->has('brand'))
                            <div style="width: 300px;" class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>LỖI</b> THƯƠNG HIỆU KHÔNG ĐƯỢC ĐỂ TRỐNG
                                </div>
                            </div>
                            @endif
                        </div>
                        {{-- end area 2 --}}

                        {{-- area 3 --}}
                        <div class="col-md-4 martop" style="float:left;">
                            <div class="row padding" style="padding-left: 0px;">
                                <div class="col-md-12">
                                    <div class="card-body" style="padding-left: 0px;">
                                        <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                            @php
                                            $i = 0;
                                            @endphp
                                            @foreach ($attribute as $attr)
                                            <li class="nav-item">
                                                <a class="nav-link {{$i == 0? 'active' : ''}}" data-toggle="tab"
                                                    href="#link{{$attr->id}}" role="tablist">
                                                    {{$attr->name}}
                                                </a>
                                            </li>
                                            @php
                                            $i =1;
                                            @endphp
                                            @endforeach
                                            <a style="padding-left: 20px;padding-top: 10px;"
                                                href="/admin/products/value" target="_blank"
                                                title="Chỉnh sửa thuộc tính"><i class="material-icons">settings</i></a>
                                        </ul>
                                        <div class="tab-content tab-space">
                                            @foreach ($attribute as $attr)
                                            <div class="tab-pane {{$i == 1? 'active' : ''}}" id="link{{$attr->id}}">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                @foreach ($attr->value as $value)
                                                                <th>{{$value->value}}</th>
                                                                @endforeach
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                @foreach ($attr->value as $value)
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input class="form-check-input"
                                                                                type="checkbox"
                                                                                name="attr[{{$attr->id}}][]"
                                                                                value="{{$value->id}}">
                                                                            <span class="form-check-sign">
                                                                                <span class="check"></span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                @endforeach
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            @php
                                            $i =2;
                                            @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('attr'))
                                <div style="margin-left: 20px;width: 480px;" class="alert alert-danger">
                                    <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>LỖI</b> THUỘC TÍNH KHÔNG ĐƯỢC ĐỂ TRỐNG
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating" style="color:#9C27B0"><b>Sản phẩm nổi
                                            bật</b></label>
                                    <div class="togglebutton">
                                        <label>
                                            <input id="mySelect" onchange="myFunction()" type="checkbox"
                                                name="highlight" value="1">
                                            <span class="toggle"></span>
                                            <span id="show" style="color: darkgray">Sản phẩm không nổi bật</span>
                                        </label>
                                    </div>
                                    <script>
                                        function myFunction(){
                                            if (document.getElementById("mySelect").checked){
                                                document.getElementById("show").innerHTML = "Sản phẩm nổi bật"
                                            }
                                            else
                                            {
                                                document.getElementById("show").innerHTML = "Sản phẩm không nổi bật"
                                            }
                                            
                                        }
                                    </script>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose">Thêm sản phẩm</button>
                        </div>
                        {{-- end area 3 --}}
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection