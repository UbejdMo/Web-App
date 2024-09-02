<?php
    include("verifikim.php");
?>
<?php

include_once("konfig.php");

if(isset($_POST['perditso']))
    {
        $ID_eDhena = $_POST['ID_eDhena'];

        $Titulli=$_POST['Titulli'];
        $Pershkrimi=$_POST['Pershkrimi'];
        $File=$_POST['File'];
        $PamjaneFaqe=$_POST['PamjaneFaqe'];

        if(empty($Titulli) || empty($PamjaneFaqe)){

            if(empty($Titulli)) {
                echo "<font color='red'>Fusha titulli eshte e zbrazet.</font><br/>";
            }   
        
            if(empty($PamjaneFaqe)){
                echo "<font color='red'>Fusha pamja ne faqe eshte e zbrazet.</font><br/>";
            } 
        }   else {

            $rezultati = mysqli_query($lidh,"UPDATE tedhenat SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',File='$File', PamjaneFaqe='$PamjaneFaqe' WHERE ID_eDhena=$ID_eDhena");

            header("Location: modifiko_tedhenat.php");
            
        }
    } 
?>
<?php

$ID_eDhena = $_GET['ID_eDhena'];

$rezultati = mysqli_query($lidh,"SELECT * FROM tedhenat WHERE ID_eDhena=$ID_eDhena");

while($rez = mysqli_fetch_array($rezultati))
{
    $Titulli = $rez['Titulli'];
    $Pershkrimi = $rez['Pershkrimi'];
    $File = $rez['File'];
    $PamjaneFaqe = $rez['PamjaneFaqe'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<body class="is-preload">

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
                            <div class="col-12 col-12-medium">
                                <form method="post" action="perditso_tedhenat.php">
                                    
                                            <h3>Modifiko te dhenat</h3>
                                            Titulli
                                            <input type="text" name="Titulli" value='<?php echo $Titulli;?>' required />
                                            <br>
                                            Pershkrimi
                                            <textarea name="Pershkrimi" rows="10"><?php echo $Pershkrimi;?></textarea>
                                            <br>
                                            Emri i file-it
                                            <input type="text" name="File" value='<?php echo $File;?>' />
                                            <br>
                                            Pamja e faqes
                                            <input type="text" name="PamjaneFaqe" value='<?php echo $PamjaneFaqe;?>' required />
                                            <br>
                                            <ul class="actions">
                                            <li><input type="hidden" name="ID_eDhena" value='<?php echo $_GET['ID_eDhena'];?>' /></li>
                                            <li><input type="submit" name="perditso" value="Modifiko"/></li>
                                            </ul>
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
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
