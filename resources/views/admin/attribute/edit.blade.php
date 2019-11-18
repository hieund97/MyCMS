@extends('admin.layout.main')
@section('title', 'Attribute')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Sửa thuộc tính</h4>
                    </div>
                    <div class="card-body">

                        {{-- form Attribute --}}
                        <form action="/admin/attribute/{{$attr->id}}/edit" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên thuộc tính</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" name="attribute" class="form-control" value="{{$attr->name}}">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-rose pull-right">Sửa thuộc tính</button>
                            </div>
                            <div class="clearfix"></div>                            
                        </form>
                        {{-- end form --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection