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
						  <li><a href="#">International</a></li>
						  <li class="active">Book Now</li>
						</ul>



						<div class="row">
							<div class="col-sm-8 left col-padding50-R border-right">

								<div class="notif img100">
									<img src="images/notif-1.jpg">
								</div>

								<h5>Visitors Detail</h5>


								

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Title</label>
											<select class="form-control">
											  <option>Mr</option>
											  <option>Mrs</option>
											</select>
						             	</div>

						                <div class="col-sm-6">
											<label for="exampleInputName">Name</label>
	    									<input type="text" class="form-control" id="exampleInputName" placeholder="Name">
						             	</div>

						             	
					             	</div>
				             	</div>

				             	<div class="form-group">
									<div class="row">
										

						                <div class="col-sm-6">
											<label for="exampleInputPhone">Phone Number</label>
	    									<input type="numeric" class="form-control" id="exampleInputPhone" placeholder="Phone">
						             	</div>

						             	<div class="col-sm-6">
											<label for="exampleInputEmail1">Citizenship</label>
	    									<select class="form-control">
											  <option>Country</option>
											  <option>Indonesia</option>
											  <option>Japan</option>
											  <option>Filipina</option>
											  <option>Malaysia</option>
											  <option>Kamboja</option>
											</select>
						             	</div>

						             	
					             	</div>
				             	</div>

				             	
				             	<br>
				           		
				             	<div class="form-group">
									<a href="login-hotel-international.php"><button type="submit" class="btn btn-ribbon">Next</button></a>
								</div>
								

							

							</div>

							<div class="col-sm-1"></div>

							<div class="col-sm-3">
								<div class="cart">
									<h4>ORDER DETAIL</h4>
									<hr>

									<h5>Hotel Name</h5>
									<hr>
									<p>Amankila</p>

									<br>

									<h5>Days</h5>
									<hr>
									<p>21 May 2014 - 25 May 2014</p>
									
									<br>

									<h5>Room</h5>
									<hr>
									<p>Merak 015</p>
									

									<br>

									<h5>Person</h5>
									<hr>
									<p>
										1 Adult<br>
										1 Child<br>
										0 Infant
									</p>

									<br>

									<h5>Price</h5>
									<hr>	
									<h5>IDR 1.800.000</h5>

									<br><br>
									<h4>NEED HELP?</h4>
									<hr>
									<p>Please contact our call center agents to assist you</p>

									<br>

									<h4><span class="glyphicon glyphicon glyphicon glyphicon-earphone"></span> 021-3501888</h4>
									

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

