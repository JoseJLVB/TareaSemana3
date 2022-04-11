<?php
	
	ModificarUsuario($_POST['rut'], $_POST['nombres'], $_POST['apellidos'], $_POST['direccion'], $_POST['ciudad'], $_POST['telefono'], $_POST['email'], $_POST['fecha'], $_POST['estado'], $_POST['comentarios']);

	function ModificarUsuario($rut, $nom, $ape, $dir, $ciudad, $tel, $email, $fecha, $estado, $com)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE usuarios SET nombres='".$nom."', apellidos='".$ape."', direccion='".$dir."', ciudad='".$ciudad."', telefono='".$tel."', email='".$email."', fecha='".$fecha."', estado='".$estado."', comentarios='".$com."' WHERE RUT='".$rut."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>