<?php
date_default_timezone_set("America/Bogota");
   
    require 'Conexion.php';

    $nombr =$_POST["nombre"];
    $docu =$_POST["doc"];
    $curs =$_POST["curso"];
    $fec =$_POST["fecha"];
   
  $c = new Conexion();

  $con = $c->conectar();
    $sql = "INSERT INTO aspirantes (identificacion, Nombre_aprendiz, Fecha_nacimiento, Curso_a_ingresar)
            VALUES ($docu,'$nombr', '$fec', '$curs')";
    $e=$con->query($sql);
    
    if($e==1) {
        header('Location: FormEva1.php ? doc='.$docu);
    } else {
        echo "Error ". $con->error;
    
    }

        
?>