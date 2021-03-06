@extends('home.app')
@section('content')
<section class="pageTitleSection" style="background-image: url('{{asset('assets/img/page-title/page-title-bg.jpg')}}'">
  <div class="container">
    <div class="pageTitleInfo">
      <h2>{!! $detailPost->title !!}</h2>
      <ol class="breadcrumb">
        <li><a href="{{ route('home')}}">Trang chủ</a></li>
        <li><a href="#">Dã ngoại cuối tuần</a></li>
        <li class="active">{!! $detailPost->title !!}</li>
      </ol>
    </div>
  </div>
</section>
<section class="mainContent full-width clearfix courseSingleSection">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12 block">
        <div class="thumbnail thumbnailContent alt">
          <div class="caption">
            <h3 class="color-10">{!! $detailPost->title !!}</h3>
            <p>{!! $detailPost->content !!}</p>
            <hr class="border-color-3">
            <?php $tagPostDetail = App\Models\Post_Tag::getTagByPostId($detailPost->id);  ?>
            @if(isset($tagPostDetail))
              <p>
                <i class="fa fa-tag"></i>
                  @foreach($tagPostDetail as $item)
                  <a href="#" class="badge-link">{!! $item->name !!} <span class="badge"></span></a>
                  @endforeach
              </p>
            @endif
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
                          <a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}"><img src="{{ asset($item->thumbnail)}}" alt="{!! $item->name !!}" class="img-rounded" style="max-width: 60px"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="{{ route('get.home.tour.detail',['cate'=>'da-ngoai-cuoi-tuan','id'=>$item->id, 'name'=>Illuminate\Support\Str::slug($item->name).'.html'])}}">{!! $item->name !!}</a></h4>
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
@endsection

