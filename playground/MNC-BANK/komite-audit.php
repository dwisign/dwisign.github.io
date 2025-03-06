<!DOCTYPE html>
<html lang="en">
<?php
require("inc/header.php");
?> 
				

		  <body>

		  	<div class="container">
		  		<?php
				require("inc/top-bar-2.php");
				?>
				
				<div class="bg-content"></div>

				<ol class="breadcrumb">
				  <li><a href="#">Tentang Kami</a></li>
				  <li><a href="#">Profil Manajemen</a></li>
				  <li>Komite Audit</li>
				</ol>

				<div class="row services">
					<!-- Nav tabs -->
					<div class="tab-control">
						<ul class="nav nav-tabs">
						  <li>
						  	<a href="sejarah-mnc.php" style="float:left;">Sejarah</a>
						  	<img src="images/panah-2.png" class="tab-panah-img">
						  </li>
						  <li>
						  	<a href="visi-misi.php" style="float:left;">Visi & Misi</a>
						  	<img src="images/panah-2.png" class="tab-panah-img">
						  </li>
						  <li class="active">
								<a href="#" data-toggle="collapse" data-target="#list" style="float:left;">Profil Manajemen</a>
								<img src="images/panah-2.png" class="tab-panah-img with-sub">
								<ul id="list" class="collapse orn in">
									<li><a href="komisaris.php"> Profil Komisaris</a></li>
									<li><a href="direksi.php"> Profil Direksi</a></li>
									<li class="active"><a href="komite-audit.php"> Komite Audit</a></li>
								</ul>
						  </li>
						  <li>
						  	<a href="struktur.php" style="float:left;">Struktur Organisasi</a>
						  	<img src="images/panah-2.png" class="tab-panah-img with-sub">
						  	<ul id="list" class="collapse orn in">
								<li><a href="struktur.php"> Struktur Grup</a></li>
							</ul>
						  </li>
						  <!--
						  <li>
						  	<a href="pencapaian-penghargaan.php" style="float:left;">Pencapaian & Penghargaan</a>
						  	<img src="images/panah-2.png" class="tab-panah-img">
						  </li>
						  -->
						</ul>
					</div>

					<!-- Tab panes -->
					<div class="tab-container" id="scrollbar1">
					  <div class="tab-pane active" id="tabunganmnc">
					  	 <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
				            <div class="viewport">
				                 <div class="overview">
				                  <h3><b>Komite Audit</b></h3>

				              	  </br>

				              	  <div class="row">
					              	  	<div class="col-xs-6">
					                  		<p>Corporate Secretary</p>
					                  	</div>
					                  	<div class="col-xs-6">
					                  		<p>: Andri Latif</p>
					                  	</div>
				                  </div>

				                  </br>

				                  <h4>Komite Audit :</h4>

				                  <hr>
				                  
				                  <div class="row">
				                  		<div class="col-xs-6">
					                  		<p>Ketua merangkap Anggota</p>
					                  	</div>
					                  	<div class="col-xs-6">
					                  		<p>: Bambang Ratmanto</p>
					                  	</div>
				                  </div>

				                  <div class="row">
				                  		<div class="col-xs-6">
					                  		<p>Sekretaris merangkap Anggota</p>
					                  	</div>
					                  	<div class="col-xs-6">
					                  		<p>: Soenarso Soemodiwirjo</p>
					                  	</div>
				                  </div>

				                  <div class="row">
				                  		<div class="col-xs-6">
					                  		<p>Anggota</p>
					                  	</div>
					                  	<div class="col-xs-6">
					                  		<p>: Mohammad Sumarsono</p>
					                  	</div>
				                  </div>
				                 	 
									 
								  	 
								 </div>  
							</div>
					  </div>  
					</div>
				</div>
		  		



			<?php
			require("inc/footer.php");
			?> 



		  	</div><!--END-CONTAINER-->

		  	

		  	<?php
			require("inc/js.php");
			?> 


				
						

		  </body>
</html>	


				
				