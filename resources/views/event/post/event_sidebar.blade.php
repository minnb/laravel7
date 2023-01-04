<div class="sidebar nobottommargin col_last clearfix">
<div class="widget clearfix">
	<h4>Sự kiện nổi bật</h4>
	<div id="post-list-footer">
		@if(isset($top_product_of_service))
		@foreach($top_product_of_service as $item)
		<div class="spost clearfix">
			<div class="entry-image">
				<a rel="canonical" href="{{ route('get.event.detail', ['alias'=>$item->alias])}}" class="nobg"><img src="{{asset($item->thumbnail)}}" alt=""></a>
			</div>
			<div class="entry-c">
				<div class="entry-title">
					<h4><a rel="canonical" href="{{ route('get.event.detail', ['alias'=>$item->alias])}}">{{$item->name}}</a></h4>
				</div>
				<ul class="entry-meta">
					<li>{{date('d-m-Y', strtotime($item->created_at))}}</li>
				</ul>
			</div>
		</div>
		@endforeach
		@endif
	</div>
</div>
<?php
	$top_blogs = \App\Models\Post::where('blocked', 0)->where('type', 0)->inRandomOrder()->limit(5)->get();
?>
@if(isset($top_blogs))
<div class="widget clearfix">
	<h4>Blog</h4>
	<div id="post-list-footer">
		@foreach($top_blogs as $item)
		<div class="spost clearfix">
			<div class="entry-image">
				<a rel="canonical" href="{{ route('get.blog.detail', ['alias'=>$item->alias])}}" class="nobg"><img src="{{asset($item->thumbnail)}}" alt=""></a>
			</div>
			<div class="entry-c">
				<div class="entry-title">
					<h4><a rel="canonical" href="{{ route('get.blog.detail', ['alias'=>$item->alias])}}">{{$item->title}}</a></h4>
				</div>
				<ul class="entry-meta">
					<li>{{date('d-m-Y', strtotime($item->created_at))}}</li>
				</ul>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endif
</div>
</div>