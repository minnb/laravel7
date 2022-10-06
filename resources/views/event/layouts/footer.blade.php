<?php
	$topPost = \App\Models\Post::Top3Post(0, 3);
	$service_page_footer = \App\Models\Categories::getServicePage();
?>
<footer id="footer" class="dark">
	<div class="container">
		<div class="footer-widgets-wrap clearfix">
			<div class="col_two_third">
				<div class="col_one_third">
					<div class="widget clearfix">
						<img src="{{asset('event/images/logo.png')}}" alt="" class="footer-logo">
						<p>CÔNG TY <strong>DU LỊCH</strong><strong> BÌNH AN VIỆT</strong></p>
						<div style="background: url({{asset('event/images/world-map.png')}} no-repeat center center; background-size: 100%;">
							<address>
								<strong>Địa chỉ:</strong><br>
								Số 18 ngõ 52 Hoàng Công Chất<br>
								Bắc Từ Liêm, Hà Nội<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> 039 665 2955<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> vietpeacetravel@gmail.com
						</div>
					</div>
				</div>
				<div class="col_one_third" style="padding-left: 15px;">
					<div class="widget clearfix widget_links">
						<h4 style="padding-left: 15px;">Danh mục</h4>
						<ul>
							@if(isset($service_page_footer))
								@foreach($service_page_footer as $item)
									<li><a href="{{ route('get.event.service', ['alias'=>$item->alias]) }}">{{$item->name}}</a></li>
								@endforeach
							@endif
							<li><a href="https://vietpeacetravel.com/"><div>Vietpeace Travel</div></a>
							<li><a href="{{ route('get.event.price.check') }}"><div>Báo giá</div></a></li>
							<li><a href="{{ route('get.event.price.check') }}"><div>Liên hệ</div></a>
						</ul>
					</div>
				</div>
				<div class="col_one_third col_last">
					<div class="widget clearfix">
						<h4>Blogs</h4>
						<div id="post-list-footer">
							@if(isset($topPost))
							@foreach($topPost as $item)
							<div class="spost clearfix">
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{ route('get.blog.detail', ['alias'=>$item->alias])}}">{{$item->title}}</a></h4>
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
				</div>
			</div>
			<div class="col_one_third col_last">
				<div class="fb-page" data-href="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon" data-tabs="timeline,events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
        <blockquote cite="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DaNgoai.CuoiTuan.CungCon">Cùng con ra ngoài chơi</a></blockquote></div>
			</div>
		</div>
	</div>
	<div id="copyrights">
		<div class="container clearfix">
			<div class="col_half">
				Copyrights &copy; 2022 All Rights Reserved by Vietpeace Inc.
			</div>
		</div>
	</div>
</footer>
</div>
<div id="gotoTop" class="icon-angle-up"></div>
<script src="{{asset('event/js/jquery.js')}}"></script>
<script src="{{asset('event/js/plugins.js')}}"></script>
<script src="{{asset('event/js/events-data.js')}}"></script>
<script src="{{asset('event/js/functions.js')}}"></script>
<script>
	jQuery(document).ready( function($){
		var newDate = new Date(2022, 9, 30);
		$('#countdown-ex1').countdown({until: newDate});
	});

	function updateMonthYear() {
		$month.html( cal.getMonthName() );
		$year.html( cal.getYear() );
	}
</script>
</body>
</html>