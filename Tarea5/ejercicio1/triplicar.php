<?php

$cadena = $_POST['txtn'];
echo "<h1>Triplicar la cadena:  ".$cadena."</h1>";
for ($i=1; $i <= 3; $i++) { 
	echo $i." .- ".$cadena."<br>";
}
?>
