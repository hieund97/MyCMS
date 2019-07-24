<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
@extends('client.layout.main')
@section('title', 'Blogs')
@section('content')
<!-- Item slider-->
<style type="text/css">
    #slider-text {
        padding-top: 40px;
        display: block;
    }

    #slider-text .col-md-6 {
        overflow: hidden;
    }

    #slider-text h2 {
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-size: 30px;
        letter-spacing: 3px;
        margin: 30px auto;
        padding-left: 40px;
    }

    #slider-text h2::after {
        border-top: 2px solid #c7c7c7;
        content: "";
        position: absolute;
        bottom: 35px;
        width: 100%;
    }

    #itemslider h4 {
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 400;
        font-size: 12px;
        margin: 10px auto 3px;
    }

    #itemslider h5 {
        font-family: 'Josefin Sans', sans-serif;
        font-weight: bold;
        font-size: 12px;
        margin: 3px auto 2px;
    }

    #itemslider h6 {
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 300;
        ;
        font-size: 10px;
        margin: 2px auto 5px;
    }

    .badge {
        background: #b20c0c;
        position: absolute;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        line-height: 31px;
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 300;
        font-size: 14px;
        border: 2px solid #FFF;
        box-shadow: 0 0 0 1px #b20c0c;
        top: 5px;
        right: 25%;
    }

    #slider-control img {
        padding-top: 60%;
        margin: 0 auto;
    }

    @media screen and (max-width: 992px) {
        #slider-control img {
            padding-top: 70px;
            margin: 0 auto;
        }
    }

    .carousel-showmanymoveone .carousel-control {
        width: 4%;
        background-image: none;
    }

    .carousel-showmanymoveone .carousel-control.left {
        margin-left: 5px;
    }

    .carousel-showmanymoveone .carousel-control.right {
        margin-right: 5px;
    }

    .carousel-showmanymoveone .cloneditem-1,
    .carousel-showmanymoveone .cloneditem-2,
    .carousel-showmanymoveone .cloneditem-3,
    .carousel-showmanymoveone .cloneditem-4,
    .carousel-showmanymoveone .cloneditem-5 {
        display: none;
    }

    @media all and (min-width: 768px) {

        .carousel-showmanymoveone .carousel-inner>.active.left,
        .carousel-showmanymoveone .carousel-inner>.prev {
            left: -50%;
        }

        .carousel-showmanymoveone .carousel-inner>.active.right,
        .carousel-showmanymoveone .carousel-inner>.next {
            left: 50%;
        }

        .carousel-showmanymoveone .carousel-inner>.left,
        .carousel-showmanymoveone .carousel-inner>.prev.right,
        .carousel-showmanymoveone .carousel-inner>.active {
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
            display: block;
        }
    }

    @media all and (min-width: 768px) and (transform-3d),
    all and (min-width: 768px) and (-webkit-transform-3d) {

        .carousel-showmanymoveone .carousel-inner>.item.active.right,
        .carousel-showmanymoveone .carousel-inner>.item.next {
            -webkit-transform: translate3d(50%, 0, 0);
            transform: translate3d(50%, 0, 0);
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner>.item.active.left,
        .carousel-showmanymoveone .carousel-inner>.item.prev {
            -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner>.item.left,
        .carousel-showmanymoveone .carousel-inner>.item.prev.right,
        .carousel-showmanymoveone .carousel-inner>.item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0;
        }
    }

    @media all and (min-width: 992px) {

        .carousel-showmanymoveone .carousel-inner>.active.left,
        .carousel-showmanymoveone .carousel-inner>.prev {
            left: -16.666%;
        }

        .carousel-showmanymoveone .carousel-inner>.active.right,
        .carousel-showmanymoveone .carousel-inner>.next {
            left: 16.666%;
        }

        .carousel-showmanymoveone .carousel-inner>.left,
        .carousel-showmanymoveone .carousel-inner>.prev.right,
        .carousel-showmanymoveone .carousel-inner>.active {
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner .cloneditem-2,
        .carousel-showmanymoveone .carousel-inner .cloneditem-3,
        .carousel-showmanymoveone .carousel-inner .cloneditem-4,
        .carousel-showmanymoveone .carousel-inner .cloneditem-5,
        .carousel-showmanymoveone .carousel-inner .cloneditem-6 {
            display: block;
        }
    }

    @media all and (min-width: 992px) and (transform-3d),
    all and (min-width: 992px) and (-webkit-transform-3d) {

        .carousel-showmanymoveone .carousel-inner>.item.active.right,
        .carousel-showmanymoveone .carousel-inner>.item.next {
            -webkit-transform: translate3d(16.666%, 0, 0);
            transform: translate3d(16.666%, 0, 0);
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner>.item.active.left,
        .carousel-showmanymoveone .carousel-inner>.item.prev {
            -webkit-transform: translate3d(-16.666%, 0, 0);
            transform: translate3d(-16.666%, 0, 0);
            left: 0;
        }

        .carousel-showmanymoveone .carousel-inner>.item.left,
        .carousel-showmanymoveone .carousel-inner>.item.prev.right,
        .carousel-showmanymoveone .carousel-inner>.item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0;
        }
    }
    
</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                    <div class="item">
                        <div class="col-md-2">
                            <div class="card card-product card-plain">
                                <a href="/san-pham/">
                                    <div class="">
                                        <img src="{{asset ('client/img/test123.jpg') }}" />
                                    </div>
                                </a>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">Tên</h4>
                                    </a>
                                    <p class="card-description">Mô tả</p>
                                    <div class="footer">
                                        <div class="price-container">
                                            {{-- <span class="price price-old"> &euro;1,430</span> --}}
                                            <span class="price price-new">Giá</span>
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
                    </div>

                </div>
                <!-- left,right control -->
                <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider" data-slide="prev"> <i
                            class="material-icons">keyboard_arrow_left</i></a>
                    <a class="right carousel-control" href="#itemslider" data-slide="next"> <i
                            class="material-icons">keyboard_arrow_right</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
   
  $('#itemslider').carousel({ interval: 3000 });
   
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
@endpush
<!-- Item slider end-->

@endsection