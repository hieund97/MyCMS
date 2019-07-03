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
                            
                            @foreach ($blogs as $blog)
                            <div class="card card-plain card-blog">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-image">
                                                <a href=""><img class="img img-raised" src=" {{$blog->thumbnail }}" /></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="category text-info">
                                                {{$blog->blog_category['name']}}
                                            </h6>
                                            <h3 class="card-title">
                                            <a href="#pablo">{{$blog->title}}</a>
                                            </h3>
                                            <p class="card-description"> {{$blog->short_decription}} <a href="#pablo"><b> Read More</b> </a>
                                            </p>
                                            <p class="author">
                                                by <a href="#pablo"><b>{{$blog->users['last_name']}} {{$blog->users['first_name']}}</b></a>, {{$blog->updated_at}}
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <div class="text-center">
            {{$blogs->links()}}
        </div>
        <!--     *********   END  BLOGS 3      *********      -->



        <div class="section" style="padding-top: 30px;">
            <h2 class="title text-center">Có thể bạn quan tâm</h2>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img img-raised" src=" {{ asset ('client/img/bg5.jpg') }}" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-info">Enterprise</h6>
                            <h4 class="card-title">
                                <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until
                                recently a traditional boxed software company selling licenses.<a href="#pablo"> Read
                                    More </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img img-raised" src=" {{ asset ('client/img/examples/blog5.jpg') }}" />
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
                                Like so many organizations these days, Autodesk is a company in transition. It was until
                                recently a traditional boxed software company selling licenses.<a href="#pablo"> Read
                                    More </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img img-raised" src=" {{ asset ('client/img/examples/blog6.jpg') }}" />
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
                                Like so many organizations these days, Autodesk is a company in transition. It was until
                                recently a traditional boxed software company selling licenses.<a href="#pablo"> Read
                                    More </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection