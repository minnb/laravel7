<?php
	$data_teams_home_page = \App\Models\Teams::where('blocked', 0)->first();
?>
@if(isset($data_teams_home_page))
	<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
	<div class="fslider testimonial" data-animation="fade" data-arrows="false">
		<div class="flexslider">
			<div class="slider-wrap">
				<div class="slide">
					<div class="testi-image">
						<a href="#"><img src="{{asset($data_teams_home_page->image)}}" alt="{{ $data_teams_home_page->name }}"></a>
					</div>
					<div class="testi-content">
						<p>{{ $data_teams_home_page->experience }}</p>
						<div class="testi-meta">
							{{ $data_teams_home_page->name }}
							<span>{{ $data_teams_home_page->position }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="divider"></div>
@endif

