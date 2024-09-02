<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<body>
<?php
    include_once("konfig.php");

if(isset($_POST['shtoTipariVizual'])) {
    $TipariVizual = ($_POST['TipariVizual']); 

    if(empty($TipariVizual)) {
        if(empty($TipariVizual)) {echo "<font color='red'>Fusha Tipari Vizual eshte e zbrazet.</font><br/>";}

        echo "<br><a href='javascript:self.history.back();'Go Back</a>";
    } else {

        $rezultati = mysqli_query($lidh, "INSERT INTO tiparetvizuale_umvtv(tiparivizual_umvtv) VALUES('$TipariVizual')");
        
        echo "<script>
            setTimeout(function(){
                window.location.href = 'menaxho_tiparetvizuale.php';
            },3000);
            </script>";
        echo "<p><b> E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. </b></p>";

    }
}
?>
</body>
</html>
