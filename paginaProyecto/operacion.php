<?php
//declaracion variables
$respuesta1= 45;
$respuesta2= 36;
$respuesta3= 45;
$respuesta4= 21;
$respuesta5= 6;
$respuesta6= 4450;
$respuesta7= 8;
$respuesta8= 5300;
$respuesta9= 115;
$respuesta10= 350;

$contarRespuestas=0;

//_______________________

//Recivir y validar datos via post

if(empty($_POST["opcion1"])){

    $opcion1 = 0;
}else{

    $opcion1 = $_POST["opcion1"];
}
if(empty($_POST["opcion2"])){

    $opcion2 = 0;
}else{

    $opcion2 = $_POST["opcion2"];
}

if(empty($_POST["opcion3"])){

    $opcion3 = 0;
}else{

    $opcion3 = $_POST["opcion3"];
}
if(empty($_POST["opcion4"])){

    $opcion4 = 0;
}else{

    $opcion4 = $_POST["opcion4"];
}

if(empty($_POST["opcion5"])){

    $opcion5 = 0;
}else{

    $opcion5 = $_POST["opcion5"];
}
if(empty($_POST["opcion6"])){

    $opcion6 = 0;
}else{

    $opcion6 = $_POST["opcion6"];
}

if(empty($_POST["opcion7"])){

    $opcion7 = 0;
}else{

    $opcion7 = $_POST["opcion7"];
}
if(empty($_POST["opcion8"])){

    $opcion8 = 0;
}else{

    $opcion8 = $_POST["opcion8"];
}

if(empty($_POST["opcion9"])){

    $opcion9 = 0;
}else{

    $opcion9 = $_POST["opcion9"];
}

if(empty($_POST["opcion10"])){

    $opcion10 = 0;
}else{

    $opcion10 = $_POST["opcion10"];
}


//_______________________

//verificacion de respuesta 
$i=0;
while($i<=10){

    if($opcion1 == $respuesta1){

        $contarRespuestas++; 
        $respuesta1=0;
        
    }
    if($opcion2 == $respuesta2){

        $contarRespuestas++; 
        $respuesta2=0;
        
    }
    if($opcion3 == $respuesta3){

        $contarRespuestas++; 
        $respuesta3=0;
        
    }
    if($opcion4 == $respuesta4){

        $contarRespuestas++; 
        $respuesta4=0;

        
    }
    if($opcion5 == $respuesta5){

        $contarRespuestas++; 
        $respuesta5=0;
        
    }
    if($opcion6 == $respuesta6){

        $contarRespuestas++; 
        $respuesta6= 0;
        
    }
    if($opcion7 == $respuesta7){

        $contarRespuestas++;
        $respuesta7=0; 
        
    }
    if($opcion8 == $respuesta8){

        $contarRespuestas++;
        $respuesta8=0;
        
    }
    if($opcion9 == $respuesta9){

        $contarRespuestas++; 
        $respuesta9=0;
        
    }
    if($opcion10 == $respuesta10){

        $contarRespuestas++; 
        $respuesta10=0;
        
    }

    $i++;
}


switch ($contarRespuestas) {
    case 0:
       
        $desempe??o= "Desempe??o Bajo";
        break;
    case 1:
        $desempe??o= "Desempe??o Bajo";
        break;
    case 2:
        $desempe??o= "Desempe??o Bajo";
        break;
    case 3:
        $desempe??o= "Desempe??o Bajo";
        break;
    case 4:
        $desempe??o= "Desempe??o Bajo";
        break;
    case 5:
        $desempe??o= "Desempe??o Bajo";
        break; 
    case 6:
        $desempe??o= "Desempe??o B??sico";
        break;    
    case 7:
        $desempe??o= "Desempe??o Alto";
        break; 
    case 8:
        $desempe??o= "Desempe??o Alto";
        break;
    case 9:
        $desempe??o= "Desempe??o Superior";
        break; 
     case 10:
        $desempe??o= "Desempe??o Superior";
        break;       
        
    default:
    echo "Error";
}

//_________________________

?>

<html>
<head>
        <title>Operacion</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="estilos/cssOperacion.css?ver56">
        
    </head>

<body>

<div>


</div>


<div class="div1">



</div>

<div class="div2">

<div class="puntos">
        <?php
  
            echo "Puntos obtenidos: ".$contarRespuestas;
        ?>

    </div>

    <div class="desempe??o">
        <?php
            echo"".$desempe??o;

        ?>

    </div>

</div>

<div class="button">
            
            <a href="prueba.html" id="startBtn">Regresar a Prueba</a>
          </div>


</body>

</html>
