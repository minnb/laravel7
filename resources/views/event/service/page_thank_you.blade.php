@extends('event.app')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>Thank you</h1>
		<span><i>Công ty du lịch Bình An Việt</i></span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Gửi yêu cầu thành công</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix">
				<h3>Cám ơn quý khách hàng đã gửi thông tin</h3>
				<blockquote>
					<p>Ngay khi nhận được thông tin, chúng tôi sẽ phản hồi tới bạn trong thời gian sớm nhất.</p>
					<p>Liên hệ: <strong>039 665 2955</strong> nếu bạn có bất kỳ thắc mắc được giải đáp!</p>
				</blockquote>

				<div class="line"></div>
			</div>
		</div>
		@include('event.layouts.testimonials')
	</div>
</section>
@endsection