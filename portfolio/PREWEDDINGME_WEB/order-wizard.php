<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>

  	  		<div class="row top-link">
				<div class="col-xs-12 text-right">
					<ul class="list-inline right-link">
						<li><a href="login.php"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email</a></li>
						<li><a href="#" data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About Us</a></li>
					</ul>
				</div>
  			</div>

  	  		<div class="container">
				<div class="row logo">
	  	  			<div class="col-xs-12 text-center">
						<a href="index.php">
							<img src="images/logo2.png" width="280">
						</a>
					</div>
				</div>
  	  		</div>	

		 	
			<!-- START HOME CONTENT -->
			<ul class="nav nav-tabs centered">
			  <li><a aria-expanded="false" href="#gallery" data-toggle="tab"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <span class="menu-text">Gallery</span></a></li>
			  <li><a aria-expanded="true" href="#testimony" data-toggle="tab"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="menu-text">Testimony</span></a></li>
			  <li class="active"><a aria-expanded="true" href="#order" data-toggle="tab"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="menu-text">Order Now</span></a></li>
			  <li><a aria-expanded="true" href="#contact" data-toggle="tab"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <span class="menu-text">Contact</span></a></li>
			</ul>

			<div id="myTabContent" class="tab-content">

			  <div class="tab-pane fade" id="gallery">
			  	<div class="container">
				  	<?php
				    require("home-gallery.php");
				    ?>
			    </div>
			  </div>

			  <div class="tab-pane fade" id="testimony">
			  		<div class="container">
						<div id="testimoni-slider" class="owl-carousel">
							<div class="item text-center">
				              <img src="images/photo1.jpg" class="img-circle">
				              <blockquote>
								  <p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							  </blockquote>
				            </div>
				            <div class="item text-center">
				              <img src="images/photo2.jpg" class="img-circle">
				              <blockquote>
								  <p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							  </blockquote>
				            </div>
	  						<div class="item text-center">
				              <img src="images/photo1.jpg" class="img-circle">
				              <blockquote>
								  <p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							  </blockquote>
				            </div>
				            <div class="item text-center">
				              <img src="images/photo2.jpg" class="img-circle">
				              <blockquote>
								  <p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							  </blockquote>
				            </div>
				            <div class="item text-center">
				              <img src="images/photo1.jpg" class="img-circle">
				              <blockquote>
								  <p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							  </blockquote>
				            </div>
			      		</div>
		      		</div>
			  </div>

			  <div class="tab-pane fade active in" id="order">
			  	<div class="container">
			  		<div id="rootwizard">
						<div class="navbar">
						  <div class="navbar-inner">
						    <div class="container">
								<ul class="nav centered pager">
								  	<li><a href="#tab1" class="btn btn-success" data-toggle="tab">1 <span class="desc-step">Tell Your Story</span></a></li>
									<li><a href="#tab2" class="btn btn-success" data-toggle="tab">2 <span class="desc-step">Illustration Progress</span></a></li>
									<li><a href="#tab3" class="btn btn-success" data-toggle="tab">3 <span class="desc-step">Shipping Address</span></a></li>
									<li><a href="#tab4" class="btn btn-success" data-toggle="tab">4 <span class="desc-step">Shipping Process</span></a></li>
								</ul>
						 	</div>
						  </div>
						</div>
	                    <div id="bar" class="progress progress-striped active">
	                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
	                    </div>
						<div class="tab-content tell-story">
						    <div class="tab-pane" id="tab1">
		      					<div class="row">
									<div class="col-xs-12">
							  			<h3 class="big-title">1. Tell Your Story</h3><hr>
							  			<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-1" aria-expanded="false" aria-controls="question-1">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    FIRST STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse in" id="question-1">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>


										<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-2" aria-expanded="false" aria-controls="question-2">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    SECOND STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse" id="question-2">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>


										<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-3" aria-expanded="false" aria-controls="question-3">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    THIRD STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse" id="question-3">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>


										<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-4" aria-expanded="false" aria-controls="question-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    FOURTH STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse" id="question-4">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>


										<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-5" aria-expanded="false" aria-controls="question-5">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    FIFTH STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse" id="question-5">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>
										

										<div class="row">
							  				<div class="col-sm-8">
							  					<a data-toggle="collapse" href="#question-6" aria-expanded="false" aria-controls="question-6">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													    SIXTH STORY
													  </div>
												  </div>
												</a>
							  				</div>
							  				<div class="col-sm-4">
												  <div class="panel panel-default">
													  <div class="panel-body story-panel">
													  	<div class="row">
													  		<div class="col-xs-7">
													  			<div class="checkbox complete">
																    <label>
																      <input type="checkbox"> Complete
																    </label>
																 </div>
													  		</div>
													  		<div class="col-xs-5 text-right">
													  			<a href="#" style="color: #fff;">Edit</a>
													  		</div>
													  	</div> 
													  </div>
												  </div>
							  				</div>
							  			</div>
										<div class="collapse" id="question-6">
										  <div class="well">
										  	<form class="form-horizontal" enctype="multipart/form-data">
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Title</label>
												  <div class="col-sm-6">
												      <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Title">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Story</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Dress Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Location Description</label>
												  <div class="col-sm-6">
												      <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Frame Option</label>
												  <div class="col-sm-6">
												      <select class="form-control input-sm select" style="width: 100%">
														<option>Solid Black</option>
														<option>Solid White</option>
														<option>Dark Ornament</option>
														<option>Light Ornament</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Photo</label>
												  <div class="col-sm-6">
												      <input id="file-1" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Your Couple</label>
												  <div class="col-sm-6">
												      <input id="file-2" class="file" type="file" multiple data-min-file-count="1">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												  <div class="form-group">
												    <div class="col-sm-offset-2 col-sm-6">
												      <button type="submit" class="btn btn-warning btn-sm btn-block">Save</button>
												    </div>
												  </div>
											</form>
										  </div>
										</div>

									</div>
								</div>
						    </div>
						    <div class="tab-pane" id="tab2">
						       <div class="row">
									<div class="col-xs-12">
										<ul class="pager unpaid">
										  <li class="next"><a href="#" data-toggle="modal" data-target="#myOrder2"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Unpaid</a></li>
										</ul>
										<ul class="pager paid collapse">
										  <li class="next"><a href="#" data-toggle="modal" data-target="#myOrder2"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Paid</a></li>
										</ul>
							  			<h3 class="big-title">2. Illustration Progress</h3><hr>
					  					<a data-toggle="collapse" href="#question-1b" aria-expanded="false" aria-controls="question-1b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    FIRST STORY
											  </div>
										  </div>
										</a>
										<div class="collapse in" id="question-1b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/1.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-danger btn-sm">Revision</a>
															  <a href="#" class="btn btn-default btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>
												
											
										  </div>
										</div>

										<a data-toggle="collapse" href="#question-2b" aria-expanded="false" aria-controls="question-2b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    SECOND STORY
											  </div>
										  </div>
										</a>
										<div class="collapse" id="question-2b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/2.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-default btn-sm">Revision</a>
															  <a href="#" class="btn btn-info btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>												
										  </div>
										</div>

										<a data-toggle="collapse" href="#question-3b" aria-expanded="false" aria-controls="question-3b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    THIRD STORY
											  </div>
										  </div>
										</a>
										<div class="collapse" id="question-3b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/3.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-danger btn-sm">Revision</a>
															  <a href="#" class="btn btn-default btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>												
										  </div>
										</div>

										<a data-toggle="collapse" href="#question-4b" aria-expanded="false" aria-controls="question-4b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    FOURTH STORY
											  </div>
										  </div>
										</a>
										<div class="collapse" id="question-4b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/4.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-default btn-sm">Revision</a>
															  <a href="#" class="btn btn-info btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>												
										  </div>
										</div>

										<a data-toggle="collapse" href="#question-5b" aria-expanded="false" aria-controls="question-5b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    FIFTH STORY
											  </div>
										  </div>
										</a>
										<div class="collapse" id="question-5b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/5.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-default btn-sm">Revision</a>
															  <a href="#" class="btn btn-info btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>												
										  </div>
										</div>

										<a data-toggle="collapse" href="#question-6b" aria-expanded="false" aria-controls="question-6b">
										  <div class="panel panel-default">
											  <div class="panel-body story-panel">
											    SIXTH STORY
											  </div>
										  </div>
										</a>
										<div class="collapse" id="question-6b">
										  <div class="well">
										  	<div class="row">
										  		<div class="col-sm-5">
													<img src="images/thumb/6.jpg" width="100%"></br></br>
													<div class="form-group">
													    <button type="submit" class="btn btn-warning btn-sm btn-block">Download</button>
												    </div>
										  		</div>
										  		<div class="col-sm-7">
										  			<div class="row">
										  				<div class="col-sm-5 mobile-mb">
										  					<div class="btn-group btn-group-justified">
															  <a href="#" class="btn btn-danger btn-sm">Revision</a>
															  <a href="#" class="btn btn-default btn-sm">Approve</a>
															</div>
										  				</div>
										  				<div class="col-sm-7 text-right">
										  					<P class="big-title">
										  						Last update by: Designer</br>
										  						Update Time: 20 March 2015 | 21.00 WIB
										  					</P>
										  				</div>
										  			</div>
										  			</br>
										  			<div class="row">
										  				<div class="col-xs-12">
										  					<div class="list-group">
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 19.30 WIB</span></h5>
															    <p class="list-group-item-text">Tolong tone warnanya dibuat lebih soft ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer  <span class="small">| 20 March 2015, 19.35 WIB</span></h5>
															    <p class="list-group-item-text">Baik pak, apakah ekspresi wajahnya sudah sesuai harapan?</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Damar  <span class="small">| 20 March 2015, 20.30 WIB</span></h5>
															    <p class="list-group-item-text">Kalo untuk ekspresi wajah overall sudah ok, hanya warnanya saja ya...</p>
															  </div>
															  <div class="list-group-item">
															    <h5 class="list-group-item-heading">Designer <span class="small">| 20 March 2015, 21.00 WIB</span></h5>
															    <p class="list-group-item-text">Ok baik pak...</p>
															  </div>
															  
															</div>
										  				</div>
										  			</div>
										  			
													<div class="form-group has-success">
														<label class="control-label" for="inputSuccess">Write Your Comment</label>
													    <textarea class="form-control" rows="3"></textarea>
													</div>
													<div class="form-group text-right">
													    <button type="submit" class="btn btn-warning btn-sm">Post</button>
												    </div>
										  		</div>
										  	</div>												
										  </div>
										</div>
									</div>
								</div>
						    </div>
							<div class="tab-pane" id="tab3">
								<div class="row">
						        	<div class="col-xs-12">
										<h3 class="big-title">3. Shipping Address</h3><hr>
										<form class="form-horizontal">
											<div class="well">
												<h4 class="big-title">Customer Identity</h4></br>
										  		<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Full Name :</label>
												  <div class="col-sm-6">
										              <input class="form-control input-sm" id="inputSuccess" type="text">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>

												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Birth Date :</label>
												  <div class="col-sm-2 mobile-mb">
												     <select class="form-control input-sm select" style="width: 100%">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
														<option>9</option>
														<option>11</option>
														<option>12</option>
														<option>13</option>
														<option>14</option>
														<option>15</option>
														<option>16</option>
														<option>17</option>
														<option>18</option>
														<option>19</option>
														<option>20</option>
														<option>21</option>
														<option>22</option>
														<option>23</option>
														<option>24</option>
														<option>25</option>
														<option>26</option>
														<option>27</option>
														<option>28</option>
														<option>29</option>
														<option>30</option>
														<option>31</option>
												     </select>
												  </div>
												  <div class="col-sm-2 mobile-mb">
												     <select class="form-control input-sm select" style="width: 100%">
														<option>January</option>
														<option>February</option>
														<option>March</option>
														<option>April</option>
														<option>May</option>
														<option>June</option>
														<option>July</option>
														<option>August</option>
														<option>September</option>
														<option>November</option>
														<option>Desember</option>
												     </select>
												  </div>
												  <div class="col-sm-2 mobile-mb">
												     <select class="form-control input-sm select" style="width: 100%">
														<option>1980</option>
														<option>1981</option>
														<option>1982</option>
														<option>1983</option>
														<option>1984</option>
														<option>1985</option>
														<option>1986</option>
														<option>1987</option>
														<option>1988</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
											</div>
										

											<div class="well">
												<h4 class="big-title">Post Address</h4></br>
												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Province :</label>
												  <div class="col-sm-6">
												     <select class="form-control input-sm select" style="width: 100%">
														<option>Banten</option>
														<option>Jawa Barat</option>
														<option>DKI Jakarta</option>
														<option>Jawa Tengah</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">City :</label>
												  <div class="col-sm-6">
												     <select class="form-control input-sm select" style="width: 100%">
														<option>Tangerang</option>
														<option>Depok</option>
														<option>Jakarta Selatan</option>
														<option>Semarang</option>
												     </select>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Zip Code :</label>
												  <div class="col-sm-6">
												     <input class="form-control input-sm" id="inputSuccess" type="text">
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Address :</label>
												  <div class="col-sm-6">
												     <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
											</div>

											<div class="well">
												<h4 class="big-title">Expedition</h4></br>
												<div class="form-group has-success">
												  <label class="col-sm-2 control-label" for="inputSuccess">Catatan Pengiriman :</label>
												  <div class="col-sm-6">
												     <textarea class="form-control" rows="3"></textarea>
												  </div>
												  <div class="col-sm-3"><p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
												</div>
											</div>
										</form>
						        	</div>
						        </div>
						    </div>
							<div class="tab-pane" id="tab4">
								<div class="row">
						        	<div class="col-xs-12">
										<h3 class="big-title">4. Shipping Process</h3><hr>
										<div class="row">
											<div class="col-sm-4">
												<div class="well">
													<h5 class="big-title">SHIPPING INFO</h5><hr>
													<div class="row">
														<div class="col-sm-4">
															<p class="big-title"><b>No Resi</b></p>
														</div>
														<div class="col-sm-8">
															<p class="big-title">DPKA08774397847</p>
														</div>
														<div class="col-sm-4">
															<p class="big-title"><b>Penerima</b></p>
														</div>
														<div class="col-sm-8">
															<p class="big-title">Dian Sastro</p>
														</div>
														<div class="col-sm-4">
															<p class="big-title"><b>Telp</b></p>
														</div>
														<div class="col-sm-8">
															<p class="big-title">0856789011</p>
														</div>
														<div class="col-sm-4">
															<p class="big-title"><b>Alamat</b></p>
														</div>
														<div class="col-sm-8">
															<p class="big-title">Jalan Raya Bogor no. 21 03/09</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="shipping text-center">
													<img src="images/shipping.png" class="img-responsive">
												</div>
											</div>
										</div>
										
						        	</div>
						        </div>
						    </div>
							<ul class="pager wizard">
								<li class="previous first" style="display:none;"><a href="#">First</a></li>
								<li class="previous"><a href="#">Previous</a></li>
								<li class="next last" style="display:none;"><a href="#">Last</a></li>
							  	<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
			  	</div>
			  </div>

			  <div class="tab-pane fade" id="contact">
			  	<div class="container">
				  	<div class="row">
				  		<div class="col-xs-12 text-center">
							<img src="images/support-512.png" width="200">
							<h2 class="big-title">Chat with us 24/5</h2>
							<p>We're online 24 hours a day on weekdays. </br>Just Click on the chat widget on the buttom right corner to chat with us.</p>
							<p>Don't worry. We're friendly people, not chat robots. Who needs a Contact Us page </br>when we're just a click away?</p>
				  		</div>
				  	</div>
				</div>
			  </div>
			  
			</div>


			<!-- END HOME CONTENT  -->

			<!-- Modal -->
			<div class="modal fade" id="myOrder2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title big-title" id="myModalLabel">Payment Detail</h4>
			      </div>
			      <div class="modal-body">
			      	
					<div class="row">
						<div class="col-sm-4">
							<p class="big-title"><b>Nomor Invoice</b></p>
						</div>
						<div class="col-sm-8">
							<p class="big-title">INV986865ID</p>
						</div>
						<div class="col-sm-4">
							<p class="big-title"><b>Status</b></p>
						</div>
						<div class="col-sm-8">
							<p class="big-title">Belum Membayar</p>
						</div>
						<div class="col-sm-4">
							<p class="big-title"><b>Tanggal Pemesanan</b></p>
						</div>
						<div class="col-sm-8">
							<p class="big-title">20 Maret 2015, 19:00 WIB</p>
						</div>
						<div class="col-sm-4">
							<p class="big-title"><b>Jenis Paket</b></p>
						</div>
						<div class="col-sm-8">
							<p class="big-title">Bronze</p>
						</div>
					</div>

			      	<div class="form-group">
						<table class="table">
					      <thead>
					        <tr class="success">
					          <th>ITEMS</th>
					          <th class="text-right">PRICE (IDR)</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Bronze Package</td>
					          <td class="text-right">500000</td>
					        </tr>
					        <tr>
					          <td>Print</td>
					          <td class="text-right">120000</td>
					        </tr>
					        <tr>
					          <td>Frame</td>
					          <td class="text-right">80000</td>
					        </tr>
					        <tr>
					          <td>Shipping</td>
					          <td class="text-right">78000</td>
					        </tr>
					        <tr class="active">
					          <td><b>TOTAL</b></td>
					          <td class="text-right"><b>778000</b></td>
					        </tr>
					      </tbody>
					    </table>
					</div>

					<div class="row">
						<div class="col-sm-6 mobile-mb">
							<button type="submit" class="btn btn-warning btn-sm btn-block">Download Invoice</button>
						</div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-warning btn-sm btn-block">Konfirmasi Pembayaran</button>
						</div>
					</div>

			      </div>
			    </div>
			  </div>
			</div>
			

			<?php
			 require("about.php");
			 ?>	

			 <?php
			 require("inc/footer.php");
			 ?> 

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>