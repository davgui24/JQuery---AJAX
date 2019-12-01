<?php
   include("conexion.php");
   $conexion = mysqli_connect($servidor,$user,$pass,$bd);
   mysqli_set_charset($conexion,"utf8");

    $peticionUsuario = "select * from usuario";
    $resultadoUsuario = mysqli_query($conexion, $peticionUsuario);
   $array = array();
   while($fila = mysqli_fetch_array($resultadoUsuario)){
     $array['AllUser'][] = $fila;
    }
   
   echo json_encode($array);