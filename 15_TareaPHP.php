
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
$datos=array("Nombre"=>"Pedro Torres","Direccion"=>"Calle Ancha num.3","Telefono"=>1234567);

//recorrer e imprimir datos de mi arreglo
foreach ($datos as $dato => $elementos) {
	//se imprimen los datos de la persona
	echo $dato.": ".$elementos."<br>";
}
?>
</body>
</html>