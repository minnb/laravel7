<?php
	$data_review = \App\Models\Contact::where('type','REVIEW')->where('blocked', 0)->get();
?>
@if(isset($data_review))
<div class="container clearfix">
	<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-sm="1" data-items-md="2" data-items-xl="3">
		@foreach($data_review as $item)
		<div class="oc-item">
			<div class="testimonial">
				<div class="testi-image">
					<a href="#"><img src="{{asset($item->image)}}" alt="{{$item->name}}"></a>
				</div>
				<div class="testi-content">
					<p>{{$item->content}}</p>
					<div class="testi-meta">
						{{$item->name}}
						<span>{{$item->email}}</span>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	</div>
</div>
</div>
@endif