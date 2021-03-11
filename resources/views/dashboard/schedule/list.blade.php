@extends('dashboard.app')
@section('title', 'Schedule')
@section('page-header', 'Schedule')
@section('stylesheet')  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/chosen.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery.filer/css/jquery.filer.css') }}"/>
@endsection
@section('content')
@include('dashboard.layouts.alert')
<form class="form-horizontal" role="form" action="{{ route('post.dashboard.product.schedule.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Tour </label>
        <div class="col-xs-4">
            <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Tour..." name="product[]" required>
                <option value="">  </option>
                {!! getSelectArrayForm(App\Models\Product::getSelect2Products(), [0]) !!}
            </select>
        </div>
    </div>
    <div class="form-group ">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Date </label>
       <div class="col-xs-9">
            <div class="col-xs-5 input-group">
                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy/mm/dd" name="action_date" required value="{{ old('action_date')}}"/>
                <span class="input-group-addon">
                    <i class="fa fa-calendar bigger-110"></i>
                </span>
            </div>
       </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Description </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" name="description" class="col-xs-10 col-sm-5" value="{{ old('description') }}" />
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
        </div>
    </div>
</form>
<div class="tabbable">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active">
            <a data-toggle="tab" href="#home">
                <i class="green ace-icon fa fa-home bigger-120"></i>
                Schedule
            </a>
        </li>
    </ul>
    <div>
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Updated</th>
                    <th></th>
                </tr>
                <tbody>
                    @if(isset($scheduleTour))
                    @foreach($scheduleTour as $key=>$item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><a href="{{ route('get.dashboard.product.schedule.edit', ['id'=>$item->id]) }}">{{ App\Models\Product::find($item->product_id)->name }}</a></td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ getStatus($item->blocked) }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="{{ route('get.dashboard.product.schedule.edit', ['id'=>$item->id]) }}">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('get.dashboard.product.schedule.edit', ['id'=>$item->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('javascript')
    <script src="{{asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>
    <script src="{{asset('admin/js/bootstrap-multiselect.min.js') }}"></script>
    <script src="{{asset('admin/js/chosen.jquery.min.js') }}"></script>

    <script src="{{asset('admin/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{asset('admin/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{asset('admin/js/moment.min.js') }}"></script>
    <script src="{{asset('admin/js/daterangepicker.min.js') }}"></script>
    <script src="{{asset('admin/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($) {
            //initiate dataTables plugin
            var myTable = 
            $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
            .DataTable( {
                bAutoWidth: false,
                "aoColumns": [null, null,null, null, null, null,{ "bSortable": false }
                ],
                "aaSorting": [],
                select: {
                    style: 'multi'
                }
            } );

            $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
            new $.fn.dataTable.Buttons( myTable, {
                buttons: [
                  {
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                  },
                  {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                  },
                  {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                  },
                  {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                  },
                  {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                  },
                  {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                  }       
                ]
            } );

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
        
            if(!ace.vars['touch']) {
                    $('.chosen-select').chosen({allow_single_deselect:true}); 
                    //resize the chosen on window resize
            
                    $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                        if(event_name != 'sidebar_collapsed') return;
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    });
            
            
                    $('#chosen-multiple-style .btn').on('click', function(e){
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                         else $('#form-field-select-4').removeClass('tag-input-style');
                    });
                }
            setTimeout(function() {
                $($('.tableTools-container')).find('a.dt-button').each(function() {
                    var div = $(this).find(' > div').first();
                    if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                    else $(this).tooltip({container: 'body', title: $(this).text()});
                });
            }, 500);

            $('.show-details-btn').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').next().toggleClass('open');
                $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
            });

            $('.date-picker').datepicker({
                format: 'yyyy/mm/dd',
                autoclose: true,
                todayHighlight: true
            }).datepicker("setDate", new Date());

      })
    </script>
@endsection

