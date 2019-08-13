<?php

use App\Models\Categories;

function getCategory($mang, $parent, $shift)
{
    foreach ($mang as $row) {
        if ($row->parent_id == $parent) {
            echo "<option value='$row->id'>" . $shift . $row->name . "</option>";
            getCategory($mang, $row->id, $shift . '---|');
        }
    }
}



function showCategory($mang, $parent, $shift)
{
    foreach ($mang as $row) {
        $active = null;
        if ($row->active  == 1){
            $active = 'Active';
        }
        else {
            $active = 'Normal';
        }
        $classActive = null;
        if ($row->active == 1){
            $classActive = 'danger';
        }
        else {
            $classActive = 'success';
        }


        $navActive = null;
        if ($row->navactive  == 1){
            $navActive = 'Active';
        }
        else {
            $navActive = 'Normal';
        }
        $classNavActive = null;
        if ($row->navactive == 1){
            $classNavActive = 'danger';
        }
        else {
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
                    class='btn btn-$classActive'>$active</label>
            </td>
            <td class='text-center'>
                <label style='padding-right: 10px;padding-left: 10px;'
                    class='btn btn-$classNavActive'>$navActive</label>
            </td>
            <td class='td-actions'
                style='width: 106px;padding-right: 0px;padding-left: 20px;'>
                <button type='button' rel='tooltip' class='btn btn-success btn-round'
                    data-original-title='Sửa'>
                    <a style='color:white;' href='/admin/categories/$row->id/edit'><i class='material-icons'>edit</i></a>
                </button>
                <button type='button' rel='tooltip' class='btn btn-danger btn-round btn-del'
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
