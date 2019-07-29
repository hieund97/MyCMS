@extends('client.layout.main')
@section('title', 'Thành viên')
@section('content')


<div class="page-header header-small" data-parallax="true"
	style="background-image: url({{ asset ('client/img/bg9.jpg')}});">	
</div>

<div class="main main-raised" style="margin-top: 0px;margin-left: 0px;margin-right: 0px; background: #E6E6E6;">
	<div class="contact-content">
		<div class="container">
			<div class="row" style="margin-top: 20px">
				<img src="{{ asset ('client/img/member.png')}}" alt="">
            </div>
            <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
                <img src="{{ asset ('client/img/member2.png')}}" alt="">
            </div>
		</div>
	</div>
</div>

@endsection


<script type="text/javascript">
	$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKitDemo.initContactUsMap();
		});
</script>