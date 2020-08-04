@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-6">
                <div class="grid">
                    <div class="grid-body">
                        <h2 class="grid-title">Sửa Sản phẩm</h2>
                        <div class="item-wrapper">
                              @foreach($edit_product as $key => $pro)
                                <form action="{{URL::to('update_product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                   
                                    {{-- tên sản phẩm --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                        <input type="text" name="product_name" value="{{$pro->product_name}}"/>
                                        </div>
                                    </div>
                                     {{-- giá sản phẩm --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Giá sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                        <input type="text" name="product_price" value="{{$pro->product_price}}"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Ảnh sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="file" name="product_img" value=""/>
                                            <img src="{{URL::to('public/upload/product/'.$pro->product_img)}}" height="100" width="90" alt="">
                                        </div>
                                    </div>
                                    {{-- mô tả danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="product_desc" cols="21" row="10" value="">{{$pro->product_desc}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Nội dung sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="product_content" cols="21" row="10" value="">{{$pro->product_content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="">Danh mục sản phẩm</label>
                                        <select name="cate_product" id="" class="from-control">
                                            @foreach($cate_product as $key => $cate)
                                            @if($cate->category_id == $pro->category_id)
                                                <option selected value={{$cate->category_id}}>{{$cate->category_name}}</option>"
                                            @else
                                            <option value={{$cate->category_id}}>{{$cate->category_name}}</option>"
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="">Thương hiệu sản phẩm</label>
                                        <select name="brand_product" id="" class="from-control">
                                            @foreach($brand_product as $key => $brand)
                                            @if($cate->category_id == $pro->category_id)
                                                <option selected value={{$brand->brand_id}}>{{($brand->brand_name)}}</option>"
                                            @else
                                                <option value={{$brand->brand_id}}>{{($brand->brand_name)}}</option>"
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- add --}}
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="update_product" value="Cập nhật Sản Phẩm"/>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection