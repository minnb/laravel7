@extends('bav.app')
@section('content')
<div class="heading-block center margin-top-40">
    <h2>Liên hệ</h2>
    <span>Cảm ơn quý khách đã liên hệ tới Bình An Việt</span>
</div>
<div class="container clearfix">
    <div class="row clear-bottommargin">
      <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
          <div class="fbox-icon">
            <a href="#"><i class="icon-map-marker2"></i></a>
          </div>
          <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
          <div class="fbox-icon">
            <a href="#"><i class="icon-phone3"></i></a>
          </div>
          <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
          <div class="fbox-icon">
            <a href="#"><i class="icon-skype2"></i></a>
          </div>
          <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 bottommargin clearfix">
        <div class="feature-box fbox-center fbox-bg fbox-plain">
          <div class="fbox-icon">
            <a href="#"><i class="icon-twitter2"></i></a>
          </div>
          <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
        </div>
      </div>
  </div><!-- Contact Info End -->
  <div class="clear"></div>
  <div class="fancy-title title-dotted-border title-center margin-top-40">
    <h3 class="h3-uppercase"></h3>
  </div>
  <div class="rows">
    <div class="form-widget">
      <div class="form-result"></div>
      <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
        <div class="form-process"></div>
        <div class="col_one_third">
          <label for="template-contactform-name">Name <small>*</small></label>
          <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
        </div>
                <div class="col_one_third">
                  <label for="template-contactform-email">Email <small>*</small></label>
                  <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                </div>

                <div class="col_one_third col_last">
                  <label for="template-contactform-phone">Phone</label>
                  <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                </div>
                                <div class="clear"></div>

                <div class="col_two_third">
                  <label for="template-contactform-subject">Subject <small>*</small></label>
                  <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                </div>
                <div class="col_full">
                  <label for="template-contactform-message">Message <small>*</small></label>
                  <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full hidden">
                  <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>

                <div class="col_full">
                  <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
                </div>

                <input type="hidden" name="prefix" value="template-contactform-">
      </form>
    </div>
  </div>
  <div class="clear"></div>
</div>
@endsection