<?php
include("konfig.php");
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='MenyAdmin'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
?>