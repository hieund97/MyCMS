@extends('client.layout.main')
@section('title', 'Giỏ hàng')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
@include('client.partial.header')
<div class="main main-raised">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 35px;">
            <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Product</th>
                            <th class="th-description">Color</th>
                            <th class="th-description">Size</th>
                            <th class="text-right">Price</th>
                            <th class="text-right">Qty</th>
                            <th class="text-right">Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src=" {{ asset ('client/img/product1.jpg') }}" alt="...">
                                </div>
                            </td>
                            <td class="td-name">
                                <a href="#jacket">Spring Jacket</a>
                                <br /><small>by Dolce&Gabbana</small>
                            </td>
                            <td>
                                Red
                            </td>
                            <td>
                                M
                            </td>
                            <td class="td-number">
                                <small>&euro;</small>549
                            </td>
                            <td class="td-number">
                                    <input type="number" value="1" min="1" max="99" style="width: 50px;padding-left: 10px;font-family: 'Pacifico', cursive;font-size: 16px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;margin-right: 10px;">
                                <div class="btn-group">
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">remove</i>
                                    </button>
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>&euro;</small>549
                            </td>
                            <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item"
                                    class="btn btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src=" {{ asset ('client/img/product2.jpg') }}" alt="..." />
                                </div>
                            </td>
                            <td class="td-name">
                                <a href="#pants">Short Pants</a>
                                <br /><small>by Pucci</small>
                            </td>
                            <td>
                                Purple
                            </td>
                            <td>
                                M
                            </td>

                            <td class="td-number">
                                <small>&euro;</small>499
                            </td>
                            <td class="td-number">
                                    <input type="number" value="1" min="1" max="99" style="width: 50px;padding-left: 10px;font-family: 'Pacifico', cursive;font-size: 16px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;margin-right: 10px;">
                                <div class="btn-group">
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">remove</i>
                                    </button>
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>&euro;</small>998
                            </td>
                            <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item"
                                    class="btn btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src=" {{ asset ('client/img/product3.jpg') }}" alt="...">
                                </div>
                            </td>
                            <td class="td-name">
                                <a href="#nothing">Pencil Skirt</a>
                                <br /><small>by Valentino</small>
                            </td>
                            <td>
                                White
                            </td>
                            <td>
                                XL
                            </td>

                            <td class="td-number">
                                <small>&euro;</small>799
                            </td>
                            <td class="td-number">
                                    <input type="number" value="1" min="1" max="99" style="width: 50px;padding-left: 10px;font-family: 'Pacifico', cursive;font-size: 16px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;margin-right: 10px;">
                                <div class="btn-group">
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">remove</i>
                                    </button>
                                    <button class="btn btn-round btn-info btn-xs"> <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>&euro;</small>799</td>
                            <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item"
                                    class="btn btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a href="/san-pham" type="button" class="btn btn-warning btn-round"><i
                                    class="material-icons">keyboard_arrow_left</i>Tiếp tục mua sắm</a>
                            </td>
                            <td class="td-total">
                                Total
                            </td>
                            <td class="td-price">
                                <small>&euro;</small>2,346
                            </td>
                            <td colspan="3" class="text-right"> <button type="button"
                                    class="btn btn-info btn-round">Complete Purchase <i
                                        class="material-icons">keyboard_arrow_right</i></button></td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection