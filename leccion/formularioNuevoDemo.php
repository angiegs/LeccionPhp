<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario Nuevo Demo</title>
</head>
<body>
<form action="guardarDemo.php" method="post">
<p>
	Nombre: <input type="text"  name="nombre" autofocus required />
	</p>
	<p>
	Tipo: <input type="text"  name="tipo" autofocus required />
	</p>
	<p>
	Fecha de Nacimiento: <input type="text"  name="fecha" autofocus required />
	</p>


	<p>
	
	</p>
	<input type="submit" value="Guardar Nuevo Perfil "/>
	</form>

</body>
</html>



