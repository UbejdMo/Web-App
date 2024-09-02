<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


<?php
// including the database connection file
include_once("konfig.php");

if (isset($_POST['shtoVideoloja'])) {
    $videoloja_umvtv = $_POST['videoloja_umvtv'];
    $platforma_umvtv = $_POST['platforma_umvtv'];
    $ID_tiparivizual_umvtv = $_POST['ID_tiparivizual_umvtv'];
    $foto = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $emri = $_FILES['userfile']['name'];

    // checking empty fields
    if (empty($videoloja_umvtv) || empty($platforma_umvtv) || empty($ID_tiparivizual_umvtv)) {

        if (empty($videoloja_umvtv)) {
            echo "<font color='red'>fusha Videoloja eshte e zbrazet.</font><br/>";
        }

        if (empty($platforma_umvtv)) {
            echo "<font color='red'>fusha platforma eshte e zbrazet.</font><br/>";
        }

        if (empty($ID_tiparivizual_umvtv)) {
            echo "<font color='red'>fusha Tiparivizual eshte e zbrazet.</font><br/>";
        }

        // link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Kthehu pas</a>";
    } else {
        // if all the fields are filled (not empty)

        // insert data into database
        $rezultati = mysqli_query($lidh, "INSERT INTO videolojerat_umvtv(videoloja_umvtv, platforma_umvtv, ID_tiparivizual_umvtv, foto, emri) VALUES('$videoloja_umvtv','$platforma_umvtv','$ID_tiparivizual_umvtv','$foto', '$emri')");

        // display success message
        echo "<script>
            setTimeout(function(){
                window.location.href = 'menaxho_Videolojerat.php';
            }, 3000);
        </script>";
        echo "<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem prisni 3 sekonda.</b></p>";
    }
}
?>
</body>
</html>