<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('crud/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/responsive.css') }}">
</head>
<body>
	
	

	<div class="wrap shadow">
	<a class="btn btn-info" href="{{ url('all-data') }}">All Data</a>
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				@if( $errors -> any() )
					<p class="alert alert-danger">{{  $errors -> first() }} <button class="close" data-dismiss="alert">&times;</button> </p>
				@endif
			<form action="{{ url('crud-add') }}" method="POST" enctype="multipart/form-data">
				@csrf
				{{-- cross server for bidden --}}
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Picture</label>
						<input name="picture" class="form-control" type="file">
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset('crud/assets/js/jquery-3.4.1.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/popper.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/bootstrap.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/custom.js') }} "></script>
</body>
</html>