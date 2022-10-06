@extends('event.app')
@section('content')
<section id="page-title" style="background-image: url({{asset('event/images/background/2.jpg')}});">
	<div class="container clearfix">
		<h1>{{$product_detail->name}}</h1>
		<span><i>Cho những kỷ niệm đẹp</i></span>
				<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$categories->name}}</li>
		</ol>
	</div>
</section>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix">
				@if(isset($product_detail))
					{!! $product_detail->content !!}
				@else
					<p>Chưa có dữ liệu</p>
				@endif
				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
			</div>
			@include('event.post.event_sidebar')
		</div>
	</div>
</section>
@endsection