<?php
    include("verifikim.php");
?>
<?php
    include_once("konfig.php");

    if(isset($_POST['perditso_tiparivizual']))
{
    $ID_tiparivizual_umvtv = $_POST['ID_tiparivizual_umvtv'];

    $tiparivizual_umvtv =$_POST['tiparivizual_umvtv'];


        if(empty($tiparivizual_umvtv) ) {

            if(empty($tiparivizual_umvtv)) {
                echo "<font color='red'>fusha Tiparivizual eshte e zbrazet.</font><br/>";
        }
    } else {
        $rezultati = mysqli_query($lidh, "UPDATE tiparetvizuale_umvtv SET tiparivizual_umvtv='$tiparivizual_umvtv' WHERE ID_tiparivizual_umvtv=$ID_tiparivizual_umvtv");
   
        header("Location: menaxho_tiparetvizuale.php");
    }
}

?>
<?php

$ID_tiparivizual_umvtv = $_GET['ID_tiparivizual_umvtv'];

$rezultati = mysqli_query($lidh, "SELECT * FROM tiparetvizuale_umvtv WHERE ID_tiparivizual_umvtv=$ID_tiparivizual_umvtv");

while($rez = mysqli_fetch_array($rezultati))
{
    $tiparivizual_umvtv = $rez['tiparivizual_umvtv'];
}

?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include("koka.php"); ?>

				<!-- Nav -->
					<?php include("meny.php"); ?>
                    <!-- Main -->
					<div id="main">

<!-- Introduction -->
    <section id="intro" class="main">
        <p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesi_kycur;?>!</em></p>
        <div class="row">

            <form method="post" action="perditso_TipariVizual.php">

                    <h3>Modifiko të dhënat e Tiparit Vizual</h3>

        
                            Tipari Vizual
                            <input type="text" name="tiparivizual_umvtv" value='<?php echo $tiparivizual_umvtv;?>'   required />
                            <br>
                    
                            <input type="hidden" name="ID_tiparivizual_umvtv" value='<?php echo $_GET['ID_tiparivizual_umvtv'];?>' />
                            <input type="submit" name="perditso_tiparivizual" value="Modifiko">
                       
            </form>
		</div>
    </section>
	</div>
    <!-- Footer -->
    <?php include("Fundi.php"); ?>
</div>
    <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

    </body>
</html>