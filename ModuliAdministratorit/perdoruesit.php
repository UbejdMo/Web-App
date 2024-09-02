<?php
	include("verifikim.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
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

						<!-- First Section -->
							<section id="intro" class="main">
							<p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesi_kycur;?>!</em></p>
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h3><b>MENAXHIMI I TE DHENAVE TE PERDORUESVE</b></h3>
										</header>
									</div>
								</div>

								<ul class="actions">
									<li>
                                    <a href="shto_perdorues.php" class="icon solid major style1 fa-user-plus"></a>
										<h3>SHTO PERDORUES</h3>
										<p>Forma per shtimin e perdoruesve te rinje ne uebaplikacion me te drejta te <br>administratorit.</p>
									</li>
									<li>
										<a href="modifiko_perdorues.php" class="icon solid major style1 fa-address-book"></a>
										<h3>MODIFIKO PERDORUES</h3>
										<p>Forma per modifikim te te dhenave <br>te perdoruesve aktual ne uebaplikacion me te drejta te administratorit.</p>
									</li>
									<li>
										<a href="fshije_perdorues.php" class="icon solid major style1 fa-user-slash"></a>
										<h3>FSHIJE PERDORUES</h3>
										<p>Forma per fshirje te perdoruesve aktual nga uebaplikacion.</p>
									</li>
								</ul>
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