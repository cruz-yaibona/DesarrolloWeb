<?php
include("operaciones.php");
$n = $_POST['txtn'];
$cadena = $_POST['txtcadena'];
$a = $_POST['txta'];
$b = $_POST['txtb'];
$c = $_POST['txtc'];
$operacion = new Operacion($n, $cadena, $a, $b, $c);
$menor = $operacion->calcular_menor();
echo "La serie de  fibonaci :   ";
$operacion->calcular_fibonacci();
echo "<br>el menor es: ". $menor;

?>
