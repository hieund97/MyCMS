@extends('client.layout.main')
@section('title', 'Sản phẩm')
@section('content')

@include('client.partial.header')


<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby')

                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">
                        @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow main-img" data-colored-shadow="false">
                                <div>
                                    <a href="/san-pham/{{$product->p_slug}}">
                                        <div class="card-image">
                                            <img src="{{$product->avatar}}" title="{{$product->name}}" />
                                        </div>
                                    </a>
                                </div>
                                <div class="hover-img">
                                    <a href="/san-pham/{{$product->p_slug}}">
                                        <div class="card-image">
                                            <img src="{{$product->image_product->first()->image}}"
                                                title="{{$product->name}}" />
                                        </div>
                                    </a>
                                </div>

                                <div class="card-content">
                                    <a href="/san-pham/{{$product->p_slug}}">
                                        <h4 class="card-title">{{$product->name}}</h4>
                                    </a>
                                    <p class="description">
                                        {{$product->description}}
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price price-new">{{number_format($product->price)}}</span>
                                        </div>

                                        <div class="stats">

                                            <form action="/gio-hang" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <input type="hidden" name="name" value="{{$product->name}}">
                                                <input type="hidden" name="avatar"
                                                    value="{{json_encode($product->avatar)}}">
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="price" value="{{$product->price}}">


                                                @php
                                                $result= array();
                                                @endphp
                                                @foreach ($product->value as $value)
                                                @php
                                                $attr = $value->attribute->name;
                                                $result[$attr][] = $value->value;
                                                @endphp
                                                @endforeach

                                                @foreach ($result as $key => $properties)
                                                <input type="hidden" name="{{$key}}" value="{{head($properties)}}">
                                                {{-- Head() trả về phần tử đầu tiên của mảng --}}
                                                @endforeach




                                                <button type="submit" rel="tooltip" title=""
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
                    <hr>
                    <div class="col-md-3 col-md-offset-3">
                        {{$products->links()}}
                    </div>
                </div>
            </div>



        </div>
    </div><!-- section -->

</div> <!-- end-main-raised -->
@endsection
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>