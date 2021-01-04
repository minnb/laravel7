<?php
  $slides = App\Models\SysPage::getSlideIndex();
?>
<section class="bannercontainer bannercontainerV1">
  <div class="fullscreenbanner-container">
    <div class="fullscreenbanner">
      <ul>
        @if(isset($slides))
        @foreach($slides as $key=>$item)
        <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="{!! $item->name !!}">
          <img src="{{$item->thumbnail}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          <div class="slider-caption container">
            <div class="tp-caption rs-caption-1 sft start"
              data-hoffset="0"
              data-y="200"
              data-speed="800"
              data-start="1000"
              data-easing="Back.easeInOut"
              data-endspeed="300">
              {!! $item->name !!}
            </div>
            <div class="tp-caption rs-caption-2 sft"
              data-hoffset="0"
              data-y="265"
              data-speed="1000"
              data-start="1500"
              data-easing="Power4.easeOut"
              data-endspeed="300"
              data-endeasing="Power1.easeIn"
              data-captionhidden="off">
              {!! $item->description !!}
            </div>
          </div>
        </li>
        @endforeach
        @endif
      </ul>
    </div>
  </div>
</section>