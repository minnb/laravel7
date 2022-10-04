@extends('event.app')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>BÁO GIÁ</h1>
		<span><i>Công ty du lịch Bình An Việt</i></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Báo giá</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="col_three_fifth nobottommargin">
				<div class="fancy-title title-bottom-border">
					<h3>Cám ơn bạn đã quan tâm đến dịch vụ của chúng tôi</h3>
				</div>
				<p>Để nhận báo giá tổ chức sự kiện trọn gói cũng như các dịch vụ khác, vui lòng điền thông tin của bạn theo mẫu phía bên dưới. Ngay khi nhận được thông tin, chúng tôi sẽ phản hồi tới bạn trong thời gian sớm nhất.</p>

				<div id="pricing-switch" class="pricing row bottommargin-lg clearfix">
						<div class="col-lg-12 col-md-12">
							<div class="pricing-box">
								<div class="pricing-price">
									<a href="#" style="margin-bottom: 10px;"><i class="icon-phone i-alt"></i></a> 
								</div>
								<div class="pricing-price">
									039 665 2955
								</div>
								<div class="pricing-features">
									<ul>
										<li><i>Gọi ngay để được TƯ VẤN MIỄN PHÍ 24/24</i></li>
										<li><i class="icon-time"></i> Báo giá ngay sau 2 GIỜ đồng hồ nhận yêu cầu</li>
										<li>Chi phí rõ ràng, <strong>KHÔNG</strong> tô vẽ</li>
										<li><strong>100%</strong> theo đúng ý tưởng, kế hoạch</li>
										<li>Xử lý mọi tình huống theo hướng <strong>CÓ LỢI</strong> cho khách hàng</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="col_two_fifth nobottommargin col_last">
				<div id="job-apply" class="fancy-title title-bottom-border">
					<h3>Nhập thông tin</h3>
				</div>
				<div class="form-widget">
					<form class="form-horizontal" name="form-contact" role="form" action="{{ route('post.event.price.contact') }}" method="post" enctype="multipart/form-data">
						<div class="col_full">
							<label for="form-contact">Họ tên</label>
							<input type="text" name="name"  value="" size="22" tabindex="8" class="sm-form-control" required />
						</div>
						<div class="col_full">
							<label for="form-contact">Số điện thoại</label>
							<input type="text" name="phone"  value="" size="22" tabindex="8" class="sm-form-control" required/>
						</div>
						<div class="col_full">
							<label for="form-contact">Email</label>
							<input type="text" name="email"  value="" size="22" tabindex="8" class="sm-form-control" required/>
						</div>
						<div class="col_full">
							<label for="form-contact">Nội dung <small>*</small></label>
							<textarea name="content" rows="6" tabindex="11" class="sm-form-control required"></textarea>
						</div>
						<div class="col_full">
							<button class="button button-3d button-large btn-block nomargin" type="submit" name="sending" value="">Gửi yêu cầu</button>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection