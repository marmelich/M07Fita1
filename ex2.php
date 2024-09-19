<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex2</title>
</head>
<body>

	<table style="border: 1px solid black; border-collapse: collapse;">
		<tr>
			<?php
				$numero=7;
				for($i = 65; $i <=$numero+65; $i++){	
					$letter	= chr($i);			
					echo "<td style='border: 1px solid black; border-collapse: collapse;'> $letter </td>";
				}

			?>

		</tr>

		<tr>
			<?php
				for($i = 0; $i <=$numero; $i++){			
					echo "<td style='border: 1px solid black; border-collapse: collapse;'> $i </td>";
				}

			?>

		</tr>

	</table>	


</body>
</html>