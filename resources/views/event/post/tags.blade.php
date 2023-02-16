@if(isset($list_tags))
	<div id="tags" class="widget clearfix">
		<h4 class="highlight-me">Từ khóa</h4>
		<div class="tagcloud">
			@foreach($list_tags as $item)
				<a href="#">{{$item->name}}</a>
			@endforeach
		</div>
	</div>
@endif