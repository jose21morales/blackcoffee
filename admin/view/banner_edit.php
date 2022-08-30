<?php
session_start();

if (!isset($_SESSION['USER'])) {
    header('Location: ../');
}

require("../model/edit_banner-model.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar banner</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body class="body--flex">

    <!-- ================== Estilos del banner ===================== -->

    <div class="form-banner-container" id="form-banner-container">
        <form class="form-banner" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h3 class="form-banner-title">Modifica el banner</h3>

           <label for="banner-title">Titulo</label><br>
           <input type="text" name="banner-title" id="banner-title" value="<?php echo $title; ?>" placeholder="Introduce un titulo"><br>

           <label for="banner-txt">Descripción</label><br>
           <textarea name="banner-txt" id="banner-txt" placeholder="Introduce una descripción"><?php echo $text; ?></textarea><br>
                 
           <input type="submit" name="btn-banner" value="Modificar">
        </form>
        <div class="banner-go_back">
            <p class="go_back"><a href="../index.php"><span class="icon-chevron-left"></span></a></p>
        </div>
    </div>

</body>
</html>