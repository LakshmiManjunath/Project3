@extends('_master')

<!-- This tag rewrites the title section-->
@section('title')
	Random Lorem Ipsum text
@stop

<!-- This tag adds file-specific contents to body section-->
@section('body')
<!-- Adding file-specific <h1> tag -->
	<h1 class="header_lorem_ipsum">Project 3: <span style="background-color:#4F004F;border-radius:10px;color:#D8D8D2;padding-left:15px;padding-right:15px;">Random Lorem Ipsum Paragraphs</span></h1>
@stop

<!-- This tag adds file-specific contents to content section-->
@section('content')
<form action='{{ URL::asset('/lorem_ipsum'); }}' method="POST">

<!-- Beginning of section which accepts number of paragraphs from the user -->
<div class="input-section">

<!-- Checks if the paragraph count is set -->
<?php $para_count = isset($_POST['para_count']) ? $_POST['para_count'] : ''; ?>

<!-- Link to Home-page -->
<a href='{{ URL::asset('/'); }}'><img src='{{ URL::asset('/images/home-logo.png'); }}' alt="home-logo" id="home-logo">HOME</a>
	
<!-- choosing number of paragraphs to generate -->
	<label id="label-input-para" for="no_para">Number of paragraphs 
	<select id="no_para" name="para_count"> 
			<option value="">Select value</option>
			<option value='1' @if($para_count == 1){{"selected='selected'";}} @endif >1</option>
			<option value='2' @if($para_count == 2){{"selected='selected'";}} @endif >2</option>
			<option value='3' @if($para_count == 3){{"selected='selected'";}} @endif >3</option>
			<option value='4' @if($para_count == 4){{"selected='selected'";}} @endif >4</option>
			<option value='5' @if($para_count == 5){{"selected='selected'";}} @endif >5</option>
			<option value='6' @if($para_count == 6){{"selected='selected'";}} @endif >6</option>
			<option value='7' @if($para_count == 7){{"selected='selected'";}} @endif >7</option>
			<option value='8' @if($para_count == 8){{"selected='selected'";}} @endif >8</option>
			<option value='9' @if($para_count == 9){{"selected='selected'";}} @endif >9</option>
	</select><span style="color:red;font-size:15px;">*Select atleast one word</span></label><br>
	<input id="generate-button" type="submit" value="Generate Lorem-Ipsum text">
</div>

<div class="lorem_ipsum">
<!-- Includes logic for generating lorem-ipsum text based on the user input -->
	<?php
		$path = app_path().'/controllers/lorem_ipsum_logic.php';
		require $path;
	?>
</div>	

</form>
@stop

