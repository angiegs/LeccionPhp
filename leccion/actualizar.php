<html>
<head>
<body>
	
	<div id="main">
	<?php
	$nombre=$_POST["nombre"];
	$iddemo=$_POST["iddemo"];
	echo "Editandose... </br>";

	include_once("DemoCollector.php");
	$DemoCollector= new DemoCollector();
	$DemoCollector->updateDemo($iddemo,$nombre);

	echo "id  :".$iddemo." actualizado a : ".$nombre."</br>";
	?>
	<div><a href="index.php">Volver al Inicio</a></div>




</body>



</head>



</html>