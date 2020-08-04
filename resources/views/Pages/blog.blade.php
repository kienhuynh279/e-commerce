@extends('index')
@section('content')


 <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Tin Tức</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Hero Area End-->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-6 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{('public/Font-end/assets/img/blog/single_blog_1.png')}}" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{URL::to('blog-detail')}}">
                                        <h2>MẶT SỐ CHẤT LIỆU XÀ CỪ
                                            LÀM NỔI BẬT VẺ ĐẸP TỰ NHIÊN
                                            </h2>
                                    </a>
                                    <p>Chất liệu đá xà cừ làm nên những hình ảnh huyền bí đầy bất ngờ từ chính chất liệu tự nhiên của nó. Tùy thuộc vào nguồn gốc của chất liệu xà cừ, nó có thể mang màu hồng, trắng, đen hoặc màu vàng. Khác nhau về màu sắc, cường độ và cấu trúc theo các phần của vỏ mà từ đó được chiết xuất.
                                        </p>
                                </div>
                            </article>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>

@endsection