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

					<!-- Nav tabs -->
					<ul class="nav col-sm-3 tab-down" role="tablist">
					  <li class="active"><a href="#acc" role="tab" data-toggle="tab">My Account</a></li>
					  <li><a href="#stat" role="tab" data-toggle="tab">Order Status</a></li>
					  <li><a href="#conf" role="tab" data-toggle="tab">Order Confirmation</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content col-sm-8 my-acc-right">
					  <div class="tab-pane active" id="acc">

						  	<h5 class="title-account">Contact Information</h5>

					  		<form class="form-horizontal left-label col-padding10-L">

							  <div class="form-group">
							    <label for="inputName" class="col-sm-4 control-label">Name*</label>
							    <div class="col-sm-8">
							      <input type="name" class="form-control" id="inputName" placeholder="Name">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputEmail" class="col-sm-4 control-label">Email</label>
							    <div class="col-sm-8">
							      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputPassword" class="col-sm-4 control-label">Password</label>
							    <div class="col-sm-8">
							      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputPassword" class="col-sm-4 control-label">Confirm Password</label>
							    <div class="col-sm-8">
							      <input type="password" class="form-control" id="inputName" placeholder="Confirm Password">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-4 control-label">Address</label>
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


							  <div class="form-group">
							    <div class="col-sm-8">
							      <a href="my-account.php" class="btn btn-danger-2 btn-block">Ubah</a>
							    </div>
							    
							  </div>

							</form>
					  </div>

					  <div class="tab-pane" id="stat">
					  		<h5 class="title-account">Order Status</h5>
					  		<div class="tabel-head">
				  				<div class="row">
				  					<div class="col-xs-4 align-center">
				  						<p>Product</p>
				  					</div>

				  					<div class="col-xs-8">
				  						<div class="row">
				  							<div class="col-xs-4 align-center">
				  								<p>Order Date</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>Quantity</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>Status</p>
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  			</div>

				  			<div class="tabel-content">
						  		<div class="row">
				  					<div class="col-xs-4 align-center img50">
				  						<p>Fusion Dining Table 1</p>
				  						<img src="images/img-prod-1.jpg">
				  					</div>

				  					<div class="col-xs-8">
				  						<div class="row">
				  							<div class="col-xs-4 align-center">
				  								<p>22/7/2014<br>13:04</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>1</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>Deliver</p>
				  							</div>
				  						</div>
				  					</div>
				  				</div>

				  				<div class="row">
				  					<div class="col-xs-4 align-center img50">
				  						<p>Fusion Dining Table 1</p>
				  						<img src="images/img-prod-2.jpg">
				  					</div>

				  					<div class="col-xs-8">
				  						<div class="row">
				  							<div class="col-xs-4 align-center">
				  								<p>22/7/2014<br>13:04</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>1</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>Deliver</p>
				  							</div>
				  						</div>
				  					</div>
				  				</div>

				  				<div class="row">
				  					<div class="col-xs-4 align-center img50">
				  						<p>Fusion Dining Table 1</p>
				  						<img src="images/img-prod-2.jpg">
				  					</div>

				  					<div class="col-xs-8">
				  						<div class="row">
				  							<div class="col-xs-4 align-center">
				  								<p>22/7/2014<br>13:04</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>1</p>
				  							</div>

				  							<div class="col-xs-4 align-center">
				  								<p>Deliver</p>
				  							</div>
				  						</div>
				  					</div>
				  				</div>
				  			</div>
					  </div>

					  <div class="tab-pane" id="conf">
					  		<h5 class="title-account">Order Confirmation</h5>
					  		<p>Please confirm your payment by filling out an online form. 
					  		All fields are required. Confirmation process will take a maximum 
					  		of 1 working day.For more information, please visit our Customer 
					  		Service ahimsa.com / contact</p>

					  		<form class="form-horizontal left-label" role="form">
							  <div class="form-group">
							    <label for="inputTracking" class="col-sm-4 control-label">Tracking ID</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputTracking" placeholder="Tracking ID">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputBank" class="col-sm-4 control-label">Your Bank</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputBank" placeholder="Bank">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputAccount" class="col-sm-4 control-label">Account Bank Number</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputAccount" placeholder="Account Bank Number">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputDestination" class="col-sm-4 control-label">Bank Transfer Destination</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputDestination" placeholder="Bank Transfer Destination">
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputAmount" class="col-sm-4 control-label">Amount</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputAmount" placeholder="Amount">
							    </div>
							  </div>

							  <div class="form-group">
							    <div class="col-sm-offset-8 col-sm-4 align-right">
							      <button type="submit" class="btn btn-danger-2 btn-sm">Login</button>
							    </div>
							  </div>
							</form>
					  </div>

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


				
				