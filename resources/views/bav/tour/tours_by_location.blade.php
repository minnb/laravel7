@extends('bav.app')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>{{$tag_data[0]->name}}</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
			<li class="breadcrumb-item"><a href="#">{{$tag_data[0]->name}}</a></li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
				
				@foreach($tours_by_location as $tour)
				<div class="product clearfix background_F8F8F8">
					<div class="product-image">
						<a href="{{ route('get.tour.detail', ['id'=> $tour->id,'cate'=>$tour->cate_alias,'alias'=>$tour->alias]) }}"><img src="{{asset($tour->thumbnail)}}" alt="{{$tour->name}}"></a>
						<a href="{{ route('get.tour.detail', ['id'=> $tour->id,'cate'=>$tour->cate_alias,'alias'=>$tour->alias]) }}"><img src="{{asset($tour->thumbnail)}}" alt="{{$tour->name}}"></a>
						<!--
						<div class="sale-flash">50% Off*</div>
						-->
						<div class="product-overlay">
							<a href="{{ route('get.tour.detail', ['id'=> $tour->id,'cate'=>$tour->cate_alias,'alias'=>$tour->alias]) }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Đặt tour</span></a>
							<a href="{{ route('get.tour.detail', ['id'=> $tour->id,'cate'=>$tour->cate_alias,'alias'=>$tour->alias]) }}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Chi tiết</span></a>
						</div>
					</div>
					<div class="product-desc">
						<div class="product-title"><h3><a href="{{ route('get.tour.detail', ['id'=> $tour->id,'cate'=>$tour->cate_alias,'alias'=>$tour->alias]) }}">{{$tour->name}}</a></h3></div>
						
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
		</div>
	</div>
</section>
@endsection