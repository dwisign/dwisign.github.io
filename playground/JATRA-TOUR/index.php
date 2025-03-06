<!DOCTYPE html>
<html lang="en">
<?php
require("inc/header.php");
?> 
				

		  <body>

				
				<?php
				require("inc/menu.php");
				?>
				

				<div class="banner-box">
						<div id="first-slider" class="flexslider">
							  <ul class="slides">
							    <li><img src="images/banner-1.jpg" /></li>
							    <li><img src="images/banner-1.jpg" /></li>
							    <li><img src="images/banner-1.jpg" /></li>
							    <li><img src="images/banner-1.jpg" /></li>
							    <li><img src="images/banner-1.jpg" /></li> 
							  </ul>
							  <!--<div class="loader">Loading...</div>-->
						</div>

				</div><!--end-banner-box-->
				
				 <div class="filter-search">
					<div class="container">
						<?php
						require("inc/filter-search.php");
						?>
					</div>
				</div>

				<div class="container timeline-news">
					<div class="row">
						<div class="col-sm-3">
							<h4><a href="latest-news.php"><span><img src="images/logo-timeline-news.png"/></span> LATEST NEWS :</a></h4>
						</div>

						<div class="col-sm-9 marquee col-padding0">
							<marquee ><a href="latest-news-single.php"><span>5 easy step to buy at online shop! :</span> Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed dia consectetuer, <span>Read More..</span></a></marquee>	
						</div>
					</div>
				</div>


				<div class="container feature">
					<div class="row">
						<div class="col-sm-9">
							
							<?php
							require("inc/special-offer-1.php");
							?>

							<?php
							require("inc/special-offer-2.php");
							?>

						</div>

						<div class="col-sm-3">

							<?php
							require("inc/sidebar-home.php");
							?>

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


				
				