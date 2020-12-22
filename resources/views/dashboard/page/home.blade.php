@extends('dashboard.app')
@section('title', 'Pages')
@section('page-header', 'Home Page')
@section('content')
@include('dashboard.layouts.alert')
<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>

@endsection
@section('javascript')

    <script src="{{ asset('admin/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($) {
            //initiate dataTables plugin

        })
    </script>
@endsection

