<?php
	$banner_slide = App\Models\SysPage::getSlideIndex(1);
?>
@if(isset($banner_slide))
	<section id="slider" class="slider-element slider-parallax full-screen dark" style="max-height: 450px; overflow: hidden; background: url({{$banner_slide[0]->thumbnail}}) no-repeat center center;background-size: cover;">
		<div class="slider-parallax-inner">
			<div class="container clearfix vertical-middle" style="z-index: 3;">
				<div class="heading-block title-center nobottomborder">
					<h1>{{$banner_slide[0]->name}}</h1>
				</div>
			</div>
		</div>
	</section>
	@else
	<section id="slider" class="slider-element slider-parallax full-screen dark" style="overflow: hidden; background: url({{asset('event/images/events/parallax/home.jpg')}}) no-repeat center center;background-size: cover;">
		<div class="slider-parallax-inner">
			<div class="container clearfix vertical-middle" style="z-index: 3;">
				<div class="heading-block title-center nobottomborder">
					<h1>Teambuiding - Viết tiếp tuổi thanh xuân</h1>
				</div>
			</div>
		</div>
	</section>
@endif