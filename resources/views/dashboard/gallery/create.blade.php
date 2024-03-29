@extends('dashboard.app')
@section('title', 'Gallery')
@section('page-header', 'Create')
@section('stylesheet')  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugin/jquery.filer/css/jquery.filer.css') }}"/>
@endsection
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.gallery.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Name </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Name" name="name" class="col-xs-10 col-sm-5" required="" value="{{ old('name')}}" />
        </div>
    </div>
        <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tags </label>
        <div class="col-xs-10">
            <select multiple="" id="tags" name="tags[]" class="select2">
                {!! getSelectArrayForm(App\Models\Tag::getSelect2Tags(), old('tags', isset($data) ? convertStrToArr("|", $data['tags']): [0]) ) !!}
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Description </label>
        <div class="col-xs-9">
            <textarea name="description" id="description" rows="6" class="col-xs-9 col-sm-5">{{ old('description')}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right">Status</label>
        <div class="col-xs-9">
            <input name="status" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" checked="true" />
            <span class="lbl"></span>
        </div>
    </div>
    <div class="clearfix"></div>
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
            <a class="btn btn-success" href="{{ route('get.dashboard.gallery.list') }}">
                <i class="ace-icon fa fa-list bigger-110"></i>
                Videos
            </a>
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