@extends('dashboard.app')
@section('title', 'Pages')
@section('page-header', 'Home Page')
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.page.home')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Giới thiệu </label>
        <div class="col-xs-9">
            <textarea name="gioithieu" id="gioithieu" rows="6" class="col-xs-9 col-sm-5">{{ old('gioithieu', isset($data)?$data[0]->description :'')}}</textarea>
        </div>
    </div>
    <div class="hr hr32 hr-dotted"></div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 1</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_1" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_1', isset($muctieu)?$muctieu->name1:'') }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 2</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_2" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_2', isset($muctieu)?$muctieu->name2:'') }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 3</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_3" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_3', isset($muctieu)?$muctieu->name3:'') }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 4</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_4" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_4', isset($muctieu)?$muctieu->name4:'') }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 5</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_5" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_5', isset($muctieu)?$muctieu->name5:'') }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-1 control-label no-padding-right" for="form-field-1"> Mục tiêu 6</label>
        <div class="col-xs-10">
            <input type="text" id="form-field-1" name="muctieu_6" class="col-xs-10 col-sm-6" required="" value="{{ old('muctieu_6', isset($muctieu)?$muctieu->name6:'') }}" />
        </div>
    </div>
    <div class="hr hr32 hr-dotted"></div>
    <div class="clearfix"></div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-1 col-md-9">
            <button class="btn btn-info" type="Submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>
        </div>
    </div>
</form>

@endsection
@section('javascript')
<script src="<?php echo asset('admin/plugin/func_ckfinder.js'); ?>"></script>
<script src="<?php echo asset('admin/plugin/ckeditor/ckeditor.js'); ?>"></script>
<script src="{{ asset('admin/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>
<script type="text/javascript">
    jQuery(function($) {
        //initiate dataTables plugin
        $(document).ready(function(){
            ckeditor('gioithieu')
            $('.textarea').wysihtml5();
        });
        
        $(document).ready(function(){
            ckeditor('content')
            $('.textarea').wysihtml5();
        });
    })
</script>
@endsection

