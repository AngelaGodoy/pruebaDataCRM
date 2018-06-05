<!--
Autor: Angela Marcela Godoy Salguero
E-mail: godoysalguero@outlook.com
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DataCRM</title>
	<link rel="stylesheet" href="Vista/css/style.css">
	<link rel="stylesheet" href="Vista/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Prueba tecnica</h1>
		<div class="text-center">
			<div id="tabla">
				<!-- aqui se cargará la tabla que se crea en el archivo "Users.php" -->
			</div>
			<!-- al dar clic en el enlace, llamará a la funcion que mostrará una tabla con registros -->
			<a href="#" class="btn btn-primary" onclick="mostrarUsuarios()">Mostrar Usuarios</a>
		</div>
	</div>
	<script src="Vista/js/jquery.js"></script>
	<script src="Vista/js/bootstrap.min.js"></script>
	<script>
		function mostrarUsuarios() { // funcion en jquery que cargará el codigo del archivo php e incorporará en el html la tabla con registros
			$('#tabla').load('Modelo/Users.php'); 
		}
	</script>
</body>
</html>