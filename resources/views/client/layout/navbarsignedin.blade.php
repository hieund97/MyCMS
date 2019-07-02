<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" "
    id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style=" height: 90px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding-top: 0px;" href="/">
                <img style="width: 200px;" class="img-fluid" src="{{asset ('client/img/logo_transparent.png')}}"></a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul style=" padding-top: 15px;" class="nav navbar-nav navbar-right">
                <li>
                    <a style="font-size:100%;" href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/products">
                        Products
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/blogs">
                        Blogs
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/about">
                        About Us
                    </a>
                </li>
                <li>
                    <a style="font-size:100%;" href="/contact">
                        Contact Us
                    </a>
                </li>
                {{-- <li>
                    <a style="font-size:100%;" href="#pablo">
                        Welcome.....
                    </a>
                </li> --}}
                {{-- <li style="margin-right: 10px;">
                    <a class="btn btn-danger btn-default btn-block"
                        style="padding-right: 10px;padding-left: 10px;padding-bottom: 9px;padding-top: 11px;"
                        data-toggle="modal" data-target="#loginModal">
                        Login
                    </a>
                </li>
                <li>
                    <a class="btn btn-success btn-default btn-block"
                        style="padding-right: 10px;padding-left: 10px;padding-bottom: 9px;padding-top: 11px;"
                        data-toggle="modal" data-target="#signupModal">
                        SignUp
                    </a>
                </li> --}}
                <li>
                    <a href="#" target="_blank" class="btn btn-white btn-simple">
                        <i class="material-icons">shopping_cart</i>
                    </a>
                </li>                
                <li class="dropdown">
                    <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                        <div class="profile-photo-small">
                            <img src="assets/img/faces/avatar.jpg" alt="Circle Image" class="img-circle img-responsive">
                        </div>
                    </a>                    
                    <ul class="dropdown-menu">                        
                        <li>
                            <a href="#pablo">Me</a>
                        </li>
                        <li>
                            <a href="#pablo">Settings and other stuff</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#pablo">Sign out</a></li>
                    </ul>
                </li>
                <li style="margin-left: 10px;padding-top: 15px;">
                    <span style="font-size:15px;">Nguyễn Đức Hiếu</span>
                </li>
            </ul>
        </div>
    </div>



</nav>
