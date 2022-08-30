<?php if (!isset($_GET['action'])) { ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BlackCoffee</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="">
</head>
<body>
    <div class="header">

<!--         <div class="header-logo-content">
            <p class="header-logo">Black</p><p class="header-logo-two">Coffee</p>
        </div>
 -->
        <div class="header-content">
          <p class="header-text">
            <span class="icon-phone"> 962-299-55-92</span>
          </p>
          <p class="header-text">
            <span class="icon-location"> Cacahoatan, Chiapas, México</span>
          </p>
        </div>
    </div>

    <div class="div container" id="div">
        <div class="div-color">
            <div class="logo-content" id="logo-content">
                <p class="header-logo">Black</p><p class="header-logo-two">Coffee</p>
            </div>
           <span class="icon-bars" id="btnmenu"></span>
           <ul class="menu" id="menu">
               <li class="menu__item"><a class="menu__link select" id="menu__link1" href=""><span class="icon-home"></span>INICIO</a></li>

               <li class="menu__item"><a class="menu__link" id="menu__link2" href="controller/services.controller.php?action=services"><span class="icon-cloud-download"></span>SERVICIOS</a></li>
               
               <li class="menu__item"><a class="menu__link" id="menu__link3" href="controller/contact.controller.php?action=contact"><span class="icon-phone"></span>CONTACTANOS</a></li>
               
               <li class="menu__item"><a class="menu__link" id="menu__link4" href="controller/about.controller.php?action=about"><span class="icon-user"></span>ACERCA DE</a></li>
           </ul>
        </div>
    </div>

<?php } else { ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BlackCoffee | <?php echo ucwords($_GET['action']); ?></title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/services.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <div class="header">
<!--         <div class="header-logo-content">
            <p class="header-logo">Black</p><p class="header-logo-two">Coffee</p>
        </div>
 -->        <div class="header-content">
          <p class="header-text">
            <span class="icon-phone"> 962-299-55-92</span>
          </p>
          <p class="header-text">
            <span class="icon-location"></span> Cacahoatan, Chiapas, México
          </p>
        </div>
    </div>

    <div class="div container">
        <div class="div-color">
            <div class="logo-content" id="logo-content">
                <p class="header-logo">Black</p><p class="header-logo-two">Coffee</p>
            </div>
           <span class="icon-bars" id="btnmenu"></span>
           <ul class="menu" id="menu">
               <li class="menu__item"><a class="menu__link

                <?php

                if($_GET['action'] == 'home') {
                    echo "select";
                }

                ?>

                " id="menu__link1" href="../"><span class="icon-home"></span>INICIO</a></li>
               <li class="menu__item"><a class="menu__link

                <?php

                if($_GET['action'] == 'services') {
                    echo "select";
                }

                ?>

                " id="menu__link2" href="../controller/services.controller.php?action=services"><span class="icon-cloud-download"></span>SERVICIOS</a></li>
               <li class="menu__item"><a class="menu__link

                <?php

                if($_GET['action'] == 'contact') {
                    echo "select";
                }

                ?>

                " id="menu__link3" href="../controller/contact.controller.php?action=contact"><span class="icon-phone"></span>CONTACTANOS</a></li>
               <li class="menu__item"><a class="menu__link

                <?php

                if($_GET['action'] == 'about') {
                    echo "select";
                }

                ?>

                " id="menu__link4" href="../controller/about.controller.php?action=about"><span class="icon-user"></span>ACERCA DE</a></li>
           </ul>
        </div>
    </div>

<?php } ?>