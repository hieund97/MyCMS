@extends('admin.layout.main')
@section('title', 'Create-Category')
@section('content')
<div class="col-md-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Trả lời email</h4>
            
        </div>
        <div class="card-body">

            {{-- form --}}
            <form action="/admin/categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="bmd-label-floating">
                            <h4>Title</h4>
                        </label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" required style="font-size: 20px;" >
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 padding">
                        <label class="bmd-label-floating">
                            <h4>Message</h4>
                        </label>
                        <div class="form-group">
                            <textarea name="message" cols="105" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="email" value="{{$reply->email}}">
                <button type="submit" class="btn btn-rose pull-right">Send</button>
                <div class="clearfix"></div>
            </form>
            {{-- end form --}}

        </div>
    </div>
</div>
@endsection