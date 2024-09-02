<?php

include("konfig.php");

$ID_TipariVizual = $_GET['ID_tiparivizual_umvtv'];

$rezultati = mysqli_query($lidh,"DELETE FROM tiparetvizuale_umvtv WHERE ID_tiparivizual_umvtv=$ID_TipariVizual");

header("Location: menaxho_tiparetvizuale.php");
?>