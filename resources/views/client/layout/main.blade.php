<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset ('client/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{asset ('client/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset ('client/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset ('client/css/material-kit.css?v=1.2.') }}" rel="stylesheet" />
	{{-- hover Product CSS --}}
	<link rel="stylesheet" href="{{asset ('client/css/hoverProduct.css') }}">
	{{-- cart animation --}}
	<link rel="stylesheet" href="{{ asset ('client/css/cartanimation.css') }}">


</head>

<body>

	{{-- Navbar --}}
	@auth
	@include('client.layout.navbarsignedin')
	@endauth

	@guest
	@include('client.layout.navbar')
	@endguest

	{{-- End navbar --}}

	<!--     *********     HEADER 3      *********      -->
	@includeWhen((request()->is('/')), 'client.layout.header', ['some' => 'data'])

	<!--     *********    END HEADER 3      *********      -->

	<!-- Main -->

	@yield('content')

	<!-- end-main-raised -->



	<!--     *********    Review 1     *********      -->
	{{-- @includeWhen((request()->is('/')), 'client.layout.review', ['some' => 'data']) --}}
	<!--     *********    END REVIEW 1      *********      -->



	<!--     *********    IMAGE SUBSCRIBE LINE     *********      -->

	@include('client.layout.subcribe')

	<!--     *********   IMAGE SUBSCRIBE LINE     *********      -->



	<!--     *********    BIG FOOTER     *********      -->

	@include('client.layout.footer')

	<!--     *********   END BIG FOOTER     *********      -->

	<!-- small modal -->
	<div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-small ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
							class="material-icons">clear</i></button>
				</div>
				<div class="modal-body text-center">
					<h5>Bạn phải đăng nhập để .....</h5>
				</div>
				<div class="modal-footer text-center">
					<a class="btn btn-danger" href="#pablo" style="padding-left: 15px;padding-right: 15px;"
						data-toggle="modal" data-target="#signupModal">Đăng ký</a>
					<a class="btn btn-success" href="#pablo"
						style="margin-top: 0px;padding-left: 15px;padding-right: 15px;" data-toggle="modal"
						data-target="#loginModal">Đăng nhập</a>
				</div>
			</div>
		</div>
	</div>
	<!--    end small modal -->

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
							<h4 class="card-title">Đăng nhập</h4>
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
						<form class="form" method="POST" action="/login">
							@csrf
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
									<input type="text" name="email" class="form-control" placeholder="Email...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" name="password" placeholder="Mật khẩu..."
										class="form-control" />
								</div>

								{{-- If you want to add a checkbox to this form, uncomment this code --}}

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										Ghi nhớ đăng nhập
									</label>
								</div>
							</div>

					</div>
					<div class="modal-footer text-center">
						<button type="submit" href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Đăng
							nhập</button>
					</div>
					</form>
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
						<h2 class="modal-title card-title text-center" id="myModalLabel">Đăng ký thành viên</h2>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5 col-md-offset-1">
								<div class="info info-horizontal">
									<div class="icon icon-rose">
										<i class="material-icons">local_shipping</i>
									</div>
									<div class="description">
										<h4 class="info-title">Giao hàng trong 2 ngày</h4>
										<p class="description">
											Khi đã là thành viên MrSicy bạn sẽ nhận được gần 200 nghìn mặt hàng
											trong vòng 2 giờ, không tính phí vận chuyển (không bao gồm phụ phí cồng
											kềnh) ở tất cả 6
											thành phố lớn.
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-primary">
										<i class="material-icons">verified_user</i>
									</div>
									<div class="description">
										<h4 class="info-title">Đổi trả và hoàn tiền</h4>
										<p class="description">
											Khi đã trở thành thành viên, bạn có thể đổi trả lại bất kỳ sản phẩm
											của Spicy trong vòng 30 ngày (*), không gặp rắc rối nào. Bạn chỉ cần liên
											lạc với
											SpicyCare để trả hàng. SpicyCare sẽ xác nhận và liên lạc với bạn ngay lập
											tức
										</p>
									</div>
								</div>

								<div class="info info-horizontal">
									<div class="icon icon-info">
										<i class="material-icons">favorite</i>
									</div>
									<div class="description">
										<h4 class="info-title">Sản phẩm chất lượng</h4>
										<p class="description">
											Chúng tôi luôn luôn tự hào đem đến cho khách hàng những sản phẩm chất lượng
											nhất, giá cả ữu đãi.
											Được khách hàng trên cả nước tin dùng
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

								<form class="form" method="POST" action="/register">
									@csrf
									<div class="card-content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<input type="text" name="firstname" class="form-control" placeholder="Họ">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">assignment_ind</i>
											</span>
											<input type="text" name="lastname" class="form-control" placeholder="Tên">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">sentiment_satisfied_alt</i>
											</span>
											<input type="text" name="username" class="form-control"
												placeholder="Username">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<input type="text" name="email" class="form-control" placeholder="Email...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<input type="password" name="password" placeholder="Mật khẩu..."
												class="form-control" />
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">https</i>
											</span>
											<input type="password" name="retypepassword"
												placeholder="Nhập lại mật khẩu..." class="form-control" />
										</div>

										<!-- If you want to add a checkbox to this form, uncomment this code -->

										<div class="checkbox">
											<label>
												<input type="checkbox" name="optionsCheckboxes" checked>
												Tôi đồng ý với <a href="#something">các điều khoản và điều kiện</a>.
											</label>
										</div>

									</div>
									<div class="modal-footer text-center">
										<button type="submit" href="#pablo" class="btn btn-primary btn-round">Đăng
											ký</button>
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

<!--	Plugin for Product Gallery, full documentation here: https://9bitstudios.github.io/flexisel/ -->
<script src="{{ asset ('client/js/jquery.flexisel.js') }}"></script>

<!-- Plugin sweet alert -->
<script src="{{ asset ('node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

{{-- Cart JS --}}
{{-- <script  src="{{ asset ('client/js/cartscript.js') }}"></script> --}}

<!-- Plugin For Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('client/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
{{-- <script src="{{ asset('client/assets-for-demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('client/assets-for-demo/vertical-nav.js') }}" type="text/javascript"></script> --}}

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
	$(document).ready(function(){

		var slider2 = document.getElementById('sliderRefine');

		noUiSlider.create(slider2, {
			start: [42, 880],
			connect: true,
			range: {
			'min': [30],
			'max': [900]
			}
		});

		var limitFieldMin = document.getElementById('price-left');
		var limitFieldMax = document.getElementById('price-right');

		slider2.noUiSlider.on('update', function( values, handle ){
			if (handle){
				limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
			} else {
				limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
			}
		});
	});
	$(document).ready(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
    		itemsToScroll: 1,
    		animationSpeed: 400,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 3
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script>
	$(window).on('load', function(){
		$('.btn__primary').on('click',function(){
			$('.added__animation').addClass('clicked');
			setTimeout(function(){
			$('.added__animation').removeClass('clicked');
			},600);
		});
		});
</script>


</html>