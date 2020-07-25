<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset ('client/css/product-carousel.css') }}" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
@extends('client.layout.main')
@section('title', 'Shop Quần Áo Nam, Phụ Kiện Thời Trang Mới Nhất')
@section('content')


<div class="main main-raised" style="padding: 10px 40px; margin: 0 60px;">

    {{-- Sản phẩm sale --}}
    <div class="container-fluid">
        <h2 class="section-title">Sản phẩm sale</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-showmanymoveone slide" id="itemslider2">
                    <div class="carousel-inner">
                        @php
                        $i =0;
                        @endphp
                        @foreach ($saleProduct as $sale)
                        <div class="item {{ $i == 0? 'active' : ''}} ">
                            <div class="col-md-2">
                                <div class="card card-product card-plain">
                                    <a href="/san-pham/{{$sale->p_slug}}">
                                        <div class="">
                                            <img src="{{$sale->avatar}}" title="{{$sale->name}}" />
                                        </div>
                                    </a>
                                    <div class="card-content">
                                        <a href="/san-pham/{{$sale->p_slug}}">
                                            <h4
                                                style="font-family: 'Roboto Slab', 'Times New Roman', serif; font-weight: 700; font-size: 1.3em;">
                                                {{$sale->name}}</h4>
                                        </a>
                                        <p class="card-description">{{$sale->description}}</p>
                                        <form action="/gio-hang" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{$sale->id}}">
                                            <input type="hidden" name="name" id="name" value="{{$sale->name}}">
                                            <input type="hidden" name="avatar" id="avatar"
                                                value="{{json_encode($sale->avatar)}}">
                                            <input type="hidden" id="quantity" name="quantity" value="1">
                                            <input type="hidden" id="price" name="price" value="{{$sale->price}}">


                                            @php
                                            $result= array();
                                            @endphp
                                            @foreach ($sale->value as $value)
                                            @php
                                            $attr = $value->attribute->name;
                                            $result[$attr][] = $value->value;
                                            @endphp
                                            @endforeach

                                            @foreach ($result as $key => $properties)
                                            <input type="hidden" id="{{$key}}" name="{{$key}}"
                                                value="{{head($properties)}}">
                                            {{-- Head() trả về phần tử đầu tiên của mảng --}}
                                            <span>{{$key}}:{{head($properties)}},</span>
                                            @endforeach

                                            <div class="footer">
                                                <div class="price-container">
                                                    <span
                                                        class="price {{$sale->quantity == 0 ? 'price-sold-out': 'price-new'}}">{{$sale->quantity == 0? 'Tạm hết hàng' : number_format($sale->price). '₫'}}</span>
                                                </div>
                                                <div class="stats">
                                                    <button {{$sale->quantity == 0? 'disabled' : NULL}} type="submit"
                                                        rel="tooltip" title=""
                                                        class="btn btn-just-icon btn-simple btn-rose btn__primary btn-cart"
                                                        data-original-title="Thêm vào giỏ hàng">
                                                        <i class="material-icons">shopping_cart</i>
                                                    </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                $i =1;
                @endphp
                @endforeach
            </div>


            <!-- left,right control -->
            <div id="slider-control">
                <a class="left carousel-control"
                    style="background: darkgrey; margin-top: 190px;width: 40px;height: 70px;" href="#itemslider2"
                    data-slide="prev"> <i class="material-icons">keyboard_arrow_left</i></a>
                <a class="right carousel-control"
                    style="background: darkgrey; margin-top: 190px;width: 40px;height: 70px;" href="#itemslider2"
                    data-slide="next"> <i class="material-icons">keyboard_arrow_right</i></a>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
   
        $('#itemslider').carousel({ interval: 1000 });
        
        $('.carousel-showmanymoveone .item').each(function(){
        var itemToClone = $(this);
        
        for (var i=1;i<6;i++) {
        itemToClone = itemToClone.next();
        
        if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
        }
        
        itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
        }
        });
        });
   
</script>


{{-- Danh mục --}}
<div class="cards ">

    <div class="container-fluid">
        <div class="title">
            <h2>Trending</h2>
        </div>

        <div class="row" style="display: flex; flex-wrap:wrap;">
            @foreach ($activeTrending as $trend)
            <div class="col-md-4">
                <div class="card card-plain">
                    <a href="/trending/{{$trend->slug}}">
                        <div class="">
                            <img src="{{$trend->avatar}}" />
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

{{-- Sản phẩm nổi bật --}}
<div class="section">
    <div class="container-fluid">
        <h2 class="section-title" style="margin-left: 20px; ">Sản phẩm nổi bật</h2>
        <div class="row" style="display: flex; flex-wrap:wrap;">
            @foreach ($featureProduct as $feature)
            <div class="col-md-2 main-img">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                    <a href="/san-pham/{{$feature->p_slug}}">
                        <div class="card-image" style="height: 400.39px;">
                            <img src="{{$feature->avatar}}" title="{{$feature->name}}" />
                        </div>
                    </a>
                    <div class="hover-img">
                        <a href="/san-pham/{{$feature->p_slug}}">
                            <div class="card-image">
                                <img src="{{$feature->image_product->first()->image}}" title="{{$feature->name}}" />
                            </div>
                        </a>
                    </div>
                    <div class="card-content text-center">
                        <a href="/san-pham/{{$feature->p_slug}}">
                            <h4 class="card-title" style="color: inherit;">{{$feature->name}}</h4>
                        </a>
                        <p class="description">
                            {{$feature->description}}.
                        </p>
                        <form action="/gio-hang" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$feature->id}}">
                            <input type="hidden" name="name" id="name" value="{{$feature->name}}">
                            <input type="hidden" name="avatar" id="avatar" value="{{json_encode($feature->avatar)}}">
                            <input type="hidden" name="quantity" id="quantity" value="1">
                            <input type="hidden" name="price" id="price" value="{{$feature->price}}">


                            @php
                            $result= array();
                            @endphp
                            @foreach ($feature->value as $value)
                            @php
                            $attr = $value->attribute->name;
                            $result[$attr][] = $value->value;
                            @endphp
                            @endforeach

                            @foreach ($result as $key => $properties)
                            <input type="hidden" id="{{$key}}" name="{{$key}}" value="{{head($properties)}}">
                            {{-- Head() trả về phần tử đầu tiên của mảng --}}
                            <span>{{$key}}:{{head($properties)}},</span>
                            @endforeach
                            <div class="footer">
                                <div class="price-container">
                                    <span
                                        class="price {{checkQuantityProduct($feature->id) == false ? 'price-sold-out': 'price-new'}}">{{checkQuantityProduct($feature->id) == false? 'Tạm hết hàng' : number_format($feature->price). '₫'}}
                                    </span>


                                </div>

                                <div class="stats">

                                    <button {{checkQuantityProduct($feature->id) == false? 'disabled' : NULL}} type="submit"
                                        id="btn-cart-feature" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose btn__primary btn-cart"
                                        data-original-title="Thêm vào giỏ hàng">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
    @endforeach
</div>


<div class="col-md-3 col-md-offset-5">
    <a href="/san-pham"><button rel="tooltip" class="btn btn-rose btn-round"> Xem thêm</button></a>
</div>
</div>
</div><!-- section -->

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