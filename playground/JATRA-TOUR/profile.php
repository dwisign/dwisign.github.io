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
						  <li class="active">Profile</li>
						</ul>

					

						<div class="row col-padding15">
							<ul class="nav nav-tabs tab-2" style="margin-bottom: 15px;">
							  <li class="active"><a href="#profile" data-toggle="tab">PROFILE</a></li>
							  <li class=""><a href="#history" data-toggle="tab">CART HISTORY</a></li>
							</ul>
							<div id="myTabContent" class="tab-content">
							  <div class="tab-pane fade active in" id="profile">
							  	<div class="row">
							  		<div class="col-sm-5">
							  			<h5>Your Profile Information</h5>
							  			<p>Name : Kabar Gembira</p>
							  			<p>Email : mail@mail.com</p>
										<p>Address : Jl. Extract Kulit Manggis
										No.20 Jakarta</p>
										<p>Country : Indonesia</p>
										<p>Zip Postal : 141404</p>
										<p>Date of Birth : 10/10/1999</p>
										<p>Gender : Male</p>
										<p>Phone / HP : 00291873648</p>
							  		</div>

							  		<div class="col-sm-7">
							  			<h5>Edit Your Information</h5>
							  			
											<div class="form-group">
												<label for="exampleInputName">Full Name</label>
		    									<input type="text" class="form-control" id="exampleInputName" placeholder="Name">	
							             	</div>

							             	<div class="form-group">	
												<label for="exampleInputName">Email</label>
		    									<input type="email" class="form-control" id="exampleInputName" placeholder="Email">	
							             	</div>

							             	<div class="form-group">	
												<label for="exampleInputName">Address</label>
		    									<textarea class="form-control" rows="5"></textarea>   	
							             	</div>

							             	<div class="form-group">
							             		<div class="row">
							             			<div class="col-sm-6">	
														<label for="exampleInputName">Country</label>
				    									<select class="form-control">
															  <option>Indonesia</option>
															  <option>Japan</option>
															  <option>Filipina</option>
															  <option>Thailand</option>
															  <option>Korea</option>			 
														</select>
													</div>

													<div class="col-sm-6">	
														<label for="exampleInputName">Zip Postal</label>
				    									<input type="text" class="form-control" placeholder="Zip Postal">
													</div>
												</div>  	
							             	</div>

							             	<div class="form-group">
							             		<div class="row">
													<div class="col-sm-6">	
														<label for="exampleInputName">Date of Birth</label>
														<div class="input-prepend input-group">
				    										<input type="text" id="datepicker" class="form-control" placeholder="Birth"><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														</div>
													</div>
													<div class="col-sm-6">	
														<label for="exampleInputName">Gender</label>
				    									<select class="form-control">
															  <option>Male</option>
															  <option>Female</option>		 
														</select>
													</div>
												</div>  	
							             	</div>

							             	<div class="form-group">	
												<label for="exampleInputName">Phone/HP</label>
		    									<input type="text" class="form-control" id="exampleInputName" placeholder="Phone/HP">	
							             	</div>

							             	<div class="form-group align-right">
											  	<button type="submit" class="btn btn-ribbon">Save</button>
											</div>
						             	</div>
							  		</div>
							  </div>

							  <div class="tab-pane fade" id="history">
							  	<h5>Cart History </h5>

							  	<div class="table-container">
					                 <table class="table table-striped">
					                    <tbody><tr style="font-weight:bold;">
					                        <td>YOUR ORDER</td>
					                        <td>QUANTITY (PERSON)</td>
					                        <td>DATE</td>
					                        <td>PRICE (IDR)</td>
					                        <td>STATUS</td>
					                    </tr>
					                    <tr>
					                        <td>Flight Ticket</td>
					                        <td>3</td>
					                        <td>09/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>
					                    <tr>
					                        <td>Travel Insurance</td>
					                        <td>2</td>
					                        <td>09/09/2014 - 15/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>
					                    <tr>
					                        <td>Visa</td>
					                        <td>1</td>
					                        <td>09/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>
					                    <tr>
					                        <td>Tour</td>
					                        <td>3</td>
					                        <td>09/09/2014 - 15/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>

					                    <tr>
					                        <td>Hotel</td>
					                        <td>3</td>
					                        <td>09/09/2014 - 15/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>

					                    <tr>
					                        <td>Cruise</td>
					                        <td>1</td>
					                        <td>09/09/2014</td>
					                        <td>1.800.000</td>
					                        <td>Complete</td>
					                    </tr>
					                 </tbody></table>
					               </div> 
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


