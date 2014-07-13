@extends('_master')

@section('title')
	Project3: Developer's Best Friend
@stop

@section('body')
	<h1 class="header_index">Project 3: <span style="background-color:#4F004F;border-radius:10px;color:#D8D8D2;padding-left:15px;padding-right:15px;">Developer's Best Friend</span></h1>
@stop
@section('content')
<div class="lorem_ipsum">
	<h2>LOREM IPSUM GENERATOR</h2>
	<p>In publishing and graphic design, lorem-ipsum is a place-holder textcommonly used to demonstrate the graphic<br> elements of a document or visual presentation.By replacing the distraction of meaningful content with filler text<br> of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</p>
	<p> The number of paragraphs generated depends on the users input.</p>
	<p> To generate random text, we are using the package <em>'badcow/lorem-ipsum'.</em></p>
	<p><a href='<?php echo URL::asset('/lorem_ipsum'); ?>'>Generate 5 random-paragraphs of lorem ipsum text</a></p>
</div>


<div class="user_info">
	<h2>USER INFO GENERATOR</h2>
	<p>This section generates random user informations based on the users input. The informations includes name of the user,address and a brief-profile of each users </p>
	<p> To generate the user-info, we are using the package <em>' fzaninotto/faker'</em>.</p>
	<p><a href='<?php echo URL::asset('/user_info'); ?>'>Generate 5 random User Informations.</a></p>
</div>


@stop

