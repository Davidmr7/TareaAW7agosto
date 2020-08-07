
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
$v=array("Enero"=>0,"Febrero"=>0,"Marzo"=>2,"Abril"=>11,"Mayo"=>2,"Junio"=>4,"Julio"=>3,"Agosto"=>0,"Septiembre"=>0,"Octubre"=>0,"Noviembre"=>0,"Diciembre"=>43);

//recorrer e imprimir datos de mi arreglo
foreach ($v as $datos => $elementos) {
	echo "En ".$datos." mire ".$elementos." peliculas <br>";
}
?>
</body>
</html>