@extends('event.app')
@section('content')
<section id="page-title">
	<div class="container clearfix">
		<h1>{{$categories->name}}</h1>
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
				@if(isset($data_page_service))
					{!! $data_page_service->content !!}
				@else
					<p>Chưa có dữ liệu</p>
				@endif
				<div class="divider divider-right"><i class="icon-heart"></i></div>
			</div>		
			@include('event.post.event_sidebar')
		</div>
	</div>
</section>
@endsection