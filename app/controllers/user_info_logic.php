<?php
/* Checking if the user has chosen number of user information to be generated */
	if($user_info_count)
	{
/* Generating as many user-information as specified by the user*/
		for($i=1;$i<=$user_info_count;$i++)
		{
/* We are using the package fzaninotto/faker to generate random user informations. The usage of this package is specified @https://github.com/fzaninotto/Faker */
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