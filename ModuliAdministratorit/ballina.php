<?php
    include('verifikim.php');
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

						<!-- Introduction -->
							<section id="intro" class="main">
								<p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesi_kycur;?>!</em></p>
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h3><b>MENAXHIMI I TE DHENAVE TE BALLINES</b></h3>
										</header>										
									</div>
								</div>
								<!-- Images -->
								<ul class="actions">
									<li>
                                    <a href="menaxho_tiparetvizuale.php" class="icon brands major style1 fa-unity"></a>
										<h3>MENAXHO TIPARET VIZUALE</h3>
										<p>Forma per menaxhimin e Tipareve Vizuale ne uebaplikacion.</p>
									</li>
									<li>
										<a href="menaxho_Videolojerat.php" class="icon brands major style1 fa-playstation"></a>
										<h3>MENAXHO VIDEOLOJERAT</h3>
										<p>Forma per menaxhimin e Videolojerave ne uebaplikacion.</p>
									</li>
									<li>
										<a href="modifiko_tedhenat.php" class="icon solid major style1 fa-list"></a>
										<h3>MODIFIKO TE DHENAT</h3>
										<p>Forma per modifikimin e te dhenave ne uebaplikacion.</p>
									</li>
								</ul>
								<a class="button" href="Ajax/index.php">Voto</a>

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