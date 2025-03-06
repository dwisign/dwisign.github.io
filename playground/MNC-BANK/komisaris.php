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
				  <li>Profil Komisaris</li>
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
									<li class="active"><a href="komisaris.php"> Profil Komisaris</a></li>
									<li><a href="direksi.php"> Profil Direksi</a></li>
									<li><a href="komite-audit.php"> Komite Audit</a></li>
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
				                 	<h3><b>Profil Komisaris</b></h3><br>

				                 	 <div class="thumb-comdir">
									 	<div class="row">
									 		<div class="col-xs-3 img-prof">
				                 				<img src="images/com-1.jpg" class="img-responsive">
				                 			</div>
				                 			
				                 			<div class="col-xs-6 desc">
				                 				<h5><b>Dato Mat Amir bin Jaffar</b></h5>
				                 				<p>Presiden Komisaris merangkap Komisaris Independen</p>
				                 				<a href="komisaris-detail-1.php" class="btn btn-default2">Selengkapnya >></a>
				                 			</div>
				                 		</div>
				                 	</div>

				                 	<div class="thumb-comdir">
									 	<div class="row">
									 		<div class="col-xs-3 img-prof">
				                 				<img src="images/com-3.jpg" class="img-responsive">
				                 			</div>
				                 			<div class="col-xs-6 desc">
				                 				<h5><b>Bambang Ratmanto</b></h5>
				                 				<p>Komisaris Independen</p>
				                 				<a href="komisaris-detail-3.php" class="btn btn-default2">Selengkapnya >></a>
				                 			</div>
				                 		</div>
				                 	</div>
									

				                 	<div class="thumb-comdir">
									 	<div class="row">
									 		<div class="col-xs-3 img-prof">
				                 				<img src="images/com-2.jpg" class="img-responsive">
				                 			</div>
				                 			<div class="col-xs-6 desc">
				                 				<h5><b>Purnadi Harjono</b></h5>
				                 				<p>Komisaris</p>
				                 				<a href="komisaris-detail-2.php" class="btn btn-default2">Selengkapnya >></a>
				                 			</div>
				                 		</div>
				                 	</div>


									<div class="thumb-comdir">
									 	<div class="row">
									 		<div class="col-xs-3 img-prof">
				                 				<img src="images/com-4.jpg" class="img-responsive">
				                 			</div>
				                 			<div class="col-xs-6 desc">
				                 				<h5><b>Lim Teong Liat</b></h5>
				                 				<p>Komisaris</p>
				                 				<a href="komisaris-detail-4.php" class="btn btn-default2">Selengkapnya >></a>
				                 			</div>
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


				
				