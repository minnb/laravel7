<section class="lightSection full-width clearfix homeContactSection">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-xs-12 ">
        <div class="homeContactContent wow fadeInUp">
          <h2 class="color-6" style="font-size: 28px;">Trải nghiệm theo cách của bạn</h2>
          <p>Thiết kế lịch trình theo mong muốn. Đi đoàn riêng an toàn. Để lại thông tin chúng tôi sẽ liên lạc ngay</p>
          <address>
          	<h4>Tư vấn ngay? Gọi tổng đài</h4>
            <h2><i class="fa fa-phone" aria-hidden="true"></i><strong> 0396.652.955</strong></h2>
            <p><i class="fa fa-envelope bg-color-2" aria-hidden="true"></i><a href="mailto:hello@example.com"> dieuhanh.binhanviet@gmail.com</a></p>
          </address>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="homeContactContent wow fadeInUp">
          <form action="{{ route('post.home.tour.guide', ['type'=>'GUIDE']) }}" method="POST" role="form">
          	@csrf
            <div class="form-group">
              <i class="fa fa-user"></i>
              <input type="text" class="form-control border-color-1" id="exampleInputEmail1" placeholder="Họ tên" name="name">
            </div>
            <div class="form-group">
              <i class="fa fa-user"></i>
              <input type="text" class="form-control border-color-1" id="exampleInputEmail1" placeholder="Điện thoại" name="phone">
            </div>
            <div class="form-group">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input type="text" class="form-control border-color-2" id="exampleInputEmail2" placeholder="Địa chỉ Email" name="email">
            </div>
            <div class="form-group">
              <i class="fa fa-comments" aria-hidden="true"></i>
              <textarea class="form-control border-color-4" placeholder="Cách bạn trải nghiệm: thời gian, số khách, địa điểm..." name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Yêu cầu tư vấn</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>