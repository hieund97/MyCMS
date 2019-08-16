@extends('client.layout.main')
@section('title', 'Thanh toán')
@section('content')

<style>
    .checkbox label,
    .radio label,
    label {
        color: #585858;
    }
</style>

@include('client.partial.header')

<div class="main main-raised">
    <div class="container-fluid" style="padding:30px;">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12" style="border-right: 1px solid #C8C8C8">

                <h3 class="title">Thông tin giao hàng</h3>
                <form role="form" id="contact-form" method="POST" action="">
                    @csrf
                    @auth
                    <div class="form-group label-floating">
                        <label class="control-label">Họ và tên</label>
                        <input type="text" value="{{auth()->user()->last_name}} {{auth()->user()->first_name}}"
                            name="name" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Số điện thoại</label>
                                <input type="text" value="{{auth()->user()->phone}}" name="phone" class="form-control"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" required />
                    </div>
                    @endauth

                    @guest
                    <div class="form-group label-floating">
                        <label class="control-label">Họ và tên</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" required />
                    </div>
                    @endguest




                    <h3 class="title">Phương thức vận chuyển</h3>
                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <input type="radio" value="" checked>
                            Phí vận chuyển
                        </label>
                        <span style="float: right">20.000đ</span>
                    </div>

                    <h3 class="title">Phương thức thanh toán</h3>
                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <input type="radio" name="pay" id="" value="cod" checked>Thanh toán khi nhận hàng (COD)
                        </label>
                    </div>

                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <img style="max-height:25px;margin-right:10px;"
                                src="//file.hstatic.net/1000003969/file/napas.png">
                            <input type="radio" name="pay" id="" value="napas1">Thanh toán online qua cổng Napas bằng
                            thẻ ATM nội địa
                        </label>
                    </div>

                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <img style="max-height:25px;margin-right:10px;"
                                src="//file.hstatic.net/1000003969/file/napas.png">
                            <input type="radio" name="pay" id="" value="napas2">Thanh toán online qua cổng Napas bằng
                            thẻ Visa/Master Card
                        </label>
                    </div>

                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <img style="max-height:25px;margin-right:10px"
                                src="//file.hstatic.net/1000003969/file/momo.png">
                            <input type="radio" name="pay" id="" value="momo"> Thanh toán online qua ví MoMo
                        </label>
                    </div>

                    <div class="radio" style="border: 1px solid #C8C8C8; padding: 15px 10px;">
                        <label>
                            <img style="max-height:20px;" src="//file.hstatic.net/1000003969/file/logozlp1.png">
                            <input type="radio" name="pay" id="" value="zalopay"> Thanh toán online qua ứng dụng
                            ZaloPay
                        </label>
                    </div>

                    <div class="submit text-center">
                        <a href="/gio-hang" class="btn btn-warning btn-raised btn-round pull-left">
                            < Trở về giỏ hàng</a> <button type="submit"
                                class="btn btn-info btn-raised btn-round pull-right">Hoàn tất đơn
                                hàng</button>
                    </div>
                </form>


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



                    </tbody>
                </table>

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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phí vận chuyển
                        </td>
                        <td class="text-right">
                            20.000₫
                        </td>
                    </tr>
                    <tfoot>
                        <tr>
                            <td style="font-size: 30px">
                                Tổng cộng
                            </td>
                            <td class="text-right" style="font-size: 30px">
                                {{Cart::total(0,'',',')}}₫
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <h4 style="border: 1px solid tomato; padding: 15px;">MrSpicy sẽ XÁC NHẬN đơn hàng bằng TIN NHẮN SMS hoặc
                    GỌI ĐIỆN. Bạn vui lòng kiểm tra TIN NHẮN hoặc NGHE
                    MÁY ngay khi đặt hàng thành công và CHỜ NHẬN HÀNG
                </h4>
            </div>
        </div>
    </div>



</div>


@endsection


<script type="text/javascript">
    $().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKitDemo.initContactUsMap();
		});
</script>