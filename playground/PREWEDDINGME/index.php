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
						<li><a href="#"  data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About Us</a></li>
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
			  <li class="active"><a aria-expanded="false" href="#gallery" data-toggle="tab"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <span class="menu-text">Gallery</span></a></li>
			  <li><a aria-expanded="true" href="#testimony" data-toggle="tab"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="menu-text">Testimony</span></a></li>
			  <li><a aria-expanded="true" href="#order" data-toggle="tab"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="menu-text">Order Now</span></a></li>
			  <li><a aria-expanded="true" href="#contact" data-toggle="tab"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> <span class="menu-text">Contact</span></a></li>
			</ul>

			<div id="myTabContent" class="tab-content">

			  <div class="tab-pane fade active in" id="gallery">
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

			  <div class="tab-pane fade" id="order">
			  	<div class="container">
				  	<div class="row">
						<div class="col-md-3 col-sm-6">						
							<div class="panel panel-success no-border">
							  <div class="panel-heading"><h4>Started</h4></div>
							  <div class="panel-body">
							  	<div class="text-center">
							    <h3>100K</h3>
							    <p>IDR</p>
							    <hr>
							    <p>
							    	1 Alternatif (lowres)</br>
									Maksimal 1 kali revisi</br>
									15 Hari Kerja.
							    </p>
								</div>
							    <hr>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Print Gambar</p>
								    </label>
								</div>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Gunakan Frame</p>
								    </label>
								</div>
								<div class="form-group has-success">
									 <label class="control-label" for="inputSuccess">Lokasi Pengiriman</label>
								     <select class="form-control input-sm select" style="width: 100%">
										<option>Jakarta Barat</option>
										<option>Jakarta Timur</option>
										<option>Jakarta Utara</option>
										<option>Jakarta Selatan</option>
										<option>Jakarta Pusat</option>
										<option>Tangerang</option>
								     </select>
								</div>
								<hr>
								<div class="text-center">
							    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myOrder">Pilih Paket</a>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">						
							<div class="panel panel-warning bronze">
							  <div class="panel-heading"><h4>Bronze </br> (Rekomendasi)</h4></div>
							  <div class="panel-body">
							    <div class="text-center">
							    <h3>200K</h3>
							    <p>IDR</p>
							    <hr>
							    <p>
							    	2 Alternatif (Hires)</br>
									Maksimal 2 kali revisi</br>
									10 Hari Kerja.
							    </p>
								</div>
							    <hr>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Print Gambar</p>
								    </label>
								</div>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Gunakan Frame</p>
								    </label>
								</div>
								<div class="form-group has-warning">
									 <label class="control-label" for="inputWarning">Lokasi Pengiriman</label>
								     <select class="form-control input-sm select" id="inputWarning" style="width: 100%">
										<option>Jakarta Barat</option>
										<option>Jakarta Timur</option>
										<option>Jakarta Utara</option>
										<option>Jakarta Selatan</option>
										<option>Jakarta Pusat</option>
										<option>Tangerang</option>
								     </select>
								</div>
								<hr>
								<div class="text-center">
							    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myOrder">Pilih Paket</a>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">						
							<div class="panel panel-success no-border">
							  <div class="panel-heading"><h4>Silver</h4></div>
							  <div class="panel-body">
							    <div class="text-center">
							    <h3>300K</h3>
							    <p>IDR</p>
							    <hr>
							    <p>
							    	3 Alternatif (Hires)</br>
									Maksimal 3 kali revisi</br>
									5 Hari Kerja.
							    </p>
								</div>
							    <hr>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Print Gambar</p>
								    </label>
								</div>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Gunakan Frame</p>
								    </label>
								</div>
								<div class="form-group has-success">
									 <label class="control-label" for="inputSuccess">Lokasi Pengiriman</label>
								     <select class="form-control input-sm select" style="width: 100%">
										<option>Jakarta Barat</option>
										<option>Jakarta Timur</option>
										<option>Jakarta Utara</option>
										<option>Jakarta Selatan</option>
										<option>Jakarta Pusat</option>
										<option>Tangerang</option>
								     </select>
								</div>
								<hr>
								<div class="text-center">
							    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myOrder">Pilih Paket</a>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">						
							<div class="panel panel-success no-border">
							  <div class="panel-heading"><h4>Gold</h4></div>
							  <div class="panel-body">
							    <div class="text-center">
							    <h3>500K</h3>
							    <p>IDR</p>
							    <hr>
							    <p>
							    	5 Alternatif (Hires)</br>
									Maksimal 5 kali revisi</br>
									< 5 Hari Kerja.
							    </p>
								</div>
							    <hr>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Print Gambar</p>
								    </label>
								</div>
								<div class="checkbox">
								    <label>
								      <input type="checkbox"> <p>Gunakan Frame</p>
								    </label>
								</div>
								<div class="form-group has-success">
									 <label class="control-label" for="inputSuccess">Lokasi Pengiriman</label>
								     <select class="form-control input-sm select" style="width: 100%">
										<option>Jakarta Barat</option>
										<option>Jakarta Timur</option>
										<option>Jakarta Utara</option>
										<option>Jakarta Selatan</option>
										<option>Jakarta Pusat</option>
										<option>Tangerang</option>
								     </select>
								</div>
								<hr>
								<div class="text-center">
							    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myOrder">Pilih Paket</a>
								</div>
							  </div>
							</div>
						</div>
				  	</div>


					<div class="row">
						<div class="col-xs-12">
				  			<h3 class="big-title">FAQ</h3><hr>
				  				
							<a data-toggle="collapse" href="#question-1" aria-expanded="false" aria-controls="question-1">
							  <div class="panel panel-default">
								  <div class="panel-body faq-panel">
								    1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?
								  </div>
							  </div>
							</a>
							<div class="collapse in" id="question-1">
							  <div class="well">
							    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
							  </div>
							</div>

							<a data-toggle="collapse" href="#question-2" aria-expanded="false" aria-controls="question-2">
							  <div class="panel panel-default">
								  <div class="panel-body faq-panel">
								    2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?
								  </div>
							  </div>
							</a>
							<div class="collapse" id="question-2">
							  <div class="well">
							    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
							  </div>
							</div>

							<a data-toggle="collapse" href="#question-3" aria-expanded="false" aria-controls="question-3">
							  <div class="panel panel-default">
								  <div class="panel-body faq-panel">
								    3. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?
								  </div>
							  </div>
							</a>
							<div class="collapse" id="question-3">
							  <div class="well">
							    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
							  </div>
							</div>
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
			<div class="modal fade" id="myOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title big-title" id="myModalLabel">Sign Up - Registration</h4>
			      </div>
			      <div class="modal-body">
			      	<ul class="nav nav-tabs centered">
					  <li><a aria-expanded="false" href="#reg" data-toggle="tab"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="menu-text">Start Registration</span></a></li>
					  <li class="active"><a aria-expanded="true" href="#ord" data-toggle="tab"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="menu-text">Continue Order</span></a></li>
					</ul>
					
					<!-- Tab panes -->
  					<div class="tab-content modal-login">
						<div class="tab-pane fade" id="reg">
							<form>
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<div class="form-group has-success">
										  <input class="form-control input-sm" id="inputSuccess" type="email" placeholder="Email">
										</div>
										<div class="form-group has-success">
										  <input class="form-control input-sm" id="inputSuccess" type="password" placeholder="Password">
										</div>
									</div>
								</div>
								<hr>
								<div class="text-center">	
									<button type="button" class="btn btn-warning btn-sm btn-block">Sign In</button>
								</div>
							</form>
				  		</div>

						<div class="tab-pane fade active in" id="ord">
							<form action="order-wizard.php">
								<div class="row">	
									<div class="col-sm-6">
										<div class="form-group has-success">
										  <input class="form-control input-sm" id="inputSuccess" type="email" placeholder="Email">
										</div>
										<div class="form-group has-success">
										  <input class="form-control input-sm" id="inputSuccess" type="text" placeholder="Mobile Phone">
										</div>
										<!-- <div class="form-group has-success">
										  <input class="form-control input-sm" id="inputSuccess" type="password" placeholder="Password">
										</div> -->
									</div>
									<div class="col-sm-6">
										<p>Melalui proses pendaftaran ini kamu bisa masuk kedalam website kami dan melihat proses menggambar illustrasi yang tim kami kerjakan.</p>
									</div>
									<hr>
									<div class="col-xs-12">
										<h5 class="big-title">Detail Cost</h5>
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
										<div class="checkbox">
										    <label>
										      <input type="checkbox"> <p>Saya menyetujui Syarat & Ketentuannya</p>
										    </label>
										</div>
									</div>
								</div>
								<hr>
								<div class="text-center">
									<button type="submit" class="btn btn-warning btn-sm btn-block">Get Started</button>
								</div>
							</form>
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