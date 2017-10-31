<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Article</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@foreach ($article as $articles)
		<h1>{{$articles->title}} <span> Posted by....... </span></h1>

		<p>{{$articles->body}}</p>
	@endforeach
	
</body>
</html>