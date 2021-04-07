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
          <?php $img_single = App\Models\ImageSingle::getPathImage($detailTour->id); ?>
          @if($img_single != "")
            <img src="{!! asset($img_single) !!}" alt="{!! $detailTour->name !!}" class="img-responsive">
          @endif
          <div class="caption border-color-1">
            <h2 class="color-10">{!! $detailTour->name !!}</h2>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><strong>{{ App\Models\Categories::getLocationByCate($detailTour->categories) }}</strong></a></li>
              <li><span style="margin-left:10px"></span></li>
              <li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>{!! getTourTime()[$detailTour->base_unit] !!}</li>
            </ul>
            <hr class="border-color-2">
            <h3 class="color-10">Những trải nghiệm thú vị</h3>
              <p>{!! $tourPolicy->experience !!}</p>
            <h3 class="color-10">Lịch trình</h3>
            <p>{!! $detailTour->content !!}</p>

            <h3 class="color-10">Dịch vụ đi kèm</h3>
              <p>{!! $tourPolicy->service !!}</p>
            <h3 class="color-10">Chính sách phụ thu</h3>
              <p>{!! $tourPolicy->policy !!}</p>
            <h3 class="color-10">Điều khoản</h3>
              <p>{!! $tourPolicy->rules !!}</p>
            <hr class="border-color-3">
            <?php $lstTag = App\Models\Categories::getCateByArr(convertStrToArr("|", $detailTour->categories)) ?>
              <p>
                <i class="fa fa-tag"></i>
                @foreach($lstTag as $item)
                <a href="#" class="badge-link">{!! $item->name !!} <span class="badge"></span></a>
                @endforeach
              </p>
          </div>
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
                          <a href="{{ route('get.home.tour.detail',['cate'=>getRoute1Name(0),'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}"><img src="{{ asset($item->thumbnail)}}" alt="{!! $item->name !!}" class="img-rounded" style="max-width: 60px"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="{{ route('get.home.tour.detail',['cate'=>getRoute1Name(0),'id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">{!! $item->name !!}</a></h4>
                          <p class="crt-date"><i class="fa fa-map-marker" aria-hidden="true"></i> {!! App\Models\Categories::getLocationByCate($item->categories) !!}</p>
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
@include('home.layouts.guide')
@endsection