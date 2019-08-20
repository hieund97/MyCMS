@extends('client.layout.main')
@section('title', 'Tìm kiếm sản phẩm')
@section('content')

@include('client.partial.header')

<div class="main main-raised">
    <div class="section" style="padding-bottom:0px;">

    </div><!-- section -->

    <div class="section" style="padding-top: 0px;">
        <div class="container">
            <h2 class="section-title">Tìm kiếm sản phẩm</h2>
            <span>Tìm thấy {{$searchProduct->count()}} sản phẩm</span>

            <div class="row">
                @include('client.partial.sortby')
                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">


                        @forelse ($searchProduct as $search)
                        <div class="col-md-3 ">
                            <div class="card card-product card-plain no-shadow main-img" data-colored-shadow="false">
                                <div>
                                    <a href="/san-pham/{{$search->p_slug}}">
                                        <div class="card-image">
                                            <img src="{{$search->avatar}}" title="{{$search->name}}" />
                                        </div>
                                    </a>
                                </div>
                                <div class="hover-img">
                                    <a href="/san-pham/">
                                        <div class="card-image ">
                                            <img src="{{$search->image_product->first()->image}}" alt="..." />
                                        </div>
                                    </a>
                                </div>

                                <div class="card-content">
                                    <a href="/san-pham/">
                                        <h4 class="card-title">{{$search->name}}</h4>
                                    </a>
                                    <p class="description">
                                        {{$search->description}}
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span
                                                class="price {{$search->quantity == 0 ? 'price-sold-out': 'price-new'}}">{{$search->quantity == 0? 'Tạm hết hàng' : number_format($search->price). '₫'}}</span>
                                        </div>

                                        <div class="stats">


                                            <form action="/gio-hang" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{$search->id}}">
                                                <input type="hidden" name="name" id="name" value="{{$search->name}}">
                                                <input type="hidden" name="avatar" id="avatar"
                                                    value="{{json_encode($search->avatar)}}">
                                                <input type="hidden" name="quantity" value="1" id="quantity">
                                                <input type="hidden" name="price" id="price" value="{{$search->price}}">


                                                @php
                                                $result= array();
                                                @endphp
                                                @foreach ($search->value as $value)
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
                                                <button {{$search->quantity == 0? 'disabled' : NULL}} type="submit"
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
                        <span class="text-danger">Không tìm thấy sản phẩm nào</span>
                        @endforelse


                    </div>
                    <hr>
                    <div class="col-md-3 col-md-offset-3">
                    </div>
                </div>
            </div>

        </div>
        <!-- section -->
    </div> <!-- end-main-raised -->
</div>
@include('client.partial.tag')
@endsection