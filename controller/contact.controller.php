<?php

require("../model/inicio.model.php");

$banner = new Inicio();
$bannerTwo = $banner->get_bannerTwo();

$contact_us = new Inicio();
$contact_us_array = $contact_us->get_contact_us();

$footer = new Inicio();
$footer_array = $footer->get_footer();

require("../view/navigation.php");
require("../view/banner.php");
require("../view/contact.view.php");
require("../view/footer.php");

?>