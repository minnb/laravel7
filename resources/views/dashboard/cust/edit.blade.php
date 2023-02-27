@extends('dashboard.app')
@section('title', 'Customer')
@section('page-header', 'Edit')
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.customer.edit', ['id'=>$data['id']])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Name </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Name" name="name" class="col-xs-10 col-sm-5" required="" value="{{ old('name', isset($data) ? $data['name'] : '' ) }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Phone </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="phone" name="phone" class="col-xs-10 col-sm-5" value="{{ old('phone', isset($data) ? $data['phone'] : '' ) }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Company </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="email" name="email" class="col-xs-10 col-sm-5" required="" value="{{ old('email', isset($data) ? $data['email'] : '' ) }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Description </label>
        <div class="col-xs-9">
            <textarea name="description" id="description" rows="6" class="col-xs-9 col-sm-5">{{  old('description', isset($data) ? $data['content'] : "") }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right">Status</label>
        <div class="col-xs-9">
             @if($data['blocked'] == 0)
                <input name="status" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" checked="true" />
            @else
                <input name="status" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
            @endif
            <span class="lbl"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right">Image</label>
        <div class="col-xs-4">
            <label class="ace-file-input">
                <input type="file" id="id-input-file-2" name="fileImage[]">
            </label>
        </div>
    </div>
    @if($data['image'] != '')
        <div class="form-group">
            <label class="col-xs-2 control-label no-padding-right" for="form-field-1"></label>
            <div class="col-xs-9">
                <img src="{{asset($data['image'])}}" style="max-height: 100px">
            </div>
        </div>
    @endif

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
            <a class="btn btn-success" href="{{ route('get.dashboard.customer.list') }}">
                <i class="ace-icon fa fa-list bigger-110"></i>
                List
            </a>
        </div>
    </div>
</form>
@endsection
@section("javascript")  
<script src="<?php echo asset('admin/plugins/func_ckfinder.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
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
</script>
@endsection