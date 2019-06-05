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

	{{-- navbar --}}
    @include('client.layout.navbar')
    {{-- End Navbar --}}

    <div class="page-header header-filter header-small" data-parallax="true"
        style="background-image: url({{ asset ('client/img/bg9.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Contact Us</h1>
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

    @include('client.layout.subcribe')

    <!--     *********   SIMPLE SUBSCRIBE LINE     *********      -->
    {{-- End Subcribe --}}

    {{-- Footer --}}
    @include('client.layout.footer')
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
