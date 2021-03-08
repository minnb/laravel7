@extends('home.app')
@section('content')
<section class="pageTitleSection" style="background-image: url('{{asset('assets/img/page-title/page-title-bg.jpg')}}'">
  <div class="container">
    <div class="pageTitleInfo">
      <h2>{!! $cate_name->name !!}</h2>
      <ol class="breadcrumb">
        <li><a href="{{ route('home')}}">Trang chủ</a></li>
        <li><a href="#">{!! $cate_name->name !!}</a></li>
        <li class="active"></li>
      </ol>
    </div>
  </div>
</section>
<section class="mainContent full-width clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-push-9 col-sm-5 col-sm-push-7 col-xs-12">
        <aside>
          <div class="panel panel-default courseSidebar">
            <div class="panel-heading bg-color-1 border-color-1">
              <h3 class="panel-title">Search</h3>
            </div>
            <div class="panel-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Your Search" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><input class="btn btn-primary bg-color-1" type="submit" value="Search"></span>
              </div>
            </div>
          </div>
          <div class="panel panel-default courseSidebar">
            <div class="panel-heading bg-color-2 border-color-2">
              <h3 class="panel-title">Filter By</h3>
            </div>
            <div class="panel-body">
              <div class="lightDrop">
                <select name="guiest_id4" id="guiest_id4" class="select-drop">
                  <option value="0">All Classes</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="lightDrop">
                <select name="guiest_id5" id="guiest_id5" class="select-drop">
                  <option value="0">Ages</option>
                  <option value="1">3</option>
                  <option value="2">4</option>
                  <option value="3">5</option>
                </select>
              </div>
              <div class="priceRange">
                <div class="price-slider-inner">
                  <span class="amount-wrapper">
                    Price:
                    <input type="text" id="price-amount-1" readonly>
                    <strong>-</strong>
                    <input type="text" id="price-amount-2" readonly>
                  </span>
                  <div id="price-range"></div>
                </div>
                <input class="btn btn-primary bg-color-2" type="submit" value="Filter">
                <!-- <span class="priceLabel">Price: <strong>$12 - $30</strong></span> -->
              </div>
            </div>
          </div>
          <div class="coursesCounter">
            <div class="counterInner">
              <h3>Next Course Start In</h3>
              <div class="coursesCountStart clearfix">
                <div id="courseTimer" class="courseCountTimer"></div>
              </div>
              <a href="#" class="btn btn-primary">buy course</a>
            </div>
          </div>
        </aside>
      </div>

	<div class="col-md-9 col-md-pull-3 col-sm-7 col-sm-pull-5 col-xs-12">
		@if(isset($lstProduct))
		@foreach($lstProduct as $key=>$item)
        <div class="media courseList couresListPage">
          <a class="media-left border-color-1" href="{{ route('get.home.tour.detail',['cate'=>$cate_name->alias,'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="color-3">
            <img class="thumb-course" src="{!! asset($item->thumbnail) !!}" alt="{!! $item->name !!}" />
          </a>
          <div class="media-body">
            <h3 class="media-heading"><a href="{{ route('get.home.tour.detail',['cate'=>$cate_name->alias,'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="color-3">{!! $item->name !!}</a></h3>
            <ul class="list-inline">
              <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
            </ul>
            <p>{!! \Illuminate\Support\Str::limit($item->description, 150, '...') !!}</p>
            <ul class="list-inline btn-yellow btnPart">
              <li><a href="#" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Đăng ký</a></li>
              <li><a href="{{ route('get.home.tour.detail',['cate'=>$cate_name->alias,'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chi tiết</a></li>
            </ul>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
	


    <div class="pagerArea text-center">
      {{ $lstProduct->links() }}
    </div>
  </div>
</section>
@endsection