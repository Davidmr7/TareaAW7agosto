
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
//se crea el arreglo
$v=array(1=>90, 30=>7,'e'=>99,'hola'=>43);

//recorrer e imprimir datos de mi arreglo
foreach ($v as $datos => $elementos) {
	echo "El valor de ".$datos." es ".$elementos."<br>";
}
//se muestra el dato especifico de cada palabra o numero clave
echo $v[1]."<br>";
echo $v[30]."<br>"; 
echo $v['e']."<br>"; 
echo $v['hola']."<br>"; 
?>
</body>
</html>