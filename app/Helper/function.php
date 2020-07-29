<?php

use App\Models\Categories;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Value;
use App\Models\Order;
use Carbon\Carbon;
// use DateTime;

function getCategory($mang, $parent, $shift)
{
    foreach ($mang as $row) {
        if ($row->parent_id == $parent) {
            echo "<option value='$row->id'>" . $shift . $row->name . "</option>";
            getCategory($mang, $row->id, $shift . '---|');
        }
    }
}

function editProductCategory($mang, $parent, $shift, $id)
{
    $product = Product::find($id);
    foreach ($product->categories as $key => $category) {
        $active[] = $category->id;
    }
    foreach ($mang as $row) {
        $arrayID = array();
        $arrayID[] = $row->id;
        if ($row->parent_id == $parent) {

            if (array_intersect($arrayID, $active)) { //so sánh value trong mảng
                echo "<option selected value='$row->id'>" . $shift . $row->name . "</option>";
            } else {
                echo "<option value='$row->id'>" . $shift . $row->name . "</option>";
            }
            editProductCategory($mang, $row->id, $shift . '---|', $id);
        }
    }
}



function showCategory($mang, $parent, $shift)
{
    foreach ($mang as $row) {

        $navActive = null;
        if ($row->navactive  == 1) {
            $navActive = 'Active';
        } else {
            $navActive = 'Normal';
        }
        $classNavActive = null;
        if ($row->navactive == 1) {
            $classNavActive = 'danger';
        } else {
            $classNavActive = 'success';
        }
        if ($row->parent_id == $parent) {
            echo "<tr>
            <td class='text-center'>$row->id</td>
            <td>
                <div class='form-check'>
                    <label class='form-check-label'>
                        <input class='form-check-input' type='checkbox'>
                        <span class='form-check-sign'>
                            <span class='check'></span>
                        </span>
                    </label>
                </div>
            </td>
            <td>
                <a href='' target='_blank'>
                    <div class='img-container'>
                        <img src='$row->avatar' title='$row->name' style='width: 150px; border: solid 1px lightgray;'>
                    </div>
                </a>
            </td>
            <td><a style='font-weight: bold; font-size: 120%;' href='/admin/categories/$row->id/edit'>$shift $row->name</a>
            </td>
            <td class='text-center'>$row->created_at</td>
            <td class='text-center'>$row->updated_at</td>            
            <td class='text-center'>
                <label style='padding-right: 10px;padding-left: 10px;'
                    class='btn btn-$classNavActive'>$navActive</label>
            </td>
            <td class='td-actions'
                style='width: 106px;padding-right: 0px;padding-left: 20px;'>
                <button type='button' class='btn btn-success btn-round'
                    data-original-title='Sửa'>
                    <a style='color:white;' href='/admin/categories/$row->id/edit'><i class='material-icons'>edit</i></a>
                </button>
                <button type='button' class='btn btn-danger btn-round btn-del'
                    data-id='$row->id' data-original-title='Xóa'>
                    <i class='material-icons'>close</i>
                </button>
            </td>
        </tr>";
            showCategory($mang, $row->id, $shift . '---|');
        }
    }
}

function editCategory($mang, $parent, $shift, $active)
{

    foreach ($mang as $row) {
        if ($row->parent_id == $parent) {
            if ($row->id == $active) {
                echo "<option selected value='$row->id'>" . $shift . $row->name . "</option>";
            } else {
                echo "<option value='$row->id'>" . $shift . $row->name . "</option>";
            }
            editCategory($mang, $row->id, $shift . '---|', $active);
        }
    }
}



function getUpperCase($value)
{
    return strtoupper($value);
}

function get_Combination($array)
{
    $result = array(array());
    foreach ($array as $property => $property_values) {
        $tmp = array();
        foreach ($result as $result_item) {
            foreach ($property_values as $property_value) {
                $tmp[] = array_merge($result_item, array($property => $property_value));
            }
        }
        $result = $tmp;
    }
    return $result;
}



function check_variant($product, $array)
{
    foreach ($product->variant as $row) {
        $mang = array();
        foreach ($row->value as $value) {
            $mang[] = $value->id;
            if (array_diff($mang, $array) == NULL) {
                return false;
            }
        }
    }
    return true;
}

function showAttribute()
{ }

function getPrice($product, $array)
{
    foreach ($product->variant as $row) {
        $mang = array();
        foreach ($row->value as $value) {
            $mang[] = $value->value;
        }

        if (array_diff($mang, $array) == NULL) {
            if ($row->price == 0) {
                return $product->price;
            }
            return $row->price;
        }
    }
    return $product->price;
}


function checkQuantityProduct($product_id){
    $check = Variant::where('product_id', $product_id)->select('quantity')->get();

    $quantity = 0;
    foreach ($check as $key => $value) {
        $quantity += $value->quantity;
    }

    if($quantity == 0){
        return false;
    }
    else {
        return true;
    }

    return false;
}

function checkTimeOrder($order_code){
    $now = Carbon::now();
    $order = Order::where('order_code', $order_code)->first();

    $time_created = $order->created_at;

    $diff = $time_created->diff($now);

    if($diff->m > 0 || $diff->d >= 10){
        return false;
    }

    return true;
}

function getVariant($color, $size, $product_id){
    $data_value_id = Value::select('id')->where('value', $color)->orWhere('value', $size)->get();

    $data = Variant::select('variant.id')->where('variant.product_id', $product_id)
    ->join('variant_value', 'variant_value.variant_id', '=', 'variant.id')
    ->whereIn('variant_value.value_id', $data_value_id)
    ->get()->toArray();

    $variant_id = '';

    foreach ($data as $key => $value) {
        if($data[$key]['id'] == $data[$key + 1]['id']){
            $variant_id = $data[$key]['id'];
            break;
        };
    }

    $variant = Variant::find($variant_id);

    return $variant;
}