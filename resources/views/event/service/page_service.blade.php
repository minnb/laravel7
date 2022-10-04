@extends('event.app')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>{{$categories->name}}</h1>
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
				@if(isset($data_page_service))
					{!! $data_page_service->content !!}
					<!--<div class="divider divider-rounded divider-center"><i class="icon-map-marker"></i></div>-->
				@else
					<p>Chưa có dữ liệu</p>
				@endif
			</div>
			
			@include('event.post.event_sidebar')
		</div>
	</div>
</section>
@endsection