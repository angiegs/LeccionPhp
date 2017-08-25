<?php
  session_start();
?>


<!DOCTYPE HTML>


  <body>
<header>
<nav>
		
	<a href="index.php">Inicio</a>

</nav>
	
</header>
<section id = "sidebar">
</section>
<section id = "main">
</section>

<br>
<aside>
<?php
if(isset($_SESSION['MiSesion'])){
  echo "<p> Hola usuario: (". $_SESSION['MiSesion'].")
   [<a href='salir.php'> Salir </a>]";
  echo "<a href='formularioNuevoDemo.php'>  NUEVO </a>" ;
       
    echo "";
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  - " .$c->getNombre(), " - " .$c->getTipo(), " - " .$c->getFecha();

  echo "<a href='login.php?id=".$c->getIdDemo()."'>    Perfil </a>" ;
    echo "";
    echo "";

  echo "<a href='formularioDemoEditar.php?id=".$c->getIdDemo()."'>    Editar </a>" ;
    echo "";
    echo "";

echo "<a href='eliminar.php?id=".$c->getIdDemo()."'>  Eliminar </a>" ;
  echo "</div>"; 
}    
}
else{
  ?>

<form action="login.php" method="post">
  <fieldset>
    <legend>Informacion Personal :</legend>
    Nombre:<br>
    <input type="text" name="nombre" >
    <br>
    Tipo:<br>
    <input type="text" name="tipo" >
    <br><br>
    Fecha de nacimiento:<br>
    <input type="text" name="nacimiento" >
    <br><br>
    Foto: <br>
     <input name="uploadedfile" type="file" />
 <br><br>
    <input type="submit" value="Enviar">
  </fieldset>
</form>
<?php } ?>
</aside>


</body>



