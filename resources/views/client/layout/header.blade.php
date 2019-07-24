<!--     *********     HEADER 3      *********      -->

<div class="header-3">


    {{-- navbar --}}
    {{-- @include('client.layout.navbar') --}}
    {{-- End Navbar --}}

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <div class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators" style="top: 790px;">
                @php
                $i=0;
                @endphp
                @foreach ($activeSlider as $slider)
                <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class=" {{$i == 0? 'active' : ''}}">
                </li>
                @php
                $i=$i+1;
                @endphp
                @endforeach

                
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @php
                $i=0;
                @endphp
                @foreach ($activeSlider as $slider)
                <div class="item {{$i == 0? 'active' : ''}}">
                    <div class="page-header" style="background-image: url({{ $slider->image}});"></div>
                </div>
                @php
                $i=1;
                @endphp
                @endforeach



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