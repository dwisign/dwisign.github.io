<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	

	  		<div class="top-bar"></div>
		 	
			<!-- START HOME CONTENT -->


			<div class="content container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3>Enter your name.</h3>
						<form action="pick-background.php">
							<div class="row upload enter-name">
								<div class="col-sm-12 form-group input-name">
								    <input class="form-control" placeholder="Your Name" type="text">
								    <span class="help-block text-right">15 CHARACTERS</span>
								</div>
								<div class="col-sm-6">
									<button class="btn btn-white btn-block btn-take-photo" type="submit">CONFIRM</button>
								</div>
								<div class="col-sm-6">
									<button class="btn btn-white btn-block" data-toggle="modal" type="reset">RESET</button>
								</div>						
							</div>
						</form>           
					</div>
				</div>
			</div>

			

			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>