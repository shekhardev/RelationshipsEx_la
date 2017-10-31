<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>

	<div class="container">
	<h1>Contact</h1>

		<ul>
		    @foreach($errors->all() as $error)
		        <li>{{ $error }}</li>
		    @endforeach
		</ul>

			{!! Form::open( ['action' => 'FormController@store']) !!}
			
			
			<div class="form-group">
			    {!! Form::label('Your FirstName') !!}
			    {!! Form::text('name', null, 
			        array('required', 
			              'class'=>'form-control', 
			              'placeholder'=>'Your firstname')) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Your LastName') !!}
			    {!! Form::text('lname', null, 
			        array('required', 
			              'class'=>'form-control', 
			              'placeholder'=>'Your lastname')) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Your age') !!}
			    {!! Form::text('age', null, 
			        array('required', 
			              'class'=>'form-control', 
			              'placeholder'=>'Your age')) !!}
			</div>

			<div class="form-group">
			    {!! Form::submit('Contact Us!', 
			      array('class'=>'btn btn-primary')) !!}
			</div>
			{!! Form::close() !!}
			</div>
</body>
</html>