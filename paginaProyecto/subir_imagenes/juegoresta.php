<?php 
 include('../../config.php');
  session_start();

  $sql="SELECT contar_resta  From contar_imagenes";
  $query= $connection->query($sql) or die (mysqli_error($connection));
 
  foreach($query as $rt){
    $rt = $rt['contar_resta']+1;  
 }

  $sentecia = "SELECT imagen From imagenes WHERE cod_imagen = $rt";
  $resultado= $connection->query($sentecia) or die (mysqli_error($connection));
 //-----------------------------------------------------------------------
 //------------------------------------------------------------------------ 
 
if( isset($_POST['enviar_respuesta1'])  && $respuesta = $_POST['respuesta']){
  
  if ($respuesta == 86 && $rt == 32) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;
     };
      

      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 361 && $rt == 33) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 541 && $rt == 34) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 147 && $rt == 35) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
    ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 1425 && $rt == 36) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 400 && $rt == 37) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 93 && $rt == 38) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 1099 && $rt == 39) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 1300 && $rt == 40) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }elseif ($respuesta == 420 && $rt == 41) {

     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena']+1;};
     ;
      $sen = "UPDATE  contar_imagenes SET resta_buena='$da' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
  }
  
  }


//-------------------------------------------------------------------------------
//---------------------------------------------------------------------------
  if ($rt == 41) {
    $sen = "UPDATE  contar_imagenes SET contar_resta='30' WHERE id='1' ";
    $re = $connection->query($sen) or die (mysqli_error($connection));


     $consulta="SELECT resta_buena From contar_imagenes";
     $dato = $connection->query($consulta) or die (mysqli_error($connection));
     foreach($dato as $da){     
     $da = $da['resta_buena'];};

switch ($da) {
      case 0:
      echo '<script>alert("Obtuviste 0 punto \nEstudia demasiado")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
           break;

      case 1:
      echo '<script>alert("Obtuviste 1 punto \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
          break;

      case 2:
      echo '<script>alert("Obtuviste 2 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 3:
      echo '<script>alert("Obtuviste 3 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 4:
      echo '<script>alert("Obtuviste 4 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 5:
      echo '<script>alert("Obtuviste 5 puntos \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 6:
      echo '<script>alert("Obtuviste 6 puntos \nAceptable \nEstudia mucho mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 7:
      echo '<script>alert("Obtuviste 7 puntos \nMuy bien \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 8:
      echo '<script>alert("Obtuviste 8 puntos \nExelente \nEstudia un poco mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 9:
      echo '<script>alert("Obtuviste 9 puntos \nExelente \nEstudia un poquito mas")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;

      case 10:
      echo '<script>alert("Obtuviste 10 puntos \nIncreible \nYa sabes restar")</script>';
      $sen = "UPDATE  contar_imagenes SET resta_buena='0' WHERE id='1' ";
      $re = $connection->query($sen) or die (mysqli_error($connection));
      break;
      default:
          echo '<script>alert("Error")</script>';
          break;
}

echo "<script>location.href='juegoresta.html'</script>";
   }else{
$sen = "UPDATE  contar_imagenes SET contar_resta='$rt' WHERE id='1' ";
$re = $connection->query($sen) or die (mysqli_error($connection));
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilosrestajuegophp.css">
    <title>Juguemos a Restar</title>
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