<!DOCTYPE html>

<html lang="en">

<?php
require("inc/header.php");
?> 

				



		  <body>

				<?php
				require("inc/menu-bali.php");
				?>



				

				

				<div class="container content-inside">
						<ul class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Login</li>		  
						</ul>

						<div class="row">
							<div class="col-sm-6 col-padding50-R">
								<h5>Already Registered?</h5>
								<p>Insert your email address of your account</p>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						        </div>    	

						        <div class="form-group">      
									<label for="exampleInputPassword">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter password">
						        </div>

						        <div class="form-group align-right">
				             		<a href="#"><p>Forgot Password?</p></a>
									<a href="bali-branch.php"><button type="submit" class="btn btn-ribbon">Login</button></a>
								</div>   	 	
							</div>

							<div class="col-sm-6 border-left col-padding50-L">
								<h5>New Member?</h5>
								<p>Please register before</p>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="exampleInputName">Full Name</label>
	    									<input type="text" class="form-control" id="exampleInputName" placeholder="Name">
						             	</div>

						                <div class="col-sm-6">
											<label for="exampleInputEmail">Email</label>
	    									<input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
						             	</div>
					             	</div>
				             	</div>

				             	<div class="form-group">
				             		<div class="row">
					             		<div class="col-sm-6">
											<label for="exampleInputPassword">Password</label>
	    									<input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter password">
						             	</div>

										<div class="col-sm-6">
											<label for="exampleInputTelp">No. Tlp/Hp</label>
	    									<input type="text" class="form-control" id="exampleInputTelp" placeholder="Phone">
						             	</div>
									</div>
				             	</div>

				             	<div class="form-group">
									<label for="exampleInputAddress">Address</label>
									<textarea class="form-control" rows="3"></textarea>
				             	</div>

				             	<div class="form-group align-right">
									<a href="bali-branch.php"><button type="submit" class="btn btn-ribbon">Submit</button></a>
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





				
