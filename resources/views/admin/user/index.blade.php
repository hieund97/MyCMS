@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    @if (session()->has('create_user'))
                    <div class="alert alert-success">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">check</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>THÊM THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
                        </div>
                    </div>                        
                    @endif
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
                                            <button style="width: 110px;"
                                                class="btn btn-{{$user->level==1?'danger':'success'}}">{{$user->level==1?'Admin':'Member'}}</button>
                                        </td>
                                        <td>
                                            <div class="photo">
                                                <img style=" width: 50px; height: 50px; border-radius: 25px;"
                                            src="{{$user->avatar&&$user->avatar!==''?$user->avatar:asset ('manage/img/default-avatar.png') }}" />
                                            </div>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round" style="padding-top: 25px; padding-left: 7px; padding-right: 7px;">
                                                <a style="color:white;" href="/admin/user/{{$user->id}}/edit"><i
                                                        class="material-icons">edit</i></a>
                                            </button>
                                            <a href="#" rel="tooltip" data-id="{{$user->id}}"
                                                    class="btn btn-danger btn-round btn-del" style="padding-top: 25px; padding-left: 7px; padding-right: 7px;">
                                                    <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{$users->links()}}
                                <a href="/admin/user/create" style="float:right;" class="btn btn-primary">Add User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.btn-del').click(function(e)){
            e.preventDefault();
            let userId = $(this).attr('data-id')
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            })
        }
    });
</script>