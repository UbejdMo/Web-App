<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
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

                        <!-- New Form for videolojerat_umvtv -->
                        <h3>Shto të dhënat e videolojërave</h3>
                        <div class="table-wrapper">
                            <form enctype="multipart/form-data" action="shtoVideoloja.php" method="post">
                                <table>

                                    <tr>
                                        <select name="ID_tiparivizual_umvtv">
                                            <option selected="selected">Zgjedh Tiparin Vizual</option>
                                            <?php
                                            $rez = mysqli_query($lidh, "SELECT * FROM tiparetvizuale_umvtv");
                                            while($rresht=$rez->fetch_array())
                                            {
                                                ?>
                                                <option value="<?php echo $rresht['ID_tiparivizual_umvtv']; ?>"><?php echo $rresht['tiparivizual_umvtv']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select><br />
                                        </tr>
                                        
                                        <tr>
                                        <td>Videoloja</td>
                                        <td><input type="text" name="videoloja_umvtv"></td>
                                    </tr>
                                    <tr>
                                        <td>Platforma</td>
                                        <td><input type="text" name="platforma_umvtv"></td>
                                    </tr>
                                    <tr>
                                    <td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
									<td><input name="userfile" type="file" /></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" name="shtoVideoloja" value="Shto" class="primary"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>

                        <div class="row">
                            <div class="col-12 col-12-medium">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                            <h3>Kërko të dhënat e videolojës për menaxhim</h3>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shkruaj:
                                            </td>
                                            <td><input type="text" name="term" placeholder="Videoloja" value="%"/></td>
                                            <td><input type="submit" value="Kërko" /></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>Videoloja</td>
                                            <td>Platforma</td>
                                            <td>TipariVizual</td>
                                            <td>Foto</td>
                                            <td>Emri i file-it</td>

                                            <td>Modifiko</td>
                                            <td>Fshije</td>
                                        </tr>

                                        <?php
                                        if (!empty($_REQUEST['term'])) {

                                            $term = mysqli_real_escape_string($lidh, $_REQUEST['term']);

                                            $sql = mysqli_query($lidh,
                                                "SELECT
                                                    v.ID_videoloja_umvtv,
                                                    v.videoloja_umvtv,
                                                    v.platforma_umvtv,
                                                    t.tiparivizual_umvtv,
                                                    v.foto,
                                                    v.emri
                                                FROM
                                                    videolojerat_umvtv v
                                                INNER JOIN 
                                                    tiparetvizuale_umvtv t ON v.ID_tiparivizual_umvtv = t.ID_tiparivizual_umvtv
                                                WHERE
                                                    v.videoloja_umvtv LIKE '%".$term."%' OR v.platforma_umvtv LIKE '%".$term."%'
                                                ORDER BY
                                                v.ID_videoloja_umvtv DESC"
                                            );

                                            while ($rresht = mysqli_fetch_array($sql)) {
                                                echo "<tr>";
                                                echo "<td>".$rresht['videoloja_umvtv']."</td>";
                                                echo "<td>".$rresht['platforma_umvtv']."</td>";
                                                echo "<td>".$rresht['tiparivizual_umvtv']."</td>";
                                                echo "<td><img src=data:image/jpeg;base64,".base64_encode($rresht['foto']) . " width='80' height='100'/></td>";
                                                echo "<td>".$rresht['emri']."</td>";
                                                echo "<td><a href=\"perditsoVideoloja.php?ID_videoloja_umvtv=$rresht[ID_videoloja_umvtv]\" class='button' class='button primary'>Modifiko</a></td>";
                                                echo "<td><a href=\"fshijVideoloja.php?ID_videoloja_umvtv=$rresht[ID_videoloja_umvtv]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        ?>
                                    </table>
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
					</div>


    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
