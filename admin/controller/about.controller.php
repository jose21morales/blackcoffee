<?php
session_start();

if (!isset($_SESSION['USER'])) {
	header('Location: ../');
}

require("../model/inicio.model.php");
require("../model/add_about-model.php");

$about = new Inicio();

$bannerTwo = $about->get_banner_two();

$about_array_one = $about->getAboutOne();
$about_array_two = $about->getAboutTwo();
$about_array_three = $about->getAboutThree();

$footer_array = $about->get_footer();

require("../view/navigation.php");
require("../view/banner.php");
require("../view/about.view.php");
require("../view/footer.php");

?>