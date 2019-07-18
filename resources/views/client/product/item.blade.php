@extends('client.layout.main')
@section('title', 'Blogs')
@section('content')

<body class="product-page">
    <div class="page-header header-filter header-small" data-parallax="true"
        style="background-image: url({{ asset('client/img/bg6.jpg') }});">
    </div>

    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                        <div class="tab-content">
                            <div class="tab-pane active" id="product-page-main">
                                <img src=" {{$item->avatar }}" />
                            </div>
                            @foreach ($item->image_product as $fashion)
                            <div class="tab-pane" id="product-page{{$fashion->id}}">
                                <img src=" {{$fashion->image}}" />
                            </div>
                            @endforeach
                        </div>
                        <ul class="nav flexi-nav" role="tablist" id="flexiselDemo1" style="left: -772.5px" ;>
                            <li class="active">
                                <a href="#product-page-main" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{$item->avatar }} " />
                                </a>
                            </li>
                            @foreach ($item->image_product as $fashion)
                            <li>
                                <a href="#product-page{{$fashion->id}}" role="tab" data-toggle="tab"
                                    aria-expanded="true">
                                    <img src="{{$fashion->image}}" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h2 class="title"> {{$item->name}} </h2>
                        <h3 class="main-price">{{number_format($item->price)}} ₫</h3>
                        <span>Mã sản phẩm: {{$item->product_code}}</span>
                        <p></p>
                    <label class="btn-{{$item->quantity == 0? 'danger': 'success'}}">{{$item->quantity == 0? 'Hết hàng': 'Còn hàng'}}</label>
                        <div id="acordeon">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-border panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="panel-title">
                                                Chi tiết sản phẩm
                                                <i class="material-icons">keyboard_arrow_down</i>
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>{{$item->detail}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-border panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo" aria-controls="collapseOne">
                                            <h4 class="panel-title">
                                                Mô tả
                                                <i class="material-icons">keyboard_arrow_down</i>
                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            {{$item->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--  end acordeon -->

                        <div class="row pick-size">
                            <div class="col-md-6 col-sm-6">
                                <label>Chọn màu</label>
                                <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                    <option value="1">Rose </option>
                                    <option value="2">Gray</option>
                                    <option value="3">White</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label>Chọn kích cỡ</label>
                                <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                    <option value="1">Small </option>
                                    <option value="2">Medium</option>
                                    <option value="3">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-right">
                            <button class="btn btn-rose btn-round">Thêm vào giỏ hàng &nbsp;<i
                                    class="material-icons">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info text-center">
                                <i class="material-icons">local_shipping</i>
                            </div>
                            <h4 class="info-title text-center">Giao hàng 2 giờ </h4>
                            <p class="text-center">Khi đã là thành viên MrSicy bạn sẽ nhận được gần 200 nghìn mặt hàng
                                trong vòng 2 giờ, không tính phí vận chuyển (không bao gồm phụ phí cồng kềnh) ở tất cả 6
                                thành phố lớn.

                                Chúng tôi cam kết để đảm bảo luôn có đủ hàng cho các mặt hàng ở kho gần bạn nhất, vì vậy
                                chúng tôi có thể gửi nhanh đến địa chỉ của bạn.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success text-center">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title text-center">Đổi trả và hoàn tiền</h4>
                            <p class="text-center">Khi đã trở thành thành viên, bạn có thể đổi trả lại bất kỳ sản phẩm
                                của Spicy trong vòng 30 ngày (*), không gặp rắc rối nào. Bạn chỉ cần liên lạc với
                                SpicyCare để trả hàng. SpicyCare sẽ xác nhận và liên lạc với bạn ngay lập tức</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-rose text-center">
                                <i class="material-icons">favorite</i>
                            </div>
                            <h4 class="info-title text-center">Sản phẩm chất lượng</h4>
                            <p class="text-center">Chúng tôi luôn luôn tự hào đem đến cho khách hàng những sản phẩm chất
                                lượng nhất, giá cả ữu đãi.
                                Được khách hàng trên cả nước tin dùng
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="related-products">
                <h3 class="title text-center">Có thể bạn quan tâm</h3>

                <div class="row">
                    @foreach ($randomProduct as $random)
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-product">
                            <a href="/san-pham/{{$random->p_slug}}">
                                <div class="card-image">
                                    <img class="img" src="{{$random->avatar}}" />
                                </div>
                            </a>

                            <div class="card-content">

                                @foreach ($random->categories as $cate)
                                <a href="#">
                                    <h6 class="category text-info">{{$cate->name}}</h6>
                                </a>
                                @endforeach
                                <h4 class="card-title">
                                    <a href="#pablo">{{$random->name}}</a>
                                </h4>
                                <div class="card-description">
                                    {{$random->description}}
                                </div>
                                <div class="footer">
                                    <div class="price">
                                        <h4>{{number_format($random->price)}} ₫</h4>
                                    </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="Saved to Wishlist"
                                            class="btn btn-just-icon btn-simple btn-rose">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
@endsection