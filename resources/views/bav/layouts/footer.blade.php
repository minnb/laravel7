<?php $cate_menu = $global_category->where('type', 1)->where('parent','<>', 0); ?>
<footer id="footer" class="dark">
	<div class="container">
		<!-- Footer Widgets	============================================= -->
		<div class="footer-widgets-wrap clearfix">
			<div class="col_two_third">
				<div class="col_one_third">
					<div class="widget clearfix">
						<img src="{{asset('event/images/logo.png')}}" alt="" class="footer-logo">
						<p>Tận tâm <strong>Uy tín</strong>, <strong>Chuyên nghiệp</strong></p>
						<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
							<address>
								<strong>Địa chỉ:</strong><br>
								Số 18 ngõ 52 Hoàng Công Chất<br>
								Bắc Từ Liêm, Hà Nội<br>
							</address>
							<abbr title="Phone Number"><i class="icon-phone"></i></abbr>  0979.424.775<br>
							<abbr title="Phone Number"><i class="icon-phone"></i></abbr>  0396.652.955<br>
							<abbr title="Phone Number"><i class="icon-phone"></i></abbr>  0868.881.336<br>
						</div>
					</div>
				</div>
				<div class="col_one_third">
					<div class="widget widget_links clearfix">
						<h4>DANH MỤC</h4>
						<ul>
							@if(isset($cate_menu))
							@foreach($cate_menu as $item)
								<li><a href="#">{{$item->name}}</a></li>
							@endforeach
							@endif
						</ul>
					</div>
				</div>
				<div class="col_one_third col_last">
					<div class="widget clearfix">
						<h4>Tour chủ đề</h4>
						<ul>
							@if(isset($cate_menu))
							@foreach($cate_menu as $item)
								<li><a href="#">{{$item->name}}</a></li>
							@endforeach
							@endif
						</ul>
					</div>
				</div>
			</div>

			<div class="col_one_third col_last">
				<div class="widget clearfix" style="margin-bottom: -20px;">

              <div class="fb-page" data-href="https://www.facebook.com/baoan.nguyen.3979" data-tabs="timeline,events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
                <blockquote cite="https://www.facebook.com/baoan.nguyen.3979" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/baoan.nguyen.3979">Bình An Việt - Travel</a></blockquote></div>

				</div>

			</div>

		</div><!-- .footer-widgets-wrap end -->

	</div>

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				Copyrights &copy; 2024 All Rights Reserved by VietpeaceTravel Inc.<br>
				<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
			</div>

			<div class="col_half col_last tright">
				<div class="fright clearfix">
					<a href="#" class="social-icon si-small si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-gplus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-pinterest">
						<i class="icon-pinterest"></i>
						<i class="icon-pinterest"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-vimeo">
						<i class="icon-vimeo"></i>
						<i class="icon-vimeo"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-github">
						<i class="icon-github"></i>
						<i class="icon-github"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-yahoo">
						<i class="icon-yahoo"></i>
						<i class="icon-yahoo"></i>
					</a>

					<a href="#" class="social-icon si-small si-borderless si-linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>
				</div>

				<div class="clear"></div>

				<i class="icon-envelope2"></i> dieuhanh.binhanviet@gmail.com<span class="middot">&middot;</span> <i class="icon-headphones"></i>  0396.652.955 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Bình An Việt
			</div>

		</div>

	</div><!-- #copyrights end -->
</footer><!-- #footer end -->
