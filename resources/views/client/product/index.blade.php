@extends('client.layout.main')
@section('title', 'Sản phẩm')
@section('content')

@include('client.partial.header')

<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-refine card-plain">
                        <div class="card-content">

                            {{-- Lọc theo giá sp --}}
                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h4 class="panel-title">Lọc theo giá</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body panel-refine">
                                        <span id="price-left" class="price-left pull-left"
                                            data-currency="&euro;">100</span>
                                        <span id="price-right" class="price-right pull-right"
                                            data-currency="&euro;">850</span>
                                        <div class="clearfix"></div>
                                        <div id="sliderRefine" class="slider slider-rose"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Lọc theo danh mục --}}
                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4 class="panel-title">Danh mục</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                Blazers
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Casual Shirts
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Formal Shirts
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Jeans
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Polos
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Pyjamas
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Shorts
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Trousers
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Lọc theo màu sắc --}}
                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4 class="panel-title">Màu sắc</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                All
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Polo Ralph Lauren
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Wooyoungmi
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Alexander McQueen
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Tom Ford
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                AMI
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Berena
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Thom Sweeney
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Burberry Prorsum
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Calvin Klein
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Kingsman
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Club Monaco
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Dolce & Gabbana
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Gucci
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Biglioli
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Lanvin
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Loro Piana
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Massimo Alba
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Lọc theo size --}}
                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h4 class="panel-title">Kích thước</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                All
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Black
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Blue
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Brown
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Gray
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Green
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Neutrals
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Purple
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>

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

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Thêm vào giỏ hàng" data-placement="left"
                                            style="position: relative;">
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
                {{$products->links()}}
            </div>


        </div>
    </div><!-- section -->

</div> <!-- end-main-raised -->
@endsection