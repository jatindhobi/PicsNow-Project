<?php
	$a=10;
	$b=5;
	echo "<h1>Value Before Swap:";
	echo "<h1>A = ".$a."</h1>";
	echo "<h1>B = ".$b."</h1>";
	$a=$a+$b;
	$b=$a-$b;
	$a=$a-$b;
	echo "<h1>Value After Swap:";
	echo "<h1>A = ".$a."</h1>";
	echo "<h1>B = ".$b."</h1>";
?>