<!DOCTYPE html>
<html>
<head>

<title> 
	@section('title')
		Project3: Developer's Best Friend
	@show
</title>
	
		<link rel="stylesheet" href="styles/styles.css" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
@yield('head')
</head>
<body>

	<a href='/'><img class='logo' src='<?php echo URL::asset('/images/p3-logo.jpg'); ?>' ></a>
@yield('body')	
@yield('content')	

</body>
</html>