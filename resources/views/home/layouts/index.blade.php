@extends('home.app')
@section('content')
  @include('home.layouts.banner')
  <section class="whiteSection full-width clearfix aboutSchool">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="assets/img/home/about-school.png" alt="image" class="img-responsive wow fadeInUp">
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <div class="schoolInfo wow fadeInUp">
              <p>Chào mừng đến với</p>
              <h2><span>Dã ngoại cuối tuần</span></h2>
              <p>Dấu chân tự nhiên là dự án giáo dục thiên nhiên cho trẻ em được tài trợ bởi APFNET- tổ chức Châu Á Thái Bình Dương về quản lí và bảo tồn rừng. </p>
              <p class="aboutP2">Nếu bạn không có thời gian đi xa, tại sao ta lại không đi gần. Thế giới ngay cạnh ta cũng có nhiều cái thú vị</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====================================
    ——— FEATURE SECTION
    ===================================== -->
  <section class="colorSection full-width clearfix bg-color-4 servicesSection">
      <div class="container">
        <div class="sectionTitle text-center alt wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Mục tiêu</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-cutlery bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Ẩm thực</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-heart bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Tình yêu thương</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-shield bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Di chuyển</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 hidden-xs">
            <div class="text-center wow fadeInUp">
              <img src="assets/img/home/services.png" alt="image">
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-car bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Khám phá</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Giáo dục</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-leaf bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Hoạt động</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!-- ====================================
    ——— TESTIMONIAL SECTION
    ===================================== -->
    <section class="mainContent full-width clearfix testimonialArea">
      <div class="container">
        <div class="sectionTitle text-center wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Sư mệnh</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row testimonial-grid wow fadeInUp">
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-4 wow fadeInUp">
              <span class="userSign border-color-4"><i class="fa fa-quote-left color-1" aria-hidden="true"></i></span>
              <p>Nuôi dưỡng các mối quan hệ và sự kết nối giữa trẻ em, người lớn và thế giới tự nhiên. Mỗi đứa trẻ đều học hỏi một cách chủ động thông qua việc khám phá thế giới bằng tất cả các giác quan.</p>
              <h3>Gắn kết</h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-2 wow fadeInUp">
              <span class="userSign border-color-2"><i class="fa fa-quote-left color-2" aria-hidden="true"></i></span>
              <p>Nuôi dưỡng các mối quan hệ và sự kết nối giữa trẻ em, người lớn và thế giới tự nhiên. Mỗi đứa trẻ đều học hỏi một cách chủ động thông qua việc khám phá thế giới bằng tất cả các giác quan.</p>
              <h3>Phát triển bản thân</h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-3 wow fadeInUp">
              <span class="userSign border-color-3"><i class="fa fa-quote-left color-3" aria-hidden="true"></i></span>
              <p>Nuôi dưỡng các mối quan hệ và sự kết nối giữa trẻ em, người lớn và thế giới tự nhiên. Mỗi đứa trẻ đều học hỏi một cách chủ động thông qua việc khám phá thế giới bằng tất cả các giác quan.</p>
              <h3>Phát triển giao tiếp</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--====================================
    ——— COUNT UP SECTION
    ===================================== -->
    <section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall wow fadeInUp">
          <h2>Lợi ích</h2>
          <p>Giúp mọi trẻ em phát triển</p>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">179</div>
              <div class="counterInfo bg-color-1">Thể chất</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">579</div>
              <div class="counterInfo bg-color-2">Trí tuệ</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">279</div>
              <div class="counterInfo bg-color-3">Cảm nhận</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">479</div>
              <div class="counterInfo bg-color-4">Tương tác</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix coursesSection "  id="ourCourses" >
      <div class="container">
        <div class="sectionTitle text-center">
          <h2 class="wow fadeInUp" >
            <span class="shape shape-left bg-color-4"></span>
            <span>Tour dã ngoại cuối tuần</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row ">
          <div class="col-sm-6 col-md-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="course-single-left-sidebar.html"><img src="assets/img/home/courses/course-1.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="course-single-left-sidebar.html" class="color-1">Vườn quốc gia Ba Vì</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 10 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>“Hành trình vạn dặm bắt đầu từ bước chân nhỏ bé”  Nụ cười trong trẻo, những bỡ ngỡ, thích thú của các bạn nhỏ khi lần đầu được làm quen, nhìn ngắm một thế giới ...</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="course-single-left-sidebar.html"><img src="assets/img/home/courses/course-2.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="course-single-left-sidebar.html" class="color-1">Tour Ninh Bình</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 14 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>“Hành trình vạn dặm bắt đầu từ bước chân nhỏ bé”  Nụ cười trong trẻo, những bỡ ngỡ, thích thú của các bạn nhỏ khi lần đầu được làm quen, nhìn ngắm một thế giới ...</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="course-single-left-sidebar.html"><img src="assets/img/home/courses/course-3.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="course-single-left-sidebar.html" class="color-1">Trải nghiệm Ecopark</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 14 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>“Hành trình vạn dặm bắt đầu từ bước chân nhỏ bé”  Nụ cười trong trẻo, những bỡ ngỡ, thích thú của các bạn nhỏ khi lần đầu được làm quen, nhìn ngắm một thế giới ...</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="course-single-left-sidebar.html"><img src="assets/img/home/courses/course-4.jpg" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="course-single-left-sidebar.html" class="color-1">Thung Nham Ninh Bình</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 14 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>“Hành trình vạn dặm bắt đầu từ bước chân nhỏ bé”  Nụ cười trong trẻo, những bỡ ngỡ, thích thú của các bạn nhỏ khi lần đầu được làm quen, nhìn ngắm một thế giới ...</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="course-single-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix homeGallerySection" id="ourGallery">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2 class="wow fadeInUp">
            <span class="shape shape-left bg-color-4"></span>
            <span>Chương trình</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-xs-12 ">
            <div class="filter-container isotopeFilters wow fadeInUp">
              <ul class="list-inline filter">
                <li class="active"><a href="#" data-filter="*">Tất cả</a></li>
                <li><a href="#" data-filter=".charity">Tour dã ngoại cuối tuần</a></li>
                <li><a href="#" data-filter=".nature">Teambuiding</a></li>
                <li><a href="#" data-filter=".children">GALA</a></li>
              </ul>
            </div>
          </div>
        </div>
                <div class="row isotopeContainer" id="container">
          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_1.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_1.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_2.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_2.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_3.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_3.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_4.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_4.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_5.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_5.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_6.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_6.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_7.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_7.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gallery_sm_8.jpg" alt="image" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gallery_lg_8.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>
        </div>

        <div class="btnArea">
          <a href="photo-gallery.html" class="btn btn-primary">Xem tất cả</a>
        </div>

      </div>
    </section>

    <!--====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2 class="wow fadeInUp">
            <span class="shape shape-left bg-color-4"></span>
            <span>Hành trình trải nghiệm</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12 block ">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="single-blog-left-sidebar.html"><img src="assets/img/home/news/news-1.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">10 <br>July</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">Đồng cừu Gia Hưng - Thung Nham Ninh Bình</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p> Cánh đồng cừu rộng lớn nằm yên ả bên triền đê, hứa hẹn mang đến cho bạn nhiều bức ảnh sống ảo tuyệt đẹp. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-xs-12 block ">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="single-blog-left-sidebar.html"><img src="assets/img/home/news/news-2.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">20 <br>July</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">Trải nghiệm vườn quốc gia Ba Vì</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p> Vườn quốc gia Ba Vì đặc biệt thú vị và hấp dẫn vào dịp cuối tuần. Khám phá, trải nghiệm tuyệt vời. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
        

        <div class="col-sm-4 col-xs-12 block ">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="single-blog-left-sidebar.html"><img src="assets/img/home/news/news-3.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">20 <br>July</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">Trại ngựa Bá Vân</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p> Từng đàn ngựa tung tăng gặm cỏ, thỏa sức chạy nhảy, trại ngựa Bá Vân vào lúc ấy tựa như một thảo nguyên thu nhỏ. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
@endsection
