<?php
    include("verifikim.php");
?>
<?php
    include_once("konfig.php");

    if(isset($_POST['perditso_kontakt']))
{
    $ID_Kontakti = $_POST['ID_Kontakti'];

    $Subjekti =$_POST['Subjekti'];
    $Mesazhi = $_POST['Mesazhi'];
    $Email = $_POST['Email'];


        if(empty($Subjekti) || empty($Mesazhi) || empty($Email) ) {

            if(empty($Subjekti)) {
                echo "<font color='red'>fusha Subjekti eshte e zbrazet.</font><br/>";
        }

        if(empty($Mesazhi)) {
                echo "<font color='red'>fusha Mesazhi eshte e zbrazet.</font><br/>";
        }
    if(empty($Email)) {
                echo "<font color='red'>fusha Email-i eshte e zbrazet.</font><br/>";
        }
    } else {
        $rezultati = mysqli_query($lidh, "UPDATE kontakti SET Subjekti='$Subjekti', Mesazhi='$Mesazhi', Email='$Email' WHERE ID_Kontakti=$ID_Kontakti");
   
        header("Location: menaxho_kontakt.php");
    }
}

?>
<?php

$ID_Kontakti = $_GET['ID_Kontakti'];

$rezultati = mysqli_query($lidh, "SELECT * FROM kontakti WHERE ID_Kontakti=$ID_Kontakti");

while($rez = mysqli_fetch_array($rezultati))
{
    $Subjekti = $rez['Subjekti'];
    $Mesazhi = $rez['Mesazhi'];
    $Email = $rez['Email'];
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
        <div class="spotlight">
		  <div class="content">
          
        <div class="row">
        <div class="col-12 col-12-medium">

            <form method="post" action="perditso_kontakt.php">

                    <h3>Modifiko të dhënat e Kontaktit</h3>

        
                            Subjekti
                            <input type="text" name="Subjekti" value='<?php echo $Subjekti;?>'   required />
                            <br>

                            Mesazhi
                            <textarea name="Mesazhi"  rows="6"> <?php echo $Mesazhi; ?></textarea>
                             <br>

                            Email
                            <input type="text" name="Email" value='<?php echo $Email;?>'   required />
                            <br>
                    
                            <input type="hidden" name="ID_Kontakti" value='<?php echo $_GET['ID_Kontakti'];?>' />
                            <input type="submit" name="perditso_kontakt" value="Modifiko">
                       
            </form>
</div>
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
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

    </body>
</html>