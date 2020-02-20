<?php 
    require("vendor/autoload.php");
	use HighlightLib\CodeHighlight;


	$ch = new CodeHighlight();
	echo $ch->highlight("asd");


