<?php
	$data_teams_home_page = \App\Models\Teams::where('blocked', 0)->limit(3)->get();
?>
@if(isset($data_teams_home_page))
<div class="heading-block center">
	<h2>BÌNH AN VIỆT</h2>
	<span>Đã tổ chức hơn 1000+ chương trình, sự kiện lớn nhỏ.</span>
</div>

@foreach($data_teams_home_page as $item)
<div class="col_one_third nobottommargin">
	<div class="team">
		<div class="team-image">
			<img src="{{asset($item->image)}}" alt="{{ $item->name }} /{{ $item->position }}">
		</div>
		<div class="team-desc">
			<div class="team-title"><h4>{{ $item->name }}</h4><span>/ {{ $item->position }}, <small>Vietpeace.</small></span></div>
			<div class="team-content">{{ $item->experience }}</div>
		</div>
	</div>
</div>
@endforeach
<div class="clear"></div>
<div class="divider"></div>
@endif