@extends('event.app')
@section('content')
@include('event.layouts.banner')
<section id="content">
	<div class="content-wrap">	
		@include('event.layouts.service')
		<div class="container clearfix">
			@include('event.layouts.teams')
			@include('event.layouts.posts')
			@include('event.layouts.right_sidebar')
			<div class="clear"></div>
		</div>
		@include('event.layouts.promotion')
		@include('event.layouts.testimonials')
	</div>
</section>
@endsection