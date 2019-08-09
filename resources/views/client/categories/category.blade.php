@extends('client.layout.main')
@section('title', 'Danh mục')
@section('content')

@include('client.partial.header')


<div class="main main-raised">
    <div class="section" style="padding-bottom:0px;">
        <div class="container">
            <h2 class="section-title text-center">{{$cate->name}}</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="nav nav-pills nav-pills-primary">
                        <li><a href="#pillall">Tất cả</a></li>
                        <li><a href="#pill2">World</a></li>
                        <li><a href="#pill3">Arts</a></li>
                        <li><a href="#pill4">Tech</a></li>
                        <li><a href="#pill5">Business</a></li>
                    </ul>
                </div>
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
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right btn__primary"
                                            rel="tooltip" title="Thêm vào giỏ hàng" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-6">
                {{$category->links()}}
            </div>
        </div>
        <!-- section -->
    </div> <!-- end-main-raised -->
</div>
@endsection