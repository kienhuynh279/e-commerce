@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-6">
                <div class="grid">
                    <div class="grid-body">
                        @foreach($edit_brand_product as $key=>$edit_value)
                        <div class="item-wrapper">  
                           
                                <form action="{{URL::to('update_brand_product/'.$edit_value->brand_id)}}" method="post">
                                    {{ csrf_field() }} 
                                    {{-- tên danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Tên nhãn hiệu</label>
                                        </div>  
                                        <div class="lblinput">
                                        <input type="text" name="brand_name" value="{{$edit_value->brand_name}}"/>
                                        </div>
                                    </div>
                                    {{-- mô tả danh mục --}}
                                    <div class="row">
                                        <div class="lbltitle">
                                            <label>Mô tả nhãn hiệu</label>
                                        </div>
                                        <div class="lblinput">
                                            <textarea name="brand_desc" cols="21" row="10" value="">{{$edit_value->brand_desc}}</textarea>
                                        </div>
                                    </div>
                                    {{-- hiển thị --}}
                                    {{-- add --}}
                                    <div class="row">
                                        <div class="submit">
                                            <input type="submit" name="update_brand_product" value="Cập nhật nhãn hiệu"/>
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