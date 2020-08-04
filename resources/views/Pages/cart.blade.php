@extends('index')
@section('content')

<main>
      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>GIỎ HÀNG</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng Cộng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <img src="{{('public/Font-end/assets/img/gallery/card2.png')}}" alt="" />
                        </div>
                        <div class="media-body">
                          <p>Rolex KH-1654</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>1000000</h5>
                    </td>
                    <td>
                      <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>1000000</h5>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Tổng Cộng: </h5>
                    </td>
                    <td>
                      <h5>1000000</h5>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="{{URL::to('shop')}}">Thanh Toán</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>

@endsection