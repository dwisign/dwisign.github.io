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
						<h3>Pick background that suit </br>your style</h3>
						<div class="row pick-bg">
							<div id="pick-bg-slider" class="owl-carousel">
								<div class="item text-center">
					              	<img src="images/pick-bg-1.jpg">
					              	<span class="hover-orange"><img src="images/hover-orange.png"></span>
					            </div>
					            <div class="item text-center">
					              	<img src="images/pick-bg-1.jpg">
					              	<span class="hover-orange"><img src="images/hover-orange.png"></span>
					            </div>
					            <div class="item text-center">
					              	<img src="images/pick-bg-1.jpg">
					              	<span class="hover-orange"><img src="images/hover-orange.png"></span>
					            </div>   
				      		</div>
						</div>          
	     				<div class="enter"><a href="share-friends.php" class="btn btn-default btn-enter">CONTINUE</a></div> 
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