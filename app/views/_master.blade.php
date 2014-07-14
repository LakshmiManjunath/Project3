<!DOCTYPE html>
<html>
<head>
<!-- This way of specifying section allows us to re-write it when extended  -->
<title> 
	@section('title')
		Project3: Developer's Best Friend
	@show
</title>
<!-- Customized style sheet for Project 3-->	
		<link rel="stylesheet" href="styles/styles.css" type="text/css">
<!-- Google font Roboto used on the body section -->
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!-- This tag delimits the header section-->
@yield('head')
</head>
<body>
<!-- Including the project logo, which is displayed in all the pages of this app-->
	<a href='/'><img class='logo' alt="p3-logo" src='{{ URL::asset('/images/p3-logo.jpg'); }}' ></a>

<!-- This tag delimits the body section-->
@yield('body')	
<!-- This tag delimits the content section-->
@yield('content')	

</body>
</html>