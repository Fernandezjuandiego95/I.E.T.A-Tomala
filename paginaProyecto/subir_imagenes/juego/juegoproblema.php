<?php 
 include('../../../config.php');
  session_start();

  $sql="SELECT contar_problema  From contar_imagenes";
  $query= $connection->query($sql) or die (mysqli_error($connection));
 
  foreach($query as $rt){
    $rt = $rt['contar_problema']+1;  
 }

  $sentecia = "SELECT imagen From imagenes WHERE cod_imagen = $rt";
  $resultado= $connection->query($sentecia) or die (mysqli_error($connection));
 //-----------------------------------------------------------------------
 //------------------------------------------------------------------------ 
 
if( isset($_POST['enviar_respuesta1'])  && $respuesta = $_POST['respuesta']){
  
  if ($respuesta == 83 && $rt == 22) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;
     };
      

      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 231 && $rt == 23) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 296 && $rt == 24) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 866 && $rt == 25) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 70812 && $rt == 26) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 57 && $rt == 27) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 336 && $rt == 28) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 74 && $rt == 29) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 1000 && $rt == 30) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 180000 && $rt == 31) {

     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET problema_bueno='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }
  
  }


//-------------------------------------------------------------------------------
//---------------------------------------------------------------------------
  if ($rt == 31) {
    $sen = "UPDATE  contar_imagenes SET contar_problema='20' WHERE id='1' ";
    $re = $connection->query($sen) or die (mysqli_error($connection));


     $consulta="SELECT problema_bueno From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['problema_bueno'];};

switch ($da) {
      case 0:
      echo '<script>alert("Obtuviste 0 punto \nEstudia demasiado")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
           break;

      case 1:
      echo '<script>alert("Obtuviste 1 punto \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
          break;

      case 2:
      echo '<script>alert("Obtuviste 2 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 3:
      echo '<script>alert("Obtuviste 3 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 4:
      echo '<script>alert("Obtuviste 4 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 5:
      echo '<script>alert("Obtuviste 5 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 6:
      echo '<script>alert("Obtuviste 6 puntos \nAceptable \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 7:
      echo '<script>alert("Obtuviste 7 puntos \nMuy bien \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 8:
      echo '<script>alert("Obtuviste 8 puntos \nExelente \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 9:
      echo '<script>alert("Obtuviste 9 puntos \nExelente \nEstudia un poquito mas")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 10:
      echo '<script>alert("Obtuviste 10 puntos \nIncreible \nYa sabes resolver problemas matematicos \n(Sumas, Restas, Multiplicaciones)")</script>';
      $sen = "UPDATE  contar_imagenes SET problema_bueno='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;
      default:
          echo '<script>alert("Error")</script>';
          break;
}

echo "<script>location.href='../juegoproblema.html'</script>";
   }else{
$sen = "UPDATE  contar_imagenes SET contar_problema='$rt' WHERE id='1' ";
$re = $connection->query($sen) or die (mysqli_error($connection));
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../estilos/play.css">
    <title>Juguemos a Resolver</title>
</head>
<body>

    <section  class="flex-container">

        <div class="div_img">
            <?php foreach($resultado as $row){ ?>     
            <img src="../imagenes/<?php echo $row['imagen']; ?>" width="100%">
            <?php }?>
        </div> 

        <div class="div_form"> 
            <form method="post" action=" " >
            <label class="label">Ingrese su respuesta</label>
            <input type="text" name="respuesta" placeholder="Dato" class="form_input">
            <input type="submit" name="enviar_respuesta1" value="Enviar" class="btn_enviar">
            </form>
        </div> 
        
    </section>

</body>
</html>