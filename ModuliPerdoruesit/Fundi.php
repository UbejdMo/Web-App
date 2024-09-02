<footer id="footer">
				
					<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='Fundi_kontakti'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h3><?php echo $Titulli ?></h3>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
					
									<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='Fundi_RrSociale'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
							<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='Fund_Referencat'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h3><?php echo $Titulli ?></h3>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
						</section>
			<?php } ?>
			
					</div>
					<div class="copyright">
					
												<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='Fundi_CopyRight'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
							<?php echo $Pershkrimi; ?>
					
			<?php } ?>
						
					
			</footer>