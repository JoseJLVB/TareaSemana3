<?php
  
  $consulta=ConsultarUsuario($_GET['rut']);

  function ConsultarUsuario( $rut_num )
  {
  include 'conexion.php';
    $sentencia="SELECT * FROM usuarios WHERE rut='".$rut_num."' ";
    $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
    $fila=$resultado->fetch_assoc();

    return [
      $fila['Nombres'],
      $fila['Apellidos'],
      $fila['Direccion'],
      $fila['Ciudad'],
      $fila['Telefono'],
      $fila['Email'],
      $fila['Fecha'],
      $fila['Estado'],
      $fila['Comentarios']
    ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Paciente</title>
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
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="rut"  value="<?php echo $_GET['rut']?>">
  		<label>Nombres: </label>
  		<input type="text" id="nombres" name="nombres" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Apellidos: </label>
  		<input type="text" id="apellidos" name="apellidos" value="<?php echo $consulta[1] ?>"><br>

  		<label>Dirección: </label>
  		<input type="text" id="direccion" name="direccion" value="<?php echo $consulta[2] ?>"><br>

  		<label>Ciudad: </label>
  		<input type="text" id="ciudad" name="ciudad" value="<?php echo $consulta[3] ?>"><br>

  		<label>Telefono: </label>
  		<input type="text" id="telefono" name="telefono" value="<?php echo $consulta[4] ?>"><br>

      <label>Email: </label>
  		<input type="text" id="email" name="email" value="<?php echo $consulta[5] ?>"><br>
  		
      <label>Fecha de Nacimiento: </label>
  		<input type="date" id="fecha" name="fecha" value="<?php echo $consulta[6] ?>"><br>
  		
      <label>Estado Civil: </label>
  		<input type="text" id="estado" name="estado" value="<?php echo $consulta[7] ?>"><br>

      <label>Comentarios: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="comentarios"> <?php echo $consulta[8] ?>  </textarea><br>
  		
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