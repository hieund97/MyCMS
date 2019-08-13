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
                        <div class="checkbox">
                            <label style="font-size: 20px;">
                                <input type="checkbox" value="" data-toggle="checkbox">
                                Áo
                            </label>
                            <span style="float: right">(100)</span>
                            <div class="checkbox" style="padding-left: 30px;">
                                <label>
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                    > Áo phông
                                </label>
                                <span style="float: right">(100)</span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label style="font-size: 20px;">
                                <input type="checkbox" value="" data-toggle="checkbox">
                                Quần
                            </label>
                            <span style="float: right">(100)</span>
                            <div class="checkbox" style="padding-left: 30px;">
                                <label>
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                    > Quần jean
                                </label>
                                <span style="float: right">(100)</span>
                            </div>
                        </div>
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
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body panel-refine">
                        <span id="price-left" class="price-left pull-left" data-currency="&euro;">100</span>
                        <span id="price-right" class="price-right pull-right" data-currency="&euro;">850</span>
                        <div class="clearfix"></div>
                        <div id="sliderRefine" class="slider slider-rose"></div>
                        <button class="btn btn-rose pull-right">LỌC</button>
                    </div>
                </div>                
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