<?php
include("verifikim.php");
?>
<?php
include_once("konfig.php");

if(isset($_POST['perditsoVideoloja'])) {
    $ID_videoloja_umvtv = $_POST['ID_videoloja_umvtv'];
    $videoloja_umvtv = $_POST['videoloja_umvtv'];
    $platforma_umvtv = $_POST['platforma_umvtv'];
    $ID_tiparivizual_umvtv = $_POST['ID_tiparivizual_umvtv'];

    $foto = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $emri = $_FILES['userfile']['name'];
    $maxsize = 10000000;

    // checking empty fields
    if(empty($videoloja_umvtv) || empty($platforma_umvtv)) {
        if(empty($videoloja_umvtv)) {
            echo "<font color='red'>fusha Videoloja eshte e zbrazet.</font><br/>";
        }

        if(empty($platforma_umvtv)) {
            echo "<font color='red'>fusha Platforma eshte e zbrazet.</font><br/>";
        }

    } else {
        // updating the table
        $rezultati = mysqli_query($lidh, "UPDATE videolojerat_umvtv SET videoloja_umvtv='$videoloja_umvtv', platforma_umvtv='$platforma_umvtv', ID_tiparivizual_umvtv='$ID_tiparivizual_umvtv', foto='$foto', emri='$emri' WHERE ID_videoloja_umvtv=$ID_videoloja_umvtv");

        // redirecting to the display message page
        header("Location: menaxho_Videolojerat.php");
    }
}
?>
<?php

$ID_videoloja_umvtv = $_GET['ID_videoloja_umvtv'];

$rezultati = mysqli_query($lidh, "SELECT * FROM videolojerat_umvtv WHERE ID_videoloja_umvtv=$ID_videoloja_umvtv");

while($rez = mysqli_fetch_array($rezultati)) {
    $videoloja_umvtv = $rez['videoloja_umvtv'];
    $platforma_umvtv = $rez['platforma_umvtv'];
    $ID_tiparivizual_umvtv = $rez['ID_tiparivizual_umvtv'];
}
?>

<!-- HTML Form -->
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
	<div id="main" style="height:95%;">
    <section id="intro" class="main">
			
            <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesi_kycur; ?>!</em></p>
		  <div class="content">
                <div class="row">
                    <form enctype="multipart/form-data" method="post" action="perditsoVideoloja.php">
                        <table style=" border: 0;">
                        <tr>
                            <select name="ID_tiparivizual_umvtv">
                                <option selected="selected" required>Zgjedh Tiparin Vizual</option>
                                <?php
                                $rez=mysqli_query($lidh,"SELECT * FROM tiparetvizuale_umvtv");
                                while($rresht=$rez->fetch_array())
                                {
                                    ?>
                                    <option value="<?php echo $rresht['ID_tiparivizual_umvtv'];?>"><?php echo $rresht['tiparivizual_umvtv']; ?></option>
                                    <?php
                                }
                                ?>
                                </select><br />
                            </tr>
                            <tr>
                                <td>Videoloja</td>
                                <td><input type="text" name="videoloja_umvtv" value='<?php echo $videoloja_umvtv;?>' required /></td>
                            </tr>
                            <tr>
                                <td>Platforma</td>
                                <td><input type="text" name="platforma_umvtv" value='<?php echo $platforma_umvtv;?>' required /></td>
                            </tr>
                            
                            <tr>
                                <td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
                                <td><input name="userfile" type="file" /></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="ID_videoloja_umvtv" value='<?php echo $_GET['ID_videoloja_umvtv']; ?>' /></td>
                                <td><input type="submit" name="perditsoVideoloja" value="Modifiko"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        
    </section>
	</div>
	<!-- veni footerit -->
</div>
</body>
</html>
