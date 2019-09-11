<?php

$fila = $_POST['txtf'];
$columna = $_POST['txtc'];
$altura = $_POST['txt_altura'];
$anchura = $_POST['txt_anchura'];
echo "<table border='1' width ='". $anchura . "' height = '". $altura. "'>" ;
for ($i=0; $i <= $fila; $i++) { 
	echo "<tr>";
	if ($i == 0){
		echo "<td>X</td>";
		for ($c=1; $c <= $columna ; $c++) { 
			echo "<td>" . $c . "</td>";
		}
	}
	else{
		echo "<td>". $i . "</td>";
		for ($c=1; $c <= $columna ; $c++) { 
			echo "<td>". $i*$c . "</td>";
		}
	}
	

	echo "</tr>";
	
}


echo "</table>";
?>
