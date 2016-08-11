<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body class="body-admin">	


	    	


	   	<div class="container content-login">
	    		



             <div class="row login-box"> 
             	<div class="col-md-6 col-md-offset-3">
             		<div class="logo-kata-login text-center"><img src="images/logo.jpg"/ width="150"></div>
	    				
	    				<div class="panel panel-default">
						  <div class="panel-heading"><h4 class="title-text"><span class="ti-unlock"></span> SIGN IN</h4></div>
						  <div class="panel-body">
						    <form class="form-login-admin" action="admin.php">
		    					  <div class="row">
		    					  	  <div class="col-sm-6 col-xs-12">
										  <div class="form-group">
										    <!-- <label for="exampleInputEmail1">Email address</label> -->
										    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name">
										  </div>
									  </div>

									  <div class="col-sm-6 col-xs-12">
										  <div class="form-group">
										    <!-- <label for="exampleInputPassword1">Password</label> -->
										    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										  </div>
									  </div>  
								  </div>

								  <!-- <div class="row">
								  		<div class="col-xs-12">
									  		<select class="form-control">
		                                    	<option>Pilih Unit</option>
		                                    	<option>SPBU</option>
		                                    	<option>SPPBE</option>
		                                    	<option>APMS</option>
		                                    </select>
									  </div>
								  </div> -->

								</br>

								<button type="submit" class="btn btn-danger btn-block">Sign In</button>
							</form>	
						  </div>
						</div>		

    					
	    			</div>
	    		</div>

    			</br>	

    			<div class="text-center"><small><p>Copyright © 2015 Pertamina. </br>All Right Reserved.</p></small></div>

    	</div>

		 	
			




		     <?php
		     require("inc/js.php");
		     ?> 

	  	</body><!-- END BODY -->
</html>