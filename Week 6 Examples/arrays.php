<p>
	<?php
	// Arrays with no key value pairs are given indexes as their keys
		$Salamu = array('Hi','There!');
		echo 'The printed word is: ';
		echo  $Salamu[1];
	?>

</p>

<p>
	<?php
	// Arrays with the key value Pairs

	$stuff = array('name' => 'chuck','Office Hours', 'course' => 'WA4E',
	 'year' => 2001,'married' => true, 'Workplan' );
		echo "The Course name is $stuff[course] i.e Web Applications for Everybody";	
?>
</p>


<?php
// The print r in pre tag is esential for showing the array line by line

echo "For Debugging Purposes, use Print r function";
echo "<pre>\n";
	print_r($stuff);
echo "\n</pre>\n";
?>

<?php
// var dump provides more of the data about the Array, with the first data with no key given the index of [0]

echo "For Intensive Debugging Purposes, var_dump function provides the deatailed data from number of keys in the array, their data types, and length of each data";

echo "<pre>\n";
	var_dump($stuff);
echo "\n</pre>\n";
?>