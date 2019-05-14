<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('client/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset ('client/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>About Us - Material Kit PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset ('client/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('client/css/material-kit.css?v=1.2.1') }}" rel="stylesheet" />
</head>

<body class="about-us">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#pablo">
                            Contact Us
                        </a>
                    </li>
                    <li>
                    <a href="#" target="_blank" class="btn btn-white btn-simple">
                        <i class="material-icons">shopping_cart</i> Buy Now
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-header header-filter header-small" data-parallax="true"
        style="background-image: url({{ asset ('client/img/bg9.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">About Us</h1>
                    <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="about-description text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h5 class="description">This is the paragraph where you can write more details about your
                            product. Keep you user engaged by providing meaningful information. Remember that by this
                            time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you
                            want the user to see more.</h5>
                    </div>
                </div>
            </div>
            <div class="about-team team-1">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="title">We are nerd rockstars</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your team.
                            Keep you user engaged by providing meaningful information.</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset ('client/img/faces/marc.jpg') }}" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h4 class="card-title">Alec Thompson</h4>
                                <h6 class="category text-muted">CEO / Co-Founder</h6>

                                <p class="card-description">
                                    And I love you like Kanye loves Kanye. We need to restart the human foundation.
                                </p>
                                <div class="footer">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i
                                            class="fa fa-facebook-square"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i
                                            class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset ('client/img/faces/kendall.jpg') }}" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h4 class="card-title">Tania Andrew</h4>
                                <h6 class="category text-muted">Designer</h6>

                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation. And I
                                    love you like Kanye loves Kanye.
                                </p>
                                <div class="footer">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i
                                            class="fa fa-dribbble"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i
                                            class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset ('client/img/faces/christian.jpg') }}" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h4 class="card-title">Christian Mike</h4>
                                <h6 class="category text-muted">Web Developer</h6>

                                <p class="card-description">
                                    I love you like Kanye loves Kanye. Don't be scared of the truth because we need to
                                    restart the human foundation.
                                </p>
                                <div class="footer">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i
                                            class="fa fa-facebook-square"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i
                                            class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset ('client/img/faces/avatar.jpg') }}" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h4 class="card-title">Rebecca Stormvile</h4>
                                <h6 class="category text-muted">Web Developer</h6>

                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation.
                                </p>
                                <div class="footer">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i
                                            class="fa fa-google"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i
                                            class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="about-services features-2">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="title">We build awesome products</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your
                            product. Keep you user engaged by providing meaningful information.</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="info info-horizontal">
                            <div class="icon icon-rose">
                                <i class="material-icons">gesture</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">1. Design</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a
                                    single use, this powerfull UI Kit lets you do more than ever before. </p>
                                <a href="#pablo">Find more...</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="info info-horizontal">
                            <div class="icon icon-rose">
                                <i class="material-icons">build</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">2. Develop</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about
                                    each one. A paragraph describing a feature will be enough.</p>
                                <a href="#pablo">Find more...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info info-horizontal">
                            <div class="icon icon-rose">
                                <i class="material-icons">mode_edit</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">3. Make Edits</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about
                                    each one. A paragraph describing a feature will be enough.</p>
                                <a href="#pablo">Find more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-office">
                <div class="row  text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Our office is our second home</h2>
                        <h4 class="description">Here are some pictures from our office. You can see the place looks like
                            a palace and is fully equiped with everything you need to get the job done.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                            src="{{ asset ('client/img/examples/office2.jpg') }}">
                    </div>
                    <div class="col-md-4">
                        <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                            src="{{ asset ('client/img/examples/office4.jpg') }}">
                    </div>
                    <div class="col-md-4">
                        <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                            src="{{ asset ('client/img/examples/office3.jpg') }}">
                    </div>
                    <div class="col-md-6">
                        <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                            src="{{ asset ('client/img/examples/office5.jpg') }}">
                    </div>
                    <div class="col-md-6">
                        <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                            src="{{ asset ('client/img/examples/office1.jpg') }}">
                    </div>

                </div>

            </div>
            <div class="about-contact">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Want to work with us?</h2>
                        <h4 class="text-center description">Divide details about your product or agency work into parts.
                            Write a few lines about each one and contact us about any further collaboration. We will get
                            back to you in a couple of hours.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Your Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Your Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Speciality</label>
                                        <select class="select form-control" placeholder="Speciality">
                                            <option value="1">I'm a Designer</option>
                                            <option value="2">I'm a Developer</option>
                                            <option value="3">I'm a Hero</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-round">
                                        Let's talk
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Subcribe --}}
    <!--     *********    SIMPLE SUBSCRIBE LINE     *********      -->

    <div class="subscribe-line subscribe-line-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title">Get Tips & Tricks every Week!</h3>
                    <p class="description">
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card card-plain card-form-horizontal">
                        <div class="card-content">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">mail</i>
                                            </span>
                                            <input type="email" value="" placeholder="Your Email..." class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-rose btn-round btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--     *********   SIMPLE SUBSCRIBE LINE     *********      -->
    {{-- End Subcribe --}}

    {{-- Footer --}}
    <footer class="footer footer-black footer-big">
        <div class="container">

            <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <p>Creative Tim is a startup that creates design tools that make the web development process
                            faster and easier. </p>
                        <p>We love the web and care deeply for how users interact with a digital product. We power
                            businesses and individuals to create better looking web projects around the world. </p>
                    </div>

                    <div class="col-md-4">
                        <h5>Social Feed</h5>
                        <div class="social-feed">
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>How to handle ethical disagreements with your clients.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>The tangible benefits of designing at 1x pixel density.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-facebook-square"></i>
                                <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h5>Instagram Feed</h5>
                        <div class="gallery-feed">
                            <img src="{{ asset ('client/img/faces/card-profile6-square.jpg') }}"
                                class="img img-raised img-rounded" alt="" />
                            <img src="{{ asset ('client/img/faces/christian.jpg') }}" class="img img-raised img-rounded"
                                alt="" />
                            <img src="{{ asset ('client/img/faces/card-profile4-square.jpg') }}"
                                class="img img-raised img-rounded" alt="" />
                            <img src="{{ asset ('client/img/faces/card-profile1-square.jpg') }}"
                                class="img img-raised img-rounded" alt="" />

                            <img src="{{ asset ('client/img/faces/marc.jpg') }}" class="img img-raised img-rounded"
                                alt="" />
                            <img src="{{ asset ('client/img/faces/kendall.jpg') }}" class="img img-raised img-rounded"
                                alt="" />
                            <img src="{{ asset ('client/img/faces/card-profile5-square.jpg') }}"
                                class="img img-raised img-rounded" alt="" />
                            <img src="{{ asset ('client/img/faces/card-profile2-square.jpg') }}"
                                class="img img-raised img-rounded" alt="" />
                        </div>

                    </div>
                </div>
            </div>


            <hr />

            <ul class="pull-left">
                <li>
                    <a href="#pablo">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Presentation
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Discover
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Payment
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Contact Us
                    </a>
                </li>
            </ul>

            <div class="copyright pull-right">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
            </div>
        </div>
    </footer>
    {{-- End Footer --}}


</body>
<!--   Core JS Files   -->
<script src="{{ asset ('client/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('client/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('client/js/material.min.js') }}"></script>

<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
<script src="{{ asset ('client/js/moment.min.js') }}"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
<script src="{{ asset ('client/js/nouislider.min.js') }}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
<script src="{{ asset ('client/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
<script src="{{ asset ('client/js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
<script src="{{ asset ('client/js/bootstrap-tagsinput.js') }}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
<script src="{{ asset ('client/js/jasny-bootstrap.min.js') }}"></script>

<!--    Plugin For Google Maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="{{ asset ('client/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

</html>