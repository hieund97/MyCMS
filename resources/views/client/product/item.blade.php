@extends('client.layout.main')
@section('title', $item->name)
@section('content')
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


<body class="product-page">
    <div class="page-header header-filter header-small" data-parallax="true"
        style="background-image: url({{ asset('client/img/bg6.jpg') }});">
    </div>

    <div class="section" style="background: white">
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
                        <label style="margin-bottom: 20px;"
                            class="btn-{{checkQuantityProduct($item->id) == false? 'danger': 'success'}}">{{checkQuantityProduct($item->id) == false? 'Hết hàng': 'Còn hàng'}}</label><br>
                        {{-- <span>Đã bán: {{$item->purchase}}</span> --}}
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


                        <form action="/gio-hang" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$item->id}}">
                            <input type="hidden" name="name" id="name" value="{{$item->name}}">
                            <input type="hidden" name="avatar" id="avatar" value="{{json_encode($item->avatar)}}">
                            {{-- <input type="hidden" id="price" name="price" value="{{$item->price}}"> --}}
                            <div class="row pick-size" style="padding-left: 15px;">

                                <h4 class="panel-title">
                                    Số lượng
                                </h4>
                                <input type="number" value="1" min="1" id="quantity" max="99" name="quantity"
                                    style="width: 50px;padding-left: 10px;font-family: 'Pacifico', cursive;font-size: 16px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;margin-right: 10px;">

                            </div>

                            <div class="row pick-size">
                                @php
                                $result= array();
                                @endphp
                                @foreach ($item->value as $value)
                                @php
                                $attr = $value->attribute->name;
                                $result[$attr][] = $value->value;

                                @endphp
                                @endforeach

                                @foreach ($result as $key => $properties)
                                <div class="col-md-6 col-sm-6">
                                    <label>{{$key}}</label>
                                    <select class="selectpicker" id="{{$key}}" name="{{$key}}[]"
                                        data-style="select-with-transition" data-size="7">
                                        @foreach ($properties as $value)
                                        <option value="{{$value}}">{{$value}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                            </div>
                            <div class="row text-right">
                                @if (checkQuantityProduct($item->id) == false)
                                <button type="submit" disabled class="btn btn-info btn-round btn__primary">Mua
                                    ngay
                                    &nbsp;<i class="material-icons">shopping_cart</i></button>
                                <a href="/lien-he" class="btn btn-danger btn-round">Liên hệ &nbsp;<i
                                        class="material-icons">perm_phone_msg</i></a>
                                @else
                                <button type="submit" name="add" value="paynow"
                                    class="btn btn-info btn-round btn__primary">Mua ngay
                                    &nbsp;<i class="material-icons">shopping_cart</i></button>
                                <button type="submit" name="add" value="addtocart"
                                    class="btn btn-rose btn-round btn__primary btn-cart">Thêm vào giỏ hàng
                                    &nbsp;<i class="material-icons">shopping_cart</i></button>
                                @endif
                            </div>
                        </form>

                    </div>
                </div>

                {{-- Comment Area --}}
                @include('client.partial.comment')
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

            {{-- Random product --}}
            <div class="related-products">
                <h3 class="title text-center">Có thể bạn quan tâm</h3>

                <div class="row">
                    @foreach ($randomProduct as $random)
                    <div class="col-md-3 main-img">
                        <div class="card card-product card-plain no-shadow " data-colored-shadow="false">
                            <a href="/san-pham/{{$random->p_slug}}">
                                <div class="card-image" style="height: 400.39px;">
                                    <img src="{{$random->avatar}}" title="{{$random->name}}" />
                                </div>
                            </a>
                            <div class="hover-img">
                                <a href="/san-pham/{{$random->p_slug}}">
                                    <div class="card-image">
                                        <img src="{{$random->image_product->first()->image}}"
                                            title="{{$random->name}}" />
                                    </div>
                                </a>
                            </div>
                            <div class="card-content">

                                <h4 class="card-title">
                                    <a href="#pablo">{{$random->name}}</a>
                                </h4>
                                <div class="card-description">
                                    {{$random->description}}
                                </div>
                                <div class="footer">
                                    <div class="price {{checkQuantityProduct($random->id) == false ? 'price-sold-out': ''}}">
                                        <h4>{{checkQuantityProduct($random->id) == false? 'Tạm hết hàng' : number_format($random->price). '₫'}}
                                        </h4>
                                    </div>
                                    <div class="stats">

                                        <form action="/gio-hang" method="POST">
                                            @csrf
                                            <input type="hidden" id="id" name="id" value="{{$random->id}}">
                                            <input type="hidden" id="name" name="name" value="{{$random->name}}">
                                            <input type="hidden" name="avatar" id="avatar"
                                                value="{{json_encode($random->avatar)}}">
                                            <input type="hidden" id="quantity" name="quantity" value="1">
                                            <input type="hidden" id="price" name="price" value="{{$random->price}}">

                                            @php
                                            $result= array();
                                            @endphp
                                            @foreach ($random->value as $value)
                                            @php
                                            $attr = $value->attribute->name;
                                            $result[$attr][] = $value->value;
                                            @endphp
                                            @endforeach

                                            @foreach ($result as $key => $properties)
                                            <input type="hidden" id="{{$key}}" name="{{$key}}"
                                                value="{{head($properties)}}">
                                            {{-- Head() trả về phần tử đầu tiên của mảng --}}
                                            @endforeach

                                            <button {{checkQuantityProduct($item->id) == false? 'disabled' : NULL}} type="submit"
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</body>
@endsection
<script>
    function myfunction(){
        $('#reply').removeClass("hide")
    };

</script>