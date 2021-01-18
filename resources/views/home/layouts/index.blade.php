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
              <p>{!! $homePage->description !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
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
                <p>{!! $MucTieu->name1 !!}</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-heart bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Tình yêu thương</h3>
                <p>{!! $MucTieu->name2 !!}</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-shield bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Di chuyển</h3>
                <p>{!! $MucTieu->name3 !!}</p>
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
                <p>{!! $MucTieu->name4 !!}</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Giáo dục</h3>
                <p>{!! $MucTieu->name5 !!}</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-leaf bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Hoạt động</h3>
                <p>{!! $MucTieu->name6 !!}</p>
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
            <span>Sứ mệnh</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row testimonial-grid wow fadeInUp">
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-4 wow fadeInUp">
              <span class="userSign border-color-4"><i class="fa fa-quote-left color-1" aria-hidden="true"></i></span>
              <p>Nuôi dưỡng các mối quan hệ và sự kết nối giữa trẻ em, người lớn và thế giới tự nhiên.</p>
              <h3>Gắn kết</h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-2 wow fadeInUp">
              <span class="userSign border-color-2"><i class="fa fa-quote-left color-2" aria-hidden="true"></i></span>
              <p>Giúp mọi trẻ em phát triển ý thức về bản thân, sức khỏe và hạnh phúc</p>
              <h3>Phát triển</h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-3 wow fadeInUp">
              <span class="userSign border-color-3"><i class="fa fa-quote-left color-3" aria-hidden="true"></i></span>
              <p>Thúc đẩy kỹ năng truyền đạt và biểu cảm của trẻ dưới mọi hình thức.</p>
              <h3>Giao tiếp</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
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
        @if(isset($topTourIndex))
        @foreach($topTourIndex as $key=>$item)
          <div class="col-sm-6 col-md-3 col-xs-12 block">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}"><img src="{{asset($item->thumbnail)}}" alt="image" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="color-1">{!! $item->name !!}</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 10 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>{!! \Illuminate\Support\Str::limit($item->description, 150, '...') !!}</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="#" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </section>
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
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-01.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-01.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/gala-02.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/gala-02.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-02.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-02.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector charity">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-03.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-03.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector nature">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-04.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-04.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-05.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-05.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-06.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-06.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 isotopeSelector children ">
            <article class="wow fadeInUp">
              <figure>
                <img src="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-07.jpg" alt="da-ngoai-cuoi-tuan-cung-con" class="img-rounded">
                <div class="overlay-background">
                  <div class="inner"></div>
                </div>
                <div class="overlay">
                  <a data-fancybox="images" href="assets/img/home/home_gallery/cung-con-ra-ngoai-choi-07.jpg">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
              </figure>
            </article>
          </div>
        </div>
        <!--
        <div class="btnArea">
          <a href="photo-gallery.html" class="btn btn-primary">Xem tất cả</a>
        </div>
        -->
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
                <h3><a href="single-blog-left-sidebar.html" class="color-1">Đồng cừu Gia Hưng</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p> <strong>Cánh đồng cừu</strong> rộng lớn nằm yên ả bên triền đê, hứa hẹn mang đến cho bạn nhiều bức ảnh sống ảo tuyệt đẹp. </p>
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
                <h3><a href="single-blog-left-sidebar.html" class="color-1">Vườn quốc gia Ba Vì</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p>Vườn quốc gia <strong>Ba Vì</strong> đặc biệt thú vị và hấp dẫn vào dịp cuối tuần. Khám phá, vui chơi và trải nghiệm tuyệt vời. </p>
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
                <p>Từng đàn ngựa tung tăng gặm cỏ, thỏa sức chạy nhảy, <strong>trại ngựa Bá Vân</strong> vào lúc ấy tựa như một thảo nguyên... </p>
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
