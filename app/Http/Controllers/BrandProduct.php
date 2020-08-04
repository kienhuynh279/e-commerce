<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BrandProduct extends Controller
{
    public function all_brand()
    {
        $all_data = DB::table('tbl_brand_product')->get();
        $manager_category = view('admin.all_brand_product')->with('all_brand_product', $all_data);
        return view('admin_layout')->with('admin.all_brand_product', $manager_category);
    }

    public function add_brand_product()
    {
        return view('admin.add_brand_product');
    }

    public function save_brand_product(Request $req)
    {
        $data = array();
        $data['brand_name'] = $req->brand_name;
        $data['brand_desc'] = $req->brand_desc;
        $data['brand_status'] = $req->brand_status;

        DB::table('tbl_brand_product')->insert($data);
        //Session::put('messege', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('all_brand_product');
    }

    public function active_brand($brand_id)
    {
        DB::table('tbl_brand_product')->where('brand_id', $brand_id)->update(['brand_status' => 0]);
        return Redirect::to('all_brand_product');
    }

    public function unactive_brand($brand_id)
    {
        DB::table('tbl_brand_product')->where('brand_id', $brand_id)->update(['brand_status' => 1]);
        return Redirect::to('all_brand_product');
    }

    public function edit_brand_product($cate_id)
    {
        $edit_data = DB::table('tbl_brand_product')->where('brand_id', $cate_id)->get();
        $manager_brand = view('admin.edit_brand_product')->with('edit_brand_product', $edit_data);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand);
    }

    public function update_brand_product(Request $req, $cate_id)
    {
        $data = array();
        $data['brand_name'] = $req->brand_name;
        $data['brand_desc'] = $req->brand_desc;

        DB::table('tbl_brand_product')->where('brand_id', $cate_id)->update($data);
        return Redirect::to('all_brand_product');
    }

    public function delete_brand_product($cate_id)
    {
        DB::table('tbl_brand_product')->where('brand_id', $cate_id)->delete();
        return Redirect::to('all_brand_product');
    }
}