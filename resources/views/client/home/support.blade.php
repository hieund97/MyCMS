@extends('client.layout.main')
@section('title', 'Hỗ trợ khách hàng')
@section('content')


@include('client.partial.header')

<div class="main main-raised">
    <div class="container" style="padding-top: 30px;padding-bottom: 30px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="profile-tabs">
                    <div class="nav-align-center">
                        <ul class="nav nav-pills nav-pills-icons" role="tablist">
                            <li class="active">
                                <a href="#FAQ" role="tab" data-toggle="tab">
                                    <i class="material-icons">find_in_page</i>
                                    Câu hỏi thường gặp
                                </a>
                            </li>
                            <li>
                                <a href="#return" role="tab" data-toggle="tab">
                                    <i class="material-icons">settings_backup_restore</i>
                                    Chính sách đổi trả
                                </a>
                            </li>
                            <li>
                                <a href="#secure" role="tab" data-toggle="tab">
                                    <i class="material-icons">verified_user</i>
                                    Chính sách bảo mật
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
                <!-- End Profile Tabs -->
            </div>
            <div class="tab-content">
                <div class="tab-pane active work" id="FAQ">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="contentPage clearfix">
                            <h2 class="title">Câu hỏi thường gặp</h2>
                            <div class="clearfix description-page">
                                <div><strong><span style="color: #ff0000;" data-mce-style="color: #ff0000;">I. GIAO
                                            HÀNG,
                                            VẬN
                                            CHUYỂN</span></strong><br></div>
                                <div><br></div>
                                <div><strong>1. Nếu tôi đặt hàng từ Spicy online, tôi có được giao hàng tận nơi
                                        không?</strong>
                                </div>
                                <div><br></div>
                                <div>Nếu đặt hàng Spicy online bạn sẽ được giao hàng trực tiếp tận nơi.</div>
                                <div><br></div>
                                <div><strong>2. Tôi phải trả phí vận chuyển như thế nào?</strong></div>
                                <div><br></div>
                                <div>Khách hàng sẽ được miễn phí 100% cước vận chuyển trong nước với đơn hàng trị giá
                                    trên
                                    300.000vnd.</div>
                                <div><br></div>
                                <div><strong>3. Tôi ở Tỉnh, tôi sẽ nhận hàng trong thời gian bao lâu?</strong></div>
                                <div><br></div>
                                <div>Ở tỉnh bạn sẽ được nhận hàng trong vòng 4 - 5 ngày (tính theo ngày làm việc) kể từ
                                    ngày
                                    xác
                                    nhận đơn hàng.</div>
                                <div><br></div>
                                <div><strong>4. Nếu trả lại sản phẩm ai sẽ là người chịu phí vận chuyển?</strong></div>
                                <div><br></div>
                                <div>Khách hàng sẽ chịu phí vận chuyển khi chuyển hoàn sản phẩm về cho Spicy.</div>
                                <div><br></div>
                                <div><strong>5. Tôi có thể nhận bưu kiện tại địa chỉ công ty tôi làm việc được
                                        không?</strong>
                                </div>
                                <div><br></div>
                                <div>Vâng, bưu kiện của bạn có thể gửi đến địa chỉ văn phòng. Xin vui lòng nhập địa chỉ
                                    và
                                    tên
                                    họ đầy đủ của quý khách khi đặt hàng.</div>
                                <div><br></div>
                                <div><strong>6. Tôi có thể nhận được lịch giao hàng như thế nào?</strong></div>
                                <div><br></div>
                                <div>Khách hàng sẽ được bộ phận đặt hàng liên hệ trực tiếp để thông báo lịch giao hàng.
                                </div>
                                <div><br></div>
                                <div><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>II.
                                            HOÀN
                                            TRẢ,
                                            ĐỔI SẢN PHẨM</strong></span></div>
                                <div><br></div>
                                <div><strong>1. Quy đinh hoàn trả và đổi sản phẩm của Spicy như thế nào?</strong></div>
                                <div><br></div>
                                <div>Bạn hãy tham khảo chính sách đổi trả sản phẩm của Spicy <span
                                        style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;"><a
                                            href="http://Spicy.vn/pages/chinh-sach-doi-tra-va-hoan-tien"
                                            data-mce-href="http://Spicy.vn/pages/chinh-sach-doi-tra-va-hoan-tien"
                                            style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">tại
                                            đây</a></span>,
                                    để được cung cấp thông tin đầy đủ và chi tiết nhất. Riêng đối với dòng sản phẩm túi
                                    và
                                    phụ
                                    kiện điều kiện đổi trả chỉ được thực hiện trong vòng 30 ngày kể từ ngày nhận hàng.
                                </div>
                                <div><br></div>
                                <div><strong>2. Tôi sẽ nhận lại sản phẩm đổi trong thời gian bao lâu?</strong></div>
                                <div><br></div>
                                <div>Bạn hãy tham khảo trang thanh toán giao nhận <span style="color: rgb(0, 0, 255);"
                                        data-mce-style="color: #0000ff;"><a
                                            href="http://Spicy.vn/pages/thanh-toan-giao-nhan"
                                            data-mce-href="http://Spicy.vn/pages/thanh-toan-giao-nhan"
                                            style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">tại
                                            đây</a></span>,
                                    để được cung cấp thông tin đầy đủ và chi tiết nhất.&nbsp;</div>
                                <div><br></div>
                                <div><strong>3. &nbsp;Nếu đổi trả tôi không mang theo hoá đơn và phiếu thông tin sản
                                        phẩm
                                        thì có
                                        được đổi không?</strong></div>
                                <div><br></div>
                                <div>Trường hợp, khách hàng không có hóa đơn hoặc phiếu thông tin sản phẩm thì phải
                                    chứng
                                    minh
                                    ngày mua và nhân viên sẽ đối soát lại với hệ thống để hỗ trợ khách hàng nhanh nhất.
                                </div>
                                <div><br></div>
                                <div><strong>4. Lỗi như thế nào mới được gọi là lỗi về chất lượng sản phẩm</strong>
                                </div>
                                <div><br></div>
                                <div><em>Đối với giày dép:&nbsp;</em></div>
                                <div><br></div>
                                <div>Lỗi chất lượng sản phẩm như: Gót không vững (bị lắc); Bong si, tróc si (lão si).
                                    Một số
                                    trường hợp khác Spicy sẽ kiểm tra nguyên nhân trước khi giải quyết.</div>
                                <div><br></div>
                                <div><em>Túi xách:</em></div>
                                <div><br></div>
                                <div>Lỗi chất lượng sản phẩm như: Logo dán ngược, gãy tay cầm dây khoá, đường chỉ may bị
                                    lỗi
                                    hoặc đứt, bề mặt da bị bong tróc, bung khoá dây đeo.</div>
                                <div><br></div>
                                <div><em>Phụ kiện:</em></div>
                                <div><br></div>
                                <div>Lỗi chất lượng sản phẩm như: da bong tróc, mặt khoá bị rỉ sét.</div>
                                <div><br></div>
                                <div><strong>5. &nbsp;Có được đổi sản phẩm mới hoặc hoàn trả tiền không?</strong></div>
                                <div><br></div>
                                <div>Quý khách sẽ được đổi trả và hoàn tiền trong mọi trường hợp.</div>
                                <div><br></div>
                                <div><strong>6. Làm thế nào để được đổi hàng?&nbsp;</strong></div>
                                <div><br></div>
                                <div>Bạn hãy tham khảo chính sách đổi trả hàng <span style="color: rgb(0, 0, 255);"
                                        data-mce-style="color: #0000ff;"><a
                                            href="http://Spicy.vn/pages/chinh-sach-doi-tra-va-hoan-tien"
                                            data-mce-href="http://Spicy.vn/pages/chinh-sach-doi-tra-va-hoan-tien"
                                            style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">tại
                                            đây</a></span>.
                                </div>
                                <div><br></div>
                                <div><strong>7. &nbsp;Có phải tính phí vận chuyển khi đổi trả sản phẩm?</strong></div>
                                <div><br></div>
                                <div>Khách hàng sẽ chịu phí vận chuyển khi gửi trả sản phẩm hoàn về cho Spicy.</div>
                                <div><br></div>
                                <div><strong>8. &nbsp;Tôi muốn đổi hàng vì size, màu sắc không đúng có được
                                        không?</strong>
                                </div>
                                <div><br></div>
                                <div>Khách hàng được đổi - trả với bất kì lý do gì trong thời gian đổi trả 90 ngày cho
                                    sản
                                    phẩm
                                    giày dép, 30 ngày cho túi và phụ kiện.</div>
                                <div><br></div>
                                <div><strong>9. &nbsp;Tôi mua hàng rồi, không vừa ý có thể đổi lại hay không?</strong>
                                </div>
                                <div><br></div>
                                <div>Tất nhiên rồi, khi mua hàng nếu khách hàng không vừa ý với sản phẩm, hãy cho Spicy
                                    được
                                    biết, chúng tôi sẽ đổi ngay sản phẩm cho khách hàng. Thời gian đổi trả 90 ngày cho
                                    sản
                                    phẩm
                                    giày dép, 30 ngày cho túi và phụ kiện.</div>
                                <div><br></div>
                                <div></div>
                                <div><strong>10. Tôi được thanh toán qua hình thức nào?</strong></div>
                                <div><br></div>
                                <div><strong>- COD:</strong> Thanh toán trực tiếp khi nhận hàng cho nhân viên bưu điện
                                </div>
                                <div><strong>- Chuyển khoản:</strong> CÔNG TY CỔ PHẦN SẢN XUẤT THƯƠNG MẠI DỊCH VỤ Spicy;
                                    Số
                                    TK:
                                    102010001987430; Tại Ngân hàng TMCP Công Thương Việt Nam – CN 8 Tp.HCM &nbsp;&nbsp;
                                </div>
                                <div><br></div>
                                <div><strong>11. Tôi đã đặt hàng, giờ muốn huỷ đơn hàng phải làm sao?</strong></div>
                                <div><br></div>
                                <div>Quý khách vui lòng liên hệ Spicy.vn qua số 18001162, chúng tôi sẽ hủy đơn hàng cho
                                    qúy
                                    khách.</div>
                                <div><br></div>
                                <div><strong>12. Tôi đã chọn hình thức thanh toán COD, nhưng khi hàng tới nơi, tôi không
                                        muốn
                                        lấy có được không?</strong></div>
                                <div><br></div>
                                <div>Spicy sẵn sàng nhận lại hàng.</div>
                                <div><br></div>
                                <div><span style="color: rgb(255, 0, 0);" data-mce-style="color: #ff0000;"><strong>III.
                                            ĐẶT
                                            HÀNG
                                            VÀ THANH TOÁN</strong></span></div>
                                <div><br></div>
                                <div><strong>1. &nbsp;Tôi có thể hủy đặt hàng khi chưa nhận được sản phẩm
                                        không?</strong>
                                </div>
                                <div><br></div>
                                <div>Khách hàng có thể huỷ đặt hàng khi chưa nhận được sản phẩm ngay cả khi đơn hàng đã
                                    được
                                    giao cho đơn vị vận chuyển.</div>
                                <div><br></div>
                                <div><strong>2. &nbsp;Khi đặt hàng, tôi phải thanh toán như thế nào?</strong></div>
                                <div><br></div>
                                <div>Khách hàng sẽ nhận hàng, nhân viên bưu điện sẽ thu tiền trực tiếp từ khách hàng.
                                </div>
                                <div><br></div>
                                <div><strong>3. &nbsp;Nếu tôi mua sản phẩm với số lượng nhiều thì giá có được giảm
                                        không?</strong></div>
                                <div><br></div>
                                <div>Khi mua hàng với số lượng nhiều khách hàng sẽ được hưởng chế độ ưu đãi, giảm giá
                                    ngay
                                    tại
                                    thời điểm mua hàng.</div>
                                <div><br></div>
                                <div><strong>4. &nbsp;Làm thế nào để đặt hàng Spicy?</strong></div>
                                <div><br></div>
                                <div>Rất đơn giản, bạn hãy truy cập trang web: Spicy.VN để đặt hàng hoặc gửi email:
                                    shopping@Spicy.vn, gọi điện thoại số: 1800 1162 để đặt sản phẩm.</div>
                                <div><br></div>
                                <div><strong>5. &nbsp;Làm sao để biết sản phẩm còn hàng hay hết hàng?</strong></div>
                                <div><br></div>
                                <div>Trên website Spicy sẽ cung cấp thông tin sản phẩm đang còn hàng hoặc hết hàng cho
                                    khách
                                    hàng
                                    tham khảo.</div>
                                <div><br></div>
                                <div><strong>6. &nbsp;Đặt hàng trực tuyến có những rủi ro gì không?</strong></div>
                                <div><br></div>
                                <div>Với Spicy, khách hàng không phải lo lắng, vì chúng tôi cung cấp sản phẩm chất lượng
                                    tốt,
                                    giá
                                    cả phải chăng. Đặc biệt, khách hàng sẽ nhận được sản phẩm và thanh toán cùng một
                                    thời
                                    điểm.
                                </div>
                                <div><br></div>
                                <div><strong>7. Tôi muốn biết cách liên hệ tới Dịch vụ khách hàng và thời gian có thể tư
                                        vấn
                                        khách hàng?</strong></div>
                                <div><br></div>
                                <div><em>Quý khách có thể liên hệ Dịch vụ khách hàng theo thông tin sau:&nbsp;</em>
                                </div>
                                <div><br></div>
                                <div>313 Nguyễn Thị Thập, Q. 7, TP.HCM. Email: cskh@Spicy.vn. ĐT: 1800 1160.&nbsp;</div>
                                <div><br></div>
                                <div>Thời gian tư vấn: Thứ hai đến thứ bảy: từ 8h30 đến 17h30.</div>
                                <div><br></div>
                                <div><br></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane connections" id="return">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="contentPage clearfix">
                            <h2 class="title">Chính sách đổi trả và hoàn tiền</h2>
                            <div class="clearfix description-page">

                                <p><span style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><em><strong>Khách mua hàng
                                                Online muốn ĐỔI/TRẢ làm theo các bước sau:&nbsp;</strong></em></span>
                                </p>
                                <p><br></p>
                                <p><img src="//file.hstatic.net/1000003969/file/untitled-1_38a290e082e74b559b8a884e303a2f42.png"
                                        data-mce-src="//file.hstatic.net/1000003969/file/untitled-1_38a290e082e74b559b8a884e303a2f42.png"
                                        style="display: block; margin-left: auto; margin-right: auto;"
                                        data-mce-style="display: block; margin-left: auto; margin-right: auto;"></p>
                                <p><b>THÔNG TIN CHI TIẾT CHÍNH SÁCH ĐỔI TRẢ VÀ HOÀN TIỀN Spicy.VN</b><br></p>
                                <p><i><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Nhằm giúp quý
                                            khách an tâm chọn lựa cho mình một đôi giày ưng ý và phục vụ khách hàng chu
                                            đáo, Spicy thông báo đến quý khách hàng CHÍNH SÁCH ĐỔI TRẢ SẢN PHẨM chi tiết
                                            sau:</span></i></p>
                                <p><b>&nbsp; &nbsp;I. ĐIỀU KIỆN ĐỔI - TRẢ</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Hệ thống cửa hàng
                                        Spicy luôn luôn chấp nhận Đổi – Trả trong thời gian quy định và theo quy trình
                                        Đổi - Trả</span></p>
                                <p><b>&nbsp; &nbsp;1. THỜI GIAN ĐỔI - TRẢ</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Được tính kể từ
                                        ngày mua hàng (tại cửa hàng) hoặc ngày nhận hàng (khi mua online)</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Giày đổi/trả
                                        trong </span><b>90</b> <b>ngày</b><span style="font-weight: 400;"
                                        data-mce-style="font-weight: 400;">&nbsp;</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Túi xách, ví,
                                        balo, balo gấp đổi/trả trong</span><b> 30</b> <b>ngày</b><span
                                        style="font-weight: 400;" data-mce-style="font-weight: 400;">&nbsp;</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Sản phẩm khuyến
                                        mại ClearStock có giá trị thanh toán </span><b>dưới</b> <b>250,000 đồng</b><span
                                        style="font-weight: 400;" data-mce-style="font-weight: 400;"> được đổi/trả trong
                                    </span><b>7</b> <b>ngày</b><span style="font-weight: 400;"
                                        data-mce-style="font-weight: 400;">. Sản phẩm khuyến mãi có giá thực thanh toán
                                        = hoặc lớn hơn 250,000 đồng đổi trả như sản phẩm mới.</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Phụ kiện (chỉ áp
                                        dụng với mắt kính, trang sức) và túi canvas được đổi/trả trong </span><b>7
                                        ngày</b><span style="font-weight: 400;" data-mce-style="font-weight: 400;">
                                        trong trường hợp có lỗi sản xuất&nbsp;</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Không áp dụng
                                        đổi trả Online với đơn hàng tại hệ thống Cửa hàng Đại lý và Cửa hàng Spicy tại
                                        TTTM Sense City Phạm Văn Đồng</span><br></p>
                                <p><b>2.3/ Market Place (sản phẩm Spicy bán tại các trang Market Place):</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Theo chính sách
                                        đổi trả của các trang Market Place (Lazada; Tiki; Shopee)</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Vui lòng liên hệ
                                        bộ phận Chăm sóc khách hàng của Market Place để được hướng dẫn chi tiết</span>
                                </p>
                                <p><b>III. QUY TRÌNH ĐỔI TRẢ</b></p>
                                <p><b>3.1/ Áp dụng đổi trả chéo trên toàn hệ thống cửa hàng Spicy</b><br></p>
                                <ul>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Khách hàng có
                                            thể đổi trả tại bất kỳ cửa hàng nào trên hệ thống Spicy, khi mua trực tiếp
                                            hoặc online trừ đơn hàng tại hệ thống Cửa hàng Đại lý và Cửa hàng Spicy tại
                                            TTTM Sense City Phạm Văn Đồng.&nbsp;</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Đối với Cửa
                                            hàng Đại lý và Cửa hàng Spicy tại TTTM Sense City Phạm Văn Đồng: mua cửa hàng
                                            nào Đổi - Trả tại Cửa hàng đó</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Không áp dụng
                                            ĐỔI - TRẢ với các kênh Market Place như bán qua Tiki, Lazada,
                                            Shopee...</span><span style="font-weight: 400;"
                                            data-mce-style="font-weight: 400;"><br></span></li>
                                </ul>
                                <p><b>3.2/ Cùng mã sản phẩm (chỉ đổi size, đổi màu)</b><span style="font-weight: 400;"
                                        data-mce-style="font-weight: 400;">: </span><b>Đổi miễn phí</b></p>
                                <p><b>3.3/ Đổi khác mã sản phẩm: Tính theo giá trị tại thời điểm đổi hàng:</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">- Giá trị SP mới
                                        tại thời điểm đổi hàng &gt;Giá trị SP cũ (dựa theo giá trị trên hóa đơn thanh
                                        toán): khách hàng sẽ bù thêm tiền phần chênh lệch.</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Ví dụ: SP mua với
                                        giá 250.000đ . SP muốn đổi giá trị 300.000đ =&gt; KH sẽ bù 50.000đ</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">- Giá trị SP mới
                                        tại thời điểm đổi hàng &lt; Giá trị SP cũ (dựa trên giá trị trên hóa đơn thanh
                                        toán): Spicy sẽ hoàn lại tiền thừa.</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Ví dụ: SP mua với
                                        giá 250.000đ, SP muốn đổi giá trị 200.000đ =&gt; Spicy sẽ hoàn lại 50.000đ cho
                                        khách hàng</span><br></p>
                                <p><b>Ghi chú:</b><br></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Chương trình khách
                                        hàng thân thiết Giảm 49% Dịp Sinh Nhật và Ưu Đãi Giảm Mỗi Lần Mua Sắm (-5% cho
                                        thành viên Bạc, -10% cho thành viên Vàng, -15% cho thành viên Kim Cương):</span>
                                </p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">- Thời gian sử
                                        dụng ưu đãi giảm 49%: 7 ngày (3 ngày trước sinh nhật, ngày sinh nhật và 3 ngày
                                        sau sinh nhật).</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">- Thời hạn đổi trả
                                        sản phẩm sử dụng ưu đãi Giảm 49% Dịp Sinh Nhật và Ưu Đãi Giảm Mỗi Lần Mua Sắm:
                                        Theo giá trị thanh toán.</span><br></p>
                                <p><b>90 ngày với giày (Giá trị thanh toán trên 250.000đ)</b><br></p>
                                <p><b>30 ngày với Túi (Giá trị thanh toán trên 250.000đ)</b><br></p>
                                <p><b>7 ngày với sản phẩm có giá trị thanh toán dưới 250.000đ và sản phẩm mắt kính,
                                        trang sức, túi canvas&nbsp;</b><br></p>
                                <p><b>3.4/ Trường hợp TRẢ sản phẩm:</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">Khách hàng được
                                        quyền trả lại sản phẩm và nhận lại 100% số tiền đã thanh toán bằng tiền mặt ngay
                                        tại cửa hàng Spicy hoặc bằng chuyển khoản nếu khách mua Online.</span><br></p>
                                <p><b>Lưu ý:</b></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">- Online: (khách
                                        hàng gửi hình ảnh hoặc sản phẩm về cho kho hàng online)</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Sản phẩm do lỗi
                                        sản xuất: mọi chi phí vận chuyển trả hàng do Spicy chi trả</span></p>
                                <p><span style="font-weight: 400;" data-mce-style="font-weight: 400;">+ Lý do khác: mọi
                                        chi phí vận chuyển do khách hàng chi trả.</span><br></p>
                                <p><b>3.5/ Lỗi sản xuất là lỗi xuất hiện trước khi dùng sản phẩm, được quy định như
                                        sau:&nbsp;</b><br></p>
                                <ul>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Với ba lô gấp:
                                            Bong tróc, rộp nổ da, hư khoá gài khoá kéo, đứt quai, bong keo, hỏng zipper,
                                            rớt đinh chân túi.</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Với mắt kính:
                                            Rớt tròng, gãy gọng, sút ốc, gãy ve mũi, rời mối hàn</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Túi canvas: hư
                                            dây kéo</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Trang sức: Gãy
                                            chốt cài&nbsp;</span></li>
                                </ul>
                                <p><br></p>
                                <ul>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><b><i>Mọi thắc mắc
                                                về chương trình, vui lòng liên hệ:</i></b></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Hotline chăm
                                            sóc khách hàng: 1800 1160 (miễn phí cuộc gọi)&nbsp;</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Website:
                                        </span><a href="https://Spicy.vn/" data-mce-href="https://Spicy.vn/"><span
                                                style="font-weight: 400;"
                                                data-mce-style="font-weight: 400;">Spicy.vn</span></a></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Email:
                                            cskh@Spicy.vn</span></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><span
                                            style="font-weight: 400;" data-mce-style="font-weight: 400;">Fanpage:
                                        </span><a href="https://www.facebook.com/giaySpicy/"
                                            data-mce-href="https://www.facebook.com/giaySpicy/"><span
                                                style="font-weight: 400;"
                                                data-mce-style="font-weight: 400;">facebook.com/giaySpicy</span></a></li>
                                    <li style="font-weight: 400;" data-mce-style="font-weight: 400;"><b><i>Xem địa chỉ
                                                cửa hàng Spicy tại đây: Xem </i></b><a
                                            href="https://Spicy.vn/pages/tim-dia-chi-cua-hang"
                                            data-mce-href="https://Spicy.vn/pages/tim-dia-chi-cua-hang"><b><i>TẠI
                                                    ĐÂY</i></b></a></li>
                                </ul>
                                <p style="text-align: left;" data-mce-style="text-align: left;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"><strong></strong></span><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"><strong></strong></span><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"><strong></strong></span><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="secure">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="contentPage clearfix">
                            <div class="clearfix description-page">
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>NỘI DUNG CHI TIẾT
                                            CHÍNH SÁCH BẢO MẬT</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong></strong></span><br>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000;" data-mce-style="color: #000000;"><strong><span
                                                style="font-size: 12pt;" data-mce-style="font-size: 12pt;">I.&nbsp;Chính
                                                sách bảo mật và chia sẻ thông tin</span></strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong
                                            style="font-size: 12pt;"
                                            data-mce-style="font-size: 12pt;"></strong></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong
                                            style="font-size: 12pt;" data-mce-style="font-size: 12pt;">1. Mục
                                            đích</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">&nbsp;</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"><em>Spicy.VN tôn trọng sự riêng
                                            tư, muốn bảo vệ thông tin cá nhân và thông tin thanh toán của bạn. "Chính
                                            sách bảo mật" dưới đây là những cam kết mà chúng tôi thực hiện, nhằm tôn
                                            trọng và bảo vệ quyền lợi của người truy cập.</em></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"><em></em></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>2.&nbsp;</strong><strong
                                            style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Quy định cụ
                                            thể</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong
                                            style="font-size: 12pt;"
                                            data-mce-style="font-size: 12pt;"></strong></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>2.1/&nbsp;Thu thập
                                            thông tin</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Khi khách hàng thực hiện
                                        giao dịch/ đăng ký mở tài khoản tại Spicy.vn khách hàng phải cung cấp một số
                                        thông tin cần thiết.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Khách hàng có trách nhiệm
                                        bảo đảm thông tin đúng và luôn cập nhật đầy đủ và chính xác nhất.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>2.2/&nbsp;Lưu trữ và
                                            bảo mật thông tin riêng</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong></strong></span><br>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Thông tin khách hàng, cũng
                                        như các trao đổi giữa khách hàng và Spicy, đều được lưu trữ và bảo mật bởi hệ
                                        thống của Spicy.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Spicy có các biện pháp thích
                                        hợp về kỹ thuật và an ninh để ngăn chặn việc truy cập , sử dụng trái phép thông
                                        tin khách hàng.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>2.3/&nbsp;Sử dụng
                                            thông tin khách hàng</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong></strong></span><br>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">* Spicy có quyền sử dụng thông
                                        tin khách hàng cung cấp để:</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Giao hàng theo địa chỉ mà
                                        quý khách cung cấp.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Cung cấp thông tin liên quan
                                        đến sản phẩm, lợi ích, ưu đãi hay các thư từ khác.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Xử lý đơn đặt hàng và cung
                                        cấp dịch vụ, thông tin qua trang web Spicy.vn theo yêu cầu của quý khách.</span>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Sử dụng thông tin đã thu
                                        thập được từ các cookies nhằm cải thiện trải nghiệm người dùng và chất lượng các
                                        dịch vụ của Spicy.vn.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000;" data-mce-style="color: #000000;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>3.&nbsp;Liên kết với
                                            website khác</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong></strong></span><br>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;">&nbsp;-&nbsp;Khách hàng có
                                        trách nhiệm bảo vệ thông tin tài khoản của mình và không cung cấp bất kỳ thông
                                        tin nào liên quan đến tài khoản và mật khẩu truy cập trên Spicy.vn trên các
                                        website khác.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000;" data-mce-style="color: #000000;"><strong><span
                                                style="font-size: 12pt;" data-mce-style="font-size: 12pt;">4.&nbsp;Chia
                                                sẻ thông tin khách hàng</span></strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">&nbsp;</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">Spicy cam kết sẽ không chia sẻ
                                        thông tin của khách hàng cho bất kỳ một công ty nào khác ngoại trừ những công ty
                                        và các bên thứ ba có liên quan trực tiếp đến việc giao hàng. Chúng tôi có thể
                                        tiết lộ hoặc cung cấp thông tin cá nhân của quý khách trong các trường hợp thật
                                        sự cần thiết như sau:</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Khi có yêu cầu của các cơ
                                        quan pháp luật.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Chia sẻ thông tin khách hàng
                                        với đối tác chạy quảng cáo như Google ví dụ như tiếp thị lại khách hàng dựa theo
                                        hành vi của khách hàng.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Nghiên cứu thị trường và các
                                        báo cáo phân tích và tuyệt đối không chuyển cho bên thứ ba.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000;" data-mce-style="color: #000000;"><strong><span
                                                style="font-size: 12pt;" data-mce-style="font-size: 12pt;">5.&nbsp;Sử
                                                dụng Cookie</span></strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong
                                            style="font-size: 12pt;"
                                            data-mce-style="font-size: 12pt;"></strong></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">Khi khách hàng sử dụng dịch vụ
                                        hoặc xem nội dung do Spicy&nbsp;cung cấp, chúng tôi tự động thu thập và lưu trữ
                                        một số thông tin trong nhật ký máy chủ. Những thông tin này bao gồm:</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;">- Các chi tiết về cách khách
                                        hàng sử dụng dịch vụ của Spicy chẳng hạn như truy vấn tìm kiếm.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Địa chỉ giao thức
                                        Internet.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Thông tin sự cố thiết bị như
                                        lỗi, hoạt động của hệ thống, cài đặt phần cứng, loại trình duyệt, ngôn ngữ trình
                                        duyệt, ngày và thời gian bạn yêu cầu và URL giới thiệu.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Cookie có thể nhận dạng duy
                                        nhất trình duyệt hoặc Tài khoản của khách hàng</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>6. Liên hệ, giải đáp,
                                            thắc mắc.</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000;"
                                        data-mce-style="color: #000000;"><strong></strong></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">Bất kỳ khi nào khách hàng cần
                                        hỗ trợ, xin vui lòng liên hệ với Spicy tại Emai: cskh@Spicy.vn - ĐT: 1800
                                        1160</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;"></span><br></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong>II.&nbsp;Chính sách
                                            bảo mật thanh toán</strong></span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="font-size: 12pt; color: #000000;"
                                        data-mce-style="font-size: 12pt; color: #000000;"><strong></strong></span><br>
                                </p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Hệ thống thanh toán thẻ trên
                                        Spicy.vn được cung cấp bởi các đối tác cổng thanh toán đã được cấp phép hoạt động
                                        hợp pháp tại Việt Nam. Do đó, các tiêu chuẩn bảo mật thanh toán thẻ của Spicy đảm
                                        bảo tuân thủ theo các tiêu chuẩn bảo mật của Đối tác cộng thanh toán.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                        style="color: #000000; font-size: 12pt;"
                                        data-mce-style="color: #000000; font-size: 12pt;">- Ngoài ra, Spicy còn có các
                                        tiêu chuẩn bảo mật giao dịch thanh toán riêng để đảm bảo an toàn các thông tin
                                        thanh toán của khách hàng.</span></p>
                                <p style="text-align: justify;" data-mce-style="text-align: justify;"><br></p>
                                <ul>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;"><strong><em>Mọi thắc mắc
                                                    về chương trình, vui lòng liên hệ:</em></strong></span></li>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;">Hotline chăm sóc khách
                                            hàng: 1800 1160 (miễn phí cuộc gọi)&nbsp;</span></li>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;">Website:&nbsp;<a
                                                href="//Spicy.vn" target="_blank" title="Spicy.vn" style="color: #000000;"
                                                rel="noopener noreferrer" data-mce-href="//Spicy.vn"
                                                data-mce-style="color: #000000;">Spicy.vn</a></span></li>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;">Email:&nbsp;<a
                                                href="mailto:cskh@Spicy.vn" style="color: #000000;"
                                                data-mce-href="mailto:cskh@Spicy.vn"
                                                data-mce-style="color: #000000;">cskh@Spicy.vn</a></span></li>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;">Fanpage:&nbsp;<a
                                                href="https://www.facebook.com/mrspicy1911" title="facebook.com/mrspicy1911"
                                                target="_blank" style="color: #000000;" rel="noopener noreferrer"
                                                data-mce-href="https://www.facebook.com/mrspicy1911"
                                                data-mce-style="color: #000000;">facebook.com/giaySpicy</a></span></li>
                                    <li style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                            style="color: #000000; font-size: 12pt;"
                                            data-mce-style="color: #000000; font-size: 12pt;"><strong><em>Xem địa chỉ
                                                    cửa hàng Spicy tại đây: Xem&nbsp;</em></strong><a
                                                href="/"
                                                target="_blank" title="TẠI ĐÂY" style="color: #000000;"
                                                rel="noopener noreferrer"
                                                data-mce-href="/"
                                                data-mce-style="color: #000000;"><strong><em>TẠI
                                                        ĐÂY</em></strong></a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection