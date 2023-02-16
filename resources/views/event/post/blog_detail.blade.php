<?php
	$list_tags = App\Models\Tag::getTagsByPostId($product_detail->id);
?>
@extends('event.app')
@section('content')
<section id="page-title" style="background-image: url({{asset('event/images/background/11.png')}});">
	<div class="container clearfix">
		<h1>{{$product_detail->title}}</h1>
		<span><i>Cho những kỷ niệm đẹp</i></span>
				<ol class="breadcrumb">
			<li class="breadcrumb-item"><a rel="canonical" href="{{url('/')}}">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$categories->name}}</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix postcontent-blog" id = "postcontent-detail">
				@if(isset($product_detail))
					<strong>{!! $product_detail->description !!}</strong>
					{!! $product_detail->content !!}
				@else
					<p>Chưa có dữ liệu</p>
				@endif
				<div class="divider divider-right"><i class="icon-heart"></i></div>
				@if(isset($list_tags))
					@include('event.post.tags')
				@endif
			</div>
			@include('event.post.event_sidebar')
		</div>
	</div>
</section>
@endsection
