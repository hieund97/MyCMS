<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('client/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset ('client/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Contact Us Page - Material Kit PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset ('client/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('client/css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
</head>

<body class="contact-page">

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
		<div class="contact-content">
    		<div class="container">
            	<h2 class="title">Send us a message</h2>
				<div class="row">
					<div class="col-md-6">
						<p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
						</p>
						<form role="form" id="contact-form" method="post">
							<div class="form-group label-floating">
								<label class="control-label">Your name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Email address</label>
								<input type="email" name="email" class="form-control"/>
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Phone</label>
								<input type="text" name="phone" class="form-control"/>
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Your message</label>
								<textarea name="message" class="form-control" id="message" rows="6"></textarea>
							</div>
							<div class="submit text-center">
								<input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us" />
							</div>
						</form>
					</div>
                	<div class="col-md-4 col-md-offset-2">
    		        	<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">pin_drop</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Find us at the office</h4>
    							<p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                    7652 Bucharest,<br>
                                    Romania
    							</p>
    						</div>
    		        	</div>
                        <div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">phone</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Give us a ring</h4>
    							<p> Michael Jordan<br>
                                    +40 762 321 762<br>
                                    Mon - Fri, 8:00-22:00
    							</p>
    						</div>
    		        	</div>
    		        	<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">business_center</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Legal Information</h4>
    							<p> Creative Tim Ltd.<br>
                                    VAT &middot; EN2341241<br>
                                    IBAN &middot; EN8732ENGB2300099123<br>
                                    Bank &middot; Great Britain Bank
    							</p>
    						</div>
    		        	</div>
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
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="{{ asset ('client/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

	<script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKitDemo.initContactUsMap();
		});
	</script>

</html>
