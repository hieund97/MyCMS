@extends('admin.layout.main')
@section('title', 'Add Image Product')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="float:left;">
                @if (session()->has('create_product'))
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
                        <h2 class="card-title">Ảnh cho sản phẩm: <span
                                style="color:darkmagenta">{{$product->name}}</span> </h2>
                    </div>
                    @if ($errors->any())
                    <div style="margin-left: 20px; margin-right: 20px" class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>LỖI</b> BẠN CHƯA UPLOAD ĐỦ ẢNH
                        </div>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="/admin/products/image/add" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 56px;">#</th>
                                            <th style="width: 216px;">Ảnh chính</th>
                                            <th style="width: 616px;" class="text-center">Các ảnh phụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{$product->id}}</td>
                                            <td style="border-right: solid 1px lightgray;">
                                                <div class="card card-profile" style="width: 210px;">
                                                    <div class="fileinput fileinput-new text-center"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                            <img src="{{$product->avatar }}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="avatar" />
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                
                                                <div class="card card-profile"
                                                    style="width: 210px; float:left; margin-right: 30px; margin-left: 40px;">
                                                    <div class="fileinput fileinput-new text-center"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                            <img src="{{asset ('manage/img/placeholder.jpg')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="avatar1" />
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-profile"
                                                    style="width: 210px; float:left; margin-right: 30px;">
                                                    <div class="fileinput fileinput-new text-center"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                            <img src="{{asset ('manage/img/placeholder.jpg')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="avatar2" />
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-profile"
                                                    style="width: 210px; float:left; margin-right: 30px;">
                                                    <div class="fileinput fileinput-new text-center"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                            <img src="{{asset ('manage/img/placeholder.jpg')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="avatar3" />
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card card-profile"
                                                    style="width: 210px; float:left; margin-right: 30px;">
                                                    <div class="fileinput fileinput-new text-center"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="margin-top: 20px;">
                                                            <img src="{{asset ('manage/img/placeholder.jpg')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" multiple name="avatar4" />
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="display: none;">
                                    <input type="text" name="id" value="{{$product->id}}">
                                </div>
                        </div>
                        <div>
                            <a href="/admin/products/price/{{$product->id}}/edit" style="padding-left: 15px; padding-right: 15px;"
                                class="btn btn-warning pull-right"><i class="material-icons">cached</i> Bỏ
                                qua</a>
                            <button type="submit" style="padding-left: 15px; padding-right: 15px;"
                                class="btn btn-success pull-right"><a style="color:white;" href=""><i
                                        class="material-icons">edit</i></a> Cập nhật</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('js')

<script>
    $(document).ready(function(){
            $('.btn-del').click(function(e){		
                e.preventDefault();
                console.log('im in');
                    
                let variantId = $(this).attr('data-id')
                const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false,
                        })
    
                        swalWithBootstrapButtons.fire({
                        title: 'Bạn có chắc chắn muốn xóa',
                        text: "Hành động sẽ không thể hoàn tác",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Có, Xóa giá trị',
                        cancelButtonText: 'Không, Hủy bỏ!',
                        reverseButtons: true
                        }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url: '/admin/products/price/' + variantId + '/delete',
                                method: 'POST',
                                data: {
                                    _token: "{{csrf_token()}}",
                                    _method: "DELETE"
                                },
                                success: function(){
                                    swalWithBootstrapButtons.fire(
                                    'Đã xóa!',
                                    'Giá trị đã bị xóa',
                                    'success'
                                    ).then((result2) => {
                                        if(result2.value){
                                        window.location.reload();
                                        }
                                    });							
                                }
                            });
                            
                        } else if (
                            // Read more about handling dismissals
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                            'Đã hủy',
                            'Dữ liệu của bạn vẫn an toàn :)',
                            'error'
                            )
                        }
                    })	
            });
        });
</script>
@endpush