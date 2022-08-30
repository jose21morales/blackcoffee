<?php

require("model/inicio.model.php");
require("model/edit_welcome-model.php");
// require("model/edit_banner-model.php");
require("model/edit_experience-model.php");
require("model/add_personal-model.php");
require("model/add_coffee-model.php");
require("model/add_cakes-model.php");
require("model/edit_footer-model.php");

$welcome = new Inicio();
$welcome_array = $welcome->get_welcome();

$experience = new Inicio();
$experience_array = $experience->get_experience();

$banner = new Inicio();
$banner_array = $banner->get_banner();

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