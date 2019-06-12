@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">List User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Position</th>
                                        <th>Avatar</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{$user->id}}</td>
                                        <td>{{$user->last_name}} {{$user->first_name}}</td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            <button style="width: 110px;" class="btn btn-{{$user->level==1?'danger':'success'}}">{{$user->level==1?'Admin':'Member'}}</button>
                                        </td>
                                        <td>
                                            <div class="photo">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                                    src="{{$user->avatar&&$user->avatar!==''?$user->avatar:asset ('manage/img/default-avatar.png') }}" />
                                            </div>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                                <a style="color:white;" href="/admin/user/{{$user->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
								{{$users->links()}}
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection