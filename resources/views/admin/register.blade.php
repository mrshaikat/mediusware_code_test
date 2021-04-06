<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="{{ route('register') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text" name="email">
					</div>
					
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" type="password" name="password">
					</div>

					<div class="form-group">
						<label for="">Confirm Password</label>
						<input class="form-control" type="password" name="password_confirmation">
					</div>

					<br>
					<hr>
					

					<div class="form-group">
						<p class=" text-center">
							<a class="btn btn-link" href="{{ route('admin.login') }}">Sign In ?</a>
						</p>
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>

					
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset('admin/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>
</html>