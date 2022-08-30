<?php
session_start();

if (!isset($_SESSION['USER'])) {
	header('Location: ../');
}

require("../model/inicio.model.php");
require("../model/add_services-model.php");

$services = new Inicio();
$services_array = $services->get_services();

$bannerTwo = $services->get_banner_two();
$footer_array = $services->get_footer();

require("../view/navigation.php");
require("../view/banner.php");
require("../view/services.view.php");
require("../view/footer.php");

?>