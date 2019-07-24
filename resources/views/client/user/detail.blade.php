@extends('client.layout.main')
@section('title', 'Blogs')
@section('content')



<div class="page-header header-filter" data-parallax="true"
    style="background-image: url( {{ asset ('client/img/examples/city.jpg') }} ); height: 200px;">
</div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">

            <div class="row" style="margin-top: 30px;">
                {{-- <div class="col-md-12"> --}}
                <div class="col-md-3">
                    <img src="{{auth()->user()->avatar&&auth()->user()->avatar!==''?auth()->user()->avatar:asset ('manage/img/default-avatar.png') }}"
                        alt="Circle Image" class="img-circle img-responsive img-raised"
                        style="height: 250px; width: 250px;">
                </div>
                <div class="col-md-9">
                    <div class="name">
                        <h3 class="title">{{auth()->user()->last_name}} {{auth()->user()->first_name}}</h3>
                        <h6>@ {{auth()->user()->user_name}}</h6>
                    </div>
                    <div>
                        <p>{{auth()->user()->about_me}}</p>
                    </div>
                </div>

                {{-- </div> --}}
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                <li class="active">
                                    <a href="#work" role="tab" data-toggle="tab">
                                        <i class="material-icons">accessibility_new</i>
                                        Chỉnh sửa thông tin
                                    </a>
                                </li>
                                <li>
                                    <a href="#connections" role="tab" data-toggle="tab">
                                        <i class="material-icons">commute</i>
                                        Đơn hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="#media" role="tab" data-toggle="tab">
                                        <i class="material-icons">find_replace</i>
                                        Lịch sử giao dịch
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <!-- End Profile Tabs -->
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active work" id="work">
                    
                </div>
                <div class="tab-pane connections" id="connections">
                    
                </div>
                <div class="tab-pane text-center gallery" id="media">
                    
                </div>
            </div>



        </div>
    </div>
</div>
@endsection