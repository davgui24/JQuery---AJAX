<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>

 <script>
 	$(document).ready(function(){
    $("#boton").click(function(){
      var formulario = $("#formulario").serialize();
      $.ajax({
        url: 'ingresar.php',
        type: 'POST',
        //dataType: 'json',
        data: formulario
      }).done(function(datos) {
        console.log(datos);
        $("#tbody").html(datos);
      })
        $("#nombre").val("");
        $("#edad").val("");
    });
  });
</script>


<form id="formulario">
  <input type="text" id="nombre" name="nombre">
  <input type="number" id="edad" name="edad">
  <button type="button" id="boton">Enviar</button>
</form>

<br><br>

<table>
<thead>
  <tr>
    <th>Nombre</th>
    <th>Edad</th>
  </tr>
</thead>

<tbody id="tbody">
  <?php

  include("conexion.php");
  $conexion = mysqli_connect($servidor,$user,$pass,$bd);
  mysqli_set_charset($conexion,"utf8");

   $peticionUsuario = "select * from usuario";
   $resultadoUsuario = mysqli_query($conexion, $peticionUsuario);

  while($fila = mysqli_fetch_array($resultadoUsuario)){
   echo"<tr>
          <td>".$fila['nombre']."</td>
          <td>".$fila['edad']."</td>
        </tr>";
 }
 ?>
</tbody>
</table>


	
</body>
</html>