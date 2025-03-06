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
			<div class="content">
				<div id="landing-slider" class="owl-carousel">
					<div class="item text-center">
		              <img src="images/traveljunkie.png">
		            </div>
		            <div class="item text-center">
		              <img src="images/fashionista.png">
		            </div>
		            <div class="item text-center">
		              <img src="images/foodie.png">
		            </div>
		            <div class="item text-center">
		              <img src="images/urbanite.png">
		            </div>   
	      		</div>

				<div class="container">
					<div class="brand brand-landing col-xs-12 text-center">
						<img src="images/brand-2.png"/>
					</div>
					<div class="login col-xs-12 text-center">          
	     				<div class="enter"><a href="question.php" class="btn btn-default btn-enter-landing">ENTER &nbsp <span><img src="images/arrow-button.png"></span></a></div> 
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