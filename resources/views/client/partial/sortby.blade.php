<div class="col-md-3">
    <div class="card card-refine card-plain">
        <div class="card-content">
            {{-- Lọc theo danh mục --}}
            <div class="panel panel-default panel-rose">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="panel-title">Danh mục</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">

                        @foreach ($parentCate as $category)
                        <div class="checkbox">
                            <label style="font-size: 18px;">
                                <a href="/danh-muc/{{$category->p_cate_slug}}">{{$category->name}}</a>
                            </label>
                            <span style="float: right">({{$category->product->count()}})</span>
                        </div>

                        <ul class="nav" style="padding-left: 30px;">
                            @forelse ($category->childs as $subcate)
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <a href="/danh-muc/{{$subcate->p_cate_slug}}"> > {{$subcate->name}}</a>
                                    </label>
                                    <span style="float: right">({{$subcate->product->count()}})</span>
                                </div>
                            </li>
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
                        </ul>
                        @endforeach


                    </div>
                </div>
            </div>


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
                            <input type="text" name="start" id="price-left" class=" price-left pull-left" data-currency="₫" style="width: 80px; border: none">
                            <input type="text" name="end" id="price-right" class=" price-right pull-right" data-currency="₫" style="width: 80px; border: none">                            
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
                <div class="panel-heading" role="tab" id="heading{{$attr->id}}">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                        href="#collapse{{$attr->id}}" aria-expanded="false" aria-controls="collapse{{$attr->id}}">
                        <h4 class="panel-title">{{$attr->name}}</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>

                <div id="collapse{{$attr->id}}" class="panel-collapse collapse in" role="tabpanel"
                    aria-labelledby="headingThree">
                    <div class="panel-body">
                        @foreach ($attr->value as $value)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{$value->id}}" data-toggle="checkbox">
                                {{$value->value}}
                            </label>
                            <span style="float: right">({{$value->product->count()}})</span>
                        </div>
                        @endforeach
                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div><!-- end card -->
</div>