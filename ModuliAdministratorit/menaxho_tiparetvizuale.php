<?php

    include("verifikim.php");
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
								<div class="spotlight">
									<div class="content">
                                    <section>
										<h2>Shto te dhenat e Tiparit Vizual</h2>
										<form method="post" action="shtoTipariVizual.php">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="TipariVizual" id="TipariVizual" value="" placeholder="Tipari Vizual" />
												</div>
												<div class="col-6">
													<ul class="actions">
														<li><input type="submit" name="shtoTipariVizual" value="Shto" class="primary" /></li>														
													</ul>
												</div>
											</div>
										</form>
                                        <br>
									<form action="" method="post">  
                                        <br>
                                        <br>
                                            <table>
                                                <tr>
                                                    <h3>Kërko të dhënat e Tiparit Vizual për modifikim ose fshirje</h3>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        Shkruaj:
                                                    </td>
                                                    <td>
                                                        <input type="text" name="term" placeholder="TiparinVizual" value="%"/>
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
		<td>Tipari Vizual</td>
		<td>Modifiko</td>
		<td>Fshije</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string($lidh,$_REQUEST['term']);     
$sql = mysqli_query($lidh,"SELECT * FROM tiparetvizuale_umvtv WHERE tiparivizual_umvtv LIKE '%".$term."%' ORDER BY ID_tiparivizual_umvtv DESC"); 
while($rresht = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rresht['tiparivizual_umvtv']."</td>";
		echo "<td><a href=\"perditso_TipariVizual.php?ID_tiparivizual_umvtv=$rresht[ID_tiparivizual_umvtv]\" class='button' class='button primary'>
Modifiko</a></td>";
echo "<td><a href=\"fshij_tiparvizual.php?ID_tiparivizual_umvtv=$rresht[ID_tiparivizual_umvtv]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Tiparin Vizual?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>

	</table>
	
									</div>
			
									</section>
								</section>
                    </div>   
					                 
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