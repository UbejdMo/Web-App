<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
    include_once("konfig.php");
?>
<html>
	<head>
		<title>Moduli Perdoruesit</title>
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

						<!-- 2D -->
							<section id="intro" class="main">
										<?php 
                                    $rezultati = mysqli_query($lidh, "SELECT t.tiparivizual_umvtv,v.videoloja_umvtv,v.platforma_umvtv,v.foto,v.emri FROM videolojerat_umvtv v
                                    LEFT OUTER JOIN tiparetvizuale_umvtv t ON v.ID_tiparivizual_umvtv = t.ID_tiparivizual_umvtv
                                    GROUP BY t.tiparivizual_umvtv,v.videoloja_umvtv,v.platforma_umvtv,v.foto,v.emri
                                    ORDER BY t.ID_tiparivizual_umvtv, v.ID_videoloja_umvtv DESC");
                                            while ($rresht = mysqli_fetch_assoc($rezultati)) {
                                                extract($rresht);

                                    if($rezultati==null)
                                     mysqli_free_result($rezultati);
                                                ?>
									
                                         <div class="col-4"><span class="image fit"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rresht['foto'] ).'"/>'; ?></span></div> 
										 <p style="text-align:center;">Videoloja:<strong><?php echo $videoloja_umvtv; ?></strong><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 Platforma:<strong><?php echo $platforma_umvtv; ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
                                     	 Tipari Vizual:<b><?php echo $tiparivizual_umvtv; ?></b></p>
                                          <br></p>

        

                                     <?php } ?>

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