<html>
<head>
</head>
<body>
	
	<div id="main">
	<?php
	$id=$_GET["id"];
	include_once("DemoCollector.php");
	$DemoCollector= new DemoCollector();
	$DemoCollector->deleteDemo($id);

	echo "id  :".$iddemo." Se HA ELIMINADO :</br>";
	?>
	<div><a href="index.php">Volver al Inicio</a></div>




</body>

?>





</html>