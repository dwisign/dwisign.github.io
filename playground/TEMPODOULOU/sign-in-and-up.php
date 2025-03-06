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
					  <li class="active">Sign In</li>
					</ol>

					<h4 class="title-page">YOU HAVE MEMBER LOGIN?</h4><br>

					<div class="row center-form">
						<div class="col-sm-offset-3 col-sm-6 main-form">
							<h6 class="red-theme"><b>Return visitor? Please login with your account</b></h6><br>

							<form class="form-horizontal left-label with-border" role="form">
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
							    <div class="col-sm-offset-4 col-sm-2">
							      <button type="submit" class="btn btn-danger-2 btn-sm">Login</button>
							    </div>
							    <div class="col-sm-6 col-padding15-T">
							      <p><a href="#" class="red-theme">Forgot your password?</a></p>
							    </div>
							  </div>
							</form>

							<br>

							<h6 class="red-theme"><b>Register new account</b></h6><br>

							<form class="form-horizontal left-label" role="form">

							  <div class="form-group">
							    <label for="inputName" class="col-sm-4 control-label">Name*</label>
							    <div class="col-sm-8">
							      <input type="text" class="form-control" id="inputName" placeholder="Name">
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
							      <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password">
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
							  	<label for="inputPhone" class="col-sm-4 control-label">Language</label>
							    <div class="col-sm-8">
							    	<select class="form-control">
									  <option>Indonesia</option>
									  <option>English</option>
									  <option>Netherlands</option>
									  <option>France</option>
									</select>
							    </div>
							  </div>

							  <div class="form-group">
							  	<label for="inputPhone" class="col-sm-4 control-label">Enter This Code</label>
							    <div class="col-sm-8">
							    	<div><img src="images/capca.jpg"></div><br>
							    	<input type="text" class="form-control" id="inputPhone" placeholder="Code">
							    </div>
							  </div>

							  <div class="form-group">
							    <div class="col-sm-offset-4 col-sm-8">
							      <button type="submit" class="btn btn-danger-2 btn-sm">Create Account</button>
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


				
				