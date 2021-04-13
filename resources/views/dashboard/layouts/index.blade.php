@extends('dashboard.app')
@section('title', 'Dashboard')
@section('content')
<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>

    <i class="ace-icon fa fa-check green"></i>

    Welcome to
    <strong class="green">
        {{ config('app.name', 'Laravel') }}
        <small>{{ config('app.version', 'v1.0') }}</small>
    </strong>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="widget-box transparent" id="recent-box">
            <div class="widget-header">
                <h4 class="widget-title lighter smaller">
                    <i class="ace-icon fa fa-rss orange"></i>RECENT
                </h4>

                <div class="widget-toolbar no-border">
                    <ul class="nav nav-tabs" id="recent-tab">
                        <li class="active">
                            <a data-toggle="tab" href="#comment-tab">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-body">
                <div class="widget-main padding-4">
                    <div class="tab-content padding-8">
                          <div id="comment-tab" class="tab-pane active">
                            <div class="comments">
                                @if(isset($contact_Dasboard))
                                @foreach($contact_Dasboard as $item)
                                <div class="itemdiv commentdiv">
                                    <div class="user">
                                        <img alt="" src="admin/images/avatars/avatar2.png" />
                                    </div>

                                    <div class="body">
                                        <div class="name">
                                            <a href="#">{{$item->name}}</a>
                                        </div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o"></i>
                                            <span class="green">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </div>

                                        <div class="text">
                                            <i class="ace-icon fa fa-quote-left"></i>
                                            {{$item->content}}
                                        </div>
                                    </div>

                                    <div class="tools">
                                        <div class="inline position-relative">
                                            <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                        <span class="orange">
                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="hr hr8"></div>
                            <div class="center">
                                <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>
                                &nbsp;
                                <a href="#" class="btn btn-sm btn-white btn-info">
                                    See all contact &nbsp;
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="hr hr-double hr8"></div>
                        </div>
                    </div>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- /.widget-box -->
    </div><!-- /.col -->

</div><!-- /.row -->  
@endsection


