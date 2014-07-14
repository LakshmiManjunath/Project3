@extends('_master')

<!-- This tag rewrites the title section-->
@section('title')
	Random User Information
@stop

<!-- This tag adds file-specific contents to body section-->
@section('body')
<!-- Adding file-specific header -->
	<h1 class="header_user_info">Project 3: <span style="background-color:#4F004F;border-radius:10px;color:#D8D8D2;padding-left:15px;padding-right:15px;"> Random User Information</span></h1>
@stop

<!-- This tag adds file-specific contents to content section-->
@section('content')
<form action='{{ URL::asset('/user_info'); }}' method="POST">

<!-- Beginning of section which accepts number of user information to be generated -->
<div class="input-section">

<!-- Checks if the number of user information to be generated is set -->
<?php $user_info_count = isset($_POST['user_info_count']) ? $_POST['user_info_count'] : ''; ?>

<!-- Link to Home-page -->
<a href='{{URL::asset('/');}}'><img src='{{ URL::asset('/images/home-logo.png');}}' alt="home-logo" id="home-logo">HOME</a>

<!-- choosing user_info_count -->
	<label id="label-input-user-info" for="no_user_info">Number of User Information 
	<select id="no_user_info" name="user_info_count"> 
			<option value="">Select value</option>
			<option value='1' @if($user_info_count == 1){{"selected='selected'";}} @endif >1</option>
			<option value='2' @if($user_info_count == 2){{"selected='selected'";}} @endif >2</option>
			<option value='3' @if($user_info_count == 3){{"selected='selected'";}} @endif >3</option>
			<option value='4' @if($user_info_count == 4){{"selected='selected'";}} @endif >4</option>
			<option value='5' @if($user_info_count == 5){{"selected='selected'";}} @endif >5</option>
			<option value='6' @if($user_info_count == 6){{"selected='selected'";}} @endif >6</option>
			<option value='7' @if($user_info_count == 7){{"selected='selected'";}} @endif >7</option>
			<option value='8' @if($user_info_count == 8){{"selected='selected'";}} @endif >8</option>
			<option value='9' @if($user_info_count == 9){{"selected='selected'";}} @endif >9</option>
	</select><span style="color:red;font-size:15px;">*Select atleast one word</span></label><br>
	<input id="generate-button" type="submit" value="Generate User Info">
</div>

<div class="user_info">
<!-- Includes logic for generating user information based on the user input -->
	<?php
		$path = app_path().'/controllers/user_info_logic.php';
		require $path;
	?>

</div>
@stop

