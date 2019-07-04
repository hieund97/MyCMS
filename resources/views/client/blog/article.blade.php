@extends('client.layout.main')
@section('title', 'Blogs')
@section('content')
<div class="page-header header-filter" data-parallax="true"
    style="background-image: url({{ asset ('client/img/bg5.jpg') }} ); height: 200px;">

</div>

<div class="main main-raised">
    <div class="container">
        <div class="section section-text">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="title">{{$blog->title}}</h3>
                    {!!$blog->content!!}
                </div>
            </div>

            <div class="section section-blog-info">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#pablo" class="btn btn-google btn-round pull-right">
                                    <i class="fa fa-google"></i> 232
                                </a>
                                <a href="#pablo" class="btn btn-twitter btn-round pull-right">
                                    <i class="fa fa-twitter"></i> 910
                                </a>
                                <a href="#pablo" class="btn btn-facebook btn-round pull-right">
                                    <i class="fa fa-facebook-square"></i> 872
                                </a>

                            </div>
                        </div>

                        <hr />

                        <div class="card card-profile card-plain">
                            <div class="row">
                                <h3>Tác giả</h3>
                                <div class="col-md-2">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img"
                                                src="{{$blog->users['avatar']&&$blog->users['avatar']!==''?$blog->users['avatar']:asset ('manage/img/default-avatar.png') }}">
                                        </a>
                                        <div class="ripple-container"></div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <h4 class="card-title">{{$blog->users['last_name']}} {{$blog->users['first_name']}}
                                    </h4>
                                    <p class="description">{{$blog->users['about_me']}}</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section section-comments">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="media-area">
                            <h3 class="title text-center">3 Comments</h3>
                            <div class="media">
                                <a class="pull-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object"
                                            src="{{ asset ('client/img/faces/card-profile4-square.jpg') }}" />
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Tina Andrew <small>&middot; 7 minutes ago</small></h4>
                                    <h6 class="text-muted"></h6>

                                    <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the
                                        country. Panda! Don't be scared of the truth because we need to restart the
                                        human foundation in truth I stand with the most humility. We are so blessed!</p>

                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip"
                                            title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 243
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" alt="Tim Picture"
                                            src="{{ asset ('client/img/faces/card-profile1-square.jpg') }}">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Camber <small>&middot; Yesterday</small></h4>

                                    <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff
                                        coming soon. We will keep you posted for the latest news.</p>
                                    <p> Don't forget, You're Awesome!</p>

                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-simple pull-right" rel="tooltip"
                                            title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                            <i class="material-icons">favorite</i> 25
                                        </a>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#pablo">
                                            <div class="avatar">
                                                <img class="media-object" alt="64x64"
                                                    src="{{ asset ('client/img/faces/card-profile4-square.jpg') }}">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Tina Andrew <small>&middot; 12 Hours Ago</small>
                                            </h4>

                                            <p>Hello guys, nice to have you on the platform! There will be a lot of
                                                great stuff coming soon. We will keep you posted for the latest news.
                                            </p>
                                            <p> Don't forget, You're Awesome!</p>

                                            <div class="media-footer">
                                                <a href="#pablo" class="btn btn-primary btn-simple pull-right"
                                                    rel="tooltip" title="Reply to Comment">
                                                    <i class="material-icons">reply</i> Reply
                                                </a>
                                                <a href="#pablo" class="btn btn-default btn-simple pull-right">
                                                    <i class="material-icons">favorite</i> 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h3 class="title text-center">Post your comment</h3>
                        <div class="media media-post">
                            <a class="pull-left author" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64"
                                        src="{{ asset ('client/img/faces/card-profile6-square.jpg') }}">
                                </div>
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Write some nice stuff or nothing..."
                                    rows="6"></textarea>
                                <div class="media-footer">
                                    <a href="#pablo" class="btn btn-primary btn-round btn-wd pull-right">Post
                                        Comment</a>
                                </div>
                            </div>
                        </div> <!-- end media-post -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <h2 class="title text-center">Similar Stories</h2>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised"
                                            src="{{ asset ('client/img/examples/blog6.jpg') }} " />
                                    </a>
                                </div>

                                <div class="card-content">
                                    <h6 class="category text-info">Enterprise</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                    </h4>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It
                                        was until recently a traditional boxed software company selling licenses.<a
                                            href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised"
                                            src="{{ asset ('client/img/examples/blog8.jpg') }} " />
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
                                        Like so many organizations these days, Autodesk is a company in transition. It
                                        was until recently a traditional boxed software company selling licenses.<a
                                            href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised"
                                            src="{{ asset ('client/img/examples/blog7.jpg') }} " />
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
                                        Like so many organizations these days, Autodesk is a company in transition. It
                                        was until recently a traditional boxed software company selling licenses.<a
                                            href="#pablo"> Read More </a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection