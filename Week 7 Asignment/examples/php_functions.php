<?php
	echo "<h3> Some Built-In PHP Functions";

	// Reversing the string
	echo "<h4> 1. Reversing the String</h4>";
	echo "Original String: ", "<b> .dlroW olleH </b>" ;

	echo "<p>Final Result: <b>";
	echo strrev(" .dlroW olleH ") ."</b></p>";

	// Repeating the string
	echo "<h4> 2. Repeating the String for spacified number of Times</h4>";
	echo "Original String: ", "<b> Hip </b>" ;

	echo "<p>Final Result: <b>";
	echo str_repeat("Hip", 3) ."</b>" ;

	// Capitalizing  the string
	echo "<h4> 3. Capitalizing the String </h4>";
	echo "Original String: ", "<b> hooray! </b>" ;

	echo "<p>Final Result: <b>";
	echo strtoupper("hooray!") ."</b>" ;

	// Repeating the string
	echo "<h4> 4. Counting number of charactrs in the string</h4>";
	echo "Given String: ", "<b> introduction </b>" ;

	echo "<p>Number of Characters: <b>";
	echo strlen("Introduction") ."</b>" ;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/* The User Defined Functions in PHP*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	echo "<h3> User-Defined PHP Functions</h3>";

	// Defining the function, the names don't need the "$"
	function greeting()
	{
		echo "<b> Hello World!, this is my First Function </b>";
	};

	// Calling the function, the namecases dont matters
	echo "<p> Function Output:" . "\n</p>";
	greeting();


	function salamu($lang)
	{
		if ($lang == 'en') return "Good Morning ";
		if ($lang == 'fr') return "Bonjour ";
		return "Habari ";
	}

	echo "<p> Greeting People from different Countries!</p>";
	echo "<p>" . salamu('kisw') . "Janeth!" . "</p>";
	echo "<p>" . salamu('fr') . "José!\n" . "</p>";
	echo "<p>" . salamu('en') . "James!\n" . "</p>";


	echo "<h4> Calling the function by Value </h4>";
	echo "<p> Here the output is the copy of the value of the variable and the variable value retain its magnitude</p>";
	// When calling the function by value the parameters are copied by the alias in the function and aren't referenced to

	function double($alias){
		$alias = $alias * 2;
		return $alias;
	}

	$val = 10;
	$dval = double($val);
	echo "Value = $val Double = $dval";

	echo "<h4> Calling the function by Reference </h4>";
	echo "<p> Here the output is the new value of the variable and the variable magnitude become changed upon the function execution, to attain this add & before the $ when defining the function arument</p>";
	// When calling the function by value the parameters are changed forever

	function triple(&$realthing){
		$realthing = $realthing * 3;
		return $realthing;
	}

	$val = 40;
	triple($val);
	echo "Value now is = $val Triple = $val";



?>