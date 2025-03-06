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
				  <li>Profil Direksi</li>
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
									<li class="active"><a href="direksi.php"> Profil Direksi</a></li>
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
									 
									 <h4><b>Profil Direksi</b></h4>

				                 	 <img src="images/dir-4.jpg" style="float: left; margin-right: 20px;">
				                 	 <h5><b>Benny Helman </b></h5>
				                 	 <p><b>Direktur</b></p>
				                 	 <p>Benny Helman,  Warga Negara Indonesia, 41 tahun.  
				                 	 Beliau memulai  karirnya di Kantor Akuntan Publik 
									 Prasetio Utomo (Arthur Andersen) setelah meraih gelar Sarjana Ekonomi  
									 Jurusan Akuntansi di Universitas Trisakti pada tahun 1995.<br>

									 Beliau pernah menjabat antara lain sebagai Internal Audit Manager di Nexus Group. 
									 Bekerja di Citibank Indonesia selama 12 tahun dengan posisi terakhir sebagai <i>Director – Country Controller.</i> 
									 Kemudian menjabat sebagai <i>Business Controller Director for Downstream Centre Golden Agri Resources Ltd,</i>
									 Direktur – <i>Head of Finance System and Project Implementation</i> Citibank Australia & New Zealand.  
									 Beliau diangkat sebagai Direktur PT Bank MNC Internasional Tbk sejak tanggal 9 Juni 2014.
									</p>
								  	 
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


				
				