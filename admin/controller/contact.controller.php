<?php
session_start();

if (!isset($_SESSION['USER'])) {
	header('Location: ../');
}

require("../model/inicio.model.php");
require("../model/edit_contact-model.php");

$contact_us = new Inicio();
$contact_us_array = $contact_us->get_contact_us();

$bannerTwo = $contact_us->get_banner_two();
$footer_array = $contact_us->get_footer();

require("../view/navigation.php");
require("../view/banner.php");
require("../view/contact.view.php");
require("../view/footer.php");

?>