@extends('client.layout.main')
@section('title', 'Danh mục')
@section('content')

@include('client.partial.header')


<div class="main main-raised">
    <div class="section" style="padding-bottom:0px;">
        <div class="container">
            <h2 class="section-title text-center">Danh mục</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="nav nav-pills nav-pills-primary">
                        <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
                        <li><a href="#pill2" data-toggle="tab">World</a></li>
                        <li><a href="#pill3" data-toggle="tab">Arts</a></li>
                        <li><a href="#pill4" data-toggle="tab">Tech</a></li>
                        <li><a href="#pill5" data-toggle="tab">Business</a></li>
                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active" id="pill1">

                        </div>
                        <div class="tab-pane" id="pill2">

                        </div>
                        <div class="tab-pane" id="pill3">

                        </div>
                        <div class="tab-pane" id="pill4">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- section -->

    <div class="section" style="padding-top: 0px;">
        <div class="container">
            <h2 class="section-title">Tùy chọn</h2>
            <div class="row">
                @include('client.partial.sortby')


                <div class="col-md-9">
                    <div class="row" style="display: flex; flex-wrap:wrap;">
                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-1.jpg') }}" alt="..." />
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
                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-2.jpg') }}" alt="..." />
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
                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-3.jpg') }}" alt="..." />
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

                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-4.jpg') }}" alt="..." />
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

                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-5.jpg') }}" alt="..." />
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
                        <div class="col-md-3">
                            <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                <div class="card-image">
                                    <a href="#">
                                        <img src="{{ asset ('client/img/examples/suit-6.jpg') }}" alt="..." />
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


        </div>
        <!-- section -->

    </div> <!-- end-main-raised -->
</div>
@endsection