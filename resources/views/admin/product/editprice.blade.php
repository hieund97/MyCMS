@extends('admin.layout.main')
@section('title', 'Edit Custom Price')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="float:left;">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title">Giá theo biển thể sản phẩm: <span style="color:darkmagenta">{{$product->name}}</span> </h2>
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
                                            <th style="width: 266px;">Thuộc tính</th>
                                            <th>Giá nhập vào</th>
                                            <th>Giá bán</th>
                                            <th class="text-center">Số lượng</th>
                                            {{-- <th class="text-center">Đã bán</th> --}}
                                            {{-- <th style="width: 216px" class="text-center">Trạng thái</th> --}}
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
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá cho biến thể</label>
                                                    <input style="width: 200px;" type="text" onkeyup="this.value=FormatNumber(this.value);"
                                                        name="price_origin[{{$variant->id}}]" class="form-control"
                                                        value="{{$variant->price_origin != 0 ? number_format($variant->price_origin) : 0}}">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Giá cho biến thể</label>
                                                    <input style="width: 200px;" type="text" onkeyup="this.value=FormatNumber(this.value);"
                                                        name="price[{{$variant->id}}]" class="form-control"
                                                        value="{{ $variant->price != 0 ? number_format($variant->price) : number_format($product->price)}}">
                                                </div>
                                                {{-- Hàm định dạng tiền tệ --}}
                                                <script>
                                                    var inputnumber = 'Giá trị nhập vào không phải là số';
                                                    function FormatNumber(str) {
                                                        var strTemp = GetNumber(str);
                                                        if (strTemp.length <= 3)
                                                            return strTemp;
                                                        strResult = "";
                                                        for (var i = 0; i < strTemp.length; i++)
                                                            strTemp = strTemp.replace(",", "");
                                                        var m = strTemp.lastIndexOf(".");
                                                        if (m == -1) {
                                                            for (var i = strTemp.length; i >= 0; i--) {
                                                                if (strResult.length > 0 && (strTemp.length - i - 1) % 3 == 0)
                                                                    strResult = "," + strResult;
                                                                strResult = strTemp.substring(i, i + 1) + strResult;
                                                            }
                                                        } else {
                                                            var strphannguyen = strTemp.substring(0, strTemp.lastIndexOf("."));
                                                            var strphanthapphan = strTemp.substring(strTemp.lastIndexOf("."),
                                                                    strTemp.length);
                                                            var tam = 0;
                                                            for (var i = strphannguyen.length; i >= 0; i--) {
                
                                                                if (strResult.length > 0 && tam == 4) {
                                                                    strResult = "," + strResult;
                                                                    tam = 1;
                                                                }
                
                                                                strResult = strphannguyen.substring(i, i + 1) + strResult;
                                                                tam = tam + 1;
                                                            }
                                                            strResult = strResult + strphanthapphan;
                                                        }
                                                        return strResult;
                                                    }
                
                                                    function GetNumber(str) {
                                                        var count = 0;
                                                        for (var i = 0; i < str.length; i++) {
                                                            var temp = str.substring(i, i + 1);
                                                            if (!(temp == "," || temp == "." || (temp >= 0 && temp <= 9))) {
                                                                alert(inputnumber);
                                                                return str.substring(0, i);
                                                            }
                                                            if (temp == " ")
                                                                return str.substring(0, i);
                                                            if (temp == ".") {
                                                                if (count > 0)
                                                                    return str.substring(0, ipubl_date);
                                                                count++;
                                                            }
                                                        }
                                                        return str;
                                                    }
                
                                                    function IsNumberInt(str) {
                                                        for (var i = 0; i < str.length; i++) {
                                                            var temp = str.substring(i, i + 1);
                                                            if (!(temp == "." || (temp >= 0 && temp <= 9))) {
                                                                alert(inputnumber);
                                                                return str.substring(0, i);
                                                            }
                                                            if (temp == ",") {
                                                                return str.substring(0, i);
                                                            }
                                                        }
                                                        return str;
                                                    }
                                                </script>
                                            </td>
                                            
                                            <td class="text-center">
                                                <input type="number" name="quantity[{{$variant->id}}]" value="{{old('quantity') ? old('quantity') : $variant->quantity}}">
                                            </td>
                                            {{-- <td class="text-center">
                                                {{$variant->purchase}}
                                            </td> --}}
                                            {{-- <td class="text-center">
                                                @switch($variant->status)
                                                    @case(0)
                                                        @php
                                                            $status = 'Đang chờ';
                                                            $button = 'info';
                                                        @endphp
                                                        @break
                                                    @case(1)
                                                        @php
                                                            $status = 'Đã duyệt';
                                                            $button = 'success';
                                                        @endphp
                                                        @break
                                                    @case(2)
                                                        @php
                                                            $status = 'Hỏng hóc';
                                                            $button = 'danger';
                                                        @endphp
                                                        @break
                                                    @case(3)
                                                        @php
                                                            $status = 'Trả về';
                                                            $button = 'warning';
                                                        @endphp
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                                <button type="button" data-id="{{$variant->id}}" data-toggle="modal" data-target="#status-modal" class="btn-{{ $button }} status-variant">{{ $status }}</button>
                                            </td> --}}
                                            <td class="td-actions">
                                                <button style=" margin-right: 50px;  margin-bottom: 15px;" type="button"
                                                    rel="tooltip" class="btn btn-danger btn-del"
                                                    data-id="{{$variant->id}}" data-original-title="Xóa">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{-- <a href="/admin/products" style="padding-left: 15px; padding-right: 15px;"
                                        class="btn btn-warning pull-right"><i class="material-icons">cached</i> Bỏ
                                        qua</a> --}}
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
<!-- Modal -->
<div class="modal fade" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cập nhật trạng thái</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="0" checked> Đang chờ
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="1"> Đã duyệt
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="2"> Hàng hỏng hóc
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="3"> Hảng trả về
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="btn-update-status">Lưu</button>
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

        $('.status-variant').click(function(){
            var variantId = $(this).attr('data-id');
            $('#btn-update-status').click(function(){
                var status = $('input[name=status]:checked').val();
                $.ajax({
                    url: '/admin/products/update-status-variant/' + variantId,
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        status: status
                    },
                    success: function(){
                        $('#status-modal').modal('hide');
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Trạng thái sản phẩm đã được cập nhật',
                        }).then((result) => {
                            if (result.value) {
                                window.location.reload();
                            }
                        })
                    }
                });
            });
        });
    });
</script>

<script>
    @if (session()->has('edit_price'))
    toastr.success('Thêm thông tin thành công');
    @endif
    @error('quantity.*')
    Command: toastr["error"]("{{$message}}")

        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
    @enderror

    @error('price_origin.*')
    Command: toastr["error"]("{{$message}}")

        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
    @enderror

</script>
@endpush