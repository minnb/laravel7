@extends('home.app')
@section('content')
<section class="pageTitleSection" style="background-image: url('{{asset('assets/img/page-title/page-title-bg.jpg')}}'">
  <div class="container">
    <div class="pageTitleInfo">
      <h2>Liên hệ</h2>
      <ol class="breadcrumb">
        <li><a href="{{ route('home')}}">Trang chủ</a></li>
        <li class="active">Liên hệ</li>
      </ol>
    </div>
  </div>
</section>
<section class="mainContent full-width clearfix conactSection">
      <div class="container">
       <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-1" href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Địa chỉ:</h3>
                <p>Số 18 ngõ 52 Hoàng Công Chất, Bắc Từ Liêm, Hà Nội</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-2" href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Điện thoại:</h3>
                <p>0396 652 955</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media addressContent">
              <span class="media-left bg-color-3" href="#">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Email:</h3>
                <p><a href="mailto:hello@example.com">dieuhanh.binhanviet@gmail.com</a>  Or
                </p>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12">
            <div class="homeContactContent">
              <form action="#" method="POST" role="form">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-user"></i>
                      <input type="text" class="form-control border-color-1" id="exampleInputEmail1" placeholder="Họ tên">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-2" id="exampleInputEmail2" placeholder="Địa chỉ email">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-5" id="exampleInputEmail3" placeholder="Điện thoại">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <input type="text" class="form-control border-color-6" id="exampleInputEmail4" placeholder="Tiêu đề">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <i class="fa fa-comments" aria-hidden="true"></i>
                      <textarea class="form-control border-color-4" placeholder="Nội dung"></textarea>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="formBtnArea">
                      <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection