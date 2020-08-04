<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '1')->get();
        $product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'desc')->limit(3)->get();

        $all_data = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
            ->get();
        return view('Pages.home')->with('category', $cate_product)->with('brand', $brand_product)->with('product', $product);
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function shop()
    {
        $product = DB::table('tbl_product')->where('product_status', '1')->get();
        return view('Pages.shop')->with('product', $product);
    }

    public function blog()
    {
        return view('Pages.blog');
    }

    public function login()
    {
        return view('Pages.login');
    }

    public function cart()
    {
        return view('Pages.cart');
    }

    public function contact()
    {
        return view('Pages.contact');
    }

    public function product()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '1')->get();
        $product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'desc')->limit(3)->get();
        return view('Pages.product');
    }

    public function blog_detail()
    {
        return view('Pages.blog_detail');
    }
}