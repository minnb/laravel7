<header id="pageTop" class="header-wrapper">
  <div class="container-fluid color-bar top-fixed clearfix">
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

  <!-- TOP INFO BAR -->
  <div class="top-info-bar bg-color-7 hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <ul class="list-inline topList">
            <li><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <a href="mailto:dieuhanh.binhanviet@gmail.com">dieuhanh.binhanviet@gmail.com</a></li>
            <li><i class="fa fa-phone bg-color-2" aria-hidden="true"></i> 086 888 1336</li>
          </ul>
        </div>
        <div class="col-sm-5">
          <ul class="list-inline functionList">
            <li style="float: right;">
              <a href="#" >
                <span class="label label-success">Đăng ký ngay</span>  
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home')}}"><img src="{{ asset('assets/img/logo-school.png')}}" alt="Kidz School"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown singleDrop color-1  active ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span class="active">Trang chủ</span>
            </a>
          </li>
          <li class="dropdown singleDrop color-5 ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text-o bg-color-6" aria-hidden="true"></i> <span>Chương trình</span></a>
          </li>
          <li class="dropdown singleDrop color-2 ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>Hình ảnh</span></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class=" "><a href="#">Tour trong nước</a></li>
              <li class=" "><a href="#">Tour ngước ngoài</a></li>
            </ul>
          </li>

          <li class="dropdown singleDrop color-3 ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-calendar bg-color-6" aria-hidden="true"></i> <span>Video</span></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class=" "><a href="#">Tour 1 ngày</a></li>
              <li class=" "><a href="#">Tour 2 ngày</a></li>
            </ul>
          </li>

          <li class="dropdown singleDrop color-4 ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>Liên hệ</span></a>
          </li>
        </ul>
      </div>
      </div>
    </div>
  </nav>
</header>
