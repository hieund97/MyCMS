@extends('client.layout.main')
@section('title', 'Danh mục')
@section('content')

@include('client.partial.header')

<div class="main main-raised">
    <div class="section" style="padding-bottom:0px;">
        <div class="container">
            <h2 style="position: relative" class="section-title text-center">{{$cate->name}}</h2>
            <div class="row" style="position: relative">

                <ul class="nav nav-pills-primary text-center ">
                    @if ($cate->childs->count() > 0)
                    @foreach ($cate->childs as $subCate)
                    <li style="display: inline-block"><a
                            style="text-transform: uppercase;font-weight: 500;color: #555555;"
                            href="/danh-muc/{{$subCate->p_cate_slug}}">{{$subCate->name}}</a></li>
                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div><!-- section -->

    <div class="section" style="padding-top: 0px;">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby')
                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">
                        @foreach ($category as $item)
                        <div class="col-md-3 ">
                            <div class="card card-product card-plain no-shadow main-img" data-colored-shadow="false">
                                <div>
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <div class="card-image">
                                            <img src="{{$item->avatar}}" alt="..." />
                                        </div>
                                    </a>
                                </div>
                                <div class="hover-img">
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <div class="card-image ">
                                            <img src="{{$item->image_product->first()->image}}" alt="..." />
                                        </div>
                                    </a>
                                </div>

                                <div class="card-content">
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <h4 class="card-title">{{$item->name}}</h4>
                                    </a>
                                    <p class="description">
                                        {{$item->description}}
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price price-new">{{number_format($item->price)}}</span>
                                        </div>

                                        <button type="button" id="cart"
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right btn__primary btn-cart"
                                            rel="tooltip" title="Thêm vào giỏ hàng" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>

                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        @endforeach
                    </div>
                    <hr>
                    <div class="col-md-3 col-md-offset-3">
                        {{$category->links()}}
                    </div>
                </div>
            </div>

        </div>
        <!-- section -->
    </div> <!-- end-main-raised -->
</div>
@include('client.partial.tag')
@endsection