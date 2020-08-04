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
                                THÊM NHÃN HIỆU
                              </div>
                                <form action="{{URL::to('save_brand_product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                   
                                    {{-- tên danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên nhãn hiệu</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" name="brand_name" value=""/>
                                        </div>
                                    </div>
                                    {{-- mô tả danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả danh mục</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="brand_desc" cols="21" row="10" value=""></textarea>
                                        </div>
                                    </div>
                                    {{-- hiển thị --}}
                                    <div class="row">
                                        <label for="">Trạng thái</label>
                                        <select name="brand_status" id="" class="from-control">
                                            <option value="0">Ẩn</option>"
                                            <option value="1">Hiện</option>"
                                        </select>
                                    </div>
                                    {{-- add --}}
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="add_brand_product" value="Thêm nhãn hiệu"/>
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