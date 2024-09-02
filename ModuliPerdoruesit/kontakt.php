<?php
	include("konfig.php");	
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        <div id="wrapper">

		<!-- Header -->
			<?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>



		<!-- Main -->
        <div id="main">
			<section id="intro" class="main">
				
					
						<div class="row">
								<div class="col-12 col-12-medium">									

								<!-- Form -->
									<h3>Forma per kontakt</h3>
									
									<div class="table-wrapper">
									<form method="post" action="shtoKontakt.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-12 col-52-xsmall">
												<input type="text" name="Subjekti" id="Subjekti" value="" placeholder="Subjekti" />
											
											<br>
												<textarea name="Mesazhi" id="Mesazhi" placeholder="Mesazhi" rows="6"></textarea>
											
											<br>
												<input type="email" name="Email" id="Email" value="" placeholder="Email-i" />
											
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shtoKontakt" value="Dergo mesazh" /></li>
												
												</ul>
											</div>
										</div>

												
									</form>
							
									</div>
						</div>	
						
						</div>
				</div>
			</section>
</div>

		<!-- Footer -->
					<?php include_once("Fundi.php"); ?>
           
</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>