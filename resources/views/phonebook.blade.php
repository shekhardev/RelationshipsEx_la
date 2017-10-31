<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phonebook</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div id="app">
		<div class="container">
		<Myheader></Myheader>
		<router-view></router-view>

		<Myfooter></Myfooter>
	</div>
	</div>
	
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>