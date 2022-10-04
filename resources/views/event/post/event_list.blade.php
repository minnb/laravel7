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
			<div class="col_three_fifth bothsidebar nobottommargin">
				<div id="posts" class="events small-thumbs">
					@if(isset($top_product_of_service))
						@foreach($top_product_of_service as $item)
						<div class="entry clearfix">
							<div class="entry-image d-md-none d-lg-block">
								<a href="{{ route('get.event.detail', ['alias'=>$item->alias])}}">
									<img src="{{asset($item->thumbnail)}}" alt="Inventore voluptates velit totam ipsa tenetur">
									<div class="entry-date">10<span>Apr</span></div>
								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="{{ route('get.event.detail', ['alias'=>$item->alias])}}">{{$item->name}}</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><span class="badge badge-warning">Good</span></li>
									<li><a href="#"><i class="icon-time"></i> {{ getTourTime()[$item->base_unit] }}</a></li>
									<li><a href="#"><i class="icon-map-marker2"></i> {{ \App\Models\Tag::getFistTagName($item->id) }}</a></li>
								</ul>
								<div class="entry-content">
									{!! $item->description !!}
								</div>
							</div>
						</div>
						@endforeach
					@else
						<div class="entry clearfix">
							<h4>No data</h4>
						</div>
					@endif
				</div>
			</div>
			@include('event.layouts.right_sidebar')
		</div>
	</div>
</section>
@endsection