<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">
</head>
<body>
	
	

	@section('main-content')
    @show







	<!-- JS FILES  -->
	<script src="{{ asset('admin/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
	 {{-- CK Editor --}}
	 <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
	 
	<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>
</html>