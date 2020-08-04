
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
                              <h2>Tin Tức</h2>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
      
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{('public/Font-end/assets/img/blog/single_blog_1.png')}}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2>Casio sẽ phát hành mẫu G-SHOCK mới được hợp tác với HondaJet
                        </h2>
                        <p class="excert">
                           Tokyo, ngày 8 tháng 7 năm 2020 - Casio Computer Co., Ltd., 
                           hôm nay tuyên bố phát hành một bổ sung mới cho dòng đồng hồ khái niệm hàng không GRAVITYMASTER, một phần của thương hiệu đồng hồ chống sốc G-SHOCK.
                            Casio đã tạo ra GWR-B1000HJ lấy cảm hứng từ thiết kế của máy bay phản lực kinh doanh hạng nhẹ tiên tiến HondaJet Elite.
                        </p>
                        <p>
                           HondaJet Elite là máy bay kinh doanh hạng nhẹ được phân phối nhiều nhất trên thế giới trong lớp, được sản xuất bởi Công ty Máy bay Honda,
                            một công ty con thuộc sở hữu của American Honda Motor Co., Inc. xác định lại thiết kế máy bay thông thường. 
                            HondaJet là đối tác hợp tác phù hợp cho G-SHOCK, vì hai thương hiệu có chung cam kết luôn luôn chấp nhận những thách thức mới và tận dụng 
                            công nghệ tiên tiến nhất.
                        <div class="quote-wrapper">
                           <div class="quotes">
                              HondaJet Elite là máy bay bay nhanh nhất, xa nhất và bay cao nhất trong lớp. 
                              HondaJet Elite kết hợp với Công ty Máy bay Honda, đổi mới nhiều công nghệ, bao gồm cấu hình Over-The-Wing Engine Mount (OTWEM) độc đáo, 
                              mũi và cánh của dòng chảy tự nhiên (NLF) và thân máy bay composite. Máy bay cũng được trang bị động cơ GE Honda Aero Engines HF120. 
                              HondaJet Elite sử dụng vật liệu composite trong thân máy bay, giúp giảm trọng lượng máy bay và cho phép thiết kế thân máy bay tích hợp, 
                              dẫn đến tăng tuổi thọ kết cấu. Tất cả những tiến bộ này góp phần vào hiệu suất vượt trội của máy bay, hiệu quả vô song và không gian thân 
                              máy bay tối đa, khiến khoang máy bay của máy bay trở thành lớn nhất trong lớp. Đội tàu của HondaJet hiện bao gồm hơn 150 máy bay 
                              trên toàn thế giới và là máy bay phản lực hạng nhẹ được phân phối nhiều nhất trong năm 2017, 2018 và 2019.
                           </div>
                        </div>
                        <p>
                           Giống như GWR-B1000 - model mà GWR-B1000HJ dựa trên - chiếc đồng hồ mới có cấu trúc Carbon Core Guard chống sốc cải tiến, 
                           tận dụng tối đa khả năng chống sốc, độ cứng và độ bền của sợi carbon, một vật liệu cũng được sử dụng trong thân máy bay. 
                           Mô hình hợp tác đặc biệt này cộng hưởng với việc theo đuổi sự dẻo dai và thế giới hàng không.
                        </p>
                        <p>
                           Hồi phục Fujino Nhật tại Nhật Bản bao gồm Giải thưởng Công nghệ Công nghiệp Nhật Bản 
                           (Giải thưởng Thủ tướng Chính phủ). Ông cũng được đánh giá cao trong lĩnh vực thiết kế công nghiệp, 
                           nhận Giải thưởng Thiết kế Vàng tốt và được vinh danh với Lựa chọn Bảo tàng Thiết kế JIDA .
                        </p>
                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->
   </main>

@endsection