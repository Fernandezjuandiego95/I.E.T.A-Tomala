<?php 
	include_once '../config.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password_hash = password_hash($password, PASSWORD_BCRYPT);

		if(!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($email) && !empty($password_hash) ){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$connection->prepare('INSERT INTO users(nombre,apellido,usuario,email,password) VALUES(:nombre,:apellido,:usuario,:email,:password_hash)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':apellido' =>$apellido,
					':usuario' =>$usuario,
					':email' =>$email,
					':password_hash' =>$password_hash
				));
				header('Location: index.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Usuario</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class="fondo">
	<div class="contenedor">
		<h2>Registro de Usuarios</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="apellido" placeholder="Apellido" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="usuario" placeholder="Usuario" class="input__text">
				<input type="text" name="password" placeholder="Contraseña" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="email" placeholder="Correo electrónico" class="input__text">
			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
