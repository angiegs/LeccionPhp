<html>
<head>
</head>
<body>
	
	<div id="main">
	<?php
	$id=$_GET["id"];
	$nombre=$_GET["nombre"];

	include_once("DemoCollector.php");
	$DemoCollector= new DemoCollector();
	$DemoCollector->deleteDemo($id);
		$DemoCollector->deleteDemo($nombre);


	echo "id  :".$iddemo." Se HA ELIMINADO :</br>";
		echo "Nombre  :".$nombre." Se HA ELIMINADO :</br>";

	?>
	<div><a href="index.php">Volver al Inicio</a></div>




</body>

?>





</html>