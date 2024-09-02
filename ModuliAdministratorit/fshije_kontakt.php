<?php
include("konfig.php");

$ID_Kontakti = $_GET['ID_Kontakti'];

$rezultati = mysqli_query($lidh,"DELETE FROM kontakti WHERE ID_Kontakti=$ID_Kontakti");

header("Location:menaxho_kontakt.php");
?>