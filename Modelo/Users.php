<!--
Autor: Angela Marcela Godoy Salguero
E-mail: godoysalguero@outlook.com
-->
<?php
// Conexion con la base de datos
include 'Connect.php';
$objConexion = new Connect();
$conexion = $objConexion->conexion();
// Consulta a la base de datos
$tabla = "";
$sql = "select * from consulta;"; // consulta para la Vista "consulta" en la base de datos
$query = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($query);

if ($rowcount != 0) { // se creará la tabla con los registros que traiga la consulta, si es que hay registros
	$tabla = '<table class="table">
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Apellido</th>
				</tr>';
	while ($row = mysqli_fetch_array($query)) { // recorrerá la vista y guardará los registros en el array $row, para luego concatenarlos en la variable $tabla
			$tabla = $tabla ."<tr>
						<td>".$row['Codigo']."</td>
						<td>".$row['Nombre']."</td>
						<td>".$row['Apellido']."</td>
					</tr>";
	}
	$tabla = $tabla ."</table>";
} else { // mensaje en caso de que no hayan registros
	$tabla = '<table class="table">
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Apellido</th>
				</tr>
				<tr>
					<td colspan="3"> No hay registros </td>
				</tr>
			</table>';
}

echo $tabla; // muesta la tabla con los registros de la consulta
?>