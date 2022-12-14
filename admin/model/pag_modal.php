<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

$cantidadMostrar = 1;
$pag_modal = (!isset($_GET['pag'])) ? 1 : ($_GET['pag']);

$empesar_desde = ($pag_modal - 1) * $cantidadMostrar;

$sql_gallery = "SELECT * FROM gallery";
$statements = $base->prepare($sql_gallery);
$statements->execute();

$num_reg = $statements->rowCount();

$total_paginas = ceil($num_reg / $cantidadMostrar);

$sql = "SELECT IMG FROM gallery LIMIT $empesar_desde, $cantidadMostrar";
$resultado = $base->prepare($sql);
$resultado->execute();
if($image = $resultado->fetch(PDO::FETCH_ASSOC)) {
	$image = $image;
}

$incrementModal = (($pag_modal+1) <= $total_paginas) ? ($pag_modal+1) : 1;
$decrementModal = (($pag_modal-1) < 1) ? 1 : ($pag_modal-1);

?>