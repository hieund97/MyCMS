@extends('client.layout.main')
@section('title', $blog->title)
@section('content')
@include('client.partial.header')


<div class="main main-raised">
    <div class="container">
        <div class="section section-text">
            <div class="row">
                <div class="col-md-12" style="text-align: justify">
                    <h3 class="title">{{$blog->title}}</h3>
                    {!!$blog->content!!}
                </div>
            </div>

            <div class="section section-blog-info">
                <div class="row">
                    <hr />
                    <h3>Tác giả: {{$blog->users->last_name}} {{$blog->users->first_name}}</h3>
                </div>
            </div>

            {{-- @include('client.partial.comment') --}}

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <h2 class="title text-center">Similar Stories</h2>
                    <br />
                    <div class="row">

                        @foreach ($randomBlog as $random)
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <a href="/bai-viet/{{$random->slug}}">
                                    <div class="card-image">
                                        <img class="img img-raised" src=" {{$random->thumbnail}}" />
                                    </div>
                                </a>
                                <div class="card-content">
                                    <h6 class="category text-info">{{$random->blog_category['name']}}</h6>
                                    <h4 class="card-title">
                                        <a href="/bai-viet/{{$random->slug}}">{{$random->title}}</a>
                                    </h4>
                                    <p class="card-description"> {{$random->short_decription}} <b><a
                                                href="/bai-viet/{{$random->slug}}"> Read More </a></p></b>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection