<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function all_category()
    {
        $this->AuthLogin();
        $all_data = DB::table('tbl_category_product')->get();
        $manager_category = view('admin.all_category_product')->with('all_category_product', $all_data);
        return view('admin_layout')->with('admin.all_category_product', $manager_category);
    }

    public function add_category_product()
    {
        $this->AuthLogin();
        return view('admin.add_category_product');
    }

    public function save_category_product(Request $req)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $req->category_name;
        $data['category_desc'] = $req->category_desc;
        $data['category_status'] = $req->category_status;

        DB::table('tbl_category_product')->insert($data);
        //Session::put('messege', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('all_category_product');
    }

    public function active($cate_id)
    {
        $this->AuthLogin();
        $check = DB::table('tbl_category_product')->where('category_id', $cate_id);
        $check->update(['category_status' => 0]);
        return Redirect::to('all_category_product');
    }

    public function unactive($cate_id)
    {
        $this->AuthLogin();
        $check = DB::table('tbl_category_product')->where('category_id', $cate_id);
        $check->update(['category_status' => 1]);
        return Redirect::to('all_category_product');
    }

    public function edit_category_product($cate_id)
    {
        $this->AuthLogin();
        $edit_data = DB::table('tbl_category_product')->where('category_id', $cate_id)->get();
        $manager_category = view('admin.edit_category_product')->with('edit_category_product', $edit_data);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category);
    }

    public function update_category_product(Request $req, $cate_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $req->category_name;
        $data['category_desc'] = $req->category_desc;

        DB::table('tbl_category_product')->where('category_id', $cate_id)->update($data);
        return Redirect::to('all_category_product');
    }

    public function delete_category_product($cate_id)
    {
        DB::table('tbl_category_product')->where('category_id', $cate_id)->delete();
        return Redirect::to('all_category_product');
    }
}