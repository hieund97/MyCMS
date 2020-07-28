@extends('client.layout.main')
@section('title', 'Thanh toán')
@section('content')

<style>
    .checkbox label,
    .radio label,
    label {
        color: #585858;
    }

    .hide {
        display: none;
    }

    .ship {
        opacity: 1;
        animation-name: fadeInOpacity;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        animation-duration: 1s;
    }

    @keyframes fadeInOpacity {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>

@include('client.partial.header')
<form role="form" id="contact-form" method="POST" action="/don-hang">
    @csrf
    <div class="main main-raised">
        <div class="container-fluid" style="padding:30px;">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12" style="border-right: 1px solid #C8C8C8">
                    <h3 class="title">Thông tin giao hàng</h3>
                    @auth
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="form-group label-floating">
                        <label class="control-label">Họ và tên</label>
                        <input type="text" value="{{auth()->user()->last_name}} {{auth()->user()->first_name}}"
                            name="name" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" value="{{auth()->user()->email}}" name="email"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Số điện thoại</label>
                                <input type="text" value="{{auth()->user()->phone}}" name="phone"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" onkeyup="myFunction3()" name="address" class="form-control" />
                    </div>
                    @if ($errors->has('address'))
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>BẠN CHƯA ĐIỀN ĐỦ ĐỊA CHỈ</b>
                        </div>
                    </div>
                    @endif
                    <div class="form-group label-floating">
                        <label class="control-label">Chú thích</label>
                        <input type="text" name="note" class="form-control" />
                    </div>
                    @endauth

                    @guest
                    <div class="form-group label-floating">
                        <label class="control-label">Họ và tên</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>BẠN CHƯA ĐIỀN TÊN</b>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" class="form-control" />
                            </div>
                        </div>
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="material-icons">error_outline</i>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                </button>
                                <b>BẠN CHƯA ĐIỀN EMAIL</b>
                            </div>
                        </div>
                        @endif
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                        </div>
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="material-icons">error_outline</i>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                </button>
                                <b>BẠN CHƯA ĐIỀN SỐ ĐIỆN THOẠI</b>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" onkeyup="myFunction3()" id="address" name="address" class="form-control"
                            required />
                    </div>
                    @if ($errors->has('address'))
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>BẠN CHƯA ĐIỀN ĐỊA CHỈ GIAO HÀNG</b>
                        </div>
                    </div>
                    @endif
                    <div class="form-group label-floating">
                        <label class="control-label">Chú thích</label>
                        <input type="text" name="note" class="form-control" />
                    </div>
                    @endguest
                    <h3 class="title">Phương thức vận chuyển</h3>
                    <div id="ship" class="ship hide ">
                        @foreach ($ships as $ship)
                        <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                            <label>
                                <img style="max-height:25px;margin-right:10px;" src="{{$ship->logo}}">
                                <input type="radio" name="ship" onchange="myFunction2({{$total}})"
                                    value="{{number_format($ship->price)}}" id="ship_method">
                                {{$ship->name}}

                                <input type="hidden" name="shiphidden" value="{{$ship->id}}">
                            </label>

                            <span style="float: right"> {{number_format($ship->price)}}₫</span>
                        </div>
                        @endforeach
                    </div>
                    @if ($errors->has('ship'))
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>BẠN CHƯA CHỌN PHƯƠNG THỨC VẬN CHUYỂN</b>
                        </div>
                    </div>
                    @endif
                    <h3 class="title">Phương thức thanh toán</h3>
                    @foreach ($pays as $pay)
                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <img style="max-height:25px;margin-right:10px;" src="{{$pay->logo}}">
                            <input type="radio" name="pay" value="{{$pay->id}}">{{$pay->name}}
                        </label>
                    </div>
                    @endforeach
                    @if ($errors->has('pay'))
                    <div class="alert alert-danger">
                        <div class="container">
                            <div class="alert-icon">
                                <i class="material-icons">error_outline</i>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                            </button>
                            <b>BẠN CHƯA CHỌN PHƯƠNG THỨC THANH TOÁN</b>
                        </div>
                    </div>
                    @endif
                    <div class="submit text-center">
                        <a href="/gio-hang" class="btn btn-warning btn-raised btn-round pull-left ">
                            < Trở về giỏ hàng </a> <button type="submit"
                                class="btn btn-info btn-raised btn-round pull-right {{Cart::content()->count() > 0? '': 'disabled'}}">
                                Hoàn tất đơn
                                hàng</button>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <h3 class="title">Thông tin sản phẩm</h3>
                    <table class="table table-shopping table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Tên sản phẩm</th>
                                <th class="th-description">Màu sắc</th>
                                <th class="th-description">Size</th>

                                <th class="text-right">Số lượng</th>
                                <th class="text-right">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (Cart::content() as $item)
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src=" {{$item->options->img}}" alt="...">
                                    </div>
                                </td>
                                <td class="td-name text-primary">
                                    {{$item->name}}

                                </td>
                                <td>
                                    {{$item->options->color}}
                                </td>
                                <td>
                                    {{$item->options->size}}
                                </td>
                                <td class="td-number">
                                    <span>{{$item->qty}}</span>
                                    
                                </td>
                                <td class="td-number">
                                    <small></small>{{number_format($item->price*$item->qty)}}₫
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <p>Không có sản phẩm nào</p>
                                </td>
                            </tr>
                            @endforelse
                            <input type="hidden" name="quantity" value="{{$quantity}}">
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="code_sale" style="position: relative;top: 30px;left: 10px;">NHẬP MÃ KHUYẾN MÃI</label>
                            <input type="text" name="code_sale" id="code_sale" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button" id="btn-sale" style="margin-top: 50px;" class="btn btn-info" >Áp dụng</button>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>

                        </tbody>
                        <tr>
                            <td>
                                Tạm tính
                            </td>
                            <td class="text-right">
                                {{Cart::total(0,'',',')}}₫
                                <input type="hidden" name="temp_price" id="temp_price" value="{{Cart::total(0,'',',')}}">
                            </td>
                        </tr>
                        <tr id="shipmoney" class="ship hide">
                            <td>
                                Phí vận chuyển
                            </td>
                            <td class="text-right">
                                <span id="shipmoney2">đ</span>
                            </td>
                        </tr>
                        <tr id="sale" class="ship hide">
                            <td>
                                Chiết khấu khuyến mãi
                            </td>
                            <td class="text-right">
                                <span id="percent_sale"></span>
                            </td>
                        </tr>
                        <tfoot>
                            <tr>
                                <td style="font-size: 30px">
                                    Tổng cộng
                                </td>
                                <td class="text-right" style="font-size: 30px">
                                    <span class="ship hide" id="total2"></span>
                                    <input type="hidden" name="total_price" id="total_price"
                                        value="">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <h4 style="border: 1px solid tomato; padding: 15px;">360 sẽ XÁC NHẬN đơn hàng bằng TIN NHẮN SMS
                        hoặc GỌI ĐIỆN TRỰC TIẾP. Bạn vui lòng kiểm tra TIN NHẮN hoặc NGHE
                        MÁY ngay khi đặt hàng thành công và CHỜ NHẬN HÀNG
                    </h4>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $('#btn-sale').click(function(){
                var code_sale = $('#code_sale').val();
                var temp_price = $('#total_price').val();
                var total_order = 0;
                $.ajax({
                    url: '/san-pham/check-khuyen-mai',
                    method: 'POST',
                    data: {
                        _token: "{{csrf_token()}}",
                        code: code_sale,
                    },
                    success: function(response){
                        if (response.status == 200) {
                            Command: toastr["success"](response.message)

                                toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-top-right",
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
                            };
                            $('#sale').removeClass("hide");
                            $('#percent_sale').html('-' + response.percent + '%');
                            total_order = temp_price * response.percent / 100;
                            $('#total2').html(formatNumber(total_order, '.', ',') + 'đ');
                            $('#total_price').val(total_order);

                        }

                        if(response.status == 400){
                            Command: toastr["error"](response.message)

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
                        }
                    }
                });
            })
        });

        function formatNumber(nStr, decSeperate, groupSeperate) {
            nStr += '';
            x = nStr.split(decSeperate);
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
            }
            return x1 + x2;
        };
    </script>
