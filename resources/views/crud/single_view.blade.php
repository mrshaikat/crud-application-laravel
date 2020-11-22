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
        .single-studnt img{

            width: 200px;
            height: 200px;
            border: 7px solid gray;
            border-radius: 50%;
            margin: auto;
            display: block;

        }
    </style>
	

	<div class="wrap ">
		<a class="btn btn-primary" href="{{ url('student-all') }}">All Student</a>
		<div class="card shadow single-studnt">
			
                
                <img class=" shadow mt-3" src="{{ URL::to('student_photos').'/'. $show_single -> photo }}" alt="">
                <h2 class="text-center mt-3">{{  $show_single -> uname }}</h2>

                <table class=" table table-striped">

                    <tr>
                        <td>Name</td>
                        <td>{{ $show_single -> name }}</td>
                    </tr>
    
                    <tr>
                        <td>E-mail</td>
                        <td>{{ $show_single -> email }}</td>
                    </tr>
    
                    <tr>
                        <td>Cell Number</td>
                        <td>{{ $show_single -> cell }}</td>
                    </tr>

                </table>

                


		
	</div>
	







	<!-- JS FILES  -->
	<script src="{{ asset('crud/assets/js/jquery-3.4.1.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/popper.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/bootstrap.min.js') }} "></script>
	<script src="{{ asset('crud/assets/js/custom.js') }} "></script>
</body>
</html>