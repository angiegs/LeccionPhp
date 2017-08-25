<?php
	session_start();
?>

<!DOCTYPE HTML>



<body>
	
<h1>  PERFIL  </h1>
<?php
$_SESSION['MiSesion']= $_POST['nombre'];

include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$nacimiento = $_POST['nacimiento'];



echo "	Nombre " . $nombre ;
	echo "<br>";
	echo "<br>";

	
    echo "	Tipo " . $tipo;
	echo "<br>";
	echo "<br>";

echo "	Fecha de nacimiento " . $nacimiento;
	echo "<br>";
	echo "<br>";

  ?>
echo "<a href='index.php'>VOLVER</a>";
echo "<a href='formularioDemoEditar.php'> EDITAR </a>"
echo "<a href='eliminar.php'> ELIMINAR </a>"

 
</body>