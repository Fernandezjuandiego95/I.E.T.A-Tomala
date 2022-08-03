<?php 
 include('../../config.php');
  session_start();

  $sql="SELECT con_multiplicacion  From contar_imagenes";
  $query= $connection->query($sql) or die (mysqli_error($connection));
 
  foreach($query as $rt){
    $rt = $rt['con_multiplicacion']+1;  
 }

  $sentecia = "SELECT imagen From imagenes WHERE cod_imagen = $rt";
  $resultado= $connection->query($sentecia) or die (mysqli_error($connection));
 //-----------------------------------------------------------------------
 //------------------------------------------------------------------------ 
 
if( isset($_POST['enviar_respuesta1'])  && $respuesta = $_POST['respuesta']){
  
  if ($respuesta == 500 && $rt == 12) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;
     };
      

      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 20 && $rt == 13) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 5 && $rt == 14) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 120 && $rt == 15) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 36 && $rt == 16) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 56 && $rt == 17) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 600 && $rt == 18) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 4500 && $rt == 19) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 64 && $rt == 20) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 574 && $rt == 21) {

     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET multi_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }
  
  }


//-------------------------------------------------------------------------------
//---------------------------------------------------------------------------
   if ($rt == 21) {
    $sen = "UPDATE  contar_imagenes SET con_multiplicacion='10' WHERE id='1' ";
    $re = $connection->query($sen) or die (mysqli_error($connection));


     $consulta="SELECT multi_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['multi_buena'];};

switch ($da) {
      case 0:
      echo '<script>alert("Obtuviste 0 punto \nEstudia demasiado")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
           break;

      case 1:
      echo '<script>alert("Obtuviste 1 punto \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
          break;

      case 2:
      echo '<script>alert("Obtuviste 2 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 3:
      echo '<script>alert("Obtuviste 3 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 4:
      echo '<script>alert("Obtuviste 4 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 5:
      echo '<script>alert("Obtuviste 5 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 6:
      echo '<script>alert("Obtuviste 6 puntos \nAceptable \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 7:
      echo '<script>alert("Obtuviste 7 puntos \nMuy bien \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 8:
      echo '<script>alert("Obtuviste 8 puntos \nExelente \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 9:
      echo '<script>alert("Obtuviste 9 puntos \nExelente \nEstudia un poquito mas")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 10:
      echo '<script>alert("Obtuviste 10 puntos \nIncreible \nYa sabes Multiplicar")</script>';
      $sen = "UPDATE  contar_imagenes SET multi_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;
      default:
          echo '<script>alert("Error")</script>';
          break;
}

echo "<script>location.href='juegomultiplicar.html'</script>";
   }else{
$sen = "UPDATE  contar_imagenes SET con_multiplicacion='$rt' WHERE id='1' ";
$re = $connection->query($sen) or die (mysqli_error($connection));
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos_Mpl.css">
    <title>Juguemos a Multiplicar</title>
</head>
<body>

<!-------------------------------burbujas---------------------------------->
<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>
<!------------------------------fin-burbujas-------------------------------->

<div  class="flex-container">
<div class="div_form"> 
<form method="post" action=" " >
<label class="label">Ingrese su respuesta</label>
<input type="text" name="respuesta" placeholder="Dato" class="form_input">
<input type="submit" name="enviar_respuesta1" value="Enviar" class="btn_enviar">
</form>
</div> 


<div class="div_img">
    <?php foreach($resultado as $row){ ?>     
  <img src="imagenes/<?php echo $row['imagen']; ?>" width="900px" height="500px">
 <?php }?>
 </div> 
</div>

</body>
</html>