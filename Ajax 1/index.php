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
				var nu1 = $("#n1").val();
				var nu2 = $("#n2").val();
         	$.post("sumar.php",{"num1":nu1, "num2":nu2},function(datos){
         		$("#h1").text(datos);
         	});
         });
		});
	</script>



<form >
	<input type="text" id="n1">
	<input type="text" id="n2">
	<button type="button" id="b">Enviar</button>
</form>
<br>
<h1 id="h1"></h1>


	
</body>
</html>