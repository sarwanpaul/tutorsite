<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			@yield('title')
		</title>
		<link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">	
		<link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
    	<link href="public/vendors/animate.css/animate.min.css" rel="stylesheet">
    	<link href="public/build/css/custom.min.css" rel="stylesheet">

		<script src="public/vendors/jquery/dist/jquery.min.js"></script>
    	<script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    	@yield('script')			
	</head>
	<body class="login">
		@yield('content')
	</body>
</html>