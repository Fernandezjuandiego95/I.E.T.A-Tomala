<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USUARIO=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Contraseña o usuario incorrecto</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">¡Bienvenido!</p>';
            header("location:paginaProyecto/inicio.html");
        } else {
            echo '<script>alert ("Contraseña incorrecta")</script>';
;
        }
    }
}
 

?>

<HTML>
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesion</title>
</head>
<body>

<img src="img/Imagen1.png" class="avatar" alt="I.E.T.A De Tomala">  

<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Ingrese su usuario" pattern="[a-zA-Z0-9]+" required />
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Ingrese su contraseña" required /><br>
        <button type="submit" name="login" value="login">Entrar</button>
        <a href="register.php" class="elemento_a">Registro</a>
        <br>
        <a href="Admin/login_Admin.php">Administrador</a>
        
    </div>
</form>

</body>
</HTML>