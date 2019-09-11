<?php
$m = $_GET['mes'];
$mes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
echo "<select name='seleccionar mes'>";
for($i = 0;$i<12;$i++){
	if($i == $m-1){
		echo "<option value='".$mes[$i]."' selected>".$mes[$i]."</option>";
	}
	else{
		echo "<option value='".$mes[$i]."'>".$mes[$i]."</option>";
	}
}
echo "</select>"
?>