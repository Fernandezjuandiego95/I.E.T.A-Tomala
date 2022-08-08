<?php

include('../config.php');


if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM administradores WHERE USUARIO=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<script>alert("Contraseña o usuario incorrecto")</script>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<script>alert("¡Bienvenido!")</script>';
            header("location:index.php");
        } else {
            echo '<script>alert ("Contraseña incorrecta")</script>';
;
        }
    }
}
 
?>

<HTML>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Iniciar Sesion</title>
</head>
<body>
<img src="../img/admin.png" class="avatar" alt="I.E.T.A De Tomala">
<img src="../img/marco1.1.png" class="marco1_1"> 
<img src="../img/marco1.1.png" class="marco1"> 
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Ingrese su usuario" pattern="[a-zA-Z0-9]+" required />
        <label>Password</label>
        <input type="password" name="password" placeholder="Ingrese su contraseña" required /><br>
       <button type="submit" name="login" value="login">Entrar</button>
       <a href="registrar_admin.php" class="elemento_a">Registro</a>
       <br>
       <a href="../login.php" >Salir</a>
        
</form>

</body>
</HTML>