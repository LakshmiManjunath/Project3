<?php
/* Checking if the user has chosen number of paragraphs */	
	if($para_count)
	{
/* We are using the package badcow/lorem-ipsum to generate random lorem ipsum text. The usage of this package is specified @https://github.com/samuelwilliams/LoremIpsum*/
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($para_count);
			echo implode('<p>', $paragraphs);
	}
	
?>
