<?php

// Conectarse a la base de datos
function conexion($tabla, $usuario, $pass){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;	
	} catch (PDOException $e) {
		return false;
	}
}

// convertir los datos para que no inyecten codigo.

function limpiarDatos($datos){
	// quitar espacios
	$datos = trim($datos);

	// quitar las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// convertir caracteres especiales
	$datos = htmlspecialchars($datos);
	return $datos;
}

?>