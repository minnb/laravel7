@extends('home.app')
@section('content')
<section class="pageTitleSection" style="background-image: url('{{asset('assets/img/page-title/page-title-bg.jpg')}}'">
  <div class="container">
    <div class="pageTitleInfo">
      <h2>{!! $detailTour->name !!}</h2>
      <ol class="breadcrumb">
        <li><a href="{{ route('home')}}">Trang chủ</a></li>
        <li><a href="#">Dã ngoại cuối tuần</a></li>
        <li class="active">{!! $detailTour->name !!}</li>
      </ol>
    </div>
  </div>
</section>
<section class="mainContent full-width clearfix courseSingleSection">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12 block">
        <div class="thumbnail thumbnailContent alt">
          <img src="{!! asset($detailTour->thumbnail) !!}" alt="{!! $detailTour->name !!}" class="img-responsive">
          <div class="caption border-color-1">
            <h3 class="color-1">{!! $detailTour->name !!}</h3>
            <p>{!! $detailTour->content !!}</p>
          </div>
        </div>
        <div class="btnArea">
          <a href="#" class="btn btn-primary">Đặt tour</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
            <aside>
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-5 border-color-5">
                    <h3 class="panel-title">Dã ngoại cuối tuần</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list blogListing">
                   	@if(isset($panelTour))
                   	@foreach($panelTour as $key=>$item)
                      <li class="media">
                        <div class="media-left">
                          <a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}"><img src="{{ asset($item->thumbnail)}}" alt="{!! $item->name !!}" class="img-rounded" style="max-width: 60px"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">{!! $item->name !!}</a></h4>
                          <p>{!! $item->created_at !!}</p>
                        </div>
                      </li>
                      @endforeach
                     @endif
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
    </div>
  </div>
</section>
@endsection