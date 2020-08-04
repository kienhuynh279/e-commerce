@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-8">
                <div class="grid">
                    <div class="grid-body">
                        <div class="item-wrapper">
                            <div class="table-agile-info">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    Liệt Kê Nhãn Hiệu
                                  </div>
                                  <div class="table-responsive">
                                    <table class="table table-striped b-t b-light">
                                      <thead>
                                        <tr>
                                          <th style="width:20px">
                                            <label class="i-checks m-b-none">
                                              <input type="checkbox"><i></i>
                                            </label>
                                          </th style="width:20px">
                                          <th>Tên Sản Phẩm</th>
                                          <th>Giá Sản Phẩm</th>
                                          <th>Ảnh</th>
                                          <th>Danh Mục</th>
                                          <th>Nhãn Hiệu</th>
                                          <th>Hiển thị</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($all_product as $key => $pro)
                                        <tr>
                                          <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                        <td>{{$pro->product_name}}</td>
                                        <td>{{$pro->product_price}}</td>
                                        <td><img src="public/upload/product/{{$pro->product_img}}" width="90" height="100"></td>
                                        <td>{{$pro->category_name}}</td>
                                        <td>{{$pro->brand_name}}</td>
                                          <td>
                                            <?php 
                                                if($pro -> product_status == 0){
                                            ?>
                                                    <a href="{{URL::to('unactive_product/'.$pro->product_id)}}"><span class="mdi-styling mdi mdi-bullseye mdi-eye-off"></span></a>
                                            <?php
                                                    }                                                  
                                                else {
                                            ?>
                                                    
                                                    <a href="{{URL::to('active_product/'.$pro->product_id)}}"><span class="mdi-styling mdi mdi-bullseye mdi-eye"></span></a>
                                            <?php
                                                }
                                            ?>     
                                          </td>
                                          <td>
                                              <a href="{{URL::to('edit_product/'.$pro->product_id)}}">
                                                <button class="btn btn-primary">Sửa</button>
                                              </a>
                                              <a onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('delete_product/'.$pro->product_id)}}">
                                                <button class="btn btn-primary">Xóa</button>
                                              </a>
                                          </td>
                                        </tr>
                                         @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection