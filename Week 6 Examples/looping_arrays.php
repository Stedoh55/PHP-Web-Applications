<?php
// Looping the Key -Value Pairs Arrays, first define the values for keys mapping to the values before implementing the behaviour
	echo "<h4>The Arrays with Key - Value Pairs </h4>";
	$za = array('name' => 'chuck','Office Hours', 'course' => 'WA4E',
	 'year' => 2001,'married' => true, 'Workplan' );

	foreach ($za as $k => $v) {
		echo "<p> Key= ", $k, " Val= ", $v, "\n</p>";
	}


// Looping for the linear syntax, the key is 0, 1, 2, 3, ....
	echo "<h4>The arrays with the single data variables\n</h4>";

	$va = array();
	$va[] = 'Hello';
	$va[] = 'World!';

	foreach ($va as $k => $v) {
		echo "<p>Key= ", $k, " Val=", $v, "\n</p>";
	}

// Counted loop through an Arrays
	echo "<h4> Counted Arrays </h4>";
	$stuff = array('Chuck','SI664');
	for ($i=0; $i < count($stuff) ; $i++) { 
		echo "<p>I=","$i", " Val=", $stuff[$i],"\n</p>";
	}

?>
