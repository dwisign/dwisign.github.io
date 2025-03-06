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
						  <li class="active">Flight</li>
						</ul>

						<div class="row">
							<div class="col-sm-7 one-side col-padding50-R">
								<h5>FLIGHT</h5>
								
										<div class="row">
											<div class="col-sm-6">
										  		<div class="form-group">
													<label class="radio-inline">
													  <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked> International
													</label>
													<label class="radio-inline">
													  <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2"> Domestic
													</label>
												</div>
											</div>

											<div class="col-sm-6">
												<div class="form-group">
													<label class="radio-inline">
													  <input type="radio" name="optionsRadios2" id="optionsRadios3" value="option3" checked> One Way
													</label>
													<label class="radio-inline">
													  <input type="radio" name="optionsRadios2" id="optionsRadios4" value="option4"> Round Trip
													</label>
												</div>
											</div>
										</div>


										<br>
												

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
										                     <label>Departure Date</label>
										                     <div class="input-prepend input-group">
										                       <input type="text" name="reservation" id="reservation1" class="form-control" value="03/18/2014"/><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
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
										                  	<label>Return Date</label>
										                    <div class="controls">
										                     <div class="input-prepend input-group">
										                       <input type="text" name="reservation" id="reservation2" class="form-control" value="03/28/2014" /><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
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
											<a href="flight-result.php"><button type="submit" class="btn btn-ribbon">Request</button></a>
										</div>
			
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

