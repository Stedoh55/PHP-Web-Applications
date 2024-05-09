<?php
echo "<h2> Array Functions</h2>";

	$za = array();
	$za['jina'] = 'Chuck';
	$za['course'] = 'WA4E';

// Finding out if the key Exist in the Array
	echo "<h4> Finding out if the key Exist in the Array </h4>";

	if (array_key_exists('course', $za)) {
		echo "Course Exists\n";
	} else {
		echo "Course doesn't exist\n";
	}

// Checking if jina is set in the array
	echo "<h4> Checking if 'jina' is set in the array </h4>";
	echo isset($za['jia']);

// Finding the number of keys in an Array ( Count function carry no Quatations nor comma(,) before it)
	echo "<h4> Finding the number of keys in an Array </h4>";
	echo "Count: " . count($za) . "\n" ;

// Finding if the given variable is an array
	echo "<h4> Finding if the given variable is an array </h4>";
	if (is_array($za)) {
		echo '$za is an array';
	} else {
		echo '$za is not an array';
	}

// Sorting the Array items

	echo "<h4> Sorting the Array items </h4>";

	// (i) Using Sort function
	$stuff = array('name' => 'chuck','activity' => 'office Hours', 'course' => 'web', 'married' => 'yes', 'workplan' => 'unpublished' );
		
	echo "<h5>(i) Using Sort function </h5>";
	echo "<p> This disrupts, the key value asssociation and returning only the values and replacing the key names by the new indices</p> ";
	echo "❤ This is Original Array\n";
	echo "<pre>", print_r($stuff) . "</pre>";
	
	echo "❤ This is Array made by Sort function\n";
	sort($stuff);
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";

	// (ii) Using ksort function
	$stiff = array('name' => 'chuck','activity' => 'office Hours', 'course' => 'web', 'married' => 'yes', 'workplan' => 'unpublished', 'address' => 'mitunduruni', 'town' => 'singida' );
		
	echo "<h5>(ii) Using ksort function </h5>";
	echo "<p> This sort the array by their keys in alphabetical order, retaining their key-value asssociation</p> ";
	echo "❤ This is Original Array\n";
	echo "<pre>", print_r($stiff) . "</pre>";
	
	echo "❤ This is Array made by ksort function\n";
	ksort($stiff);
	echo "<pre>";
	print_r($stiff);
	echo "</pre>";

	// (iii) Using asort function
		
	echo "<h5>(iii) Using asort function </h5>";
	echo "<p> This sort the array by their values in alphabetical order, retaining their key-value asssociation</p> ";
	echo "❤ This is Original Array\n";
	echo "<pre>", print_r($stiff) . "</pre>";
	
	echo "❤ This is Array made by ksort function\n";
	asort($stiff);
	echo "<pre>";
	print_r($stiff);
	echo "</pre>";


?>