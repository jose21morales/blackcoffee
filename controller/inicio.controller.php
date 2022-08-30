<?php

require("model/inicio.model.php");

$banner = new Inicio();
$banner_array = $banner->get_banner();

$welcome = new Inicio();
$welcome_array = $welcome->get_welcome();

$experience = new Inicio();
$experience_array = $experience->get_experience();

$personal =  new Inicio();
$personal_array = $personal->get_personal();

$coffee = new Inicio();
$coffee_array = $coffee->get_coffee();

$cakes = new Inicio();
$cakes_array = $coffee->get_cakes();

$gallery = new Inicio();
$gallery_array = $gallery->get_gallery();

$footer = new Inicio();
$footer_array = $footer->get_footer();

require("view/navigation.php");
require("view/banner.php");
require('view/inicio.view.php');
require("view/footer.php");

?>