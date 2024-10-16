@extends('bav.app')
@section('content')
<section id="content">
	<div class="content-wrap">
		@include('bav.layouts.banner')
		@include('bav.layouts.promotion')
		<div class="container clearfix">
			@if(isset($index_category))
			@foreach($index_category as $item)
				<div class="fancy-title title-dotted-border title-center margin-top-40">
					<h3 class="h3-uppercase">{{$item->name}}</h3>
				</div>
				<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
					<?php 
						$index_tours = $global_tours->where('categories', $item->id);
					?>
					@foreach($index_tours as $tour)
					<div class="product clearfix background_F8F8F8">
						<div class="product-image">
							<a href="#"><img src="{{asset($tour->thumbnail)}}" alt="{{$tour->name}}"></a>
							<a href="#"><img src="{{asset($tour->thumbnail)}}" alt="{{$tour->name}}"></a>
							<!--
							<div class="sale-flash">50% Off*</div>
							-->
							<div class="product-overlay">
								<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Đặt tour</span></a>
								<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Chi tiết</span></a>
							</div>
						</div>
						<div class="product-desc">
							<div class="product-title"><h3><a href="#">{{$tour->name}}</a></h3></div>
							
							@if($tour->unit_price > 0)
							<div class="product-price"><ins>{{number_format($tour->unit_price)}}đ</ins></div>
							@else
							<i class="icon-line-tag"></i><span> Liên hệ</span><br>
							@endif
							<i class="icon-location-arrow1"></i><span> Thái Lan</span><br>
							<i class="icon-time"></i><span> {{getTourTime()[$tour->base_unit]}}</span><br>
							<i class="icon-calendar3"></i><span> Hàng tuần</span>

						</div>
					</div>
					@endforeach
				</div>
				<div class="clear"></div>
			@endforeach
			@endif
		@include('bav.layouts.team')
		</div>

	</div>
</section><!-- #content end -->
@endsection