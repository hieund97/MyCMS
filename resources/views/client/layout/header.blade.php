<!--     *********     HEADER 3      *********      -->

<div class="header-3">
    
    {{-- navbar --}}
    {{-- @include('client.layout.navbar') --}}
    {{-- End Navbar --}}

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators" style="top: 830px;">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="page-header" style="background-image: url({{ asset('client/img/dg1.jpg')}});"></div>
                </div>
                <div class="item">
                    <div class="page-header" style="background-image: url({{ asset('client/img/dg2.jpg')}});"></div>
                </div>

                <div class="item">
                    <div class="page-header" style="background-image: url({{ asset('client/img/dg3.jpg')}});"></div>
                </div>
                <div class="item">
                    <div class="page-header" style="background-image: url({{ asset('client/img/dg4.jpg')}});"></div>
                </div>
                <div class="item">
                    <div class="page-header" style="background-image: url({{ asset('client/img/dg5.jpg')}});"></div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
    </div>

</div>

<!--     *********    END HEADER 3      *********      -->