<?php
  $footerTop4Tour = App\Models\Product::Top4Product(4);
?>
    <footer>
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>
      <div class="footerInfoArea full-width clearfix" style="background-image: url({{asset('assets/img/footer/footer-bg-1.png')}});">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <a href="index.html"><img src="{{asset('assets/img/logo-footer.png')}}"></a>
              </div>
              <div class="footerInfo">
                <p>Số 18 ngõ 52 Hoàng Công Chất, Bắc Từ Liêm, Hà Nội</p>
                <p>Hotline: 0396 652 955</p>
                <p>dieuhanh.binhanviet@gmail.com</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Địa điểm trải nghiệm</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Ba Vì
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Ninh Bình
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Thái Nguyên
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Hà Nội
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Hà Giang
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Sơn Tây
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Dã ngoại cuối tuần</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled postLink">
                  @if(isset($footerTop4Tour))
                  @foreach($footerTop4Tour as $item)
                  <li>
                    <div class="media">
                      <a class="media-left" href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">
                        <img class="media-object img-rounded border-color-1" src="{{asset($item->thumbnail)}}" alt="{!! $item->name !!}">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">{!! $item->name !!}</a></h5>
                        <p>{!! $item->updated_at !!}</p>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="fb-page" data-href="https://www.facebook.com/CungConRaNgoaiChoi.BinhAnViet" data-tabs="timeline,events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
                <blockquote cite="https://www.facebook.com/CungConRaNgoaiChoi.BinhAnViet" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CungConRaNgoaiChoi.BinhAnViet">Cùng con ra ngoài chơi</a></blockquote></div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
              <ul class="list-inline">
                <li><a href="#" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-5"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2021 Copyright VietpeaceTravel by <a href="#">sunrise</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
    <div class="scrolling">
      <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{asset('assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{asset('assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{asset('assets/plugins/waypoint/waypoints.min.js') }}"></script>
    <script src="{{asset('assets/plugins/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('assets/plugins/isotope/isotope.min.js') }}"></script>
    <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{asset('assets/plugins/isotope/isotope-triger.js') }}"></script>
    <script src="{{asset('assets/plugins/countdown/jquery.syotimer.js') }}"></script>
    <script src="{{asset('assets/plugins/velocity/velocity.min.js') }}"></script>
    <script src="{{asset('assets/plugins/smoothscroll/SmoothScroll.js') }}"></script>
    <script src="{{asset('assets/plugins/wow/wow.min.js') }}"></script>
    <script src="{{asset('assets/js/app.js') }}"></script>
</body>
</html>