@extends('client.layout.main')
@section('title', 'Home')
@section('content')
<div class="main main-raised">

    {{-- New arrival --}}
    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm mới</h2>
            <div class="row">

                @foreach ($newProduct as $new)
                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <a href="/san-pham/{{$new->p_slug}}">
                            <div class="card-image">
                                <img src="{{$new->avatar}}" title="{{$new->name}}" />
                            </div>
                        </a>

                        <div class="card-content">
                            <a href="/san-pham/{{$new->p_slug}}">
                                <h4 class="card-title">
                                    <h4 class="card-title">{{$new->name}}</h4>
                                </h4>
                            </a>
                            <p class="card-description">{{$new->description}}</p>
                            <div class="footer">
                                <div class="price-container">
                                    {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                    <span class="price price-new">{{number_format($new->price)}} ₫</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
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


    {{-- Danh mục --}}
    <div class="cards ">

        <div class="container" style="width: 1530px;">
            <div class="title">
                <h3>Danh mục hot</h3>
            </div>

            <div class="row">
                @foreach ($activeCate as $cate)
                <div class="col-md-4">
                    <div class="card card-plain">
                        <a href="/danh-muc/{{$cate->p_cate_slug}}">
                            <div class="card-image">
                                <img src="{{$cate->avatar}}" />
                            </div>
                        </a>
                        <div class="card-content text-center">
                            <a href="/danh-muc/{{$cate->p_cate_slug}}">
                                <h3 class="card-title">{{$cate->name}}</h3>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    {{-- Sản phẩm nổi bật --}}
    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm nổi bật</h2>
            <div class="col-md-12">
                <div class="row">
                    @foreach ($featureProduct as $feature)
                    <div class="col-md-4">
                        <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                            <a href="/san-pham/{{$feature->p_slug}}">
                                <div class="card-image">
                                    <img src="{{$feature->avatar}}" title="{{$feature->name}}" />
                                </div>
                            </a>
                            <div class="card-content">
                                <a href="/san-pham/{{$feature->p_slug}}">
                                    <h4 class="card-title">{{$feature->name}}</h4>
                                </a>
                                <p class="description">
                                    {{$feature->description}}.
                                </p>
                                <div class="footer">
                                    <div class="price-container">
                                        <span class="price">{{number_format($feature->price)}} ₫</span>
                                    </div>

                                    <button class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                        rel="tooltip" title="Add to cart" data-placement="left">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3 col-md-offset-5">
                <a href="/san-pham"><button rel="tooltip" class="btn btn-rose btn-round"> Xem thêm</button></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!-- section -->


    {{-- Sản phẩm sale --}}
    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm sale</h2>
            <div class="row">

                @foreach ($saleProduct as $sale)
                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <a href="/san-pham/{{$sale->p_slug}}">
                            <div class="card-image">
                                <img src="{{$sale->avatar}}" title="{{$sale->name}}" />
                            </div>
                        </a>

                        <div class="card-content">
                            <a href="/san-pham/{{$sale->p_slug}}">
                                <h4 class="card-title">{{$sale->name}}</h4>
                            </a>
                            <p class="card-description">{{$sale->description}}</p>
                            <div class="footer">
                                <div class="price-container">
                                    {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                    <span class="price price-new">{{number_format($sale->price)}} ₫</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
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

    {{-- Giới thiệu --}}
    <div class="section" style="padding-top:0px;">
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
                    <p class="text-center">Chúng tôi luôn luôn tự hào đem đến cho khách hàng những sản phẩm chất lượng
                        nhất, giá cả ữu đãi.
                        Được khách hàng trên cả nước tin dùng
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection