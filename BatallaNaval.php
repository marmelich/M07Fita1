<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Batalla Naval</title>
</head>
<body>

	<table style="border: 1px solid black; border-collapse: collapse;">

		<?php
			$filas=9;
			$columnas=9;

			$fragata=1;
			$submarino=2;
			$destructor=3;
			$portaviones=4;

			$direccion=0;

			$portaviones1 = array();
			$destructor1 = array();
			$destructor2 = array();
			$submarino1 = array();
			$submarino2 = array();
			$submarino3 = array();
			$fragata1 = array();
			$fragata2 = array();
			$fragata3 = array();
			$fragata4 = array();

			$arraybarcos = array($portaviones1, $destructor1, $destructor2, $submarino1, $submarino2, $submarino3, $fragata1, $fragata2, $fragata3, $fragata4);

			while (empty($submarino1)){
				$direccion=random_int(0, 1);
				$x=random_int(1, $filas-1);
				$y=random_int(1, $columnas-1);
				echo "<h1> socorro</h1>";

				$letra1=chr($y+64);
				$letra2=chr($y+64+1);
				array_push($submarino1,$letra1.$x);

				if ($direccion==0){
					array_push($submarino1,$letra1.$x+1);
				}
				else if($direccion==1){
					array_push($submarino1,$letra2.$x);
				}
				var_dump($submarino1);
				
				#if (in_array("chr($y+65)$x", arraybarcos) == false){
				#	$submarino1="chr($y+65)$x";
				#	$submarino1="chr($y+65+1)$x+1";
				#}
			}
			
			for($i = 0; $i<=$filas; $i++){
				echo "<tr>";
				for($j = 0; $j<=$columnas; $j++){
					$letter	= chr($i+64);
					#casilla blanca esquina
					if($i==0 and $j==0){
						echo "<td style='border: 1px solid black; border-collapse: collapse; width: 15px;'>  </td>";
					}
					#numeros
					else if($i==0 and $j>0){
						echo "<td style='border: 1px solid black; border-collapse: collapse; width: 15px;'> $j </td>";
					}
					#letras
					else if($i>0 and $j==0){
						echo "<td style='border: 1px solid black; border-collapse: collapse; width: 15px;'> $letter </td>";
					}
					#barco
					else if(in_array(chr($i+64).$j, $submarino1) == true){
						echo "<td style='border: 1px solid black; border-collapse: collapse; width: 15px;'> X </td>";
					}
					#agua
					else{
						echo "<td style='border: 1px solid black; border-collapse: collapse; width: 15px;'> </td>";
					}
					
				}
				echo "</tr>";
			}
		?>

	</table>	


</body>
</html>