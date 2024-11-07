<?php
    function getActiveRoot($name)
    {
        $route_name = \Str::upper(\Request::route()->getName());
        if(\Str::upper($name) == $route_name || \Str::upper($name) == ""){
            echo "current";
        }
        else
        {
            echo "";
        }
    }

?>
<header id="header" class="sticky-style-2">
	<div class="container clearfix">
		<!-- Logo============================================= -->
		<div id="logo">
			<a href="{{url('/')}}" class="standard-logo" data-dark-logo="{{asset('event/images/logo.png')}}"><img src="{{asset('event/images/logo.png')}}" alt="Vietpeace"></a>
			<a href="{{url('/')}}" class="retina-logo" data-dark-logo="{{asset('event/images/logo.png')}}"><img src="{{asset('event/images/logo.png')}}" alt="Canvas Logo"></a>
		</div>
		<ul class="header-extras">
			<li>
				<i class="i-medium i-circled i-bordered icon-thumbs-up2 nomargin"></i>
				<div class="he-text">
					Travel
					<span>Độc đáo</span>
				</div>
			</li>
			<li>
				<i class="i-medium i-circled i-bordered icon-truck2 nomargin"></i>
				<div class="he-text">
					Event
					<span>Gắn kết</span>
				</div>
			</li>
			<li>
				<i class="i-medium i-circled i-bordered icon-undo nomargin"></i>
				<div class="he-text">
					Education
					<span>Tận tâm</span>
				</div>
			</li>
		</ul>
	</div>
	<div id="header-wrap">
		<nav id="primary-menu" class="style-2">
			<div class="container clearfix">
				<?php $cate_menu = $global_category->where('type', 1)->where('parent','<>', 0); ?>
				<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<ul>
						<li class="{{getActiveRoot('')}}"><a href="{{url('')}}"><div>Trang chủ</div></a></li>
						@if(isset($cate_menu))
						@foreach($cate_menu as $item)
							<li class="mega-menu"><a href="{{ route('get.tour.by.cate', ['cate'=>$item->alias]) }}"><div>{{$item->name}}</div><span>{{$item->alias}}</span></a>
								
							</li>
						<!--
						<li class="mega-menu"><a href="#"><div>Tour trong nước</div><span>Out of the Box</span></a>
							<div class="mega-menu-content style-2 clearfix">
								<ul>
									<li class="mega-menu-title"><a href="#"><div>Footwear</div></a>
										<ul>
											<li><a href="#"><div>Casual Shoes</div></a></li>
											<li><a href="#"><div>Formal Shoes</div></a></li>
											<li><a href="#"><div>Sports shoes</div></a></li>
											<li><a href="#"><div>Flip Flops</div></a></li>
											<li><a href="#"><div>Slippers</div></a></li>
											<li><a href="#"><div>Sports Sandals</div></a></li>
											<li><a href="#"><div>Party Shoes</div></a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="mega-menu"><a href="#"><div>Tour quốc tế</div><span>Out of the Box</span></a>
							<div class="mega-menu-content style-2 clearfix">
								<ul>
									<li class="mega-menu-title"><a href="#"><div>Footwear</div></a>
										<ul>
											<li><a href="#"><div>Casual Shoes</div></a></li>
											<li><a href="#"><div>Formal Shoes</div></a></li>
											<li><a href="#"><div>Sports shoes</div></a></li>
											<li><a href="#"><div>Flip Flops</div></a></li>
											<li><a href="#"><div>Slippers</div></a></li>
											<li><a href="#"><div>Sports Sandals</div></a></li>
											<li><a href="#"><div>Party Shoes</div></a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li><a href="#"><div>Teambuilding - Sự kiện</div><span>Out of the Box</span></a>
							<div class="mega-menu-content style-2 col-2 clearfix">
								<ul>
									<li class="mega-menu-title"><a href="#"><div>Footwear</div></a>
										<ul>
											<li><a href="#"><div>Casual Shoes</div></a></li>
											<li><a href="#"><div>Formal Shoes</div></a></li>
											<li><a href="#"><div>Sports shoes</div></a></li>
											<li><a href="#"><div>Flip Flops</div></a></li>
											<li><a href="#"><div>Slippers</div></a></li>
											<li><a href="#"><div>Sports Sandals</div></a></li>
											<li><a href="#"><div>Party Shoes</div></a></li>
										</ul>
									</li>
								</ul>
								<ul>
									<li class="mega-menu-title"><a href="#"><div>Clothing</div></a>
										<ul>
											<li><a href="#"><div>Casual Shirts</div></a></li>
											<li><a href="#"><div>T-Shirts</div></a></li>
											<li><a href="#"><div>Collared Tees</div></a></li>
											<li><a href="#"><div>Pants / Trousers</div></a></li>
											<li><a href="#"><div>Ethnic Wear</div></a></li>
											<li><a href="#"><div>Jeans</div></a></li>
											<li><a href="#"><div>Sweamwear</div></a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li><a href="#"><div>Dịch vụ</div><span>Awesome Works</span></a></li>
						-->
						@endforeach
						@endif
						<li class="{{getActiveRoot('lien-he')}}"><a href="{{url('/lien-he')}}"><div>LIÊN HỆ</div><span>Latest News</span></a></li>
					</ul>
				<!-- Top Search	============================================= -->
				<div id="top-search">
					<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
					<form action="#" method="get">
						<input type="text" name="q" class="form-control" value="" placeholder="Tìm tour..">
					</form>
				</div><!-- #top-search end -->
			</div>
		</nav><!-- #primary-menu end -->
	</div>
</header><!-- #header end -->