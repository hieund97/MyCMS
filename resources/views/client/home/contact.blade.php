@extends('client.layout.main')
@section('title', 'Liên hệ')
@section('content')


@include('client.partial.header')

<div class="main main-raised">
	<div class="contact-content">
		<div class="container-fluid" style="padding-top: 30px;padding-bottom: 30px;">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 box-heading-contact">

					<div class="box-map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9535674349904!2d106.71301411533402!3d10.7380621628357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f222dc4cac3%3A0xed02c790aba9167a!2zSlVOTyBOZ3V54buFbiBUaOG7iyBUaOG6rXA!5e0!3m2!1svi!2s!4v1555663624868!5m2!1svi!2s"
							width="100%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>


				</div>
				<div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
					<div class="row">

						<div class="col-md-7" style="margin-right:40px; margin-left:30px;">
							<h3 class="title">Gửi thắc mắc cho chúng tôi</h3>
							@if (session()->has('create_contact'))
							<div class="alert alert-success">
								<div class="container">
									<div class="alert-icon">
										<i class="material-icons">check</i>
									</div>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="material-icons">clear</i></span>
									</button>
									<b>CÁM ƠN BẠN ĐÃ GỬI THÔNG TIN CHO CHÚNG TÔI <br> CHÚNG TÔI CỐ GẮNG SẼ PHẢN HỒI TỚI BẠN MỘT CÁCH SỚM NHẤT</b>
								</div>
							</div>
							@endif
							<form role="form" id="contact-form" method="POST" action="/lien-he">
								@csrf
								<div class="form-group label-floating">
									<label class="control-label">Họ và tên</label>
									<input type="text" name="name" class="form-control" required>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Số điện thoại</label>
									<input type="text" name="phone" class="form-control" required />
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Nội dung</label>
									<textarea name="message" class="form-control" id="message" rows="6"
										required></textarea>
								</div>
								<div class="submit text-center">
									<button type="submit" class="btn btn-primary btn-raised btn-round">Gửi cho chúng
										tôi</button>
										
								</div>
							</form>
							
						</div>
						<div class="col-md-4">
							<h3 class="title">Liên hệ</h3>

							<div class=" info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">pin_drop</i>
								</div>
								<div class="description">
									<h4 class="info-title"> Địa chỉ chúng tôi</h4>
									<p>313 Nguyễn Thị Thập, Phường Tân Phú, Quận 7, Tp. Hồ Chí Minh.</p>
								</div>
							</div>
							<div class=" info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">phone</i>
								</div>
								<div class="description">
									<h4 class="info-title">Điện thoại</h4>
									<p> 1800 1160</p>
								</div>
							</div>
							<div class=" info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">business_center</i>
								</div>
								<div class="description">
									<h4 class="info-title">Thời gian làm việc</h4>
									<p> Thứ 2 đến Thứ 6 từ 8h30 đến 17h30</p>
								</div>
							</div>
						</div>
					</div>
				</div>
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