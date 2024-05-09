<?php
// Exploding the arrays, make the array from the string using the specified separator
	echo "<h3> Exploding the Arrays </h3>";
	$inp = 'This is the eight words sentence for exploding';
	$exp = explode(" ", $inp);
	echo "Sample Sentence is: ", "<b>" . $inp . "\n </b>";
	echo "<pre>\n";
	print_r($exp);
	echo "</pre>\n";

?>