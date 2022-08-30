<?php

require("../model/inicio.model.php");

$banner = new Inicio();
$bannerTwo = $banner->get_bannerTwo();

$about = new Inicio();
$about_array_one = $about->getAboutOne();
$about_array_two = $about->getAboutTwo();
$about_array_three = $about->getAboutThree();

$footer = new Inicio();
$footer_array = $footer->get_footer();

require("../view/navigation.php");
require("../view/banner.php");
require("../view/about.view.php");
require("../view/footer.php");

?>