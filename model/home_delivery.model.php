<?php

class FormHomeDelivery {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function setForm() {
		require_once("conectar.php");
		$conexion = Conectar::conexion();

		if (isset($_POST['btn-form__delivery']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

			$first_name = htmlentities(addslashes($_POST['first_name']), ENT_QUOTES);
			$last_name = htmlentities(addslashes($_POST['last_name']), ENT_QUOTES);
			$address = htmlentities(addslashes($_POST['address']), ENT_QUOTES);
			$city = htmlentities(addslashes($_POST['city']), ENT_QUOTES);
			$phone = htmlentities(addslashes($_POST['phone']), ENT_QUOTES);

			if (empty($first_name)) {
				$this->errors['first_name'] = "Introdusca su Nombre";
			}
			if (empty($last_name)) {
				$this->errors['last_name'] = "Introdusca su Apellido";
			}
			if (empty($address)) {
				$this->errors['address'] = "Introdusca su Dirección";
			}
			if (empty($city)) {
				$this->errors['city'] = "Introdusca su ciudad";
			}
			if (empty($phone)) {
				$this->errors['phone'] = "Introdusca su Télefono";
			}

			if (empty($this->errors)) {
				$sql = "INSERT INTO home_delivery (first_name, last_name, address, city, phone) VALUES (:first_name, :last_name, :address, :city, :phone)";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(':first_name', $first_name);
				$statements->bindValue(':last_name', $last_name);
				$statements->bindValue(':address', $address);
				$statements->bindValue(':city', $city);
				$statements->bindValue(':phone', $phone);
				$statements->execute();

				header('Location: ../view/home_delivery_correct.php');
			}
		}

		return $this->errors;
	}
}

?>