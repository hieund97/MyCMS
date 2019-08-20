@extends('admin.layout.main')
@section('title', 'Edit Order')
@section('content')
<style type="text/css">
    .chieucao {
        height: 54px;
    }

    .padbottom {
        padding-bottom: 30px
    }
</style>
<div class="content">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                <i class="material-icons">card_travel</i>
            </div>
            <h4 class="card-title">Danh sách sản phẩm</h4>
            <div style="float:right;">
                <div id="datatables_filter" class="dataTables_filter">
                    <label>
                        <span class="bmd-form-group bmd-form-group-sm"><input type="search"
                                class="form-control form-control-sm" placeholder="Search records"
                                aria-controls="datatables"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="/admin/order/{{$attr_order->id}}/edit" method="post">
                    @csrf
                    <div class="row">


                        {{-- Thông tin khách hàng --}}
                        <div class="col-md-5">
                            <h3 class="padbottom">Thông tin khách hàng</h3>
                            <div class="row padbottom">
                                <div class="col-md-11">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Họ tên khách hàng</label>
                                        <input type="text" name="name"
                                            value="{{$attr_order->order->user_id == NULL?$attr_order->order->guest->client_name: $attr_order->order->user->last_name .' '. $attr_order->order->user->first_name }}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row padbottom">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Số điện thoại</label>
                                        <input type="text" name="phone"
                                            value="{{$attr_order->order->user_id == NULL?$attr_order->order->guest->phone: $attr_order->order->user->phone}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="email"
                                            value="{{$attr_order->order->user_id == NULL?$attr_order->order->guest->email: $attr_order->order->user->email}}"
                                            name="email" class="form-control chieucao" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row padbottom">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Level</label>
                                        <label
                                            class="btn-{{$attr_order->order->user_id == NULL? 'warning': 'success'}}">{{$attr_order->order->user_id == NULL? 'Guest': 'Member'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Chú thích</label>
                                        <input type="text" name="note"
                                            value="{{$attr_order->order->note == NULL? 'Không có chú thích' : $attr_order->order->note}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row padbottom">

                                <div class="col-md-11">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <input type="text" name="address" value="{{$attr_order->order->address }}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- THông tin sản phẩm --}}
                        <div class="col-md-5">
                            <h3 class="padbottom">Thông tin sản phẩm</h3>
                            <div class="row padbottom">
                                <div class="col-md-11">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tên sản phẩm</label>
                                        <input type="text" name="product" value="{{$attr_order->product->name}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row padbottom">
                                <div class="col-md-3" style="float: left; position: relative">
                                    <div class="img-container">
                                        <img src="{{$attr_order->product->avatar}}" title="Áo thun trễ vai">
                                    </div>
                                </div>
                                <div class="col-md-2" style="height: 80px; float: left;">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Size</label>
                                        <input type="text" name="size" value="{{$attr_order->size}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                                <div class="col-md-3" style="height: 80px; float: left;">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Color</label>
                                        <input type="text" name="color" value="{{$attr_order->color}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                                <div class="col-md-3" style="height: 80px;float: left;">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Số lượng</label>
                                        <input type="text" name="quantity" value="{{$attr_order->quantity}}"
                                            class="form-control chieucao" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4"
                                    style="height: 80px;float: right;position: absolute;top: 300px;left: 165px;">
                                    <div class="form-group label-floating bmd-form-group">
                                        <label class="control-label bmd-label-static">Giá</label>
                                        <input type="text" name="price" value="{{number_format($attr_order->price)}}đ"
                                            class="form-control chieucao" readonly>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-rose">Cập nhật đơn hàng</button>
                        </div>

                        {{-- Trạng thái --}}
                        <div class="col-md-2">
                            <h3 class="padbottom">Trạng thái</h3>
                            <div class="form-group">
                                <select class="selectpicker" name="status" data-size="7"
                                    data-style="btn btn-primary btn-round" title="Status">
                                    <option {{$attr_order->status == 0? 'selected': ''}} value="0">Đã tiếp nhận đơn hàng
                                    </option>
                                    <option {{$attr_order->status == 1? 'selected': ''}} value="1">Đã xác nhận đơn hàng
                                    </option>
                                    <option {{$attr_order->status == 2? 'selected': ''}} value="2">Đã hủy</option>
                                    <option {{$attr_order->status == 3? 'selected': ''}} value="3">Đang giao hàng
                                    </option>
                                    <option {{$attr_order->status == 4? 'selected': ''}} value="4">Giao hàng thành công
                                    </option>
                                </select>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

{{-- Preview ảnh khi upload --}}
<script>
    $(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
       
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>

@endsection