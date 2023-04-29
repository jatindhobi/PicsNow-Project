<html>

<body>
	<table width="400px" border="1px" cellspacing="0px">
		<?php
		echo "Chess Board";
		$a = 0;

		for($j = 0;$j < 8;$j++) {
			echo "<tr>";
			$a = $j;

			for($i = 0;$i < 8; $i++) {
				if($a%2 == 0) {
					echo
"<td height=40px width=20px bgcolor=black></td>";
					$a++;
				}
				else {
					echo
"<td height=40px width=20px bgcolor=white></td>";
					$a++;
				}
			}
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>
