@extends('client.layout.main')
@section('title', 'Sản phẩm')
@section('content')

@include('client.partial.header')


<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby2')

                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">
                        @foreach ($products as $product)
                        <?php
                            $listType = implode(',', \App\Models\ValueProduct::with('attribute')->where('product_id', $product->id)->get()->pluck('attribute.id')->toArray());
                        ?>
                        <div class="col-md-3 main-img list-category" data-list = '{{$listType}}'>
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
                                            <span class="price {{checkQuantityProduct($product->id) == false ? 'price-sold-out': 'price-new'}}">{{checkQuantityProduct($product->id) == false? 'Tạm hết hàng' : number_format($product->price). '₫'}}</span>
                                        </div>

                                        <div class="stats">

                                            <form action="/gio-hang" method="POST">
                                                @csrf
                                                <input type="hidden" id="id" name="id" value="{{$product->id}}">
                                                <input type="hidden" id="name" name="name" value="{{$product->name}}">
                                                <input type="hidden" name="avatar" id="avatar"
                                                    value="{{json_encode($product->avatar)}}">
                                                <input type="hidden" id="quantity" name="quantity" value="1">
                                                <input type="hidden" id="price" name="price"
                                                    value="{{$product->price}}">


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
                                                <input type="hidden" id="{{$key}}" name="{{$key}}"
                                                    value="{{head($properties)}}">
                                                {{-- Head() trả về phần tử đầu tiên của mảng --}}
                                                @endforeach




                                                <button {{checkQuantityProduct($product->id) == false? 'disabled' : NULL}} type="submit" rel="tooltip" title=""
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
