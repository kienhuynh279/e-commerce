@extends('index')
@section('content')
<main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".2s" data-duration="2000ms">Du Ngoạn Vào Thế Giới Đồng Hồ</h1>
                                    <p data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">ĐỒNG HỒ ĐƯỢC CHẾ TÁC TỪ CÁC NGUYÊN LIỆU TỐT NHẤT VÀ LẮP RÁP TỈ MỈ ĐẾN TỪNG CHI TIẾT</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="{{URL::to('shop')}}" class="btn hero-btn">Cửa Hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{('public/Font-end/assets/img/hero/watch.png')}}" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".2s" data-duration="2000ms">Mua Đồng Hồ Tại TimeZone</h1>
                                    <p data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">Better Starts Now là niềm tin đơn giản
                                        Luôn luôn có thể làm cho một điều gì đó tốt đẹp hơn,
                                        Và bây giờ là lúc để bắt đầu thực hiện nó.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="{{URL::to('shop')}}" class="btn hero-btn">Cửa Hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{('public/Font-end/assets/img/hero/watch.png')}}" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class="new-product-area section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>Sản Phẩm Mới</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($product as $key => $product)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src={{('public/upload/product/'.$product->product_img)}} alt="">
                            </div>
                            <div class="product-caption">
                            <h3><a href="{{URL::to('product')}}">{{$product->product_name}}</a></h3>
                                <span>{{$product->product_price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
       <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url({{('public/Font-end/assets/img/gallery/gallery1.png')}});"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url({{('public/Font-end/assets/img/gallery/gallery2.png')}});"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url({{('public/Font-end/assets/img/gallery/gallery3.png')}});"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url({{('public/Font-end/assets/img/gallery/gallery4.png')}});"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-70 text-center">
                            <h2>Thương Hiệu</h2>
                            <p>TRONG HƠN MỘT THẾ KỶ, ĐỒNG HỒ ĐÃ ĐỒNG HÀNH CÙNG CÁC NHÀ THÁM HIỂM VÀ NHỮNG NHÀ CHINH PHỤC TRÊN KHẮP THẾ GIỚI, TỪ ĐỈNH NÚI CAO NHẤT ĐẾN NƠI SÂU THẲM NHẤT CỦA ĐẠI DƯƠNG.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    @foreach($brand as $key => $brand)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{('public/Font-end/assets/img/gallery/popular1.png')}}" alt="">
                                <div class="img-cap">
                                    <span>Xem thêm</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="{{URL::to('shop')}}">{{$brand->brand_name}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="catagori.html" class="btn view-btn1">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Watch Choice  Start-->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-70 text-center">
                    <h2>Danh mục</h2>
                    <p>TRONG HƠN MỘT THẾ KỶ, ĐỒNG HỒ ĐÃ ĐỒNG HÀNH CÙNG CÁC NHÀ THÁM HIỂM VÀ NHỮNG NHÀ CHINH PHỤC TRÊN KHẮP THẾ GIỚI, TỪ ĐỈNH NÚI CAO NHẤT ĐẾN NƠI SÂU THẲM NHẤT CỦA ĐẠI DƯƠNG.</p>
                </div>
            </div>
        </div>
        <div class="watch-area section-padding30">
            <div class="container">
                @foreach($category as $key => $category)
                @if($category->category_id%2 == 0)
                <div class="row align-items-center justify-content-between padding-130">
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                        <h2>{{$category->category_name}}</h2>
                            <p>{{$category->category_desc}}</p>
                            <a href="shop.html" class="btn">Xem Đồng Hồ</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="{{('public/Font-end/assets/img/gallery/choce_watch1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                @else
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="{{('public/Font-end/assets/img/gallery/choce_watch2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>{{$category->category_name}}</h2>
                            <p>{{$category->category_desc}}</p>
                            <a href="{{URL::to('category/id='.$category->category_id)}}" class="btn">Xem Đồng Hồ</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                {{-- <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="{{('public/Font-end/assets/img/gallery/choce_watch2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>Đồng Hồ Nữ</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic error impedit alias ipsum, modi sit ut. Illo minus corporis laborum, asperiores vitae cupiditate dicta quas voluptas cum, aspernatur voluptates..</p>
                            <a href="{{URL::to('shop')}}" class="btn">Xem Đồng Hồ</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Giao Hàng Miễn Phí</h6>
                                <p>Giao hàng miễn phí trên toàn quốc.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Bảo Hành Trọn Đời</h6>
                                <p>Luôn có những chính sách bảo hàng tốt nhất</p>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Uy Tín 100%</h6>
                                <p>Đảm bảo 100% về nguồn hàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
@endsection