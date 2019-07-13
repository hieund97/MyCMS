@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<style>
    .padding {
        padding-bottom: 40px;
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

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- area 1 --}}
                        <div class="col-md-5" style="float:left;">
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên sản phẩm</label>
                                        <input type="text" name="name" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mã sản phẩm</label>
                                        <input type="text" name="product_code" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Giá sản phẩm (Giá chung)</label>
                                        <input type="text" name="price" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Số lượng</label>
                                        <input type="text" name="quantity" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating">Mô tả ngắn</label>
                                    <div class="form-group">
                                        <textarea name="decription" cols="60" rows="5"></textarea>
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
                        <div class="col-md-3" style=" float:left;">
                            <div class="row">
                                <div class="col-md-9">
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
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select class="selectpicker" name="status" style="width: 275px;"
                                                data-size="7" data-style="btn btn-primary btn-round" title="Tình trạng">
                                                <option value="1">Hết hàng</option>
                                                <option value="2">Còn hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <select class="selectpicker" name="category" style="width: 275px;" data-size="7"
                                        data-style="btn btn-primary btn-round" title="Danh mục">
                                        {{getCategory($categories, 0, '')}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- end area 2 --}}

                        {{-- area 3 --}}
                        <div class="col-md-4" style="float:left;">
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Thương hiệu</label>
                                        <input type="text" name="brand" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
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
                                                                                type="checkbox" name="">
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
                            </div>
                            <div class="row">
                                <div class="col-md-9 padding">
                                    <label class="bmd-label-floating" style="color:#9C27B0"><b>Sản phẩm nổi
                                            bật</b></label>
                                    <div class="togglebutton">
                                        <label>
                                            <input id="mySelect" onchange="myFunction()" type="checkbox"
                                                name="highlight" value="">
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