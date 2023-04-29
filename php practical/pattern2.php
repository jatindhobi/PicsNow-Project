<?php
	$alpha=range('A','Z');
$ch = 'A';
	for($i=0;$i<=3;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo $alpha[$i];
		}
		echo "<br>";
	}
	for($i=1;$i<=4;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo $ch++;
		}	
		echo "<br>";
	}
?>