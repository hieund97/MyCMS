@extends('admin.layout.main')
@section('title', 'User')
@section('content')
<style type="text/css">
    .bor {
        border-right: solid 1px thistle;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9" style="float:left;">
                @if (session()->has('create_attribute'))
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
                @if (session()->has('create_value'))
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
                @if (session()->has('update_attribute'))
                <div class="alert alert-success">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>SỬA THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
                    </div>
                </div>
                @endif
                @if (session()->has('update_value'))
                <div class="alert alert-success">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>SỬA THÀNH CÔNG</b> <span>THÔNG TIN CỦA BẠN ĐÃ ĐƯỢC LƯU LẠI</span>
                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thuộc tính sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 56px;">#</th>
                                        <th style="width: 216px;">Thuộc tính</th>
                                        <th>Giá trị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attribute as $attr)
                                    <tr>
                                        <td class="text-center">{{$attr->id}}</td>
                                        <td class="td-actions bor">
                                            <label class="btn btn-primary btn-round btn-lg "
                                                style="margin-right: 10px;padding:10px;width: 100px;">{{$attr->name}}</label>
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round "
                                                data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/attribute/{{$attr->id}}/edit"><i class="material-icons">edit</i></a>
                                            </button>
                                            <button type="button" rel="tooltip"
                                                class="btn btn-danger btn-round btn-del-attr " data-id="{{$attr->id}}"
                                                data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>

                                        <td class="td-actions">
                                            @foreach ($attr->value as $value)
                                            <label class="btn btn-info btn-lg"
                                                style="margin-right: 10px;padding:10px; width:80px;  margin-bottom: 15px;">{{$value->value}}</label>
                                            <button type="button" rel="tooltip" class="btn btn-success btn-round"
                                                style=" margin-bottom: 15px;" data-original-title="Sửa">
                                                <a style="color:white;" href="/admin/value/{{$value->id}}/edit"><i class="material-icons">edit</i></a>
                                            </button>
                                            <button style=" margin-right: 50px;  margin-bottom: 15px;" type="button"
                                                rel="tooltip" class="btn btn-danger btn-round btn-del-value" data-id="{{$value->id}}"
                                                data-original-title="Xóa">
                                                <i class="material-icons">close</i>
                                            </button>
                                            @endforeach
                                        </td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="position: relative; float:left;">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thêm thuộc tính</h4>
                    </div>
                    <div class="card-body">

                        {{-- form Attribute --}}
                        <form action="/admin/attribute" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">
                                        <h4>Tên thuộc tính</h4>
                                    </label>
                                    <div class="form-group">
                                        <input type="text" name="attribute" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-rose pull-right">Thêm thuộc tính</button>
                            </div>
                            <div class="clearfix"></div>
                            @if ($errors->has('attribute'))
                            <div class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>LỖI</b> THUỘC TÍNH BỊ TRÙNG
                                </div>
                            </div>
                            @endif
                        </form>
                        {{-- end form --}}

                    </div>
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Thêm giá trị</h4>
                    </div>
                    <div class="card-body">

                        {{-- form value --}}
                        <form action="/admin/value" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <select class="selectpicker" name="attr" data-size="7"
                                        data-style="btn btn-primary btn-round" title="Chọn thuộc tính">
                                        @foreach ($attribute as $attr)
                                        <option value="{{$attr->id}}">{{$attr->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <h4
                                    style="margtom: 0px;margin-top: 10px;margin-right: 8px;margin-left: 10px;padding-top: 5px;">
                                    Giá trị :</h4>
                                <input type="text" name="value" class="form-control" required>
                            </div>
                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-rose pull-right">Thêm giá trị</button>
                            </div>
                            <div class="clearfix"></div>
                            @if ($errors->has('attr'))
                            <div class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>LỖI</b> BẠN CHƯA CHỌN THUỘC TÍNH
                                </div>
                            </div>
                            @endif
                        </form>
                        {{-- end form --}}

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
            $('.btn-del-value').click(function(e){		
                e.preventDefault();
                console.log('im in');
                    
                let valueId = $(this).attr('data-id')
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
                                url: '/admin/value/' + valueId + '/delete',
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
<script>
        $(document).ready(function(){
                $('.btn-del-attr').click(function(e){		
                    e.preventDefault();
                    console.log('im in');
                        
                    let attrId = $(this).attr('data-id')
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
                                    url: '/admin/attribute/' + attrId + '/delete',
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