@extends('admin.layout.main')
@section('title', 'User')
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
                        <h4 class="card-title">Sửa giá trị</h4>
                    </div>
                    <div class="card-body">

                        {{-- form value --}}
                        <form action="/admin/value/{{$value->id}}/edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group">
                                    <select class="selectpicker" name="attr" data-size="7"
                                        data-style="btn btn-primary btn-round" title="Chọn thuộc tính">
                                        @foreach ($attribute as $attr)
                                        <option {{$value->attr_id === $attr->id?'selected':''}} value="{{$attr->id}}">{{$attr->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị :</h4>
                                <input type="text" style="margin-top: 7px;margin-left: 10px;" name="value" class="form-control" value="{{$value->value}}" >
                            </div>
                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-rose pull-right">Sửa giá trị</button>
                            </div>
                            <div class="clearfix"></div>                            
                        </form>
                        {{-- end form --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection