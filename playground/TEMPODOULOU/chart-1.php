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
					  <li><a href="#">Catalogue</a></li>
					  <li><a href="#">Meubles</a></li>
					  <li><a href="#">Tables</a></li>
					  <li><a href="#">Fusion</a></li>
					  <li><a href="#">Fusion Dining Tables</a></li>
					  <li class="active">Tables</li>
					</ol>

					<h4 class="title-page">YOUR CHART</h4>

					<div class="tabel-head">
		  				<div class="row">
		  					<div class="col-md-5 align-center"><p>Product</p></div>
		  					<div class="col-md-2 align-center"><p>Price</p></div>
		  					<div class="col-md-3 align-center"><p>Quantity</p></div>
		  					<div class="col-md-2 align-center"><p>Total</p></div>
		  				</div>
		  			</div>

		  			<form method="post" action="chart-2.php">
			  			<div class="tabel-content cart">
			  				
			  				<div class="row"> 
					  			<div class="col-md-5 align-center img50"><p>Fusion Dining Table 1</p><br><img src="images/prod-thumb-4.png" /></div>
			  					<div class="col-md-2 align-center"><h4 class="mobile-title-2">PRICE:</h4><p>$900</p></div>
			  					<div class="col-md-3 align-center">
			  						<h4 class="mobile-title-2">QUANTITY:</h4>	
	  								<div class="row align-center-row">
		  								<div class="dec-2 button col-xs-2">-</div>
							        	<div class="col-xs-4"><input type="text"  class="form-control align-center" name="french-hens" id="french-hens" value="0"></div>
							        	<div class="inc-2 button col-xs-2">+</div>							        	
							        	<div class="col-xs-2"><button type="reset" value="Reset" class="btn btn-default btn-sm">x</button></div>
					        		</div>	
			  					</div>
			  					<div class="col-md-2 align-center"><h4 class="mobile-title-2">TOTAL:</h4><p>$900</p></div>
			  				</div>

			  			</div>

			  			<br>

			  			<p>* For purchases above € 1,000 will get free Shipping</p>

			  			<div class="row button-submit align-right">
						      <button type="submit" class="btn btn-danger-2 btn-sm"> Continue Shopping</button>
						      <button type="submit" class="btn btn-danger-2 btn-sm"> Process Checkout</button>
			  			</div>
		  			</form>
					
							

				</div>

				

				


				<?php
				require("inc/footer.php");
				?>

				<?php
				require("inc/js.php");
				?>		

		  </body>
</html>	


				
				