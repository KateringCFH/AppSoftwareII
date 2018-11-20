<?php
$usuario = $_POST["usuario"];
$password = $_POST["contraseña"];
$intentos = 0;

while ($intentos<=3)
{
 	if($usuario == 'admin@admin.com' && $password == 'admin')
	{
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: page1.php");
	}
	else
	{
	  ?>
		<script languaje="javascript">
		alert("El Nombre y/o Clave de Usuario es Incorrecto!!!");
		location.href = "index.php";
		</script>
	  <?php
	}
	$intentos=+1;
}
?>