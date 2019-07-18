@extends('client.layout.main')
@section('title', 'Home')
@section('content')
<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm mới</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/gucci.jpg') }}" alt="" />
                            </a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="#pablo">Gucci</a>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new"> &euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/dolce.jpg') }}" alt="" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">
                                <h4 class="card-title">Dolce & Gabbana</h4>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/tom-ford.jpg') }}" alt="" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">
                                <h4 class="card-title">Dolce & Gabbana</h4>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- section -->

    <div class="cards">

        <div class="container" style="width: 1530px;">
            <div class="title">
                <h3>Danh mục hot</h3>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="card card-background"
                        style="background-image: url({{ asset('client/img/examples/office1.jpg') }}">

                        <div class="card-content">
                            <h6 class="category text-info">Productivy Apps</h6>
                            <a href="#pablo">
                                <h3 class="card-title">The Best Productivity Apps on Market</h3>
                            </a>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth
                                And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-danger btn-round">
                                <i class="material-icons">subject</i> Xem thêm
                            </a>
                            {{-- <a href="#pablo" class="btn btn-white btn-simple">
                                <i class="material-icons">watch_later</i> Watch Later
                            </a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-background"
                        style="background-image: url({{ asset('client/img/examples/card-blog3.jpg') }}">
                        <div class="card-content">
                            <h6 class="category text-info">Materials</h6>
                            <h3 class="card-title">The Sculpture Where Details Matter</h3>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth
                                And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-danger btn-round">
                                <i class="material-icons">subject</i> Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-background"
                        style="background-image: url({{ asset('client/img/examples/card-blog3.jpg') }}">
                        <div class="card-content">
                            <h6 class="category text-info">Materials</h6>
                            <h3 class="card-title">The Sculpture Where Details Matter</h3>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth
                                And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-danger btn-round">
                                <i class="material-icons">subject</i> Xem thêm
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm nổi bật</h2>
            <div class="row">
                {{-- <div class="col-md-3">
                    <div class="card card-refine card-plain">
                        <div class="card-content">
                            <h4 class="card-title">
                                Refine
                                <button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip"
                                    title="Reset Filter">
                                    <i class="material-icons">cached</i>
                                </button>
                            </h4>
                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h4 class="panel-title">Price Range</h4>
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

                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4 class="panel-title">Clothing</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
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

                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4 class="panel-title">Designer</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel"
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

                            <div class="panel panel-default panel-rose">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h4 class="panel-title">Colour</h4>
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
                </div> --}}

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-1.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Polo Ralph Lauren</h4>
                                    </a>
                                    <p class="description">
                                        Impeccably tailored in Italy from lightweight navy wool.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 800</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-2.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Wooyoungmi</h4>
                                    </a>
                                    <p class="description">
                                        Dark-grey slub wool, pintucked notch lapels.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price">&euro; 555</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-3.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Tom Ford</h4>
                                    </a>
                                    <p class="description">
                                        Immaculate tailoring is TOM FORD's forte.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 879</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>

                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-4.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Thom Sweeney</h4>
                                    </a>
                                    <p class="description">
                                        It's made from lightweight grey wool woven.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 680</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>

                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-5.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Kingsman</h4>
                                    </a>
                                    <p class="description">
                                        Crafted from khaki cotton and fully canvassed.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price"> &euro; 725</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-4">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{asset ('client/img/examples/suit-6.jpg') }}" alt="..." />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <a href="#">
                                        <h4 class="card-title">Boglioli</h4>
                                    </a>
                                    <p class="description">
                                        Masterfully crafted in Northern Italy.
                                    </p>
                                    <div class="footer">
                                        <div class="price-container">
                                            <span class="price">&euro; 699</span>
                                        </div>

                                        <button
                                            class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right"
                                            rel="tooltip" title="Add to cart" data-placement="left">
                                            <i class="material-icons">shopping_cart</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-3 col-md-offset-5">
                            <a href="/san-pham"><button rel="tooltip" class="btn btn-rose btn-round"> Load
                                    more...</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- section -->

    <div class="section">
        <div class="container">
            <h2 class="section-title">Sản phẩm sale</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/gucci.jpg') }}" alt="" />
                            </a>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="#pablo">Gucci</a>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new"> &euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/dolce.jpg') }}" alt="" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">
                                <h4 class="card-title">Dolce & Gabbana</h4>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="{{asset ('client/img/examples/tom-ford.jpg') }}" alt="" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">
                                <h4 class="card-title">Dolce & Gabbana</h4>
                            </h4>
                            <p class="card-description">The structured shoulders and sleek detailing ensure a sharp
                                silhouette. Team it with a silk pocket square and leather loafers.</p>
                            <div class="footer">
                                <div class="price-container">
                                    <span class="price price-old"> &euro;1,430</span>
                                    <span class="price price-new">&euro;743</span>
                                </div>
                                <div class="stats">
                                    <button type="button" rel="tooltip" title=""
                                        class="btn btn-just-icon btn-simple btn-rose"
                                        data-original-title="Saved to cart">
                                        <i class="material-icons">shopping_cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-info text-center">
                        <i class="material-icons">local_shipping</i>
                    </div>
                    <h4 class="info-title text-center">Giao hàng 2 giờ </h4>
                    <p class="text-center">Khi đã là thành viên MrSicy bạn sẽ nhận được gần 200 nghìn mặt hàng
                        trong vòng 2 giờ, không tính phí vận chuyển (không bao gồm phụ phí cồng kềnh) ở tất cả 6
                        thành phố lớn.

                        Chúng tôi cam kết để đảm bảo luôn có đủ hàng cho các mặt hàng ở kho gần bạn nhất, vì vậy
                        chúng tôi có thể gửi nhanh đến địa chỉ của bạn.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-success text-center">
                        <i class="material-icons">verified_user</i>
                    </div>
                    <h4 class="info-title text-center">Đổi trả và hoàn tiền</h4>
                    <p class="text-center">Khi đã trở thành thành viên, bạn có thể đổi trả lại bất kỳ sản phẩm
                        của Spicy trong vòng 30 ngày (*), không gặp rắc rối nào. Bạn chỉ cần liên lạc với
                        SpicyCare để trả hàng. SpicyCare sẽ xác nhận và liên lạc với bạn ngay lập tức</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-rose text-center">
                        <i class="material-icons">favorite</i>
                    </div>
                    <h4 class="info-title text-center">Sản phẩm chất lượng</h4>
                    <p class="text-center">Chúng tôi luôn luôn tự hào đem đến cho khách hàng những sản phẩm chất lượng
                        nhất, giá cả ữu đãi.
                        Được khách hàng trên cả nước tin dùng
                    </p>
                </div>
            </div>

        </div>
    </div>
    
</div>
@endsection