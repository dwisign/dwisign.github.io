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
						  <li class="active">Flight</li>
						</ul>

						<div class="row">
						
							<div class="col-sm-7 one-side">
								<h5>Flight Domestic</h5>

								<div class="form-group">
									<label class="radio-inline">
									  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> One Way
									</label>
									<label class="radio-inline">
									  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Round Trip
									</label>
								</div>

								<div class="form-group">
									<label>From</label>
									<select class="form-control">
									  <option>Jakarta</option>
									  <option>Surabaya</option>
									  <option>Yogyakarta</option>
									  <option>Medan</option>
									</select>
								</div>

								<div class="form-group">
									<label>To</label>
									<select class="form-control">
									  <option>Jakarta</option>
									  <option>Surabaya</option>
									  <option>Yogyakarta</option>
									  <option>Medan</option>
									</select>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<fieldset>
								                  <div class="control-group">
								                    <div class="controls">
								                    <label>Departure</label>
								                     <div class="input-prepend input-group">
								                       <input type="text" name="reservation" id="reservation3" class="form-control" value="01/01/2014" /><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
								                     </div>
								                    </div>
								                  </div>
								                 </fieldset>
							             	</div>
						             	</div>

						                <div class="col-sm-6">
						                	<div class="form-group">
												<fieldset>
								                  <div class="control-group">
								                    <div class="controls">
								                    <label>Return</label>
								                     <div class="input-prepend input-group">
								                       <input type="text" name="reservation" id="reservation4" class="form-control" value="15/01/2014" /><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
								                     </div>
								                    </div>
								                  </div>
								                 </fieldset>
							                 </div>
						             	</div>
					             	</div>
				             	</div>
								
								

				             	<div class="form-group">
				             		<div class="row">
										<div class="col-sm-4">
											<label>Adult:</label>
											<select class="form-control">
											  <option>1</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
						             	</div>

						             	<div class="col-sm-4">
											<label>Child:</label>
											<select class="form-control">
											  <option>0</option>
											  <option>1</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
						             	</div>

						             	<div class="col-sm-4">
											<label>Infant:</label>
											<select class="form-control">
											  <option>0</option>
											  <option>1</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
						             	</div>
					             	</div> 
				             	</div>

				       			<br>

				             	<div class="form-group align-right">
									<a href="login-flight-domestic-bali.php"><button type="submit" class="btn btn-ribbon">Request</button></a>
								</div>
							</div><!--end-col-sm-6-->
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

