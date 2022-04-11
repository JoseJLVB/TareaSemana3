<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pacientes Clinica</title>
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
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>RUT</th>
  			<th>Nombres</th>
  			<th>Apellidos</th>
  			<th>Dirección</th>
        <th>Ciudad</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Fecha de Nacimiento</th>
        <th>Estado Civil</th>
        <th>Comentarios</th>
        

  			<th> <a href="nuevo_usuario.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM usuarios";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['RUT']; echo "</td>";
            echo "<td>"; echo $fila['Nombres']; echo "</td>";
            echo "<td>"; echo $fila['Apellidos']; echo "</td>";
            echo "<td>"; echo $fila['Direccion']; echo "</td>";
            echo "<td>"; echo $fila['Ciudad']; echo "</td>";
            echo "<td>"; echo $fila['Telefono']; echo "</td>";
            echo "<td>"; echo $fila['Email']; echo "</td>";
            echo "<td>"; echo $fila['Fecha']; echo "</td>";
            echo "<td>"; echo $fila['Estado']; echo "</td>";
            echo "<td>"; echo $fila['Comentarios']; echo "</td>";
            echo "<td><a href='modif_usuario.php?rut=".$fila['RUT']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo "<td><a href='eliminar_usuario.php?rut=".$fila['RUT']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
  		
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>