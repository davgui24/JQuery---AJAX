
<?php

include("conexion.php");

   $nombre = $_POST['nombre'];
   $edad = $_POST['edad'];
   $conexion = mysqli_connect($servidor,$user,$pass,$bd);
   mysqli_set_charset($conexion,"utf8");

   $peticion = "insert into usuario values (Null,'".$nombre."','".$edad."')";
   $resultado = mysqli_query($conexion,$peticion);

   $peticionUsuario = "select * from usuario";
   $resultadoUsuario = mysqli_query($conexion, $peticionUsuario);

  // echo json_encode(array("nombre"=>$nombre,"edad"=>$edad));

  /* $array = array();
   while($fila = mysqli_fetch_array($resultadoUsuario)){
     $array['AllUser'][] = $fila;
    }
   
   echo json_encode($array);*/

 while($fila = mysqli_fetch_object($resultadoUsuario)){
   echo"<tr>
	<td>$fila->nombre</td>
	<td>$fila->edad</td></tr>";
}



?>
