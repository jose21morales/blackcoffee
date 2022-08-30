<?php

require("../model/reservation.model.php");

$reservation = new reservation();
$errors = $reservation->setReservation();

require("../view/reservation.view.php");

?>