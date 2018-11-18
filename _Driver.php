<?php
	echo "--- Calculator Part ---\n";
	include_once '_MyCalculator.php';
	$calc = new MyCalculator(9,4);
	echo $calc->add();
	echo "\n";
	echo $calc->multiply();
	echo "\n";
	echo $calc->printX() . "\n";
	echo $calc->printY() . "\n";
	echo "--- Calculator Part Ends ---\n";
	
	echo "
?>