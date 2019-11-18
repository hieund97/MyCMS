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
                            class="btn-{{$item->quantity == 0? 'danger': 'success'}}">{{$item->quantity == 0? 'Hết hàng': 'Còn hàng'}}</label><br>
                        <span>Đã bán: {{$item->purchase}}</span>
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
                                @if ($item->quantity == 0)
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
                <div class="section section-comments">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="media-area" style="margin-bottom: 120px">
                                @if ($review->count() > 0)
                                <h3 class="title text-center">{{$review->count()}} Đánh giá</h3>
                                @endif
                                @foreach ($review as $comment)
                                @if ($comment->user_id == NULL)
                                <div class="media">
                                    <a class="pull-left" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object" style="height: 65px"
                                                src=" {{ asset('client/img/placeholder.jpg') }}" />
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{$comment->guest->client_name}}</h4>
                                        <span>{{$comment->created_at}}</span>
                                        <h6 class="text-muted"></h6>

                                        <p>{{$comment->content}}</p>
                                    </div>
                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip"
                                            title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 2
                                        </a>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#pablo">
                                            <div class="avatar">
                                                <img class="media-object" alt="64x64"
                                                    src="{{ asset ('client/img/faces/card-profile4-square.jpg') }}">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Tina Andrew <small>&middot; 12 Hours Ago</small>
                                            </h4>

                                            <p>Hello guys, nice to have you on the platform! There will be a lot of
                                                great stuff coming soon. We will keep you posted for the latest news.
                                            </p>
                                            <p> Don't forget, You're Awesome!</p>

                                            <div class="media-footer">
                                                <a href="#pablo" class="btn btn-primary btn-simple pull-right"
                                                    rel="tooltip" title="Reply to Comment">
                                                    <i class="material-icons">reply</i> Reply
                                                </a>
                                                <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                                    <i class="material-icons">favorite</i> 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                @else
                                <div class="media">
                                    <a class="pull-left" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object" style="height: 65px"
                                                src="{{ $comment->user->avatar}}" />
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{$comment->user->last_name}}
                                            {{$comment->user->first_name}}</h4> <span>{{$comment->created_at}}</span>
                                        <h6 class="text-muted"></h6>

                                        <p>{{$comment->content}}</p>
                                        <div class="media-footer">
                                            <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip"
                                                title="Reply to Comment">
                                                <i class="material-icons">reply</i> Reply
                                            </a>
                                            <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                                <i class="material-icons">favorite</i> 2
                                            </a>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="#pablo">
                                                <div class="avatar">
                                                    <img class="media-object" alt="64x64"
                                                        src="{{ asset ('client/img/faces/card-profile4-square.jpg') }}">
                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Tina Andrew <small>&middot; 12 Hours
                                                        Ago</small>
                                                </h4>

                                                <p>Hello guys, nice to have you on the platform! There will be a lot of
                                                    great stuff coming soon. We will keep you posted for the latest
                                                    news.
                                                </p>
                                                <p> Don't forget, You're Awesome!</p>

                                                <div class="media-footer">
                                                    <a href="#pablo" class="btn btn-primary btn-simple pull-right"
                                                        rel="tooltip" title="Reply to Comment">
                                                        <i class="material-icons">reply</i> Reply
                                                    </a>
                                                    <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                                        <i class="material-icons">favorite</i> 2
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endif

                                @endforeach


                            </div>

                            <h3 class="title text-center">Đánh giá sản phẩm</h3>
                            @auth
                            <form action="/review/member" method="POST">
                                @csrf
                                <div class="media media-post">
                                    <a class="pull-left author" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object" style="height: 65px;" alt="64x64"
                                                src="{{ auth()->user()->avatar }}">
                                        </div>
                                    </a>

                                    <div class="media-body">
                                        <textarea class="form-control" name="content"
                                            placeholder="Viết bình luận của bạn" rows="6"></textarea>
                                        <div class="media-footer">
                                            <button type="submit"
                                                class="btn btn-primary btn-round btn-wd pull-right">Viết
                                                Bình luận</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="productid" value="{{$item->id}}">
                                </div> <!-- end media-post -->
                                @endauth
                            </form>

                            @guest
                            <div class="media media-post">
                                <a class="pull-left author" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" alt="64x64"
                                            src=" {{ asset('client/img/placeholder.jpg') }}">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <form class="form" action="/review/guest" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Your Name" required>
                                                    <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group is-empty">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Your email" required>
                                                    <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group is-empty"><textarea class="form-control"
                                                placeholder="Write some nice stuff or nothing..." rows="6"
                                                name="content"></textarea><span class="material-input"></span></div>
                                        <div class="media-footer">
                                            <h6>Sign in with</h6>
                                            <a href="" class="btn btn-just-icon btn-round btn-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="" class="btn btn-just-icon btn-round btn-facebook">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="" class="btn btn-just-icon btn-round btn-google">
                                                <i class="fa fa-google-plus-square"></i>
                                            </a>
                                            <input type="hidden" name="productid" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-primary pull-right">Bình luận</button>
                                        </div>
                                    </form>

                                </div><!-- end media-body -->

                            </div>
                            @endguest


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

                                <h4 class="card-title">
                                    <a href="#pablo">{{$random->name}}</a>
                                </h4>
                                <div class="card-description">
                                    {{$random->description}}
                                </div>
                                <div class="footer">
                                    <div class="price {{$random->quantity == 0 ? 'price-sold-out': ''}}">
                                        <h4>{{$random->quantity == 0? 'Tạm hết hàng' : number_format($random->price). '₫'}}
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




                                            <button {{$item->quantity == 0? 'disabled' : NULL}} type="submit"
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