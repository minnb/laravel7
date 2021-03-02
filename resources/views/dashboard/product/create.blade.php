@extends('dashboard.app')
@section('title', 'Product')
@section('page-header', 'Create')
@section('stylesheet')  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugin/jquery.filer/css/jquery.filer.css') }}"/>
@endsection
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.product.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a data-toggle="tab" href="#Content">
                    <i class="green ace-icon fa fa-home bigger-120"></i>
                    Content
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#Gallery">
                    Gallery
                    <span class="badge badge-danger"></span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#Policy">
                    Policy
                    <span class="badge badge-danger"></span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="Content" class="tab-pane fade in active">
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Name </label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="name" name="name" class="col-xs-10 col-sm-5" required="" value="{{ old('name')}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Category </label>
                    <div class="col-xs-10">
                        <select multiple="" id="category" name="category[]" class="select2">
                            {!! getSelectArrayForm(App\Models\Categories::getSelect2Category(1), old('category', isset($data) ? convertStrToArr("|", $data['cate_id']): [0]) ) !!}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right">Status</label>
                    <div class="col-xs-9">
                        <input name="status" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" checked="true" />
                        <span class="lbl"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right">Thumbnail</label>
                    <div class="col-xs-4">
                        <label class="ace-file-input">
                            <input type="file" id="id-input-file-2" name="fileImage[]">
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Description </label>
                    <div class="col-xs-9">
                        <textarea name="description" id="description" rows="6" class="col-xs-9 col-sm-5">{{ old('description')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Content </label>
                    <div class="col-xs-9">
                        <textarea name="content" id="content" rows="6" class="col-xs-9 col-sm-5">{{ old('content')}}</textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="Gallery" class="tab-pane fade in active">
                <ul class="ace-thumbnails clearfix">
                    <li>
                        <a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
                            <img width="150" height="150" alt="150x150" src="{{ asset('assets/img/home/courses/course-1.jpg') }}" />
                            <div class="text">
                                <div class="inner">Sample Caption on Hover</div>
                            </div>
                        </a>
                    </li>                                    
                </ul>
            </div>
            <div id="Policy" class="tab-pane fade in active">
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Trải nghiệm </label>
                    <div class="col-xs-9">
                        <textarea name="experience" id="experience" rows="6" class="col-xs-9 col-sm-5">{{ old('experience')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Dịch vụ</label>
                    <div class="col-xs-9">
                        <textarea name="service" id="service" rows="6" class="col-xs-9 col-sm-5">{{ old('service')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Chính sách</label>
                    <div class="col-xs-9">
                        <textarea name="policy" id="policy" rows="6" class="col-xs-9 col-sm-5">{{ old('policy')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Điều khoản</label>
                    <div class="col-xs-9">
                        <textarea name="rules" id="rules" rows="6" class="col-xs-9 col-sm-5">{{ old('rules')}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-2 col-md-9">
                <button class="btn btn-info" type="Submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                </button>
                &nbsp; &nbsp; &nbsp;
                <a class="btn" href="#">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </a>
                &nbsp; &nbsp; &nbsp;
                <a class="btn btn-success" href="{{ route('get.dashboard.product.list') }}">
                    <i class="ace-icon fa fa-list bigger-110"></i>
                    Lists
                </a>
            </div>
        </div>
    </div>
</form>
@endsection
@section("javascript")  
<script src="<?php echo asset('admin/plugins/func_ckfinder.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<script src="{{asset('admin/js/select2.min.js') }}"></script>
<script src="{{asset('admin/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{asset('admin/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{asset('admin/js/bootbox.js') }}"></script>
<script src="{{asset('admin/js/bootstrap-multiselect.min.js') }}"></script>
<script src="{{asset('admin/plugin/jquery.filer/js/jquery.filer.min.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
    });

    $(document).ready(function(){
        ckeditor('description')
        $('.textarea').wysihtml5();
    });
    
    $(document).ready(function(){
        ckeditor('content')
        $('.textarea').wysihtml5();
    });

    $(document).ready(function(){
        ckeditor('experience')
        $('.textarea').wysihtml5();
    });
    $(document).ready(function(){
        ckeditor('service')
        $('.textarea').wysihtml5();
    });
    $(document).ready(function(){
        ckeditor('policy')
        $('.textarea').wysihtml5();
    });
    $(document).ready(function(){
        ckeditor('rules')
        $('.textarea').wysihtml5();
    });

    $('.select2').css('width','500px').select2({allowClear:true})
        $('#select2-multiple-style .btn').on('click', function(e){
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            if(which == 2) $('.select2').addClass('tag-input-style');
             else $('.select2').removeClass('tag-input-style');
    });

    $(document).one('ajaxloadstart.page', function(e) {
        $('[class*=select2]').remove();
        $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
        $('.rating').raty('destroy');
        $('.multiselect').multiselect('destroy');
    });
</script>
@endsection