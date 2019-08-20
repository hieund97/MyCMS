<link rel="stylesheet" href="{{ asset ('client/css/navbar.css') }}">

<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">

<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" "
    id="sectionsNav" style="height: 80px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"
                style="font-family: 'Sigmar One', cursive; font-size: 23px; padding-top: 20px;margin-left: 0px;">
                MrSpicy Boutique
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-center" style="margin-top: 10px;">
                <li>
                    <a style="font-size:100%;" href="/">
                        <i class="material-icons">home</i>
                    </a>
                </li>
                @foreach ($navCategory as $navCate)
                <li>
                    <a style="font-size:100%;" href="/danh-muc/{{$navCate->p_cate_slug}}">
                        {{$navCate->name}}
                        @if ($navCate->childs->count() > 0)
                        <b class="caret"></b>
                        @endif

                    </a>
                    @if ($navCate->childs->count() > 0)
                    <ul class="dropdown-menu" style="margin-top: 0px;">
                        @foreach ($navCate->childs as $item)
                        <li class="attrli"><a href="/danh-muc/{{$item->p_cate_slug}}"> > {{$item->name}}</a></li>
                        <li class="divider"></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach

                <li>
                    <a style="font-size:100%;" href="/thanh-vien/uu-dai">
                        Membership
                    </a>
                </li>
                <li style="margin-left:10px;">
                    <a style="font-size:100%;" href="/thanh-vien/{{auth()->user()->slug}}">
                        {{auth()->user()->last_name}} {{auth()->user()->first_name}} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="margin-top: 0px;">
                        <li>
                            <a href="/thanh-vien/{{auth()->user()->slug}}">Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="/thanh-vien/{{auth()->user()->slug}}/don-hang">Đơn hàng của tôi</a>
                        </li>
                        <li style="display: {{auth()->user()->level == 1? 'block':'none'}};">
                            <a href="/admin">Trang quản trị</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Đăng
                                xuất</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="margin-right:20px;">
                    <a href="/thanh-vien/{{auth()->user()->slug}}" class="profile-photo dropdown-toggle">
                        <div class="profile-photo-small">
                            <img style="height: 40px;width: 50px;"
                                src="{{auth()->user()->avatar&&auth()->user()->avatar!==''?auth()->user()->avatar:asset ('manage/img/default-avatar.png') }}"
                                alt="Circle Image" class="img-circle img-responsive">
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gio-hang">Giỏ hàng
                        <i class="material-icons">shopping_cart</i>
                        <span style="display: {{Cart::content()->count() > 0?'block':'none'}}"
                            class="notification_cart">{{Cart::content()->count()}}</span>
                    </a>
                </li>
                <li class="li-mar">
                    <div class="added__animation">
                        <span>+1</span>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-top: 10px; margin-right: 10px;">
                <form class="navbar-form navbar-right" action="/tim-kiem-san-pham" role="search">
                    <div class="form-group form-black">
                        <input type="text" name="key" class="form-control" required placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i
                            class="material-icons">search</i></button>
                </form>
            </ul>
        </div>
    </div>
</nav>
<form action="/logout" method="POST" id="logout-form">
    @csrf
</form>