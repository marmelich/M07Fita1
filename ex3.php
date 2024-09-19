<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex3</title>
</head>
<body>

	<table style="border: 1px solid black; border-collapse: collapse;">

		<?php
			$fila=5;
			$columna=5;
			for($i = 0; $i<=$fila; $i++){	
				echo "<tr>";
				for($j = 0; $j<=$columna; $j++){
					$num=$i+$j;
					echo "<td style='border: 1px solid black; border-collapse: collapse;'> $num </td>";
				}
				echo "</tr>";
			}
		?>

	</table>	


</body>
</html>