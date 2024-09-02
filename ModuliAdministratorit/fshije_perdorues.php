 <?php
    include("verifikim.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($lidh, "SELECT * FROM perdoruesit_umvtv");
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
        <p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesi_kycur;?>!</em></p>
            <div class="content">
                <div class="row">

                <div class="table-wrapper">

    <form action="" method="post">
    <table>
	<tr>
	<h3>Kërko të dhënat e përdoruesit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Përdoruesin" value="%"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form>
    <div class="table-wrapper">
<table>
<tr>
        <td>Perdoruesi</td>
        <td>Fjalekalimi</td>
        <td>Fshije</td>
</tr>
<?php
if(!empty($_REQUEST['term'])) {
    $term = mysqli_real_escape_string($lidh,$_REQUEST['term']);
    $sql = mysqli_query($lidh, "SELECT * FROM perdoruesit_umvtv WHERE perdoruesi_umvtv LIKE '%".$term."%' ORDER BY ID_perdoruesi_umvtv DESC");

    while($rresht = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$rresht['perdoruesi_umvtv']."</td>";
        echo "<td>".$rresht['fjalekalimi_umvtv']."</td>";
        echo "<td><a href=\"fshije.php?ID_perdoruesi_umvtv=$rresht[ID_perdoruesi_umvtv]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshije</a></td></tr>";	
    }
}
?>
</div>
</table>
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