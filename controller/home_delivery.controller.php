<?php

require("../model/home_delivery.model.php");

$dataForm = new FormHomeDelivery();
$errors = $dataForm->setForm();

require("../view/home_delivery.view.php");

?>