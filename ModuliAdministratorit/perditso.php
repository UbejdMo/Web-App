<?php
    include("verifikim.php");
?>
<?php

include_once("konfig.php");

if(isset($_POST['perditso']))
{
    $ID_perdoruesi_umvtv=$_POST['ID_perdoruesi_umvtv'];
    $perdoruesi_umvtv=$_POST['perdoruesi_umvtv'];
    $fjalekalimi_umvtv=$_POST['fjalekalimi_umvtv'];

    if(empty($perdoruesi_umvtv) || empty($fjalekalimi_umvtv)) {
        if(empty($perdoruesi_umvtv)) {
            echo "<font color='red'>Username field is empty.</font><br/>";

        }
        if(empty($fjalekalimi_umvtv)){
            echo "<font color='red'>Password field is empty.</font><br/>";

        }
       
    }else {

        $rezultati = mysqli_query($lidh, "UPDATE perdoruesit_umvtv SET perdoruesi_umvtv='$perdoruesi_umvtv',fjalekalimi_umvtv='$fjalekalimi_umvtv' WHERE ID_perdoruesi_umvtv=$ID_perdoruesi_umvtv");
        header("Location: modifiko_perdorues.php");
    
    }
}
?>
<?php
$ID_perdoruesi_umvtv=$_GET['ID_perdoruesi_umvtv'];

$rezultati=mysqli_query($lidh, "SELECT * FROM perdoruesit_umvtv WHERE ID_perdoruesi_umvtv=$ID_perdoruesi_umvtv");

while($rez = mysqli_fetch_array($rezultati))
{
    $perdoruesi_umvtv = $rez['perdoruesi_umvtv'];
    $fjalekalimi_umvtv = $rez['fjalekalimi_umvtv'];
}
?>
<!DOCTYPE html>
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
    <section id="intro" class="main">
            <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesi_kycur; ?>!</em></p>
		  <div class="spotlight">
		  <div class="content">
                        <div class="row">

    <!-- Form -->
                                    <form method="post" action="perditso.php">
												
                                    <h3>Modifiko te dhenat e perdoruesit</h3>
                                    
                                    Perdoruesi
                                    <input type="text" name="perdoruesi_umvtv" value='<?php echo $perdoruesi_umvtv;?>'  />											
									<br>
                                    Fjalekalimi
                                    <input type="text" name="fjalekalimi_umvtv" value='<?php echo $fjalekalimi_umvtv;?>'  />
                                    <br>
                                    <input type="hidden" name="ID_perdoruesi_umvtv" value='<?php echo $_GET['ID_perdoruesi_umvtv'];?>' />
                                    <input type="submit" name="perditso" value="Modifiko">
                                        </form>		
											
										
                            </div>
                        </div>
                        </div>
                        </section>
                        </div>

                        <!-- Footer -->
                        <?php include("Fundi.php"); ?>
                        </div>


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

