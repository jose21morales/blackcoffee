<?php

class Reservation {
	private $errors;

	public function __construct() {
		$this->errors = [];
	}

	public function setReservation() {
		require_once("conectar.php");
		$conexion = Conectar::conexion();

		if (isset($_POST['btn-form__reservation']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

			$first_name = htmlentities(addslashes($_POST['first_name']), ENT_QUOTES);
			$last_name = htmlentities(addslashes($_POST['last_name']), ENT_QUOTES);
			$tables = htmlentities(addslashes($_POST['tables']), ENT_QUOTES);
			$day = htmlentities(addslashes($_POST['day']), ENT_QUOTES);
			$month = htmlentities(addslashes($_POST['month']), ENT_QUOTES);
			$year = htmlentities(addslashes($_POST['year']), ENT_QUOTES);
			$hours = htmlentities(addslashes(strtolower($_POST['hours'])), ENT_QUOTES);
			$minutes = htmlentities(addslashes(strtolower($_POST['minutes'])), ENT_QUOTES);
			$am_pm = htmlentities(addslashes($_POST['am_pm']), ENT_QUOTES);

			if (empty($first_name)) {
				$this->errors['first_name'] = "Introdusca su Nombre";
			} else {
				$first_name = strtolower($first_name);
			}
			if (empty($last_name)) {
				$this->errors['last_name'] = "Introdusca su Apellido";
			} else {
				$last_name = strtolower($last_name);
			}
			if ($tables == 'Cantidad de mesas') {
				$this->errors['tables'] = "Introdusca la cantidad de mesas";
			}
			if ($day == 'Day' || $month == 'Mes' || $year == 'Año') {
				$this->errors['date'] = "Introdusca la fecha de reservación";
			}
			if ($hours == 'hh' || $minutes == 'mm' || $am_pm == 'am_pm') {
				$this->errors['time'] = "Introdusca la hora de reservación";
			}

			if (empty($this->errors)) {
				$sql = "INSERT INTO reservation (first_name, last_name, tables, r_date, r_time) VALUES (:first_name, :last_name, :tables, :r_date, :r_time)";
				$statements = $conexion->prepare($sql);
				$statements->bindValue(':first_name', $first_name);
				$statements->bindValue(':last_name', $last_name);
				$statements->bindValue(':tables', $tables);
				$statements->bindValue(':r_date', $day . "-" . $month . "-" . $year);
				$statements->bindValue(':r_time', $hours . ":" . $minutes . ":" . $am_pm);
				$statements->execute();

				header('Location: ../view/reservation_correct.php');
			}
		}

		return $this->errors;
	}
}

?>