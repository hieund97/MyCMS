@extends('client.layout.main')
@section('title', 'Bài viết')
@section('content')


@include('client.partial.header')


<div class="main main-raised">
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-md-10 col-md-offset-2 text-center">
                    <ul class="nav nav-pills nav-pills-primary">
                        <li class="active"><a href="#pillall" data-toggle="tab">All</a></li>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($blog_categories as $blog_category)
                        <li><a class="{{$i==0 ? 'active':''}}" href="#pill{{$blog_category->id}}"
                                data-toggle="tab">{{$blog_category->name}}</a></li>
                        @php
                        $i =1;
                        @endphp
                        @endforeach
                    </ul>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="pillall">
                        @foreach ($blogs as $post)
                        <div class="blogs-3" style="padding-bottom: 0px; padding-top: 0px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="card card-plain card-blog">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-image">
                                                        <a href="/bai-viet/{{$post->slug}}"><img class="img img-raised"
                                                                src=" {{$post->thumbnail&&$post->thumbnail!==''?$post->thumbnail:asset ('client/img/noimage.png') }}" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="category text-info">
                                                            {{$post->blog_category->name}}
                                                    </h6>
                                                    <h3 class="card-title">
                                                        <a href="/bai-viet/{{$post->slug}}">{{$post->title}}</a>
                                                    </h3>
                                                    <p class="card-description"> {{$post->short_decription}} <a
                                                            href="/bai-viet/{{$post->slug}}"><b> Read More</b> </a>
                                                    </p>
                                                    <p class="author">
                                                        by <a href="#pablo"><b>{{$post->users['last_name']}}
                                                                {{$post->users['first_name']}}</b></a>,
                                                        {{$post->updated_at}}
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="text-center">
                            {{$blogs->links()}}
                        </div>
                    </div>
                    @foreach ($blog_categories as $blog_category)
                    <div class="tab-pane" id="pill{{$blog_category->id}}">
                        @foreach ($blog_category->blog as $blog)
                        <div class="blogs-3" style="padding-bottom: 0px; padding-top: 0px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="card card-plain card-blog">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-image">
                                                        <a href="/blogs/{{$blog->slug}}"><img class="img img-raised "
                                                                src=" {{$blog->thumbnail&&$blog->thumbnail!==''?$blog->thumbnail:asset ('manage/img/noimage.png') }}" /></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="category text-info">
                                                        {{$blog_category->name}}
                                                    </h6>
                                                    <h3 class="card-title">
                                                        <a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a>
                                                    </h3>
                                                    <p class="card-description"> {{$blog->short_decription}} <a
                                                            href="/blogs/{{$blog->slug}}"><b> Read More</b> </a>
                                                    </p>
                                                    <p class="author">
                                                        by <a href="#pablo"><b>{{$blog->users['last_name']}}
                                                                {{$blog->users['first_name']}}</b></a>,
                                                        {{$blog->updated_at}}
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                        
                    </div>
                    @endforeach
                </div>
                <div class="section" style="padding-top: 30px;">
                    <h2 class="title text-center">Có thể bạn quan tâm</h2>
                    <br />
                    <div class="row">
                        @foreach ($hots as $hot)
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a href="/bai-viet/{{$hot->slug}}">
                                        <img class="img img-raised" src=" {{$hot->thumbnail}}" />
                                    </a>
                                </div>

                                <div class="card-content">
                                    <h6 class="category text-info">{{$hot->blog_category['name']}}</h6>
                                    <h4 class="card-title">
                                        <a href="/bai-viet/{{$hot->slug}}">{{$hot->title}}</a>
                                    </h4>
                                    <p class="card-description"> {{$hot->short_decription}} <b><a
                                                href="/bai-viet/{{$hot->slug}}">
                                                Read More </a></p></b>
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