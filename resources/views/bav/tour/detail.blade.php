@extends('bav.app')
@section('content')
<?php
    $option_data = json_decode($tour_detail->options);
?>
<section id="page-title">
	<div class="container clearfix">
		<h1>{{$cate_of_tour[0]->name}}</h1>
		<span class="tour_name">{{$tour_detail->name}}</span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
			<li class="breadcrumb-item"><a href="{{ route('get.tour.by.cate', ['cate'=>$cate_of_tour[0]->alias]) }}">{{$cate_of_tour[0]->name}}</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-product">
				<div class="product">
					<div class="col_two_fifth">
						<div class="product-image">
							<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
								<div class="flexslider">
									<div class="slider-wrap" data-lightbox="gallery">
										<div class="slide" data-thumb="{{asset($tour_detail->thumbnail)}}"><a href="{{asset($tour_detail->thumbnail)}}" title="{{$tour_detail->name}}" data-lightbox="gallery-item"><img src="{{asset($tour_detail->thumbnail)}}" alt="{{$tour_detail->name}}"></a></div>
									</div>
								</div>
							</div>
							<div class="sale-flash">Sale!</div>
						</div>
					</div>
					<div class="col_two_fifth product-desc">
						<div class="product-price">
							<ins>{{number_format($tour_detail->unit_price)}} vnd</ins>
						</div>
						<div class="product-rating">
							<i class="icon-star3"></i>
							<i class="icon-star3"></i>
							<i class="icon-star3"></i>
							<i class="icon-star3"></i>
							<i class="icon-star-half-full"></i>
						</div>
						<div class="clear"></div>
						<div class="line"></div>
						<form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
							<div class="quantity clearfix">
								<input type="button" value="-" class="minus">
								<input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
								<input type="button" value="+" class="plus">
							</div>
							<button type="submit" class="add-to-cart button nomargin">Đặt ngay</button>
						</form>
						<div class="clear"></div>
						<div class="line"></div>
						
						<div class="si-share noborder clearfix">
							<span>Share:</span>
							<div>
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

							</div>
						</div>
					</div>
					<div class="col_one_fifth col_last">
						<a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="{{asset('event/images/logo.png')}}" alt="Brand Logo"></a>
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<div class="fbox-icon">
								<i class="icon-thumbs-up2"></i>
							</div>
							<h3>Độc đáo</h3>
							
						</div>
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<div class="fbox-icon">
								<i class="icon-credit-cards"></i>
							</div>
							<h3>Tận tâm</h3>
						</div>
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<div class="fbox-icon">
								<i class="icon-scribd"></i>
							</div>
							<h3>Gắn kết</h3>
						</div>
						<div class="feature-box fbox-plain fbox-dark fbox-small">
							<div class="fbox-icon">
								<i class="icon-phone"></i>
							</div>
							<h3>0979.424.775</h3>
						</div>
					</div>
   				    <div class="col_full nobottommargin">
   				    	<div class="accordion accordion-bg clearfix">
							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open"></i><span class="uppercase-span">Giới thiệu</span></div>
							<div class="acc_content clearfix">{!! $cate_of_tour[0]->description !!}</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open"></i><span class="uppercase-span">Lịch trình tour</span></div>
							<div class="acc_content clearfix">{!! $cate_of_tour[0]->content !!}</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open"></i><span class="uppercase-span">Giá tour</span></div>
							<div class="acc_content clearfix">{!! $option_data->service !!}</div>

							<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open"></i><span class="uppercase-span">Chính sách tour</span></div>
							<div class="acc_content clearfix">{!! $option_data->policy !!}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div><div class="line"></div>
			<div class="col_full nobottommargin">
				<h4>Related Products</h4>
			</div>
		</div>
	</div>
</section>
@endsection