@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-6">
                <div class="grid">
                    <div class="grid-body">
                        @foreach($edit_category_product as $key=>$edit_value)
                        <div class="item-wrapper">  
                           
                                <form action="{{URL::to('update_category_product/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field() }} 
                                    {{-- tên danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên danh mục</label>
                                        </div>  
                                        <div class="lblinput">
                                        <input type="text" name="category_name" value="{{$edit_value->category_name}}"/>
                                        </div>
                                    </div>
                                    {{-- mô tả danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="category_desc" cols="21" row="10" value="">{{$edit_value->category_desc}}</textarea>
                                        </div>
                                    </div>
                                    {{-- hiển thị --}}
                                    {{-- add --}}
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="update_category_product" value="Cập nhật sản phẩm"/>
                                        </div>
                                    </div>
                                </form>
                            </canvas>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection