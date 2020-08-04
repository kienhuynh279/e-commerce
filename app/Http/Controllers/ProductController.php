<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    public function all_product()
    {

        $all_data = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
            ->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_data);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function add_product()
    {

        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function save_product(Request $req)
    {
        $data = array();
        $data['product_name'] = $req->product_name;
        $data['product_price'] = $req->product_price;
        $data['product_desc'] = $req->product_desc;
        $data['product_content'] = $req->product_content;
        $data['category_id'] = $req->cate_product;
        $data['brand_id'] = $req->brand_product;
        $data['product_status'] = $req->product_status;
        $get_img = $req->file('product_img');
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('public/upload/product', $new_img);
            $data['product_img'] = $new_img;
            DB::table('tbl_product')->insert($data);
            return Redirect::to('all_product');
        }

        $data['product_img'] = '';
        DB::table('tbl_product')->insert($data);
        //Session::put('messege', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('all_product');
    }

    public function active_product($product_id)
    {
        $check = DB::table('tbl_product')->where('product_id', $product_id);
        $check->update(['product_status' => 0]);
        return Redirect::to('all_product');
    }

    public function unactive_product($product_id)
    {

        $check = DB::table('tbl_product')->where('category_id', $product_id);
        $check->update(['product_status' => 1]);
        return Redirect::to('all_product');
    }

    public function edit_product($cate_id)
    {
        $cate_product = DB::table('tbl_category_product')->get();
        $brand_product = DB::table('tbl_brand_product')->get();
        $edit_data = DB::table('tbl_product')->where('product_id', $cate_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_data)->with('cate_product', $cate_product)->with('brand_product', $brand_product);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $req, $pro_id)
    {
        $data = array();
        $data['product_name'] = $req->product_name;
        $data['product_price'] = $req->product_price;
        $data['product_desc'] = $req->product_desc;
        $data['product_content'] = $req->product_content;
        $data['category_id'] = $req->cate_product;
        $data['brand_id'] = $req->brand_product;
        $get_img = $req->file('product_img');

        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('public/upload/product', $new_img);
            $data['product_img'] = $new_img;
            DB::table('tbl_product')->where('product_id', $pro_id)->update($data);
            return Redirect::to('all_product');
        }

        DB::table('tbl_product')->where('category_id', $pro_id)->update($data);
        return Redirect::to('all_product');
    }

    public function delete_product($pro_id)
    {
        DB::table('tbl_category_product')->where('product_id', $pro_id)->delete();
        return Redirect::to('all_product');
    }
}