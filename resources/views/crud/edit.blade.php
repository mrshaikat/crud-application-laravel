<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD Application Laravel</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('crud/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/responsive.css') }}">
</head>
<body>

    <style>
        .update img{
            width: 150px;
            height: 150px;
            border: 7px solid rgba(150, 158, 168, 0.404);
           
            
        }
    </style>
	
	

	<div class="wrap ">
		<a class="btn btn-primary" href="{{ url('student-all') }}">All Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Update {{ $edit_data -> name }} Data</h2>
				
				@include('validation')
				
			<form action="{{ url('student-add') }}" method="POST" enctype="multipart/form-data">
			@csrf
				{{-- cross server for bidden --}}
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ $edit_data -> name }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="{{ $edit_data -> email }}">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="{{ $edit_data -> cell }}">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text" value="{{ $edit_data -> uname }}">
                    </div>
                    
                    <div class="form-group update">
                        <img src="{{ URL::to('/') }}/student_photos/{{ $edit_data -> photo }}" alt="">
                        <input type="hidden" name="old_picture" value="{{ $edit_data -> photo }}">
                    </div>
                    

					<div class="form-group">
						<label for="">Picture</label>
						<input name="new_picture" class="form-control" type="file">
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add Student">
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