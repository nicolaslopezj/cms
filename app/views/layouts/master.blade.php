<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS</title>
	<link rel="stylesheet" href="{{ asset('src/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('src/styles2.css') }}">
	<link rel="stylesheet" href="{{ asset('src/slidebar.css') }}">
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('src/jquery.js') }}"></script>

	@yield('styles')
</head>
<body>
	<div id="wrapper">

	    <!-- Sidebar -->
	    <div id="sidebar-wrapper">
	        <ul class="sidebar-nav">
	        	@yield('sidebar')
	        </ul>
	    </div>
	    <!-- /#sidebar-wrapper -->

	    <!-- Page Content -->
	    <div id="page-content-wrapper">
	    	@include('layouts.header')

	        <div class="container-fluid">
	            @yield('content')
				@include('layouts.footer')
	        </div>
	    </div>
	    <!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<script>
	$("#menu-toggle").click(function(e) {
	    e.preventDefault();
	    $("#wrapper").toggleClass("toggled");
	});
	</script>
	<script type="text/javascript" src="{{ asset('src/jany.js') }}"></script>
	@yield('scripts')
</body>
</html>
