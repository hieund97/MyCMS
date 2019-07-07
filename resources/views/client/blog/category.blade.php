@extends('client.layout.main')
@section('title', 'Blogs')
@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset ('client/img/bg10.jpg')}} ); height: 200px;">   
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section" style="padding-bottom: 0px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-2 text-center">
                    <ul class="nav nav-pills nav-pills-primary">
                        <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
                        @foreach ($blog_categories as $blog_category)
                        <li><a href="#pill2" data-toggle="tab">{{$blog_category->name}}</a></li>
                        @endforeach

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

            <!--     *********     BLOGS 3      *********      -->

            <div class="blogs-3" style="padding-bottom: 0px; padding-top: 0px;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            
                            {{-- @foreach ($blog as $blog) --}}
                            <div class="card card-plain card-blog">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-image">
                                                <a href=""><img class="img img-raised"  src=" " /></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="category text-info">
                                                
                                            </h6>
                                            <h3 class="card-title">
                                            <a href=""></a>
                                            </h3>
                                            <p class="card-description"> <a href=""><b> Read More</b> </a>
                                            </p>
                                            <p class="author">
                                                by <a href="#pablo"><b></b></a>,
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endforeach --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="text-center">
            {{$blogs->links()}}
        </div> --}}
        <!--     *********   END  BLOGS 3      *********      -->



        <div class="section" style="padding-top: 30px;">
            <h2 class="title text-center">Có thể bạn quan tâm</h2>
            <br />
            <div class="row">
                {{-- @foreach ($hots as $hot) --}}
                <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="">
                                    <img class="img img-raised" src=" " />
                                </a>
                            </div>
    
                            <div class="card-content">
                                <h6 class="category text-info"></h6>
                                <h4 class="card-title">
                                    <a href=""></a>
                                </h4>
                                <p class="card-description">  <b><a href=""> Read More </a></p></b>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}
                

            </div>

        </div>
    </div>
</div>
@endsection