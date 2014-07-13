@extends('_master')

@section('title')
	Project3: Developer's Best Friend
@stop

@section('body')
	<h1>Project 3: <span style="background-color:#400058;border-radius:10px;color:#D8D8D2;">Developer's Best Friend</span></h1>
@stop
@section('content')
<div class="lorem_ipsum">
	<p>In publishing and graphic design, lorem-ipsum is a place-holder textcommonly used to demonstrate the graphic elements of a document <br>or visual presentation.By replacing the distraction of meaningfulcontent with filler text of scrambled Latin it allows viewers to focus on<br> graphical elements such as font, typography, and layout.</p>
	<p> To generate random text, we are using the package <em>'badcow/lorem-ipsum'</em></p>
	<p><a href='<?php echo URL::asset('/lorem_ipsum'); ?>'>Generate 5 random-paragraphs of lorem ipsum text</a></p>
</div>


<div class="user_info">
	<p>This section generates 5 random user informations. The informations includes date-of-birth and a brief-profile of each users </p>
	<p> To generate the user-info, we are using the package <em>' fzaninotto/faker'</em>.</p>
	<p><a href='<?php echo URL::asset('/user_info'); ?>'>Generate 5 random User Informations</a></p>
</div>


@stop

