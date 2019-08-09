<link rel="stylesheet" href="{{ asset ('client/css/navbar.css') }}">


<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">

<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" "
    id="sectionsNav">
    @if (session()->has('add_user'))
    <div class="alert alert-success">
        <div class="container">
            <div class="alert-icon">
                <i class="material-icons">check</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Đăng ký thành công - TIẾN HÀNH ĐĂNG NHẬP NGAY</b>
        </div>
    </div>
    @endif
    @if ($errors->has('retypepassword'))
    <div class="alert alert-danger">
        <div class="container">
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Có lỗi xảy ra Mật khẩu không khớp </b>
        </div>
    </div>
    @endif
    @if ($errors->has('optionsCheckboxes'))
    <div class="alert alert-danger">
        <div class="container">
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Có lỗi xảy ra - Bạn chưa đồng ý với điều khoản của chúng tôi</b>
        </div>
    </div>
    @endif
    @if ($errors->has('username'))
    <div class="alert alert-danger">
        <div class="container">
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Có lỗi xảy ra - Tên người dùng đã được sử dụng</b>
        </div>
    </div>
    @endif
    @if ($errors->has('email') || $errors->has('password'))
    <div class="alert alert-danger">
        <div class="container">
            <div class="alert-icon">
                <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Có lỗi xảy ra</b> <br> Sai thông tin đăng nhập
        </div>
    </div>
    @endif
    <div class="container" style="width: auto;">
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
            <ul class="nav navbar-nav navbar-center" style="margin-top: 20px;">
                <li>
                    <a style="font-size:100%;" href="/">
                        <i class="material-icons">home</i>
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/danh-muc/hang-moi-ve">
                        Hàng mới về
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/danh-muc/ao">
                        Áo<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="margin-top: 0px;">
                        <li class="attrli dropdown-header" style="height: 26px;">Dropdown header</li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">> Action</a></li>
                        <li class="attrli"><a href="#pablo">> Another action</a></li>
                        <li class="attrli"><a href="#pablo">> Something else here</a></li>
                        <li class="attrli"><a href="#pablo">> Separated link</a></li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">> One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a style="font-size:100%;" href="/danh-muc/quan">
                        Quần<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="margin-top: 0px;">
                        <li class="attrli dropdown-header" style="height: 26px;">Dropdown header</li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">Action</a></li>
                        <li class="attrli"><a href="#pablo">Another action</a></li>
                        <li class="attrli"><a href="#pablo">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">Separated link</a></li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a style="font-size:100%;" href="/danh-muc/phu-kien-thoi-trang">
                        Phụ kiện<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="margin-top: 0px;">
                        <li class="attrli dropdown-header" style="height: 26px;">Dropdown header</li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">Action</a></li>
                        <li class="attrli"><a href="#pablo">Another action</a></li>
                        <li class="attrli"><a href="#pablo">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">Separated link</a></li>
                        <li class="divider"></li>
                        <li class="attrli"><a href="#pablo">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a style="font-size:100%;" href="/thanh-vien/uu-dai">
                        Membership
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="#pablo" data-toggle="modal" data-target="#loginModal">
                        Đăng nhập
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="#pablo" data-toggle="modal" data-target="#signupModal">
                        Đăng ký
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gio-hang">Giỏ hàng
                        <i class="material-icons">shopping_cart</i>
                        <span class="notification_cart">5</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/gio-hang"><i class="material-icons">shopping_cart</i> 0
                        sản phẩm</a>
                </li> --}}
                <li class="li-mar">
                    <div class="added__animation">
                        <span>+1</span>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-top: 20px; margin-right: 10px;">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group form-black">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i
                            class="material-icons">search</i></button>
                </form>
            </ul>
        </div>
    </div>
</nav>