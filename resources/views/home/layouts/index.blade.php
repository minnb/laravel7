@extends('home.app')
@section('content')
  @include('home.layouts.banner')

  <section class="whiteSection full-width clearfix aboutSchool">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="assets/img/home/about-school.png" alt="Dã ngoại cuối tuần" class="img-responsive wow fadeInUp">
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <div class="schoolInfo wow fadeInUp">
              <p>Chào mừng bạn đến với</p>
              <h2><span>Cùng con ra ngoài chơi</span></h2>
              <p>{!! $homePage->description !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- <section class="promotionWrapper " style="background-image: url({{asset('assets/img/home/promotion-1.jpg')}});" > -->
  <section class="colorSection full-width clearfix bg-color-4  teamSection" id="ourTeam">
      <div class="container">
        <div class="promotionInfo wow fadeInUp">
          <h2 style="color:white">Sứ mệnh của chúng tôi</h2>
          <p style="color:white; line-height: 28px;font-size: 16.5px">Cùng con ra ngoài chơi được xây dựng dựa trên sứ mệnh tổ chức tour trải nghiệm tự nhiên, cùng Trẻ ra ngoài chơi, đáp ứng tối đa kỳ vọng trải nghiệm, khám phá tự nhiên, văn hóa, giải trí, kích hoạt đa giác quan của trẻ, giúp trẻ phát triển khả năng tiềm ẩn của chính mình từ đó định vị bản thân và làm chủ cuộc đời</p>
          <a href="{{route('lien-he')}}" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a>
        </div>
      </div>
    </section>

    <section class="colorSection full-width clearfix servicesSection">
      <div class="container">
        <div class="sectionTitle text-center " >
          <h2 class="wow fadeInUp">
            <span class="shape shape-left bg-color-4"></span>
            <span>Mục tiêu</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row ">
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="media featuresContent wow fadeInUp">
              <span class="media-left bg-color-1">
                <i class="fa fa-graduation-cap bg-color-1" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-1">Phát triển giao tiếp</h3>
                <p>Mỗi một bạn nhỏ đều có khả năng giao tiếp, thể hiện bản thân theo nhiều cách. Các hoạt động trải nghiệm của chúng tôi đều có các hoạt động thúc đẩy kỹ năng truyền đạt và biểu cảm của trẻ dưới mọi hình thức.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="media featuresContent wow fadeInUp">
              <span class="media-left bg-color-2">
                <i class="fa fa-leaf bg-color-2" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-2">Kết nối</h3>
                <p>Hoạt động dã ngoại tạo ra các mối quan hệ cộng đồng và sự kết nối giữa trẻ em, người lớn và thế giới xung quanh. Trẻ sẽ được học một cách chủ động thông qua việc khám phá thế giới bằng tất cả các giác quan.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="media featuresContent wow fadeInUp">
              <span class="media-left bg-color-3">
                <i class="fa fa-shield bg-color-6" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-3">Ý thức tự giác</h3>
                <p>Có thể nói “ý thức tự giác” là một hình thức rèn luyện bản thân có chọn lọc, tạo nên những thói quen mới trong cách nghĩ, cách hành động và diễn thuyết để nâng cao bản thân và hướng đến thành công </p>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </section>
 
     <section class="colorSection full-width clearfix teamSection bg-color-3" id="ourTeam">
      <div class="container">
        <div class="sectionTitle text-center alt">
          <h2 class="wow fadeInUp">
            <span class="shape shape-left"></span>
            <span>Giá trị cốt lõi</span>
            <span class="shape shape-right"></span>
          </h2>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="Lead gia-tri-cot-loi"><strong>Mọi trẻ em đều tò mò:</strong> Trẻ luôn tự hỏi, đặt câu hỏi và khám phá về thế giới xung quanh</p>
            <p class="gia-tri-cot-loi"><strong>Mọi trẻ em đều học chủ động:</strong> Trẻ em học tốt nhất khi được tham gia tích cực vào các hoạt động trải nghiệm và khám phá</p>
            <p class="text-sm gia-tri-cot-loi"><strong>Trẻ em đều rất thông minh:</strong> Hầu như không có giới hạn cho những gì trẻ em có thể học. Với môi trường và sự hỗ trợ phù hợp, trẻ em có thể học hầu hết mọi thứ. không khó đề giúp trẻ phát triển những kỹ năng tự tin, thể chất, sáng tạo</p>
            <p class="text-xs gia-tri-cot-loi"><strong></strong>Nếu được trải nghiệm hoạt động dã ngoại thiên nhiên kết hợp hoạt náo đồng đội, là quãng thời gian tuyệt vời để kết nối những thành viên trong gia đình. Bên cạnh đó cảm nhận bầu không khí trong lành của thiên nhiên chắc chắn sẽ khiến các gia đình gắn kết hơn, yêu thêm chuyến dã ngoại cuối tuần</p>
            <p class="text-xs gia-tri-cot-loi"><strong></strong> Cùng Con Ra ngoài Chơi luôn cố  gắng hết mình để thực hiện các hành trình dã ngoại dã ngoại có ý nghĩa về giáo dục và trải nghiệm tự nhiên đặc biệt là cam kết các dịch vụ với khách hàng</p>
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
              <a href="{{ route('get.home.tour.detail',['cate'=>getRoute1Name(0),'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">
                <img src="{{asset($item->thumbnail)}}" alt="{!! $item->name !!}" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="{{ route('get.home.tour.detail',['cate'=>getRoute1Name(0),'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="color-3">{!! $item->name !!}</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Từ 2 đến 10 tuổi</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>1 ngày</li>
                </ul>
                <p>{!! \Illuminate\Support\Str::limit($item->description, 150, '...') !!}</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="#" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
                  <li><a href="{{ route('get.home.tour.detail',['cate'=>getRoute1Name(0),'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
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
            <span>Hình ảnh</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
        <div class="row">
          <div class="col-xs-12 ">
            <div class="filter-container isotopeFilters wow fadeInUp">
              <ul class="list-inline filter">
                <li class="active"><a href="#" data-filter="*">Tất cả</a></li>
                <li><a href="#" data-filter=".charity">Dã ngoại cuối tuần</a></li>
                <li><a href="#" data-filter=".nature">Sự kiện</a></li>
                <li><a href="#" data-filter=".children">Hội nghị</a></li>
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
        @if(isset($topPostIndex))
        @foreach($topPostIndex as $key=>$item)
          <div class="col-sm-4 col-xs-12 block ">
            <div class="thumbnail thumbnailContent wow fadeInUp">
              <a href="{{ route('get.home.post.detail',['cate'=>'hanh-trinh-trai-nghiem','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->title).'.html'])}}"><img src="{{ asset($item->thumbnail)}}" alt="{!! $item->title !!}" class="img-responsive"></a>
              <div class="caption border-color-1">
                <h3><a href="{{ route('get.home.post.detail',['cate'=>'hanh-trinh-trai-nghiem','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->title).'.html'])}}" class="color-6" alt="{!! $item->title !!}">{!! $item->title !!}</a></h3>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Lê Tám</a></li>
                  <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Bình luận</a></li>
                </ul>
                <p> {!! \Illuminate\Support\Str::limit($item->description, 160, '...') !!}</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="{{ route('get.home.post.detail',['cate'=>'hanh-trinh-trai-nghiem','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->title).'.html'])}}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
                </ul>
              </div>
            </div>
          </div> 
        @endforeach   
        @endif
        </div>

      </div>
    </section>
@endsection
