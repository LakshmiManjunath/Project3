<?php
	
	if($word_count)
	{
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($word_count);
			echo implode('<p>', $paragraphs);
	}
	
?>
