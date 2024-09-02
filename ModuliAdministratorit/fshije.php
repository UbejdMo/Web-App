<?php 
include("konfig.php");

$ID_perdoruesi_umvtv = $_GET['ID_perdoruesi_umvtv'];

$rezultati = mysqli_query($lidh,"DELETE FROM perdoruesit_umvtv WHERE ID_perdoruesi_umvtv=$ID_perdoruesi_umvtv");

header("Location:fshije_perdorues.php");
?>