

<!DOCTYPE html>
<html>
<head>
</head>



<body>
	<div id="main">
	<?php
	$valor=$_POST["nombre"];
	$tipon=$_POST["tipo"];
	$fechan=$_POST["fecha"];




	//$valor="Manuel";
	echo 'Hola ' . htmlspecialchars($valor) . '!';
	include_once("DemoCollector.php");
	$DemoCollectorObj = new DemoCollector();
	$DemoCollectorObj->createDemo($valor);
	$DemoCollectorObj->createDemo($tipon);
	$DemoCollectorObj->createDemo($fechan);

	echo "Valor agregado </br>";
	?>
	<div><a href="index.php">Volver al inicio</a></div>


		


	</div>


</body>

</html>