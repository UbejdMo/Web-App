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

<div id="wrapper">

    <!-- Header -->
                    <?php include("koka.php"); ?>

    <!-- Nav -->
                    <?php include("meny.php"); ?>


    <!-- Main -->
    <div id="main">
    <section id="intro" class="main">
            <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesi_kycur; ?>!</em></p>
		  <div class="spotlight">
		  <div class="content">
                        <div class="row">
                            <div class="col-12 col-12-medium">

    <!-- Form -->
                                    <form method="post" action="shto.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-12 col-12-medium">
												<input type="text" name="emri" id="emri" value="" placeholder="Përdoruesi" />
											<br>
												<input type="password" name="fjalekalimi" id="fjalekalimi" value="" placeholder="Fjalëkalimi" />											
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shto" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
					</div>

                        <!-- Footer -->
                        <?php include("Fundi.php"); ?>
					</div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
