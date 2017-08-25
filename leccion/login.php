<?php
	session_start();
?>

<!DOCTYPE HTML>



<body>
	
<h1>  PERFIL  </h1>
<?php
$_SESSION['MiSesion']= $_POST['nombre'];
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

 include_once("DemoCollector.php");

  echo "<a href='formularioDemoEditar.php?id=".$c->getIdDemo()."'>    Editar </a>" ;
    echo "";
    echo "";

echo "<a href='eliminar.php?id=".$c->getIdDemo()."'>  Eliminar </a>" ;
  echo "</div>"; 

  ?>
echo "<a href='index.php'>VOLVER</a>";
 
</body>