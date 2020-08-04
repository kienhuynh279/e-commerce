<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page
Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/shop', 'PageController@shop');
Route::get('/product', 'PageController@product');
Route::get('/blog', 'PageController@blog');
Route::get('/login', 'PageController@login');
Route::get('/blog-detail', 'PageController@blog_detail');
Route::get('/contact', 'PageController@contact');
Route::get('/cart', 'PageController@cart');



// admin
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/logout', 'AdminController@logout');

// category_product
Route::get('/add_category_product', 'CategoryProduct@add_category_product');
Route::get('/all_category_product', 'CategoryProduct@all_category');
Route::get('/edit_category_product/{category_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete_category_product/{category_id}', 'CategoryProduct@delete_category_product');

Route::get('/unactive/{category_id}', 'CategoryProduct@unactive');
Route::get('/active/{category_id}', 'CategoryProduct@active');

Route::post('/update_category_product/{category_id}', 'CategoryProduct@update_category_product');
Route::post('/save_category_product', 'CategoryProduct@save_category_product');

// brand_product
Route::get('/add_brand_product', 'BrandProduct@add_brand_product');
Route::get('/all_brand_product', 'CategoryProduct@all_brand');
Route::get('/edit_brand_product/{brand_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete_brand_product/{brand_id}', 'BrandProduct@delete_brand_product');

Route::get('/unactive_brand/{brand_id}', 'BrandProduct@unactive_brand');
Route::get('/active_brand/{brand_id}', 'BrandProduct@active_brand');

Route::post('/update_brand_product/{brand_id}', 'BrandProduct@update_brand_product');
Route::post('/save_brand_product', 'BrandProduct@save_brand_product');

// Product
Route::get('add_product/', 'ProductController@add_product');
Route::get('/all_product', 'ProductController@all_product');
Route::get('edit_product/{product_id}', 'ProductController@edit_product');
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');

Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');

Route::post('/update_product/{product_id}', 'ProductController@update_product');
Route::post('/save_product', 'ProductController@save_product');