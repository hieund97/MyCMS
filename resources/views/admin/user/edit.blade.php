@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Edit Profile -
                            <small class="category">Complete your profile</small>
                        </h4>
                    </div>
                    <div class="card-body">
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

                        @if ($errors->has('password'))
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
                        @endif
                        {{-- form --}}
                        <form action="/admin/user/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Company</label>
                                        <input type="text" name="company" class="form-control" value="ILOVEU3000"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" name="username" class="form-control"
                                            value="{{$user->user_name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fist Name</label>
                                        <input type="text" name="firstname" class="form-control"
                                            value="{{$user->first_name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Last Name</label>
                                        <input type="text" name="lastname" class="form-control"
                                            value="{{$user->last_name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Level</label>
                                            <input type="text" name="level" class="form-control"
                                                value="{{$user->level}}">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{$user->address}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">City</label>
                                        <input type="text" name="city" class="form-control" value="{{$user->city}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Country</label>
                                        <input type="text" name="country" class="form-control"
                                            value="{{$user->country}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Retype Password</label>
                                        <input type="password" name="retypepassword" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <div class="form-group">
                                            {{-- <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so
                                                thirsty, I'm in that two seat Lambo.</label> --}}
                                            <textarea class="form-control" name="aboutme"
                                                rows="5">{{$user->about_me}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                        <h4 class="title">Avatar</h4>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail img-circle">
                                            <img src="{{$user->avatar&&$user->avatar!==''?$user->avatar:asset ('manage/img/default-avatar.png') }}" alt="...">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                          <div>
                                            <span class="btn btn-round btn-rose btn-file">
                                              <span class="fileinput-new">Add Photo</span>
                                              <span class="fileinput-exists">Change</span>
                                              <input type="file" name="..." />
                                            </span>
                                            <br />
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                          </div>
                                        </div>
                                      </div> --}}
                                <div class="col-md-3" style="padding-right: 30px;padding-left: 30px;">
                                    <div class="card card-profile"
                                        style="margin-top: 0px;margin-bottom: 0px; float:right; width:200px;">
                                        <div class="avatar-wrapper" style="margin-top: 0px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;">
                                            <img class="profile-pic"
                                                src="{{$user->avatar&&$user->avatar!==''?$user->avatar:asset ('manage/img/default-avatar.png') }}" />
                                                
                                            <div class="upload-button">
                                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                            </div>
                                            <input class="file-upload fileinput-new" name="avatar" type="file" accept="image/*" />
                                        </div>
                                    </div>                                       
                                </div>
                            </div>

                            <button type="submit" class="btn btn-rose">Update Profile</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

{{-- Preview ảnh khi upload --}}
<script>
    $(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
       
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>

@endsection