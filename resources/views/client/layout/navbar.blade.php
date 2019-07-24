<style type="text/css">
    .hover-menu {
        position: absolute;
        top: 100%;

        display: none;
        z-index: 1000;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }

    .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }



    .attrli {
        display: list-item;
        text-align: -webkit-match-parent;
        height: 40px;
    }



    .dropdown-menu-right {

        left: auto;
    }

    .hover-menu li {
        position: relative;
    }

    .hover-menu>li>a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;

    }

    .hover-menu li a {
        font-size: 13px;
        padding: 10px 20px;
        margin: 0 5px;
        border-radius: 2px;
        transition: all 150ms linear;
    }

    .hover-menu li a:hover {
        background-color: #9c27b0;
        color: #FFFFFF;
    }

    ul li:hover ul {
        display: block;
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" " id="sectionsNav">
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
        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-left" style=" margin-top: 10px;margin-left: 60px;">
                <li>
                    <a class="navbar-brand" href="/" style="font-family: 'Sigmar One', cursive; font-size: 23px;">
                        {{-- <img style="width: 150px;" class="img-fluid" src="{{asset ('client/img/logo_transparent.png')}}"
                        alt=""> --}}
                        MrSpicy Boutique
                    </a>
                </li>
            </ul>
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
                    <a style="font-size:100%;" href="/">
                        Áo<b class="caret"></b>
                    </a>
                    <ul class="hover-menu dropdown-menu-right">
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
                    <a style="font-size:100%;" href="/" data-toggle="dropdown">
                        Quần<b class="caret"></b>
                    </a>
                    <ul class="hover-menu dropdown-menu-right">
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
                    <a style="font-size:100%;" href="/" data-toggle="dropdown">
                        Phụ kiện<b class="caret"></b>
                    </a>
                    <ul class="hover-menu dropdown-menu-right">
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
                <li>
                    <a href="#" target="_blank">
                        <i class="material-icons">shopping_cart</i>
                        <span style=""> Giỏ hàng [0]</span>
                    </a>
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