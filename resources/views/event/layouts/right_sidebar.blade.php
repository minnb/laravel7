<?php
	$video_right_sidebar = \App\Models\Video::GetRandomVideo();
	$images_sidebar = App\Models\Gallery::getImageFromPublicFolder(12);
?>
<div class="col_two_fifth nobottommargin col_last">
	@if(isset($images_sidebar))
	<div class="fancy-title title-border">
		<h4>Hình ảnh</h4>
	</div>
	<div class="col_full masonry-thumbs grid-4 clearfix" data-lightbox="gallery">
		@foreach($images_sidebar as $item)
		<a href="{{$item}}" data-lightbox="gallery-item"><img class="image_fade" src="{{$item}}" alt="VietpeaceTravell"></a>
		@endforeach
	</div>
	@endif

	@if(isset($video_right_sidebar))
	<div class="fancy-title title-border">
		<h4>Video</h4>
	</div>
	<iframe src="{{$video_right_sidebar->url}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen title="{{$video_right_sidebar->name}}"></iframe>
	@endif
</div>



