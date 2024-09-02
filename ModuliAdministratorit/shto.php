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

    if(isset($_POST['shto'])) {
        $emri = $_POST['emri'];
        $fjalekalimi = $_POST['fjalekalimi'];

        if(empty($emri) || empty($fjalekalimi)){

            if(empty($emri)) {
                echo "<font color='red'>emri eshte i zbrazet.</font><br/>";
            }
            
            if(empty($fjalekalimi)) {
                echo "<font color='red'>fjalekalimi eshte i zbrazet.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

        }else{

            $rezultati = mysqli_query($lidh, "INSERT INTO perdoruesit_umvtv(perdoruesi_umvtv,fjalekalimi_umvtv)VALUES('$emri','$fjalekalimi')");
            //echo "<font color='green'>Te dhenat jane futur me sukses ne databaze.</font>";
            //echo "<br/><a href='admin.php'>Shiko rezultatin</a>";
            echo "<script>
            setTimeout (function() {
                window.location.href = 'perdoruesit.php';
            }, 3000);
            </script>";
            echo "<p><b>  E dhena eshte duke u regjistruar ne sistem.
            Ju lutem prisni 3 sekonda. <b></p>";
        }
    }
    ?>
</body>
</html>