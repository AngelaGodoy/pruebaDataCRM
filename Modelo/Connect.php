<?php
// Clase que se encargará de la conección a la base de datos
class Connect {
	public function conexion() {
		$link = mysqli_connect("localhost", "root", "", "prueba");
		if ($link == false) {
			die ("Error, no se puede conectar con la bae de datos". mysqli_connect_error());
		}
		return $link;
	}
}
?>