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
<?php
if(isset($_SESSION['MiSesion'])){
	session_destroy();
	    echo "";

  echo "Se ha destruido la sesion exitosamente <br/>";
  echo "<a href='index.php>VOlver</a>";


        
}else{
	echo "ERROR...<br/>";
	echo "<a href='index.php'>VOLVER</a>";
}
?>
</body>