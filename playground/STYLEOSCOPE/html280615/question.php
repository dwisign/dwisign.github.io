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
				<div id="question-slider" class="owl-carousel">
					<div class="item text-center">
						<h3>What do you enjoy doing during your holidays?</h3>
						<div class="answer" data-toggle="buttons">
							<div class="row">
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option1" checked> A Road Trip
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option2"> Visiting niche restaurant around the city
								  </label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">      
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option3"> Finding new places to workout
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option4"> Going on a shopping spree
								  </label>
								</div>
							</div>	
						</div> 
		            </div>
		            <div class="item text-center">
		                <h3>One of your most used search terms on the internet is</h3>
		                <div class="answer" data-toggle="buttons">
							<div class="row">
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option1" checked> Best Cafe
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option2"> Spas in Singapore
								  </label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">      
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option3"> Haute Couture Spring/Summer collections
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option4"> Cheap Flights
								  </label>
								</div>
							</div>	
						</div>
		            </div>
		            <div class="item text-center">
		              	<h3>Your friends often ask you this</h3>
		              	<div class="answer" data-toggle="buttons">
							<div class="row">
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option1" checked> "When is your next holiday?"
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option2"> "How many kilometres did you run today?"
								  </label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">      
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option3"> "Where do you usually shop?"
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option4"> "Where did you go for brunch?"
								  </label>
								</div>
							</div>	
						</div>
		            </div>
		            <div class="item text-center">
		              	<h3>What would you be most excited to hear about from friends?</h3>
		              	<div class="answer" data-toggle="buttons">
							<div class="row">
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option1" checked> They are running the next marathon
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option2"> They travel at least 3 times a year
								  </label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">      
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option3"> Share about fashion tips
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option4"> They discover a new dining place
								  </label>
								</div>
							</div>	
						</div>
		            </div>
		            <div class="item text-center">
		              	<h3>What's the most common hashtag you use on Instagram?</h3>
		              	<div class="answer" data-toggle="buttons">
							<div class="row">
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option1" checked> #OOTD
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option2"> #yum
								  </label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">      
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option3"> #travel
								  </label>
								</div>
								<div class="col-md-6">
								  <label class="btn btn-answer btn-block">
								    <input type="radio" name="options" id="option4"> #fitness
								  </label>
								</div>
							</div>	
						</div>
						<a href="result.php" class="btn btn-default btn-enter">SUBMIT</a>
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