<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
session_start();
include("konfig.php"); // Establishing connection with our database

$error = ""; // Variable for storing our errors.
if (isset($_POST["submit"])) {
    if (empty($_POST["emri"]) || empty($_POST["fjalekalimi"])) {
        $error = "Duhet plotsuar te dy fushat.";
    } else {
        // Define $username and $password
        $emri = $_POST['emri'];
        $fjalekalimi = $_POST['fjalekalimi'];
        // Check username and password from database
        $sql = "SELECT ID_perdoruesi_umvtv FROM perdoruesit_umvtv WHERE perdoruesi_umvtv='$emri' 
        and fjalekalimi_umvtv='$fjalekalimi'"; // Updated table and column names
        $rezultati = mysqli_query($lidh, $sql);
        $rresht = mysqli_fetch_array($rezultati, MYSQLI_ASSOC);
        // If username and password exist in our database then create a session.
        // Otherwise echo error.
        if (mysqli_num_rows($rezultati) == 1) {
            $_SESSION['perdoruesi_umvtv'] = $emri; // Initializing Session with updated session variable
            header("location: ballina.php"); // Redirecting To Other Page
        } else {
            $error = "emri apo fjalekalimi eshte gabim.";
        }
    }
}
?>