@endpush

<script>
    function myFunction3(){
    $('#ship').removeClass("hide")
    $('#shipmoney').removeClass("hide")
    $('#total1').addClass("hide")
    $('#total2').removeClass("hide")
};

// Hàm định dạng số
function formatNumber(nStr, decSeperate, groupSeperate) {
    nStr += '';
    x = nStr.split(decSeperate);
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
    }
    return x1 + x2;
};


function myFunction2(total){
    var checkbox = document.getElementsByName("ship");
    for (var i = 0; i < checkbox.length; i++){
        if (checkbox[i].checked === true){
            document.getElementById("shipmoney2").innerHTML = checkbox[i].value + 'đ';
        };
        if (checkbox[i].checked === true){
            var ship = checkbox[i].value;
            var replace = ship.replace(',', '')
            var result = parseInt(replace) + parseInt(total);
            document.getElementById("total2").innerHTML =  formatNumber(result, '.', ',') + 'đ';
        };

        if (checkbox[i].checked === true){
            var ship = checkbox[i].value;
            var replace = ship.replace(',', '')
            var result = parseInt(replace) + parseInt(total);
            $('#total_price').val(result);
        };
    };
};


$().ready(function(){
// the body of this function is in assets/material-kit.js
	materialKitDemo.initContactUsMap();
}); 
</script>