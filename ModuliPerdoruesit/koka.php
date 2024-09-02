<!-- Header -->

			<header id="header">
				
				<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM tedhenat WHERE PamjaneFaqe='koka'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {
				
				extract($rresht);
				
				
				if($rezultati==null)
				mysqli_free_result($rezultati);
			
			?>
			<section>
				<div class="inner">
					<h2><?php echo $Titulli ?></h2>
					<p><?php echo $Pershkrimi ?></p>
				</div>
			</section>
			<?php } ?>
		</header>