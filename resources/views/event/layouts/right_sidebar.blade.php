<?php
	$video_right_sidebar = \App\Models\Video::GetRandomVideo(2);
	$images_sidebar = App\Models\Gallery::getImageFromPublicFolder(12);
?>
<div class="col_two_fifth nobottommargin col_last">
	@if(isset($images_sidebar))
	<div class="fancy-title title-border">
		<h4>Hình ảnh</h4>
	</div>
	<div class="col_full masonry-thumbs grid-4 clearfix" data-lightbox="gallery">
		@foreach($images_sidebar as $item)
		<a rel="canonical" href="{{$item}}" data-lightbox="gallery-item"><img class="image_fade" src="{{$item}}" alt="VietpeaceTravell"></a>
		@endforeach
	</div>
	@endif

	@if(isset($video_right_sidebar))
	<div class="fancy-title title-border">
		<h4>Video</h4>
	</div>
	@foreach($video_right_sidebar as $video)
	<iframe src="{{$video->url}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen title="{{$video->name}}"></iframe>
	<div class="divider divider-center"></div>
	@endforeach
	@endif
</div>



