<?php
	$lst_banner =  \App\Models\SysPage::where('category','BANNER')->where('blocked', 0)->orderBy('id', 'desc')->limit(5)->get();
?>
@if(isset($lst_banner))
<div class="container clearfix">
	<div class="col_two_third bottommargin-lg">
		<div class="fslider" data-arrows="false">
			<div class="flexslider">
				<div class="slider-wrap">
					@foreach($lst_banner as $item)
					<div class="slide">
						<a href="{{asset($item->description)}}">
							<img src="{{asset($item->thumbnail)}}" alt="{{$item->name}}">
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<?php $lst_banner_random =  $lst_banner->random(2); ?>
	<div class="col_one_third bottommargin-lg col_last">
		<div class="col_full bottommargin-sm">
			<a href="#"><img src="{{asset($lst_banner_random[0]->thumbnail)}}" alt="{{$lst_banner_random[0]->name}}"></a>
		</div>
		<div class="col_full nobottommargin">
			<a href="#"><img src="{{asset($lst_banner_random[1]->thumbnail)}}" alt="{{$lst_banner_random[1]->name}}"></a>
		</div>
	</div>
	<div class="clear"></div>
</div>
@endif