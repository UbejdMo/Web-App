<?php

include("konfig.php");

$ID_videoloja_umvtv = $_GET['ID_videoloja_umvtv'];

$rezultati = mysqli_query($lidh, "DELETE FROM videolojerat_umvtv WHERE ID_videoloja_umvtv=$ID_videoloja_umvtv");

header("Location:menaxho_Videolojerat.php");
?>
