@extends('_master')

@section('title')
	Random Lorem Ipsum text
@stop

@section('body')
	<h1 class="header_lorem_ipsum">Project 3: <span style="background-color:#400058;border-radius:10px;color:#D8D8D2;">Random Lorem Ipsum Paragraphs</span></h1>
@stop

@section('content')
<div class="lorem_ipsum">
	<?php
		$path = app_path().'/controllers/lorem_ipsum_logic.php';
		require $path;
	?>
</div>	
@stop

