<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset ('client/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{asset ('client/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset ('client/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset ('client/css/material-kit.css?v=1.2.') }}1" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset ('client/assets-for-demo/vertical-nav.css') }}" rel="stylesheet" />
	<link href="{{ asset ('client/assets-for-demo/demo.css') }}" rel="stylesheet" />
</head>

<body>



	<!--     *********     HEADER 3      *********      -->

	@include('client.layout.header')

	<!--     *********    END HEADER 3      *********      -->

	<!-- Main -->

	@yield('content')

	<!-- end-main-raised -->



	<!--     *********    Review 1     *********      -->

	@include('client.layout.review')
	<!--     *********    END REVIEW 1      *********      -->



	<!--     *********    IMAGE SUBSCRIBE LINE     *********      -->

	@include('client.layout.subcribe')

	<!--     *********   IMAGE SUBSCRIBE LINE     *********      -->



	<!--     *********    BIG FOOTER     *********      -->

	@include('client.layout.footer')

	<!--     *********   END BIG FOOTER     *********      -->

	<!-- Login Modal -->
	<div class="modal fade" id="loginModal" style="display:none;" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="card card-signup card-plain">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
								class="material-icons">clear</i></button>

						<div class="header header-primary text-center">
							<h4 class="card-title">Log in</h4>
							<div class="social-line">
								<a href="#pablo" class="btn btn-just-icon btn-simple">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a href="#pablo" class="btn btn-just-icon btn-simple">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#pablo" class="btn btn-just-icon btn-simple">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form class="form" method="" action="">
							<p class="description text-center">Or Be Classical</p>
							<div class="card-content">

								{{-- <div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="First Name...">
								</div> --}}

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<input type="text" class="form-control" placeholder="Email...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Password..." class="form-control" />
								</div>

								{{-- If you want to add a checkbox to this form, uncomment this code --}}
    
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Remeber me
                                    </label>
                                </div>
							</div>
						</form>
					</div>
					<div class="modal-footer text-center">
						<a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  End Modal -->

	<!-- Register Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-signup">
			<div class="modal-content">
				<div class="card card-signup card-plain">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
								class="material-icons">clear</i></button>
						<h2 class="modal-title card-title text-center" id="myModalLabel">Register</h2>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5 col-md-offset-1">
								<div class="info info-horizontal">
									<div class="icon icon-rose">
										<i class="material-icons">timeline</i>
									</div>
									<div class="description">
										<h4 class="info-title">Marketing</h4>
										<p class="description">
											We've created the marketing campaign of the website. It was a very
											interesting collaboration.
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-primary">
										<i class="material-icons">code</i>
									</div>
									<div class="description">
										<h4 class="info-title">Fully Coded in HTML5</h4>
										<p class="description">
											We've developed the website with HTML5 and CSS3. The client has access to
											the code using GitHub.
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-info">
										<i class="material-icons">group</i>
									</div>
									<div class="description">
										<h4 class="info-title">Built Audience</h4>
										<p class="description">
											There is also a Fully Customizable CMS Admin Dashboard for this product.
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-5">
								<div class="social text-center">
									<button class="btn btn-just-icon btn-round btn-twitter">
										<i class="fa fa-twitter"></i>
									</button>
									<button class="btn btn-just-icon btn-round btn-dribbble">
										<i class="fa fa-dribbble"></i>
									</button>
									<button class="btn btn-just-icon btn-round btn-facebook">
										<i class="fa fa-facebook"> </i>
									</button>
									<h4> or be classical </h4>
								</div>

								<form class="form" method="" action="">
									<div class="card-content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<input type="text" class="form-control" placeholder="First Name...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<input type="text" class="form-control" placeholder="Email...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<input type="password" placeholder="Password..." class="form-control" />
										</div>

										<!-- If you want to add a checkbox to this form, uncomment this code -->

										<div class="checkbox">
											<label>
												<input type="checkbox" name="optionsCheckboxes" checked>
												I agree to the <a href="#something">terms and conditions</a>.
											</label>
										</div>
									</div>
									<div class="modal-footer text-center">
										<a href="#pablo" class="btn btn-primary btn-round">Get Started</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  End Modal -->


</body>
<!--   Core JS Files   -->
<script src="{{ asset('client/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('client/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('client/js/material.min.js') }}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('client/js/moment.min.js') }}"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('client/js/nouislider.min.js') }}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('client/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('client/js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="{{ asset('client/js/bootstrap-tagsinput.js') }}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('client/js/jasny-bootstrap.min.js') }}"></script>

<!-- Plugin For Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('client/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
<script src="{{ asset('client/assets-for-demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('client/assets-for-demo/vertical-nav.js') }}" type="text/javascript"></script>
@stack('js')

<script type="text/javascript">
	$(document).ready(function(){
		var slider = document.getElementById('sliderRegular');

		noUiSlider.create(slider, {
			start: 40,
			connect: [true,false],
			range: {
				min: 0,
				max: 100
			}
		});

		var slider2 = document.getElementById('sliderDouble');

		noUiSlider.create(slider2, {
			start: [ 20, 60 ],
			connect: true,
			range: {
				min:  0,
				max:  100
			}
		});



		materialKit.initFormExtendedDatetimepickers();

	});
</script>

</html>