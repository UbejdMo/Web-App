<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>
		<?php
//including the database connection file
include_once("konfig.php");

if(isset($_POST['shtoKontakt'])) {	
	$Subjekti = $_POST['Subjekti'];
	$Mesazhi = $_POST['Mesazhi'];
	$Email = $_POST['Email'];
		
	// checking empty fields
	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Subjekti)) {echo "<font color='red'>fusha subjekti eshte e zbrazet.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>fusha mesazhi eshte e zbrazet.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>fusha email eshte e zbrazet.</font><br/>";}
		//link to the previous Mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Shko mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO kontakti(Subjekti,Mesazhi,Email) VALUES('$Subjekti','$Mesazhi','$Email')");
		//display success messMesazhi
	//	echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	}
}
?>

</body>
</html>
