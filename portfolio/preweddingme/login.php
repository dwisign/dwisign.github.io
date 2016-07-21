<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body style="background: #18BC9C;">



			

  	  		<div class="container">
				<div class="row logo2">
	  	  			<div class="col-xs-12 text-center">
						<a href="index.php">
							<img src="images/logo3.png">
						</a>
					</div>
				</div>

				<!-- HOME CONTENT  -->
			 	<div class="row login-content">
					<div class="col-md-4 col-md-offset-4">
						<form action="index.php">
							<div class="form-group has-success">
							  <input class="form-control" id="inputSuccess" type="email" placeholder="Email">
							</div>
							<div class="form-group has-success">
							  <input class="form-control" id="inputSuccess" type="text" placeholder="Mobile Phone">
							</div>
							<div class="form-group">
								<div class="text-center">
									<button type="submit" class="btn btn-warning btn-block">LOG IN</button>
								</div>
							</div>
						</form>

						</br>

						<div class="row">
							<div class="col-sm-6 text-center">
								<a href="#" style="color: #fff;">Forgot Password?</a>
							</div>
							<div class="col-sm-6 text-center">
								<a href="#" style="color: #fff;">No Account? Sign Up.</a>
							</div>
						</div>
					</div>
			 	</div>
				<!-- END HOME CONTENT  -->
  	  		</div>	

			

	


			  

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>