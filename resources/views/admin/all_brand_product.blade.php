@extends('admin_layout')
@section('admin_content')

<div class="page-content-wrapper">
    <div class="content-viewport">
        <div class="row">
            <div class="col-md-6">
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
                                          <th>Tên nhãn hiệu</th>
                                          <th>Hiển thị</th>
                                          <th ></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($all_brand_product as $key => $brand_pro)
                                        <tr>
                                          <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                        <td>{{$brand_pro->brand_name}}</td>
                                          <td>
                                            <?php 
                                                if($brand_pro -> brand_status == 0){
                                            ?>
                                                    <a href="{{URL::to('unactive_brand/'.$brand_pro->brand_id)}}"><span class="mdi-styling mdi mdi-bullseye mdi-eye-off"></span></a>
                                            <?php
                                                    }                                                  
                                                else {
                                            ?>
                                                    
                                                    <a href="{{URL::to('active_brand/'.$brand_pro->brand_id)}}"><span class="mdi-styling mdi mdi-bullseye mdi-eye"></span></a>
                                            <?php
                                                }
                                            ?>     
                                          </td>
                                          <td>
                                              <a href="{{URL::to('edit_brand_product/'.$brand_pro->brand_id)}}">
                                                <button class="btn btn-primary">Sửa</button>
                                              </a>
                                              <a onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('delete_brand_product/'.$brand_pro->brand_id)}}">
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