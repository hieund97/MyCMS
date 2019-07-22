@extends('client.layout.main')
@section('title', 'Contact')
@section('content')


<div class="page-header header-filter header-small" data-parallax="true"
	style="background-image: url({{ asset ('client/img/bg8.jpg')}});">
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
					<p class="description">You can contact us with anything related to our Products. We'll get in touch
						with you as soon as possible.<br><br>
					</p>
					<form role="form" id="contact-form" method="post">
						<div class="form-group label-floating">
							<label class="control-label">Your name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Email address</label>
							<input type="email" name="email" class="form-control" />
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control" />
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

@endsection


<script type="text/javascript">
	$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKitDemo.initContactUsMap();
		});
</script>