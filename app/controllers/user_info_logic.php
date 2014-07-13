<?php

	if($word_count)
	{
		for($i=1;$i<=$word_count;$i++)
		{
			$faker = faker::create();
	
			echo "<br>";
			echo '<span style="font-weight: bold;">'.$i.' .Name: </span>'.$faker->name.'<br>';
			// 'Lucy Cechtelar';
			echo '<span style="font-weight: bold;">Address: </span>'.$faker->address.'<br>';
			// "426 Jordy Lodge
			// Cartwrightshire, SC 88120-6700"
			echo '<span style="font-weight: bold;">Profile: </span>'.$faker->text.'<br>';
		}
	}
	
?>