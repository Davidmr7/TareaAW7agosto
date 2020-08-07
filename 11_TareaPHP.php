
<!DOCTYPE html>
<html>
<head>
	<title>Tarea 6</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	
</head>
<body>
	<li class="nav-item"><a class="nav-link" href="index.html">Indice</a></li>

<?php
$num = array(2,4,6,8,10,12,14,16,18,20);
//Se declara el array con los primeros 10 numeros pares 
foreach ($num as $par) {
	//se usa el foreach para que reccora el array y la palabra reservada as y una variable para acceder a los 
	//numeros pares
	echo "El ".$par." es par<br>";
	//se imprimen los numeros pares con un salto de linea
}
?>
</body>
</html>