<?php


	for($i=0;$i<5;$i++){
	$faker = faker::create();
	
	echo "<br>";
	echo '<span style="font-weight: bold;">Name: </span>'.$faker->name.'<br>';
  // 'Lucy Cechtelar';
	echo '<span style="font-weight: bold;">Address: </span>'.$faker->address.'<br>';
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
	echo '<span style="font-weight: bold;">Text: </span>'.$faker->text.'<br>';
	}
	
?>