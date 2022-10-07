
<div class="col_three_fifth bothsidebar nobottommargin">
	<div class="fancy-title title-border">
		<h4>Sự kiện nổi bật</h4>
	</div>
	<div id="posts" class="events small-thumbs">
		@if(isset($tour_home_page))
			@foreach($tour_home_page as $item)
			<div class="entry clearfix">
				<div class="entry-image d-md-none d-lg-block">
					<a href="{{ route('get.event.detail', ['alias'=>$item->alias])}}">
						<img src="{{asset($item->thumbnail)}}" alt="Inventore voluptates velit totam ipsa tenetur">
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