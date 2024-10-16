<?php
	$index_teams = App\Models\Teams::where('blocked', 0)->limit(2)->get();
?>
@if(isset($index_teams))
<div class="heading-block center margin-top-40">
		<h2>ĐỘI NGŨ SÁNG LẬP</h2>
		<span>People who have contributed enormously to our Company.</span>
</div>
<div class="row">
	@foreach($index_teams as $item)
	<div class="col-lg-6 bottommargin">
		<div class="team team-list clearfix">
			<div class="team-image">
				<img src="{{asset($item->image)}}" alt="{{$item->name}}">
			</div>
			<div class="team-desc">
				<div class="team-title"><h4>{{$item->name}}</h4><span>{{$item->position}}</span></div>
				<div class="team-content">{{$item->experience}}</div>
				<a href="#" class="social-icon si-rounded si-small si-facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-rounded si-small si-twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<a href="#" class="social-icon si-rounded si-small si-gplus">
					<i class="icon-gplus"></i>
					<i class="icon-gplus"></i>
				</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endif