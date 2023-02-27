<!DOCTYPE html>
<html dir="ltr" lang="vn">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@if(isset($meta_description)) {{ $meta_description }} @else Đơn vị tổ chức gala, sự kiện, teambuilding học sinh uy tín, chuyên nghiệp @endif" />
    <meta name="google-site-verification" content="vietpeace.com">
	@if(isset($page_title))
	<title>{{ $page_title }}</title>
	@else
	<title>Vietpeacetravel - CÔNG TY DU LỊCH BÌNH AN VIỆT</title>
	@endif
    <meta name="robots" content="Dã ngoại cuối tuần cùng con yêu, tổ chức dã ngoại cuối tuần cho trẻ, tổ chức picnic cho học sinh, tổ chức sự kiện họp mặt liên hoan, hội nghị hội thảo, đêm gala cuối năm, họp lớp 10 năm, kỷ niệm ngày ra trường, tất niên cuối năm">
	<meta name="keywords" content="Dã ngoại cuối tuần cùng con yêu, tổ chức dã ngoại cuối tuần cho trẻ, tổ chức picnic cho học sinh, tổ chức sự kiện họp mặt liên hoan, hội nghị hội thảo, đêm gala cuối năm, họp lớp 10 năm, kỷ niệm ngày ra trường, tất niên cuối năm"/>
  	<meta name="news_keywords" content="Dã ngoại cuối tuần cùng con yêu, tổ chức dã ngoại cuối tuần cho trẻ, tổ chức picnic cho học sinh, tổ chức sự kiện họp mặt liên hoan, hội nghị hội thảo, đêm gala cuối năm, họp lớp 10 năm, kỷ niệm ngày ra trường, tất niên cuối năm, sinh nhật"/>

	<meta property="fb:app_id" content="1234567890" /> 
	<meta property="og:type" content="article" /> 
	<meta property="og:url" content="https://www.facebook.com/dulichvietpeace/" /> 
	<meta property="og:title" content="Vietpeace Teambuilding - Event" /> 
	<meta property="og:image" content="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/319332982_1821412901551040_3634522783829138749_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=bok3c6nC65oAX8kv6Es&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCIorufRRcBrml0arWwG9rv6zwSaDoz4McZx2fQcDsrhQ&oe=63B00554" /> 
	<meta property="og:description"    content="https://vietpeace.com/bao-gia-dich-vu" />

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
    {!! App\Models\Social::where('type','GOOGLE_ANA')->first()->link !!}
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="OZNOj2zU">
	</script>
</head>
<body class="stretched">
	<div id="wrapper" class="clearfix">