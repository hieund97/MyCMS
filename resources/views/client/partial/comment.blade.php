<div class="section section-comments">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="media-area" style="margin-bottom: 120px">
                @if ($review->count() > 0)
                <h3 class="title text-center">{{$review->count()}} Đánh giá</h3>
                @endif

                @foreach ($review as $comment)
                @if ($comment->user_id == NULL)
                <div class="media ">
                    <a class="pull-left" href="#pablo">
                        <div class="avatar">
                            <img class="media-object" style="height: 65px"
                                src=" {{ asset('client/img/placeholder.jpg') }}" />
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> {{$comment->guest->client_name}}</h4>
                        <span>{{$comment->created_at}}</span>
                        <h6 class="text-muted"></h6>

                        <p style="{{$comment->block == 1? 'color:red;':''}}">
                            {{$comment->block == 1? 'Bình luận đã bị block bởi quản trị viên':$comment->content}}
                        </p>
                        @forelse ($comment->reply as $rep)
                        @if ($rep->user_id == NULL)
                        <div class="media">
                            <a class="pull-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64"
                                        src="{{ asset('client/img/placeholder.jpg')}}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$rep->guest->client_name}} <small>&middot;
                                        {{$rep->created_at}}</small>
                                </h4>

                                <p style="{{$rep->block == 1? 'color:red;':''}}">
                                    {{$rep->block == 1? 'Bình luận đã bị block bởi quản trị viên':$rep->content}}
                                </p>
                            </div>

                        </div>
                        @else
                        <div class="media">
                            <a class="pull-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64" style="height: 64px;"
                                        src="{{ $rep->user->avatar}}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$rep->user->last_name}}
                                    {{$rep->user->first_name}} <small>&middot;
                                        {{$rep->created_at}}</small>
                                </h4>

                                <p>{{$rep->content}}
                                </p>
                            </div>

                        </div>
                        @endif
                        @empty

                        @endforelse

                        @if ($comment->block == 0)
                        @auth
                        <div class="media-body" id="reply">
                            <form action="/review/{{$comment->id}}/memreply" method="POST">
                                @csrf
                                <textarea class="form-control" name="content" placeholder="Viết trả lời bình luận trên"
                                    rows="2"></textarea>
                                <div class="media-footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-wd pull-right">Trả
                                        lời</button>
                                </div>
                            </form>
                            <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                        </div>
                        @endauth

                        @guest
                        <div class="media-body" id="reply">
                            <form action="/review/{{$comment->id}}/guestreply" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group is-empty">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                                required>
                                            <span class="material-input"></span></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group is-empty">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your email" required>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <textarea class="form-control" name="content" placeholder="Viết trả lời bình luận trên"
                                    rows="2"></textarea>
                                <div class="media-footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-wd pull-right">Trả
                                        lời</button>
                                </div>
                            </form>
                        </div>
                        @endguest
                        @endif

                    </div>
                </div>
                @else
                <div class="media">
                    <a class="pull-left" href="#pablo">
                        <div class="avatar">
                            <img class="media-object" style="height: 65px" src="{{ $comment->user->avatar}}" />
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> {{$comment->user->last_name}}
                            {{$comment->user->first_name}}</h4> <span>{{$comment->created_at}}</span>
                        <h6 class="text-muted"></h6>

                        <p style="{{$comment->block == 1? 'color:red;':''}}">
                            {{$comment->block == 1? 'Bình luận đã bị block bởi quản trị viên':$comment->content}}
                        </p>


                        @forelse ($comment->reply as $rep)
                        @if ($rep->user_id == NULL)
                        <div class="media">
                            <a class="pull-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64"
                                        src="{{ asset('client/img/placeholder.jpg')}}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$rep->guest->client_name}} <small>&middot;
                                        {{$rep->created_at}}</small>
                                </h4>

                                <p style="{{$rep->block == 1? 'color:red;':''}}">
                                    {{$rep->block == 1? 'Bình luận đã bị block bởi quản trị viên':$rep->content}}
                                </p>
                            </div>
                        </div>
                        @else
                        <div class="media">
                            <a class="pull-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64" style="height: 64px;"
                                        src="{{ $rep->user->avatar}}">
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$rep->user->last_name}}
                                    {{$rep->user->first_name}} <small>&middot;
                                        {{$rep->created_at}}</small>
                                </h4>

                                <p>{{$rep->content}}
                                </p>
                            </div>
                        </div>
                        @endif
                        @empty

                        @endforelse
                        @if ($comment->block == 0)
                        @auth
                        <div class="media-body" id="reply">
                            <form action="/review/{{$comment->id}}/memreply" method="POST">
                                @csrf
                                <textarea class="form-control" name="content" placeholder="Viết trả lời bình luận trên"
                                    rows="2"></textarea>
                                <div class="media-footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-wd pull-right">Trả
                                        lời</button>
                                </div>
                                <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                            </form>
                        </div>
                        @endauth
                        @guest
                        <div class="media-body" id="reply">
                            <form action="/review/{{$comment->id}}/guestreply" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group is-empty">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                                required>
                                            <span class="material-input"></span></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group is-empty">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your email" required>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <textarea class="form-control" name="content" placeholder="Viết trả lời bình luận trên"
                                    rows="2"></textarea>
                                <div class="media-footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-wd pull-right">Trả
                                        lời</button>
                                </div>
                            </form>
                        </div>
                        @endguest
                        @endif

                    </div>
                </div>
                <hr>
                @endif
                @endforeach
            </div>

            <h3 class="title text-center">Đánh giá sản phẩm</h3>
            @auth
            <form action="/review/member" method="POST">
                @csrf
                <div class="media media-post">
                    <a class="pull-left author" href="#pablo">
                        <div class="avatar">
                            <img class="media-object" style="height: 65px;" alt="64x64"
                                src="{{ auth()->user()->avatar }}">
                        </div>
                    </a>

                    <div class="media-body">
                        <textarea class="form-control" name="content" placeholder="Viết bình luận của bạn"
                            rows="6"></textarea>
                        <div class="media-footer">
                            <button type="submit" class="btn btn-primary btn-round btn-wd pull-right">Viết
                                Bình luận</button>
                        </div>
                    </div>
                    <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                    <input type="hidden" name="productid" value="{{$item->id}}">
                </div> <!-- end media-post -->
                @endauth
            </form>

            @guest
            <div class="media media-post">
                <a class="pull-left author" href="#pablo">
                    <div class="avatar">
                        <img class="media-object" alt="64x64" src=" {{ asset('client/img/placeholder.jpg') }}">
                    </div>
                </a>
                <div class="media-body">
                    <form class="form" action="/review/guest" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group is-empty">
                                    <input type="email" class="form-control" name="email" placeholder="Your email"
                                        required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="form-group is-empty"><textarea class="form-control"
                                placeholder="Write some nice stuff or nothing..." rows="6"
                                name="content"></textarea><span class="material-input"></span></div>
                        <div class="media-footer">
                            <h6>Sign in with</h6>
                            <a href="" class="btn btn-just-icon btn-round btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-just-icon btn-round btn-facebook">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="" class="btn btn-just-icon btn-round btn-google">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <input type="hidden" name="productid" value="{{$item->id}}">
                            <button type="submit" class="btn btn-primary pull-right">Bình luận</button>
                        </div>
                    </form>

                </div><!-- end media-body -->

            </div>
            @endguest


        </div>
    </div>
</div>