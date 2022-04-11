<?php
	EliminarUsuario($_GET['rut']);

	function EliminarUsuario($rut)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM usuarios WHERE rut='".$rut."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Usuario Eliminado!!");
	window.location.href='index.php';
</script>