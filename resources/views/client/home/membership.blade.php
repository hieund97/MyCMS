@extends('client.layout.main')
@section('title', 'Thành viên')
@section('content')


<div class="page-header header-small" data-parallax="true"
	style="background-image: url({{ asset ('client/img/bg9.jpg')}});">
</div>

<div class="main main-raised">
	<div class="container" style="padding-top: 30px;padding-bottom: 30px;">
		<div class="row">
			<div class="col-xs-12 hidden-xs">
				<div class="title faqs"></div>
			</div>
			<div class="col-xs-12 visible-xs no-padding">
				<img
					src="https://file.hstatic.net/1000360430/file/title_khtt_mobile_2_6305d7af743c46329283abe7a2e0bf69.jpg">
			</div>
			<div class="faq_wrappers col-xs-12 no-padding">
				<div class="col-sm-6 col-xs-12">
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									1. 360 Membership là gì?</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">
									<p><i>360 Membership</i> là chương trình Khách hàng Thân Thiết mới,
										mang đến những ưu đãi và những quyền lợi đặc biêt dành riêng cho
										khách hàng thân thiết của 360. Tài khoản thành viên được quản lý và
										cập nhật theo số điện thoại.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									2. Làm sao để trở thành khách hàng
									thân thiết 360?</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">
									<p>Bạn sẽ trở thành Khách hàng thân thiết 360 ngay khi mua sản phẩm bất
										kỳ đầu tiên và để lại thông tin đăng ký (Số điện thoại). Bạn có thể
										được yêu cầu cung cấp các thông tin khác (để nhận tất cả Ưu Đãi đủ
										điều kiện): tên người dùng, mật khẩu, ngày sinh (ngày sinh chỉ được
										cập nhật một (1) lần duy nhất theo chứng minh nhân dân hoặc giấy tờ
										khác có xác minh ngày sinh), địa chỉ email, địa chỉ liên lạc.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									3. Thời gian và cách thức xếp hạng
									thành viên?</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">
									<p>Thành viên sẽ được thăng hạng ngay lập tức khi đạt chi tiêu thăng
										hạng.</p>
									<p>Chi tiêu tích luỹ từ bất kỳ đến dưới 1 triệu:<strong> Thành viên
											Đồng</strong></p>
									<p>Chi tiêu tích luỹ từ 1 triệu đến dưới 2 triệu:<strong>&nbsp;Thành
											viên Bạc</strong></p>
									<p>Chi tiêu tích luỹ từ 2 triệu đến dưới 4 triệu:<strong> Thành viên
											Vàng</strong></p>
									<p>Chi tiêu tích luỹ từ 4 triệu trở lên:<strong> Thành viên Kim
											Cương</strong></p>
									<p>Sau 12 tháng kể từ ngày được thăng hạng (hoặc ngày xếp hạng cuối
										cùng), thành viên sẽ được xếp hạng lại dựa trên tổng chi tiêu của 12
										tháng đó.<br><span style="text-decoration: underline;"
											data-mce-style="text-decoration: underline;"><em><strong>Ví
													dụ:</strong> </em></span><br>Vào ngày 10/7/2018, bạn lên
										hạng là thành viên Vàng có chi tiêu tích lũy hiện tại đạt
										2.000.000đ. Trong 12 tháng sau đó, tổng chi tiêu mua sắm của bạn là
										1.000.000đ. Vào ngày 10/7/2019 bạn sẽ được xếp hạng lại là thành
										viên Bạc.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									4. Làm sao để được tích luỹ chi
									tiêu?</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">
									<p>Cung cấp số điện thoại cho nhân viên khi mua sắm tại cửa hàng, hoặc
										đặt hàng online qua facebook chat, zalo chat và hotline 18001162.
										Đối với trường hợp đổi/trả hàng, giá trị tích luỹ sẽ tăng/giảm ngay
										lập tức theo giá trị mà bạn thanh toán.</p>
								</div>
							</div>
							<div class="faq_container">
								<div class="faq open">
									<div class="faq_question">
										<h3 class="greenFAQ" style="margin-bottom: 10px;"
											data-mce-style="margin-bottom: 10px;">5. Quyền lợi của khách
											hàng thân thiết 360 là gì?</h3>
									</div>
									<div class="faq_answer_container">
										<div class="faq_answer">
											<p><strong>Thành viên Đồng:</strong> Giảm 49% cho 01 sản phẩm
												trong dịp sinh nhật của Bạn<br><br><strong>Thành viên
													Bạc:</strong> <br>- Giảm 5% cho mỗi lần mua sắm.<br>-
												Giảm 49% cho 01 sản phẩm trong dịp sinh nhật của
												Bạn<br><strong><br>Thành viên Vàng:</strong><br>- Giảm 10%
												cho mỗi lần mua sắm.<br>- Giảm 49% cho 01 sản phẩm trong dịp
												sinh nhật của Bạn<br><strong><br>Thành viên Kim
													Cương:</strong> <br>- Giảm 15% cho mỗi lần mua sắm.<br>-
												Giảm 49% cho 01 sản phẩm trong dịp sinh nhật của
												Bạn.<br><br>Cùng các chương trình và ưu đãi khác dành riêng
												cho thành viên sẽ được gửi thông tin qua tin nhắn và email.
												<br><strong><em>Lưu ý:</em></strong> Ưu đãi Giảm 49% dịp
												Sinh Nhật và Giảm Giá Mỗi Lần Mua Sắm chỉ áp dụng cho sản
												phẩm nguyên giá (Không áp dụng trên tổng hoá đơn hay đồng
												thời cùng các chương trình khuyến mãi khác).</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									6. Làm sao để nhận các ưu đãi?
								</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">
									<p><strong>Ưu đãi dịp sinh nhật của Bạn, Giảm 49%</strong><br>-
										<strong>Bước 1:</strong> Bạn cần cung cấp số điện thoại và chứng
										minh nhân dân (hoặc giấy tờ có xác minh ngày sinh) cho nhân viên cửa
										hàng, hoặc gửi hình ảnh cho nhân viên tư vấn khi mua hàng online để
										cập nhật ngày sinh vào tài khoản (chỉ được cập nhật một (1) lần duy
										nhất.<br><strong>- Bước 2:</strong> <br>Tại cửa hàng: Cung cấp số
										điện thoại khi mua hàng vào tuần sinh nhật của Bạn (3 ngày trước, và
										3 ngày sau sinh nhật).<br><br><strong>Mua hàng online</strong>: Liên
										hệ Hotline 18001162</p>
									<p><strong>Ưu đãi giảm giá mỗi lần mua hàng</strong><br><strong>- Tại
											cửa hàng:</strong> Cung cấp số điện thoại cho nhân
										viên.<br><strong>- Mua hàng online:</strong> Liên hệ facebook chat,
										zalo chat hoặc hotline 18001162</p>
									<p><strong>Ưu đãi giảm giá sản phẩm đặc biệt</strong><br>Thông tin sản
										phẩm giảm giá đặc biệt sẽ được gửi qua email hoặc tin
										nhắn.<br><br><em>* Không áp dụng các ưu đãi “360 Membership" cùng
											các chương trình khuyến mãi khác.</em></p>
								</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									7. Vì sao tôi được xếp hạng?</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">Xếp hạng lần đầu: Để ra mắt chương trình Khách hàng
									thân thiết mới, 360 xếp hạng thành viên cho tất cả Khách hàng dựa vào
									chi tiêu tích lũy kể từ 1/6/2016 để thành viên nhận được ưu đãi từ
									1/7/2018 Sau đó, bất kỳ khi nào Khách hàng mua sắm đạt chi tiêu tích lũy
									mới (đủ điều kiện tích lũy của Bạc - Vàng - Kim Cương), sẽ ngay lập tức
									được lên hạng!</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									8. Chính sách đổi trả</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">Khách hàng thân thiết được áp dụng chính sách đổi
									trả chung cho Ưu Đãi Giảm 49% Sinh Nhật của Bạn và Giảm Giá Mỗi Lần Mua
									Sắm. Cụ thể:</div>
								<div class="faq_answer">- Đổi trả 90 ngày với Giày (Có giá trị thanh toán từ
									250,000đ)</div>
								<div class="faq_answer">- Đổi trả 30 ngày với Túi (Có giá trị thanh toán từ
									250,000đ)</div>
								<div class="faq_answer">- Đổi trả 7 ngày với sản phẩm có giá trị thanh toán
									dưới 250,000đ</div>
							</div>
						</div>
					</div>
					<div class="faq_container">
						<div class="faq open">
							<div class="faq_question">
								<h3 class="greenFAQ" style="margin-bottom: 10px;" data-mce-style="margin-bottom: 10px;">
									9. Liên hệ ai khi cần được hỗ trợ?
								</h3>
							</div>
							<div class="faq_answer_container">
								<div class="faq_answer">Nhân viên cửa hàng 360 luôn sẵn sàng hỗ trợ bạn
									đăng ký thành viên, tra cứu chi tiêu tích luỹ, và cung cấp các ưu đãi.
									Hoặc liên hệ tổng đài <strong>18001160</strong>&nbsp;(Miễn phí cuộc gọi)
									bạn nhé!</div>
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