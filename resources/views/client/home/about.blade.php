@extends('client.layout.main')
@section('title', 'Thông tin')
@section('content')

<div class="page-header header-filter header-small" data-parallax="true"
    style="background-image: url({{ asset ('client/img/bg7.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="title">Giới thiệu</h1>
                <h2>CÔNG TY CỔ PHẦN THỜI TRANG MRSPICY</h2>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised" >
    <div class="container">
        <div class="about-description text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-bottom: 60px;">                    
                    <h4 style="text-align: justify; margin-top: 60px;">
                        <p>Công ty thời trang MRSPICY BOUTIQUE được thành lập từ tháng 11 năm 2014</p>
                        <p>Số ĐKKD 0107756568 do sở KHĐT TP. Hà Nội cấp ngày 10/03/2017</p>
                        <p>Người đại diện: Nguyễn Đức Hiếu</p>
                        <p>MRSPICY BOUTIQUE là một trong những thương hiệu thời trang nam dành cho giới trẻ uy tín hàng
                        đầu Việt Nam. Với sự quản lý chặt chẽ, chuyên nghiệp của đội ngủ quản lý; Nỗ lực sáng tạo không
                        ngừng của bộ phận thiết kế, Sự tận tâm chuyên nghiệp của nhân viên bán hàng… là những yếu tố làm
                        nên thương hiệu thời trang MRSPICY BOUTIQUE lớn mạnh như hiện nay.</p>

                        <p>MRSPICY BOUTIQUE luôn quan niệm thời trang là sự tìm tòi và sáng tạo nên những sản phẩm của
                        Chúng tôi đều được thiết kế riêng với sự trẻ trung, hiện đại, cá tính để mang lại guu thời trang
                        hợp mốt nhất, cập nhật các xu hướng hot nhất cho các bạn trẻ. Các dòng sản phẩm của MRSPICY
                        BOUTIQUE không ngừng đa dạng về kiểu dáng, màu sắc và mẫu mã từ áo sơ mi, áo thun, bộ đồ đôi, áo
                        khoác, quần jean, quần tây, quần kaki… đến các phụ kiện thời trang vô cùng sành điệu như balo,
                        kính, giày dép…, tất cả tạo nên vẻ đẹp hoàn hảo, trẻ trung, hiện đại, phong cách thành thị cho
                        phái mạnh.</p>

                        <p>Bên cạnh đó MRSPICY BOUTIQUE luôn đặt mình vào tâm thế và quyền lợi của khách hàng để đưa ra
                        những dòng sản phẩm thời trang chất lượng tốt, mẫu mã cực đẹp đón các đầu xu hướng thời trang,
                        mới lạ cá tính nhưng với giá cả cực kì hấp dẫn, cạnh tranh nhất.</p>

                        <p>Hiện nay, thương hiệu thời trang nam MRSPICY BOUTIQUE phát triển ngày càng lớn mạnh thành một
                        hệ thống với nhiều chi nhánh cửa hàng bán lẻ tại Hà Nội. Ngoài ra, nhằm tạo sự tiện lợi mua sắm
                        tối đa cho khách hàng, MRSPICY BOUTIQUE phát triển hệ thống bán hàng online qua website; và
                        fanpag: là Fanpage chính thức của nhãn hàng, chúng tôi giao hàng đến tận tay người tiêu dung
                        trên toàn quốc. Giờ đây ngay tại nhà bạn cũng có thể chọn cho mình những sản phẩm phù hợp với sở
                        thích và phong cách qua website:www.mrspicy.vn.</p>

                        <p>Đến với MRSPICY BOUTIQUE, chúng tôi luôn tận tâm tư vấn giúp quý khách tìm được những sản phẩm
                        yêu thích, phù hợp với nhu cầu và góp phần tạo nên phong cách cho riêng mình!</p>
                    </h4>
                </div>
            </div>
        </div>        
        {{-- <div class="about-services features-2">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">We build awesome products</h2>                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-rose">
                            <i class="material-icons">gesture</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">1. Design</h4>
                            <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a
                                single use, this powerfull UI Kit lets you do more than ever before. </p>
                            <a href="#pablo">Find more...</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-rose">
                            <i class="material-icons">build</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">2. Develop</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about
                                each one. A paragraph describing a feature will be enough.</p>
                            <a href="#pablo">Find more...</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-rose">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">3. Make Edits</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about
                                each one. A paragraph describing a feature will be enough.</p>
                            <a href="#pablo">Find more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-office" style="margin-bottom: 60px;">
            <div class="row  text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">Our office is our second home</h2>
                    <h4 class="description">Here are some pictures from our office. You can see the place looks like
                        a palace and is fully equiped with everything you need to get the job done.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                        src="{{ asset ('client/img/examples/office2.jpg') }}">
                </div>
                <div class="col-md-4">
                    <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                        src="{{ asset ('client/img/examples/office4.jpg') }}">
                </div>
                <div class="col-md-4">
                    <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                        src="{{ asset ('client/img/examples/office3.jpg') }}">
                </div>
                <div class="col-md-6">
                    <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                        src="{{ asset ('client/img/examples/office5.jpg') }}">
                </div>
                <div class="col-md-6">
                    <img class="img-rounded img-responsive img-raised" alt="Raised Image"
                        src="{{ asset ('client/img/examples/office1.jpg') }}">
                </div>

            </div>

        </div>         --}}
    </div>
</div>
@endsection