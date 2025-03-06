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
					  <li class="active">Tailor Made</li>
					</ol>

					<h4 class="title-page">TAILOR MADE</h4>

					
					<div class="row">
						<div class="col-sm-8">
							<br>
							<form class="form-horizontal" role="form">
							  <h4>Please Select Product Code</h4>
							  <div class="form-group">
							    <div class="col-sm-6">
							    	<select class="form-control" name="kitchen_color" id="kitchen_color" onchange="setImage(this);">
									  <option value="images/img-prod-1.jpg">OT022722</option>
									  <option value="images/img-prod-2.jpg">OT022723</option>
									  <option value="images/img-prod-3.jpg">OT022724</option>
									</select>
							    </div>
							  </div>

							  <div class="form-group">
							  	<div class="col-sm-6">
							  		<div class="img100 prod-prev">
							  			<img src="images/img-prod-1.jpg" name="image-swap" />
							  		</div>
							  	</div>
							  </div>
							  	
							  <div class="form-group">
							  	<div class="col-sm-12">
						  			<div class="tabel-head">
						  				<div class="row">
						  					<div class="col-xs-5 first-title">
						  						<p>Size</p>
						  					</div>

						  					<div class="col-xs-7 other-title">
						  						<p>Please Insert Your Custom Size</p>
						  					</div>
						  				</div>
						  			</div>

						  			<div class="tabel-content">
						  				<div class="row">
						  					<div class="col-xs-5 first-content">
						  						<div class="row">
						  							<div class="col-xs-4">
						  								<p>Length</span></p>
						  							</div>

						  							<div class="col-xs-2">
						  								<p><span><img src="images/ico-length.png"></span></p>
						  							</div>

						  							<div class="col-xs-5">
						  								<p>170 Cm</p>
						  							</div>
						  						</div>

						  						<div class="row">
						  							<div class="col-xs-4">
						  								<p>Depth</span></p>
						  							</div>

						  							<div class="col-xs-2">
						  								<p><span><img src="images/ico-depth.png"></span></p>
						  							</div>

						  							<div class="col-xs-5">
						  								<p>90 Cm</p>
						  							</div>
						  						</div>

						  						<div class="row">
						  							<div class="col-xs-4">
						  								<p>Height</span></p>
						  							</div>

						  							<div class="col-xs-2">
						  								<p><span><img src="images/ico-height.png"></span></p>
						  							</div>

						  							<div class="col-xs-5">
						  								<p>78 Cm</p>
						  							</div>
						  						</div>
						  					</div>

						  					<div class="col-xs-7 other-content">
						  						<p class="mobile-title-1">Please Insert Your Custom Size</p>
						  						<div class="row">
												    <div class="col-xs-12">
												      <input type="text" class="form-control" id="inputName1" placeholder="Custom Length">
												    </div>
												</div>

												<div class="row">
												    <div class="col-xs-12">
												      <input type="text" class="form-control" id="inputName1" placeholder="Custom Depth">
												    </div>
												</div>

												<div class="row">
												    <div class="col-xs-12">
												      <input type="text" class="form-control" id="inputName1" placeholder="Custom Height">
												    </div>
												</div>
						  					</div>
						  				</div>
						  			</div>
							  	</div>
							  </div>

							  <h4>Notes:</h4>
							  <div class="form-group">
							    <div class="col-sm-12">
							      <textarea class="form-control" rows="5"></textarea>
							    </div>
							  </div>
							  <p>*We will sent your request</p>
							  

							  <div class="form-group">
							    <div class="col-sm-8">
							      <button type="submit" class="btn btn-danger-2 btn-sm">Submit</button>
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


				
				