<?php
 
include('../config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM administradores WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">¡Este correo electrónico ya existe!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO administradores(NOMBRE,APELLIDO,USUARIO,PASSWORD,EMAIL) VALUES (:nombre,:apellido,:usuario,:password_hash,:email)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">¡Tu registro fue exitoso!</p>';
        } else {
            echo '<p class="error">¡Algo salió mal!</p>';
        }
    }
}
 
?>

<HTML>
<head>
    <link rel="stylesheet" href="css/estilosRegistro.css">
    <title>Registrar Usuario</title>
</head>
<body>

<form method="post" action="" class=" formregistro " >
        <div class="formregis">
        <label class="label">Nombre</label>
        <input type="text" name="nombre"  required class="registro_input"/>
  
        <label class="label">Apellido</label>
        <input type="text" name="apellido"  required class="registro_input" />
    
        <label class="label">Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required class="registro_input"/>
         </div>
         <div class="formregis">
        <label class="label">Email</label>
        <input type="email" name="email" required class="registro_input"/>
   
        <label class="label">Contraseña</label>
        <input type="password" name="password" required class="registro_input"/>
        <br>
        <button type="submit" name="register" value="register" class="registrar_btn">Registrar</button>
        <a href="login_Admin.php" class="elemento_a">Login</a>
        </div>
    </form>

</body>
</HTML>