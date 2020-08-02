@extends('client.layout.main')
@section('title', 'Danh mục')
@section('content')

@include('client.partial.header')

<div class="main main-raised">
    <div class="section" style="padding-bottom:0px;">
        <div class="container">
            <h2 class="section-title text-center">{{$trend->name}}</h2>
            
        </div>
    </div><!-- section -->

    <div class="section" style="padding-top: 0px;">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby2')
                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">


                        @forelse ($trendProduct as $item)
                        <div class="col-md-3 ">
                            <div class="card card-product card-plain no-shadow main-img" data-colored-shadow="false">
                                <div>
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <div class="card-image">
                                            <img src="{{$item->avatar}}" alt="..." />
                                        </div>
                                    </a>
                                </div>
                                {{-- <div class="hover-img">
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <div class="card-image ">
                                            <img src="{{$item->image_product->first()}}" alt="..." />
                                        </div>
                                    </a>
                                </div> --}}

                                <div class="card-content">
                                    <a href="/san-pham/{{$item->p_slug}}">
                                        <h4 class="card-title">{{$item->name}}</h4>
                                    </a>
                                    <p class="description">
                                        {{$item->description}}
                                    </p>
                                    <form action="/gio-hang" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{$item->id}}">
                                        <input type="hidden" name="name" id="name" value="{{$item->name}}">
                                        <input type="hidden" name="avatar" id="avatar"
                                            value="{{json_encode($item->avatar)}}">
                                        <input type="hidden" name="quantity" value="1" id="quantity">
                                        <input type="hidden" name="price" id="price" value="{{$item->price}}">


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
                                        <input type="hidden" id="{{$key}}" name="{{$key}}"
                                            value="{{head($properties)}}">
                                        {{-- Head() trả về phần tử đầu tiên của mảng --}}
                                        <span>{{$key}}:{{head($properties)}},</span>
                                        @endforeach
                                        <div class="footer">
                                            <div class="price-container">
                                                <span
                                                class="price {{checkQuantityProduct($item->id) == false ? 'price-sold-out': 'price-new'}}">{{checkQuantityProduct($item->id) == false? 'Tạm hết hàng' : number_format($item->price). '₫'}}</span>
                                            </div>

                                            <div class="stats">


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
                    </div> <!-- end card -->
                </div>
                @empty
                <div class="col-md-3 ">
                    <p class="text-center">Không có sản phẩm nào</p>
                </div>
                @endforelse


            </div>
            <hr>
            <div class="col-md-3 col-md-offset-3">
                {{$trendProduct->links()}}
            </div>
        </div>
    </div>

</div>
<!-- section -->
</div> <!-- end-main-raised -->
</div>
@include('client.partial.tag')
@endsection