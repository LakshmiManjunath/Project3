@extends('_master')

@section('title')
	Random User Information
@stop

@section('body')
	<h1 class="header_user_info">Project 3: <span style="background-color:#4F004F;border-radius:10px;color:#D8D8D2;padding-left:15px;padding-right:15px;"> Random User Information</span></h1>
@stop
@section('content')
<form action='<?php echo URL::asset('/user_info'); ?>' method="POST">

<div class="input-section">
<?php $word_count = isset($_POST['word_count']) ? $_POST['word_count'] : ''; ?>

<a href='<?php echo URL::asset('/'); ?>'><img src='<?php echo URL::asset('/images/home-logo.png'); ?>' alt="home-logo" id="home-logo">HOME</a>

	<label id="label-input-user-info" for="no_user_info">Number of User Information 
	<select id="no_user_info" name="word_count"> 
			<option value="">Select value</option>
			<option value='1' <?php if($word_count == 1){echo "selected='selected'";} ?>>1</option>
			<option value='2' <?php if($word_count == 2){echo "selected='selected'";} ?>>2</option>
			<option value='3' <?php if($word_count == 3){echo "selected='selected'";} ?>>3</option>
			<option value='4' <?php if($word_count == 4){echo "selected='selected'";} ?>>4</option>
			<option value='5' <?php if($word_count == 5){echo "selected='selected'";} ?>>5</option>
			<option value='6' <?php if($word_count == 6){echo "selected='selected'";} ?>>6</option>
			<option value='7' <?php if($word_count == 7){echo "selected='selected'";} ?>>7</option>
			<option value='8' <?php if($word_count == 8){echo "selected='selected'";} ?>>8</option>
			<option value='9' <?php if($word_count == 9){echo "selected='selected'";} ?>>9</option>
		</select><span style="color:red;font-size:15px;">*Select atleast one word</span></label>
	<br><input id="generate-button" type="submit" value="Generate User Info">
</div>
<div class="user_info">

	<?php
		$path = app_path().'/controllers/user_info_logic.php';
		require $path;
	?>

</div>
@stop

