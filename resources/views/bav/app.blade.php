@include('bav.layouts.header')
  <div id="wrapper" class="clearfix">
  @include('bav.layouts.top_bar')
  @include('bav.layouts.nav')
    @yield('content')
  @include('bav.layouts.footer')
</div><!-- #wrapper end -->
@include('bav.layouts.footer_js')