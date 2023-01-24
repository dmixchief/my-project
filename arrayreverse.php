<?php
	// Declaring an array
	$arr = array(2, 4, 6, 8, 10);
	echo("Original Array : ");
	print_r($arr);

	// Declaring an array to store reverse
	$arr_rev = array();
	for($i = sizeof($arr) - 1; $i >= 0; $i--) {
		array_push($arr_rev,$arr[$i]);
	}

	echo("Modified Array : ");
	print_r($arr_rev);
?>
