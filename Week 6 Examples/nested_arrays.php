
<?php
// This Contains the arrays inside another Array. In between the Arrays do not use the ; as may lead to an error (This is a continoation of a single Array)
$products = array(
				'paper' => array(
							'copier' => 'Copier & Multipurpose',
							'inkjet' => 'inkjet Printer',
							'laser' => 'Laser Printer',
							'photo' => 'photographic Paper'),

				'pens'  => array(
							'ball' => 'Ball point',
							'hilite' => 'Highliters',
							'marker' =>'Markers'),

				'misc' => array(
							'tape' => 'Skicky tape',
							'glue' => 'Adhesives',
							'clips' => 'Paperclips')

				);
// In Querying the do not use the " " surrounding the item in echo, also use them to each key and sub-key to tetrieve the value

echo $products["pens"]["hilite"];

echo "<pre>\n";
	var_dump($products);
	echo "\n</pre>\n";


?>