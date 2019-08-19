@extends('client.layout.main')
@section('title', 'Tài khoản')
@section('content')



<div class="page-header header-filter" data-parallax="true"
    style="background-image: url( {{ asset ('client/img/examples/city.jpg') }} ); height: 200px;">
</div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container-fluid" style="padding: 30px 90px">
            <form action="/thanh-vien/{{$user->slug}}/doi-mat-khau" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Mật khẩu mới</label>
                            <input type="password" name="password" class="form-control chieucao" value="">
                            <span class="text-danger">*Mật khẩu phải có độ dài tối thiểu là 8 ký tự*</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nhập lại mật khẩu</label>
                            <input type="password" name="retypepassword" value="" class="form-control chieucao">
                        </div>
                    </div>
                </div>
                @if ($errors->has('password'))
                <div class="row">
                    <div class="col-md-5">
                        <div class="alert alert-danger">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="material-icons">error_outline</i>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                </button>
                                <b>LỖI</b> MẬT KHẨU KHÔNG KHỚP
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-info">Đổi mật khẩu</button>
            </form>
        </div>





    </div>
</div>
</div>
@endsection