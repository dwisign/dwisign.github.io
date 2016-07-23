<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	
	  		<?php
	    	require("inc/top-bar.php");
	    	?>
		 	
			<!-- START HOME CONTENT -->
			
			<div class="banner banner-content">
				<div class="container wide">
					<div class="row content-title-inside">
						<div class="col-sm-4 sub-title">
							<h4>AREAL GMP</h4>
						</div>
						<div class="col-sm-8 text-right">
							<ul class="list-inline breadcrumb">
								<li><a href="index.php">HOME</a></li>
								<li class="active">AREAL GMP</li>
							</ul>
						</div>
		      		</div>
				</div>
			</div>

			<div class="content content-inside">
				<div class="container wide">
					<div class="row">
						<div class="col-sm-3">
							<div class="list-group left-menu">
							  <a href="sejarah.php" class="list-group-item">
							    Sejarah Perusahaan
							  </a>
							  <a href="visi-misi.php" class="list-group-item">
							  	Visi Misi
							  </a>
							  <a href="kebijakan-mutu.php" class="list-group-item">
							  	Kebijakan Mutu
							  </a>
							  <a href="struktur-organisasi.php" class="list-group-item">
							  	Struktur Organisasi
							  </a>
							  <a href="areal-gmp.php" class="list-group-item active">
							  	Areal GMP
							  </a>
							</div>
						</div>

						<div class="col-sm-9">

							<!-- <div id="mapdiv" style="width: 100%; background-color:#f1fcec; height: 500px;"></div> -->
							<h4>GMP AREAL IN LAMPUNG MAP</h4>

							<section class="peta-lokasi-jaringan" >  
	                          <?php
	                          require("inc/map.php");
	                          ?>
	                        </section>

						</div>


					</div>
				</div>
			</div>









			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 
	    <?php
	    require("inc/js.php");
	    ?> 


	  	</body><!-- END BODY -->
</html>