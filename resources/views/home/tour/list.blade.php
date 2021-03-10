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
          <?php
            $lstPrdLocation = App\Models\Categories::getListLocation();
          ?>
          @if(isset($lstPrdLocation))
          <div class="panel panel-default courseSidebar">
            <div class="panel-heading bg-color-1 border-color-1">
              <h3 class="panel-title">Điểm đến HOT</h3>
            </div>
              <ul class="panel-body list-group">
                @foreach($lstPrdLocation as $item)
                <li class="list-group-item"><a href="#">{!! $item->name !!}</a></li>
                @endforeach
              </ul>
          </div>
          @endif
         
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