@extends('dashboard.app')
@section('title', 'User')
@section('page-header', 'Create')
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.user.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">UserName </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="user name" name="name" class="col-xs-10 col-sm-5" required value="{{ old('name')}}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Password </label>
        <div class="col-sm-9">
            <input type="password" id="form-field-1" name="password" class="col-xs-10 col-sm-5" required value="" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Re-Password </label>
        <div class="col-sm-9">
            <input type="password" id="form-field-1" name="password_confirmation" class="col-xs-10 col-sm-5" required value="" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>
        <div class="col-sm-9">
            <input type="email" id="form-field-1" placeholder="email address" name="email" class="col-xs-10 col-sm-5" required value="{{ old('email')}}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Role </label>
        <div class="col-xs-4">
            <select class="form-control" id="form-field-select-1" name="role" required>
                <?php getSelectForm(App\Models\Roles::getRoleSelect(), old('role', 3)) ?>
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
            <a class="btn btn-success" href="{{ route('get.dashboard.user.list') }}">
                <i class="ace-icon fa fa-list bigger-110"></i>
                List
            </a>
        </div>
    </div>
</form>
@endsection
@section("javascript")  
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