<?php
// Create an empty Array first, then specify the data for it 
	echo "<h4>The arrays with the single data variables\n</h4>";

	$va = array();
	$va[] = 'Hello';
	$va[] = 'World!';
	echo "$va[1]";

	echo "<pre>\n";
	var_dump($va);
	echo "\n</pre>\n";

	echo "<h4>The Arrays with Key - Value Pairs </h4>";
	$za = array();
	$za['name'] = 'Chuck';
	$za['course'] = 'WA4E';


	echo "<pre>\n";
	var_dump($za);
	echo "\n</pre>\n";

?>
