@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-6">
                <div class="grid">
                    <div class="grid-body">
                        <div class="item-wrapper">
                            <div class="panel-heading">
                                THÊM SẢN PHẨM
                              </div>
                                <form action="{{URL::to('save_product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                   
                                    {{-- tên sản phẩm --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" name="product_name" value=""/>
                                        </div>
                                    </div>
                                     {{-- giá sản phẩm --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Giá sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" name="product_price" value=""/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Ảnh sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="file" name="product_img" value=""/>
                                        </div>
                                    </div>
                                    {{-- mô tả danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="product_desc" cols="21" row="10" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Nội dung sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="product_content" cols="21" row="10" value=""></textarea>
                                        </div>
                                    </div>
                                    {{-- hiển thị --}}
                                    <div class="row">
                                        <label for="">Trạng thái</label>
                                        <select name="product_status" id="" class="from-control">
                                            <option value="0">Ẩn</option>"
                                            <option value="1">Hiện</option>"
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="">Danh mục sản phẩm</label>
                                        <select name="cate_product" id="" class="from-control">
                                            @foreach($cate_product as $key => $cate)
                                                <option value="0">{{$cate->category_name}}</option>"
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="">Thương hiệu sản phẩm</label>
                                        <select name="brand_product" id="" class="from-control">
                                            @foreach($brand_product as $key => $brand)
                                                <option value="0">{{($brand->brand_name)}}</option>"
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- add --}}
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="save_product" value="Thêm Sản Phẩm"/>
                                        </div>
                                    </div>
                                </form>
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection