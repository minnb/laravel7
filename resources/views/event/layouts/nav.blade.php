<?php
	$service_page = \App\Models\Categories::where(['blocked' => 0, 'type'=> 2])->where('parent','>',0)->orderBy('id')->get();
?>
<header id="header" class="full-header">
	<div id="header-wrap">
		<div class="container clearfix">
			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
			<!-- Logo
			============================================= -->
			<div id="logo">
				<a rel="canonical" href="{{url('/')}}" class="standard-logo" data-dark-logo="{{asset('event/images/logo.png')}}"><img src="{{asset('event/images/logo.png')}}" alt="{{ config('app.name', 'Vietpeace Edu') }}"></a>
				<a rel="canonical" href="{{url('/')}}" class="retina-logo" data-dark-logo="{{asset('event/images/logo.png')}}"><img src="{{asset('event/images/logo.png')}}" alt="{{ config('app.name', 'Vietpeace Edu') }}"></a>
			</div><!-- #logo end -->
			<!-- Primary Navigation
			============================================= -->
			<nav id="primary-menu">
				<ul>
					@if(Auth::user())
					<li>{{ Auth::User()->name }}</li>
					@endif
					<li class="current"><a rel="canonical" href="{{ route('get.event.price.check') }}"><div>Về chúng tôi</div></a>
					</li>
					<li><a href="#service"><div>Dịch vụ</div></a>
						<ul>
							@if(isset($service_page))
							@foreach($service_page as $item)
								<li><a rel="canonical" href="{{ route('get.event.service', ['alias'=>$item->alias]) }}"><div>{{$item->name}}</div></a></li>
							@endforeach
							@endif
						</ul>
					</li>
					<li><a rel="canonical" href="{{route('get.event.list', ['alias'=>'da-ngoai-teambuiding'])}}"><div>Chương trình đã tổ chức</div></a>
					</li>
					<li><a rel="canonical" href="{{ route('get.event.price.check') }}"><div>Báo giá</div></a>
					</li>
					<li><a rel="canonical" href="{{ route('get.event.price.check') }}"><div>Liên hệ</div></a>
					</li>
				</ul>
				<!-- Top Search
				============================================= -->
				<div id="top-search">
					<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
					<form action="search.html" method="get">
						<input type="text" name="q" class="form-control" value="" placeholder="Tìm kiếm &amp;...">
					</form>
				</div><!-- #top-search end -->
			</nav><!-- #primary-menu end -->
		</div>
	</div>
</header><!-- #header end -->