<!DOCTYPE html>
<html lang="en">
<?php
require("inc/header.php");
?> 
				

		  <body>
				<?php
				require("inc/menu.php");
				?>

				
				
					<div class="container content-inside">

						<ul class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Hotel</a></li>
						  <li class="active">International</li>
						</ul>

					<div class="row rawMB40">
						<div class="col-sm-5">
							<div class="flexslider" id="third-slider">
							  <ul class="slides">
							    <li data-thumb="images/hotel-1.jpg">
							      <img src="images/hotel-1.jpg" />
							    </li>
							    <li data-thumb="images/img-tour-2.jpg">
							      <img src="images/img-tour-2.jpg" />
							    </li>
							    <li data-thumb="images/img-tour-3.jpg">
							      <img src="images/img-tour-3.jpg" />
							    </li>
							    <li data-thumb="images/img-tour-4.jpg">
							      <img src="images/img-tour-4.jpg" />
							    </li>
							  </ul>
							</div>
						</div>

						<div class="col-sm-7">
							<div class="row detail-desc">
								<div class="col-sm-6">
									<h3>Amankila</h3>
								</div>
								<div class="col-sm-6 col-padding15-T align-right">
									<!--<h5>5 Day | 21 May 2014 - 25 May 2014</h5>-->
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-sm-6">
									<ul>
										<li>Layanan 24 jam</li>
										<li>Tempat parkir mobil</li>
										<li>Ruang pertemuan</li>
										<li>Layanan Laundry</li>
										<li>Lift</li>
										<li>Restoran</li>
										<li>Layanan kamar</li>
										<li>Aman</li>
									</ul>
								</div>

								<div class="col-sm-6">
									<ul>
										<li>Akses jaringan internet</li>
										<li>Penitipan bayi</li>
										<li>Petugas hotel</li>
										<li>Check-in awal</li>
										<li>Lobi</li>
										<li>Gym / Pusat kebugaran</li>
										<li>Kolam renang</li>
										<li>Sauna</li>
									</ul>
								</div>
							</div>

							<br><br>

							<div class="align-right">
								<h3>Rp. 1.800.000,-</h3>
								<a href="#" data-toggle="modal" data-target="#myModal-1"><button type="submit" class="btn btn-default btn-sm">Book Now</button></a>
							</div>

							<?php
							require("inc/pop-up-form-hotel-international.php");
							?>

						</div>
					</div>

					<div class="row col-padding15">
						<ul class="nav nav-tabs tab-2" style="margin-bottom: 15px;">
						  <li class="active"><a href="#desc" data-toggle="tab">DESCRIPTION</a></li>
						  <li class=""><a href="#price" data-toggle="tab">PRICE</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
						  <div class="tab-pane fade active in" id="desc">
						  	<h3>ABOUT AMANKILA</h3>
						    <p>Discover the sun, surf and traditional cultures that blend harmoniously in Bali, 
						    	Bali. Discover the island’s main entertainment areas in the south, where you will 
						    	find Kuta, Nusa Dua and Sanur. Culture enthusiast advised to play to Ubud is 
						    	famous for its culture is thick and made ​​famous by the Hollywood film “Eat, 
						    	Pray, Love”. If you want to see marine life, the East Coast of Bali offers 
						    	amazing diving spots. The north coast of the island of Bali, exactly in 
						    	Lovina you can see wild dolphins not far from the beach. Whether you choose 
						    	to bask in the sun or enjoy all the island has to offer, Bali provides 
						    	everything you are looking for.</p>
						  </div>
						  <div class="tab-pane fade" id="price">
						  	<h3>PRICE </h3>

						  	<ul>
							    <li>1BED-EXECUTIVE (1ABF) 	 	Rp        890,000.00</li>
								<li>2BED-SUPERIOR (2ABF) 	 	Rp        965,000.00</li>
								<li>1BED-PENTHOUSE (1ABF) 		Rp        965,000.00</li>
								<li>2BED-DELUXE (2ABF) 	 		Rp        990,000.00</li>
								<li>3BED-DELUXE (3ABF) 	 		Rp    	1,090,000.00</li>
							</ul> 
						  </div>
						</div>
						
					</div>				
				</div><!--end-content-inside-->
				

				
				
				
				<?php
				require("inc/footer.php");
				?>

				<?php
				require("inc/js.php");
				?>		

		  </body>
</html>	

