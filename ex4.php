<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex4</title>
</head>
<body>

	<table style="border: 1px solid black; border-collapse: collapse;">

		<?php
			$fila=5;
			$columna=5;
			for($i = 0; $i<=$fila; $i++){	
				echo "<tr>";
				for($j = 0; $j<=$columna; $j++){
					$letter	= chr($i+64);
					if($i==0 and $j>0){
						echo "<td style='border: 1px solid black; border-collapse: collapse;'> $j </td>";
					}
					else if($i>0 and $j==0){
						echo "<td style='border: 1px solid black; border-collapse: collapse;'> $letter </td>";
					}
					else{
						echo "<td style='border: 1px solid black; border-collapse: collapse;'> </td>";
					}
					
				}
				echo "</tr>";
			}
		?>

	</table>	


</body>
</html>