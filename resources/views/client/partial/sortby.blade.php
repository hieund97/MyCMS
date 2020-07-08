<div class="col-md-3">
    <div class="card card-refine card-plain">
        <div class="card-content">

            {{-- Lọc theo danh mục --}}


            @php
            $i = 0;
            @endphp
            @foreach ($parentCate as $category)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$i}}">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"
                        aria-expanded="{{$category->p_cate_slug == $cate->p_cate_slug?'true':'false'}}"
                        aria-controls="collapse{{$i}}">
                        <h4 class="panel-title">
                            {{$category->name}}
                            <i class="material-icons">keyboard_arrow_down</i>
                        </h4>
                    </a>
                </div>
                <div id="collapse{{$i}}"
                    class="panel-collapse collapse {{$category->p_cate_slug == $cate->p_cate_slug?'in':''}}"
                    role="tabpanel" aria-labelledby="heading{{$i}}">
                    @forelse ($category->childs as $subcate)
                    <div class="checkbox">
                        <label style="font-size: 18px;">
                            <a href="/danh-muc/{{$subcate->p_cate_slug}}">{{$subcate->name}}</a>
                        </label>
                        <span style="float: right">({{$subcate->product->count()}})</span>
                    </div>
                    @forelse ($subcate->childs as $childSub)
                    <ul class="nav" style="padding-left: 30px;">
                        <li>
                            <div class="checkbox">
                                <label>
                                    <a href="/danh-muc/{{$childSub->p_cate_slug}}"> > {{$childSub->name}}</a>
                                </label>
                                <span style="float: right">({{$childSub->product->count()}})</span>
                            </div>
                        </li>
                    </ul>
                    @empty

                    @endforelse
                    @empty

                    @endforelse

                </div>
            </div>
            @php
            $i++;
            @endphp
            @endforeach

            {{-- Lọc theo giá sp --}}
            <div class="panel panel-default panel-rose">
                <div class="panel-heading" role="tab" id="headingOne">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <h4 class="panel-title">Lọc theo giá</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>

                <form action="/loc-san-pham" method="GET">
                    @csrf
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body panel-refine">
                            <input type="text" name="start" id="price-left" class=" price-left pull-left"
                                data-currency="₫" style="width: 80px; border: none">
                            <input type="text" name="end" id="price-right" class=" price-right pull-right"
                                data-currency="₫" style="width: 80px; border: none">
                            <div class="clearfix"></div>
                            <div id="sliderRefine" class="slider slider-rose"></div>
                            <button type="submit" class="btn btn-rose pull-right">LỌC</button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Lọc theo thuộc tính --}}
            @foreach ($attribute as $attr)
            <div class="panel panel-default panel-rose">
                <div class="panel-heading" role="tab" id="heading{{$attr->name}}">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse{{$attr->name}}" aria-expanded="false" aria-controls="collapse{{$attr->name}}">
                        <h4 class="panel-title">{{$attr->name}}</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>

                <div id="collapse{{$attr->name}}" class="panel-collapse collapse in" role="tabpanel"
                    aria-labelledby="headingThree">
                    <div class="panel-body">
                        @foreach ($attr->value as $key => $item)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="check_attr" id="attr_tag" value="{{$item->value}}" name="attribute[]" data-toggle="checkbox"> {{$item->value}}
                            </label>
                            <span style="float: right">({{$item->product->count()}})</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- end card -->
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $( document ).ready(function() {
        var array = [];
        $(".check_attr").change(function() {
            $(".check_attr input[type=checkbox]:checked").each(function () {
                array.push($(this).attr("value") )
            })
        })
        console.log(array);
        

    })
</script>