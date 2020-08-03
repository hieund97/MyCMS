<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .table {
        table-layout: fixed;
    }
</style>
<div class="col-md-12">
    <div style="margin-bottom: 20px">
            <img class="img-fluid" style="width: 200px;margin-left: 400px;"
                src="{{asset ('manage/img/admin-ajax-1.png')}}" alt="">
    </div>
    <p></p>
    <h2 class="card-title text-center">Thống kê hàng trả về</h2>
    <i style="display: block" class="card-title text-center">Ngày {{ date("d") }} Tháng {{ date("m") }}
        Năm {{ date("Y") }}</i>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" style="width: 15%;">Mã đơn hàng</th>
                <th style="width: 20%;" class="text-left">Tên Khách hàng</th>
                <th style="width: 20%;">Ảnh sản phẩm</th>
                <th style="width: 25%;">Tên sản phẩm</th>
                <th style="width: 10%;">Size</th>
                <th style="width: 10%;">Màu sắc</th>
                <th style="width: 20%;" class="text-center">Trạng thái</th>
                <th style="width: 10%;">Số lượng</th>
                <th style="width: 15%;" class="text-center">Giá</th>
                <th style="width: 20%;" class="text-center">Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($list_product_back as $item)
            @php
            $infoVariant = getInfoProductFromVariant($item->variant_id);
            $variant = $infoVariant['variant'];
            $valueVariant = $infoVariant['value'];
            @endphp
            @php
            $order = getInfoOrder($item->order_id);
            $product = getInfoProduct($item->product_id);
            if ($order->user_id != null) {
            $user = getInfoUser($order->user_id);
            }
            else {
            $user = getInfoGuest($order->guest_id);
            }
            @endphp
            @if ($product != null)
            <tr>
                <td class="text-center">{{$order->order_code}}</td>
                <td class="td-name">
                    <a
                        href="/thanh-vien/{{isset($user->user_name) ? $user->user_name : 'javascript:void(0)'}}">{{isset($user->client_name) ? $user->client_name : $user->last_name .' '. $user->first_name }}</a>
                    <br />
                    <small>SĐT:
                        {{ $user->phone }}</small>
                    <br />
                    <small>Địa chỉ nhận hàng:<br />
                        {{$order->address}}</small>
                </td>
                <td>
                    <img style="width: 40%;" src="{{$product->avatar }}" title="{{$product->name}}">
                </td>
                <td class="td-name">
                    <a href="/admin/products/{{$product->id}}/edit">{{$product->name}}</a>
                </td>
                <td>
                    {{isset($valueVariant[1]) ? $valueVariant[1]['value'] : 'Không có thuộc tính'}}
                </td>
                <td class="text-center">
                    {{isset($valueVariant[0]) ? $valueVariant[0]['value'] : 'Không có thuộc tính'}}
                </td>
                <td>
                    @switch($item->status)
                    @case(0)
                    @php
                    $status = 'Hàng trả về';
                    $button = 'warning';
                    @endphp
                    @break
                    @case(1)
                    @php
                    $status = 'Hàng hỏng hóc';
                    $button = 'danger';
                    @endphp
                    @break
                    @case(2)
                    @php
                    $status = 'Chuyển hàng bán lại';
                    $button = 'info';
                    @endphp
                    @break
                    @endswitch

                    <button class="text-center btn-{{$button}} status-order" data-toggle="modal"
                        data-target="#status-modal" data-id="{{$item->id}}">{{ $status }}</button>
                </td>
                <td class="text-center">
                    {{$item->quantity}}
                </td>
                <td class="td-number text-center">
                    {{number_format($variant->price)}}đ
                </td>
                <td>
                    {{$item->updated_at}}
                </td>
            </tr>
            @endif
            @empty
            <tr>Không sản phẩm nào</tr>
            @endforelse
        </tbody>
    </table>
</div>