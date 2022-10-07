<?php
	$data_review = \App\Models\Contact::where('type','REVIEW')->where('blocked', 0)->inRandomOrder()->limit(2)->get();
?>
@if(isset($data_review))
<div class="container clearfix">
	<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
	<ul class="testimonials-grid clearfix">
		@foreach($data_review as $item)
		<li>
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
		</li>
		@endforeach
	</ul>
</div>
<div class="clear"></div>
@endif