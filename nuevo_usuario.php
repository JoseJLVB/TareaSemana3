<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro Paciente</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Ingresar Paciente</h1> </span>
  		<br>
	  <form action="nuevo_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		<label>RUT: </label>
  		<input type="text" id="rut" name="rut"><br>
  		
  		<label>Nombres: </label>
  		<input type="text" id="nombres" name="nombres" ><br>

		<label>Apellidos: </label>
  		<input type="text" id="apellidos" name="apellidos" ><br>
		

		<label>Dirección: </label>
  		<input type="text" id="direccion" name="direccion" ><br>

		<label>Ciudad: </label>
  		<input type="text" id="ciudad" name="ciudad" ><br>

		<label>Teléfono: </label>
  		<input type="text" id="telefono" name="telefono" ><br>

		<label>Email: </label>
  		<input type="text" id="email" name="email" ><br>
		
		<label>Fecha de Nacimiento: </label>
  		<input type="date" id="fecha" name="fecha" ><br>

		<label>Estado Civil: </label>
  		<input type="text" id="estado" name="estado" ><br>
  		
  		<label>Comentarios: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="comentarios" ></textarea><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>