<?php
	include_once '../config.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$connection->prepare('SELECT * FROM users WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}


	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
        $email=$_POST['email'];
		$password=$_POST['password'];
		$password_hash = password_hash($password, PASSWORD_BCRYPT);

		$id=(int) $_GET['id'];

		if(!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($password_hash) && !empty($email) ){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$connection->prepare(' UPDATE users SET  
					nombre=:nombre,
					apellido=:apellido,
					usuario=:usuario,
					email=:email,
					password=:password_hash
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':apellido' =>$apellido,
					':usuario' =>$usuario,
					':password_hash' =>$password_hash,
					':email' =>$email,
					':id' =>$id
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
	<title>Editar Cliente</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="contenedor">
		<h2>Registro de Clientes: La Naturista</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
				<input type="text" name="apellido" value="<?php if($resultado) echo $resultado['apellido']; ?>" class="input__text">
			</div>
			
			<div class="form-group">
				<input type="text" name="usuario" value="<?php if($resultado) echo $resultado['usuario']; ?>" class="input__text">
				<input type="text" name="password" value="<?php if($resultado) echo $resultado['password']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="email" value="<?php if($resultado) echo $resultado['email']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
