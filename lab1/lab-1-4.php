<?php
	define(NUM_E, 2.71828);
	print("Число е равно " . NUM_E . '<br>');

	$num_el = NUM_E;
	print("\$num_el = " . $num_el . ' - ' . gettype($num_el) . '<br>');
	$num_el = "it's a string!";
	print("\$num_el = " . $num_el . ' - ' . gettype($num_el) . '<br>');
	$num_el = 123;
	print("\$num_el = " . $num_el . ' - ' . gettype($num_el) . '<br>');
	$num_el = false;
	print("\$num_el = " . ($num_el ? "true" : "false") . ' - ' . gettype($num_el) . '<br>');
	$num_el = 1.67;
	print("\$num_el = " . $num_el . ' - ' . gettype($num_el) . '<br>');
?>