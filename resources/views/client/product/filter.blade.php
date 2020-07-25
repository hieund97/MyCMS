@extends('client.layout.main')
@section('title', 'Sản phẩm')
@section('content')

@include('client.partial.header')


<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title text-center">Tìm thấy {{$filterProducts->count()}} sản phẩm</h2>
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby2')

                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">
                        @foreach ($filterProducts as $product)
                        <?php
                            $listType = implode(',', \App\Models\ValueProduct::with('attribute')->where('product_id', $product->id)->get()->pluck('attribute.id')->toArray());
                        ?>
                        <div class="col-md-3 list-category" data-list = '{{$listType}}'>
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
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right btn__primary btn-cart"
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
                    <hr>
                    {{-- <div class="col-md-3 col-md-offset-3">
                        {{$filterProducts->links()}}
                </div> --}}
            </div>
        </div>



    </div>
</div><!-- section -->

</div> <!-- end-main-raised -->
@endsection
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    var checkerCategoryViet = [];
    $('input[name="attr_tag"]').click(function(){
        var check = $(this).val();
        console.log(check);
        if ($(this).is(":checked")) {
            checkerCategoryViet.push(check);
        } else {
            var checkerExist = checkerCategoryViet.indexOf(check);
            if (checkerExist > -1) {
                checkerCategoryViet.splice(checkerExist, 1);
            }
        }
        if (checkerCategoryViet.length == 0) {
            $(".list-category").show();
            return;
        }
        $(".list-category").each(function() {;
            if( $(this).data('list').split(',').some(r=> checkerCategoryViet.includes(r)) ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });  
</script>