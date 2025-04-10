@extends('dashboard.app')
@section('title', 'Product')
@section('page-header', 'Edit')
@section('stylesheet')  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery.filer/css/jquery.filer.css') }}"/>
@endsection
@section('content')
@include('dashboard.layouts.alert')
<?php
    $option_data = json_decode($data->options);
?>
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.product.edit', ['id'=>$id])}}" method="post" enctype="multipart/form-data">
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
        </ul>
        <div class="tab-content">
            <div id="Content" class="tab-pane fade in active">
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> SKU </label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" disabled name="SKU" class="col-xs-10 col-sm-5" required="" value="{{ old('SKU', isset($data) ? $data['sku'] : '')}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tiêu đề </label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" placeholder="Title" name="name" class="col-xs-10 col-sm-5" required="" value="{{ old('name', isset($data) ? $data['name'] : '')}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Danh mục </label>
                    <div class="col-xs-10">
                        <select multiple="" id="category" name="category[]" class="select2">
                            {!! getSelectArrayForm(App\Models\Categories::getSelect2Category(1), old('category', isset($data) ? convertStrToArr("|", $data['categories']): [0]) ) !!}
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Thời gian </label>
                    <div class="col-xs-4">
                        <select class="form-control" id="form-field-select-1" name="base_unit" required="">
                            <?php selectedOption(getTourTime(), old('base_unit', isset($data) ? $data['base_unit']: '1N')) ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Đơn giá </label>
                    <div class="col-xs-9">
                        <input type="number" name="unit_price" class="col-xs-10 col-sm-5" required value="{{ old('unit_price', isset($data) ? $data['unit_price'] : '')}}" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tags </label>
                    <div class="col-xs-10">
                        <select multiple="" id="tags" name="tags[]" class="select2">
                            {!! getSelectArrayForm(App\Models\Tag::getSelect2Tags(), old('tags', isset($data) ? App\Models\Post_Tag::getArrTags($data['id']): [0]) ) !!}
                        </select>
                    </div>
                </div>
                            <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right">Trạng thái</label>
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
                    <label class="col-xs-2 control-label no-padding-right">Ảnh đại diện<span class="img-size">(270x230)</span></label>
                    <div class="col-xs-4">
                        <label class="ace-file-input">
                            <input type="file" id="id-input-file-1" name="fileImage[]">
                        </label>
                    </div>
                </div>
                @if($data['thumbnail'] != '')
                    <div class="form-group">
                        <label class="col-xs-2 control-label no-padding-right" for="form-field-1"></label>
                        <div class="col-xs-9">
                            <img src="{{asset($data['thumbnail'])}}" style="max-height: 100px">
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right">Ảnh lớn<span class="img-size">(870x470)</span></label>
                    <div class="col-xs-4">
                        <label class="ace-file-input">
                            <input type="file" id="id-input-file-2" name="fileImage2[]">
                        </label>
                    </div>
                </div>
                <?php $img2 = App\Models\ImageSingle::getPathImage($data['id']); ?>
                @if($img2 != '')
                    <div class="form-group">
                        <label class="col-xs-2 control-label no-padding-right" for="form-field-2"></label>
                        <div class="col-xs-9">
                            <img src="{{asset($img2)}}" style="max-height: 120px">
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Giới tiệu </label>
                    <div class="col-xs-9">
                        <textarea name="description" id="description" rows="6" class="col-xs-9 col-sm-5">{{ old('description', isset($data) ? $data['description'] : '')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Lịch trình tour </label>
                    <div class="col-xs-9">
                        <textarea name="content" id="content" rows="6" class="col-xs-9 col-sm-5">{{ old('content', isset($data) ? $data['content'] : '')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Giá tour </label>
                    <div class="col-xs-9">
                        <textarea name="tour_service" id="tour_service" rows="6" class="col-xs-9 col-sm-5">{{ old('tour_service', isset($option_data) ? $option_data->service : '')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label no-padding-right" for="form-field-1"> Chính sách tour </label>
                    <div class="col-xs-9">
                        <textarea name="tour_policy" id="tour_policy" rows="6" class="col-xs-9 col-sm-5">{{ old('tour_policy', isset($option_data) ? $option_data->policy : '')}}</textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="Gallery" class="tab-pane fade ">
                        Gallery
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
<script src="{{asset('admin/plugins/jquery.filer/js/jquery.filer.min.js') }}"></script>
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
        ckeditor('tour_service')
        $('.textarea').wysihtml5();
    });

    $(document).ready(function(){
        ckeditor('tour_policy')
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