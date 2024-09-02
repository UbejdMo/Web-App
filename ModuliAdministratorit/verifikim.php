<?php
/* Kontrollon sesionin */
include('konfig.php');
session_start();
$verifiko_perdorues = $_SESSION['perdoruesi_umvtv']; // Update the session variable name
$ses_sql = mysqli_query($lidh, "SELECT perdoruesi_umvtv FROM perdoruesit_umvtv WHERE perdoruesi_umvtv='$verifiko_perdorues'");
$rresht = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$perdoruesi_kycur = $rresht['perdoruesi_umvtv']; // Update the variable name
if (!isset($verifiko_perdorues)) {
    header("Location: index.php");
}
?>
