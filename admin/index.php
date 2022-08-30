<?php

// Start Date:
// Sunday, Jun 05th, 2022 | 08:26:00 PM

// End Date:

session_start();

if (isset($_SESSION['USER'])) {
	require("controller/inicio.controller.php");
} else {
    require('controller/login.controller.php');
}


?>