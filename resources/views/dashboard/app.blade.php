<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.header')
@yield('stylecss')
<body class="no-skin">
	@include('dashboard.layouts.nav')
	    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try { ace.settings.loadState('main-container'); } catch (e) { console.log(e); }
        </script>
        @include('dashboard.layouts.sidebar')
        <div class="main-content">
			@yield('content')
		</div>
	@include('dashboard.layouts.footer')
	@yield('javascript')
</body>
</html>
