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

					<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Catalogue</a></li>
					  <li><a href="#">Meubles</a></li>
					  <li><a href="#">Tables</a></li>
					  <li><a href="#">Fusion</a></li>
					  <li><a href="#">Fusion Dining Tables</a></li>
					  <li class="active">Tables</li>
					</ol>

					<h4 class="title-page">YOUR CHART</h4>

					<div class="tabel-head">
		  				<div class="row">
		  					<div class="col-md-5 align-center"><p>Product</p></div>
		  					<div class="col-md-2 align-center"><p>Price</p></div>
		  					<div class="col-md-3 align-center"><p>Quantity</p></div>
		  					<div class="col-md-2 align-center"><p>Total</p></div>
		  				</div>
		  			</div>

		  			<div class="tabel-content-2">
		  				<div class="row">
				  			<div class="col-md-5 align-center img30"><p>Fusion Dining Table 1</p><br><img src="images/prod-thumb-4.png" /></div>
		  					<div class="col-md-2 align-center"><h4 class="mobile-title-2">PRICE:</h4><p>$900</p></div>
		  					<div class="col-md-3 align-center"><h4 class="mobile-title-2">QUANTITY:</h4><p>2</p></div>		
		  					<div class="col-md-2 align-center"><h4 class="mobile-title-2">TOTAL</h4><p>$900</p></div>
		  				</div>

		  				<div class="row with-border">
				  			<div class="col-md-5 align-center"></div>
		  					<div class="col-md-2 align-center"></div>
		  					<div class="col-md-3 align-center"><p>Shipping</p></div>	
		  					<div class="col-md-2 align-center"><p>$7</p></div>
		  				</div>

		  				<div class="row with-border">
				  			<div class="col-md-5 align-center"></div>
		  					<div class="col-md-2 align-center"></div>
		  					<div class="col-md-3 align-center"><p><b>Total</b></p></div>	
		  					<div class="col-md-2 align-center"><p><b>$907</b></p></div>
		  				</div>
		  			</div>

		  			<br>

		  			<div class="row">
		  				<div class="col-sm-6">
		  					<h5><b>Billing Address</b></h5>
		  					<p>Buyer</p>
		  					<form class="form-horizontal left-label" role="form">
							  <div class="form-group">
							    <label for="inputName" class="col-sm-4 control-label">Name*</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputName" placeholder="Name">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputAddress" class="col-sm-4 control-label">Delivery Address</label>
							    <div class="col-sm-8">
							      <textarea class="form-control" rows="5"></textarea>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputRegion" class="col-sm-4 control-label">Regional</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputRegion" placeholder="Region">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputZIP" class="col-sm-4 control-label">ZIP Code</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputZIP" placeholder="ZIP Code">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPhone" class="col-sm-4 control-label">Phone</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
							    </div>
							  </div>
							</form>
		  					
		  				</div>


		  				<div class="col-sm-6">
		  					<h5><b>Payment-method</b></h5>
		  					<p>Buyer</p>
		  					<form class="form-horizontal left-label" role="form">
		  						<div class="form-group">
								  	<label for="inputPhone" class="col-sm-4 control-label">Bank Transfer</label>
								    <div class="col-sm-8">
								    	<select class="form-control">
										  <option>-Choose Your Bank-</option>
										  <option>Mandiri</option>
										  <option>BCA</option>
										  <option>BNI</option>
										</select>
								    </div>
								</div>

								<div class="form-group">
									<label for="inputPhone" class="col-sm-4 control-label">Internet Banking</label>
									<div class="col-sm-8">
										<div class="radio">
										  <label>
										    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										    <img src="images/icon-mandiri.png" width="60">
										  </label>
										</div>
										<div class="radio">
										  <label>
										    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										    <img src="images/no-gurita.jpg" width="80">
										  </label>
										</div>
										<div class="radio">
										  <label>
										    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										    <img src="images/Logo-Bank-Muamalat.png" width="80">
										  </label>
										</div>
									</div>
								</div>
							  
							</form>


		  				</div>
		  			</div>

		  			<div class="row align-right">
					      <button type="submit" class="btn btn-danger-2 btn-sm">Next</button>
		  			</div>
		  			
					
							

				</div>

				

				


				<?php
				require("inc/footer.php");
				?>

				<?php
				require("inc/js.php");
				?>		

		  </body>
</html>	


				
				