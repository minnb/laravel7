<!DOCTYPE html>
<html dir="ltr" lang="vn">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@if(isset($page_title))
	<title>{{ $page_title }}</title>
	@else
	<title>Vietpeace Edu - đơn vị tổ chức teambuilding học sinh uy tín, chuyên nghiệp</title>
	@endif
	<meta name="description" content="@if(isset($meta_description)) {{ $meta_description }} @else Đơn vị tổ chức teambuilding học sinh uy tín, chuyên nghiệp @endif" />
	<meta name="VietpeaceTravell" content="Vietpeace Edu - đơn vị tổ chức teambuilding học sinh uy tín, chuyên nghiệp" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/calendar.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('event/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-87319116-1');
	</script>
</head>
<body class="stretched">
	<div id="wrapper" class="clearfix">