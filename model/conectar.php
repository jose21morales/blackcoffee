<?php

class Conectar {

	public static function conexion() {
		require_once("config.php");
		try {
			$conexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,DB_USER,DB_PASSWORD);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec('SET CHARACTER SET UTF8');

		} catch (Exception $e) {
			die('Error: ' . $e->getMessage());
			echo "Error en la linea: " . $e->getLine();
		}
		return $conexion;
	}
}

?>