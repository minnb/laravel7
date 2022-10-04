<?php
	$home_page = App\Models\SysPage::where('category','HOMEPAGE')->get();
?>
@if(isset($home_page))
<?php $service = json_decode($home_page[0]->options); ?>
<div class="container clearfix">
	<div class="col_one_third nobottommargin">
		<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="icon-check i-alt"></i></a>
			</div>
			<h3>{{$service->name1}}<span class="subtitle"></span></h3>
		</div>
	</div>
	<div class="col_one_third nobottommargin">
		<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="icon-search3 i-alt"></i></a>
			</div>
			<h3>{{$service->name2}}<span class="subtitle"></span></h3>
		</div>
	</div>
	<div class="col_one_third nobottommargin">
		<div class="feature-box fbox-effect fbox-center fbox-outline fbox-dark nobottomborder">
			<div class="fbox-icon">
				<a href="#"><i class="icon-beaker i-alt"></i></a>
			</div>
			<h3>{{$service->name3}}<span class="subtitle"></span></h3>
		</div>
	</div>
</div>
<div class="clear"></div>
<div class="divider divider-short divider-center"><i class="icon-circle-blank"></i></div>
@endif