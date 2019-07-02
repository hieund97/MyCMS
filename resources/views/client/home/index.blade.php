@extends('client.layout.main')
@section('title', 'Home')    
@section('content')
<div class="main main-raised">
    <div class="section">
        <div class="container">
            <h2 class="section-title">Latest Offers</h2>
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
                                        data-original-title="Saved to Wishlist">
                                        <i class="material-icons">favorite</i>
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
                                        data-original-title="Saved to Wishlist">
                                        <i class="material-icons">favorite</i>
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
                                        data-original-title="Saved to Wishlist">
                                        <i class="material-icons">favorite</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- section -->

    <div class="section">
        <div class="container">
            <h2 class="section-title">Find what you need</h2>
            <div class="row">
                <div class="col-md-3">
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
                </div>

                <div class="col-md-9">
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
                                            rel="tooltip" title="Remove from wishlist" data-placement="left">
                                            <i class="material-icons">favorite</i>
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
                                            rel="tooltip" title="Add to wishlist" data-placement="left">
                                            <i class="material-icons">favorite_border</i>
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
                                            rel="tooltip" title="Add to wishlist" data-placement="left">
                                            <i class="material-icons">favorite_border</i>
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
                                            rel="tooltip" title="Add to wishlist" data-placement="left">
                                            <i class="material-icons">favorite_border</i>
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
                                            rel="tooltip" title="Remove from wishlist" data-placement="left">
                                            <i class="material-icons">favorite</i>
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
                                            rel="tooltip" title="Add to wishlist" data-placement="left">
                                            <i class="material-icons">favorite_border</i>
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div>
                        <div class="col-md-3 col-md-offset-4">
                            <button rel="tooltip" class="btn btn-rose btn-round">Load more...</button>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="section">
                    <h2 class="title text-center">You may also be interested in</h2>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="{{ asset('client/img/bg5.jpg') }}" />
                                    </a>
                                </div>
    
                                <div class="card-content">
                                    <h6 class="category text-info">Enterprise</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="{{ asset ('client/img/examples/blog5.jpg') }}" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h6 class="category text-success">
                                        Startups
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Lyft launching cross-platform service this week</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised" src="{{ asset ('client/img/examples/blog6.jpg') }}" />
                                    </a>
                                </div>
    
                                <div class="card-content">
                                    <h6 class="category text-danger">
                                        <i class="material-icons">trending_up</i> Enterprise
                                    </h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">6 insights into the French Fashion landscape</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>

        </div>
    </div><!-- section -->

</div>
@endsection