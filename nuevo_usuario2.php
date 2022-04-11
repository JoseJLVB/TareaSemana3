<?php

	
	NuevoUsuario($_POST['rut'], $_POST['nombres'], $_POST['apellidos'], $_POST['direccion'], $_POST['ciudad'], $_POST['telefono'], $_POST['email'], $_POST['fecha'], $_POST['estado'], $_POST['comentarios']);
	
	function NuevoUsuario($rut, $nom, $ape, $dir, $ciudad, $tel, $email, $fecha, $estado, $com)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO usuarios (rut, nombres, apellidos, direccion, ciudad, telefono, email, fecha, estado, comentarios) VALUES ('".$rut."', '".$nom."', '".$ape."', '".$dir."', '".$ciudad."', '".$tel."', '".$email."', '".$fecha."', '".$estado."', '".$com."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Usuario Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>