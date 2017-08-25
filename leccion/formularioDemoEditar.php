<?php
  session_start();
?>


<!DOCTYPE HTML>


  <body>
<header>
	
</header>
<section id = "sidebar">
</section>
<section id = "main">
</section>

<?php
$id= $_GET["id"];
echo "valor de id es ". $id;



include_once('DemoCollector.php');
include_once('Demo.php');
$DemoCollectorObj= new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);

print_r($ObjDemo); 


?>
<h2>Editar Objeto Demo</h2>


<form action="actualizar.php" method="post">
  <p>
  
    Id:<input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" 
    readonly />
    </p>

    <br>
    <p>
    Nombre:<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" 
    autofocus required />
    <br>
    <a href="index.php"> Cancelar </a>
    <input type="submit" value="Guardar" />

    </p>
    
</form>

</body>