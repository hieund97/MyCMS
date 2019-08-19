@extends('client.layout.main')
@section('title', 'Tài khoản')
@section('content')



<div class="page-header header-filter" data-parallax="true"
    style="background-image: url( {{ asset ('client/img/examples/city.jpg') }} ); height: 200px;">
</div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container-fluid" style="padding: 30px 90px">
            @if (session()->has('update_user'))
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
            @if (session()->has('change_pass'))
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

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1">
                            <ul class="nav nav-pills nav-pills-icons nav-stacked" role="tablist">
                                <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                                <li class="active">
                                    <a href="#profile" role="tab" data-toggle="tab">
                                        <i class="material-icons">supervisor_account</i>
                                        Thông tin
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit_profile" role="tab" data-toggle="tab">
                                        <i class="material-icons">subject</i>
                                        Chỉnh sửa thông tin
                                    </a>
                                </li>
                                <li>
                                    <a href="/don-hang">
                                        <i class="material-icons">shopping_basket</i>
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10" style="margin-left: 30px;">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{$user->avatar}}" alt="Circle Image"
                                                class="img-rounded img-responsive img-raised"
                                                style="height: 250px; width: 250px;">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="name">
                                                <h3 class="title">{{$user->last_name}} {{$user->first_name}}</h3>
                                                <h6>@ {{$user->user_name}}</h6>
                                            </div>
                                            <div>
                                                <p>{{$user->about_me}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="edit_profile">
                                    <form action="/thanh-vien/{{$user->slug}}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Họ</label>
                                                        <input type="text" name="lastname" class="form-control chieucao"
                                                            value=" {{$user->last_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Tên</label>
                                                        <input type="text" name="firstname"
                                                            value="{{$user->first_name}}" class="form-control chieucao">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nick Name</label>
                                                        <input type="text" name="username" class="form-control chieucao"
                                                            value="{{$user->user_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Email</label>
                                                        <input type="email" name="email" class="form-control chieucao"
                                                            value="{{$user->email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Địa chỉ</label>
                                                        <input type="text" name="address" class="form-control chieucao"
                                                            value="{{$user->address}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Thành phố</label>
                                                        <input type="text" name="city" class="form-control chieucao"
                                                            value="{{$user->city}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Quốc gia</label>
                                                        <input type="text" name="country" class="form-control chieucao"
                                                            value="{{$user->country}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Số điện thoại</label>
                                                        <input type="text" name="phone" value="{{$user->phone}}"
                                                            class="form-control chieucao">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Mật khẩu:
                                                            ****************</label>
                                                        <a href="/thanh-vien/{{$user->slug}}/doi-mat-khau" class="btn btn-info"
                                                            style="padding-left:10px; padding-right: 10px; margin-left: 40px;">Đổi
                                                            mật khẩu</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label>Giới thiệu bản thân</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="aboutme"
                                                                rows="5">{{$user->about_me}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                style="width: 150px;padding-left: 25px;margin-left: 15px;"
                                                class="btn btn-rose pull-right">Cập nhật</button>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="card card-profile"
                                                style="width: 300px;margin-bottom: 0px;margin-left: 40px;">
                                                <div class="fileinput fileinput-new text-center"
                                                    data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                        <img src="{{$user->avatar}}">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                    <div>
                                                        <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">Chọn ảnh</span>
                                                            <span class="fileinput-exists">Đổi ảnh</span>
                                                            <input type="file" name="avatar" />
                                                        </span>
                                                        <a href="#pablo"
                                                            class="btn btn-danger btn-round fileinput-exists"
                                                            data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                            Loại bỏ</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    </div>
</div>
</div>
@endsection