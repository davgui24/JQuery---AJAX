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

	<script type="text/javascript">
		$(document).ready(function() {

			$("#b").click(function(event) {
			var formulario = $("#formulario").serialize();
				
         	$.ajax({
         		url: 'sumar.php',
         		type: 'POST',
         		dataType: 'json',
         		data:formulario
         	}).done(function(data) {
         		$("#h1").text('La suma es ' + data.suma + ' y la resta es ' + data.resta);
         	})

            $("#n1").val("");
            $("#n2").val("");
          });
		});
	</script>



<form id="formulario">
	<input type="text" name="n1" id="n1">
	<input type="text" name="n2" id="n2">
	<input type="button" id="b" value="Calcular">
</form>
<br>
<h1 id="h1"></h1>


	
</body>
</html>