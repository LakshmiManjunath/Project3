@extends('_master')

@section('title')
	Random User Information
@stop

@section('body')
	<h1 class="header_user_info">Project 3: <span style="background-color:#400058;border-radius:10px;color:#D8D8D2;"> Random User Information</span></h1>
@stop
@section('content')
<div class="user_info">

	<?php
		$path = app_path().'/controllers/user_info_logic.php';
		require $path;
	?>

</div>
@stop

