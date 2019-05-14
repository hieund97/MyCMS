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
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset ('client/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset ('client/css/material-kit.css?v=1.2.') }}1" rel="stylesheet"/>

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
<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('client/js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
<script src="{{ asset('client/assets-for-demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('client/assets-for-demo/vertical-nav.js') }}" type="text/javascript"></script>

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