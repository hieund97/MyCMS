@extends('admin.layout.main')
@section('title', 'User')
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
                        <h2 class="card-title">Thuộc tính sản phẩm: {{$product->name}} </h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST">
                                @method('PUT')
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 56px;">#</th>
                                            <th style="width: 516px;">Thuộc tính</th>
                                            <th style="width: 616px;">Giá</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->variant as $variant)
                                        <tr>
                                            <td class="text-center">{{$variant->id}}</td>
                                            <td>
                                                @foreach ($variant->value as $value)
                                                {{$value->attribute->name}}: {{$value->value}},
                                                @endforeach
                                            <td>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá cho biến thể</label>
                                                    <input style="width: 400px;" type="text"
                                                        name="price[{{$variant->id}}]" class="form-control"
                                                        value="{{$variant->price}}">
                                                </div>
                                            </td>
                                            <td class="td-actions">
                                                <button style=" margin-right: 50px;  margin-bottom: 15px;" type="button"
                                                    rel="tooltip" class="btn btn-danger btn-round btn-del"
                                                    data-id="{{$variant->id}}" data-original-title="Xóa">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <a href="/admin/products" style="padding-left: 15px; padding-right: 15px;"
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