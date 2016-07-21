<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	

	  		<?php
	    	require("inc/top-bar-admin.php");
	    	?>

	    	<div id="bg-top-home"></div>

	    	
	    	

	    	<div class="content-inside">
	    		<div class="container">

	    			<div class="login text-right">	
					 	<p><b>Last Login :</b> 18-03-2015 | 4:45 PM</p>	 		
					</div>

	    			<legend>Filter Pendaftar</legend>


					<div class="row wrap-filter">
						<div class="col-sm-6">
							<form class="well">
							  <fieldset>
							    <div class="form-group">
							      	<label for="input-example" class="control-label">Periode</label>
							        <select class="form-control">
									  <option>Semua Periode</option>
									  <option>Option Here</option>
									  <option>Option Here</option>
									  <option>Option Here</option>
									  <option>Option Here</option>
									</select>   
							    </div>

							    <div class="row">
							    	<div class="col-sm-6">
							    		<div class="form-group">
									      	<label for="input-example" class="control-label">Region</label>
									        <select class="form-control">
											  <option>Semua Region</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select>							    
										</div>
							    	</div>

							    	<div class="col-sm-6">
							    		<div class="form-group">
									      	<label for="input-example" class="control-label">Provinsi</label>
									        <select class="form-control" id="select-prov">
											  <option>Semua Provinsi</option>
											  <option selected="selected">Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select>
									    </div>
							    	</div>
							    </div>

							    <div class="row">
								    <div class="col-sm-6">
								    	<div class="form-group">
									      	<label for="input-example" class="control-label">Kabupaten</label>
									        <select class="form-control">
											  <option>Semua Kabupaten</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select> 
									    </div>
								    </div>

								    <div class="col-sm-6">
								    	<div class="form-group">
									      	<label for="input-example" class="control-label">Kecamatan</label>	 
									        <select class="form-control">
											  <option>Semua Kecamatan</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select> 
									    </div>
								    </div>
							    </div>
							    
							    
							    <div class="row">
								    <div class="col-sm-6">
									    <div class="form-group">
									      <label for="input-example" class="control-label">Kelurahan</label>
									        <select class="form-control">
											  <option>Semua Kelurahan</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select>
									    </div>
									</div>

									<div class="col-sm-6">
									    <div class="form-group">
									      <label for="input-example" class="control-label">Status Perizinan</label>
									        <select class="form-control">
											  <option>Semua</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											  <option>Option Here</option>
											</select>
									    </div>
								    </div>
							    </div>  
							  </fieldset>
							</form>
						</div>

						<div class="col-sm-6">
							<form class="well">
								<div class="form-group">
							      <label for="input-example" class="control-label">Cari No Reg. / Nama</label>
							      <div class="row">
							      	<div class="col-sm-9">
							      		<input type="text" class="form-control" placeholder="">
							      	</div>
							      	<div class="col-sm-3">
							      		<a href="#" class="btn btn-success btn-md btn-block">Cari</a>
							      	</div>
							      </div>     
							    </div>
							</form>

							<div class="alert alert-dismissible alert-success">
							  <div class="row">
							  	<div class="col-sm-3">
							  		<strong>Propinsi :</strong>
							  	</div>
							  	<div class="col-sm-9" id="prov">
							  		Banten
							  	</div>
							  </div>

							  </br>

							  <div class="row">
							  	<div class="col-sm-3">
							  		<strong>Kabupaten :</strong>
							  	</div>
							  	<div class="col-sm-9">
							  		Cilegon
							  	</div>
							  </div>

							  </br>

							  <div class="row">
							  	<div class="col-sm-3">
							  		<strong>Kecamatan :</strong>
							  	</div>
							  	<div class="col-sm-9">
							  		Citangkil
							  	</div>
							  </div>

							  </br>
							  
							  <div class="row">
							  	<div class="col-sm-3">
							  		<strong>Kelurahan :</strong>
							  	</div>
							  	<div class="col-sm-9">
							  		Lebakdenok
							  	</div>
							  </div>

							  </br>

							  <div class="row">
							  	<div class="col-sm-3">
							  		<strong>Status :</strong>
							  	</div>
							  	<div class="col-sm-9">
							  		Pengecekan APMS
							  	</div>
							  </div>
							</div>
						</div>
					</div>

					<div class="well">
						<div class="row">
							<div class="col-sm-6">
								<select class="form-control">
								  <option>Filter Berdasarkan :</option>
								  <option>No. Reg</option>
								  <option>Tanggal</option>
								  <option>Nama</option>
								  <option>Provinsi</option>
								  <option>Kabupaten</option>
								  <option>Kecamatan</option>
								  <option>Kelurahan</option>
								  <option>Status</option>
								  <option>Detail</option>
								  <option>Log</option>
								</select>
							</div>

							<div class="col-sm-6 text-right">
								<p><b>Menampilkan :</b> 15 data dari 6606</p>
							</div>
						</div>			
					</div>

		    		<div class="row pendaftar">
							<div class="col-xs-12">
							  <div class="table-responsive">
							      <table class="table table-bordered table-striped table-hover">
							        <thead>
							          <tr>
							            <th>No. Reg</th>
							            <th>Tanggal</th>
							            <th>Nama</th>
							            <th>Prov</th>
							            <th>Kab</th>
							            <th>Kec</th>
							            <th>Kel</th>
							            <th>Status</th>
							            <th>Detail</th>
							            <th>Log</th>
							          </tr>
							        </thead>
							        <tbody>
							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Input Data</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td><a href="detail-pendaftar.php">Detail</a></td>
							            <td><a href="#">Log</a></td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Input Data</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td><a href="detail-pendaftar.php">Detail</a></td>
							            <td><a href="#">Log</a></td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Input Data</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>


							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Input Data</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td><a href="detail-pendaftar.php">Detail</a></td>
							            <td><a href="#">Log</a></td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>


							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pemeriksaan RD</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pengecekan APMS</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>

							          <tr>
							            <td>3110314002</td>
							            <td>14/03/2011 8:46:28</td>
							            <td>H.SYAMSUDDIN UTI</td>
							            <td>Riau</td>
							            <td>Indragiri Hilir</td>
							            <td>Tembilahan</td>
							            <td>Sungai Beringin</td>
							            <td>Pemeriksaan RD</td>
							            <td>Locked</td>
							            <td>Locked</td>
							          </tr>
							          
							        </tbody>
							      </table>
						  	  </div>

						      <div class="col-xs-12 align-center">
								  <ul class="pagination pagination-sm">
								    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
								    <li><a href="#">1</a></li>
								    <li><a href="#">2</a></li>
								    <li><a href="#">3</a></li>
								    <li><a href="#">4</a></li>
								    <li><a href="#">5</a></li>
								    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
								  </ul>
						  	 </div>
						</div>
					</div>
				</div>


	    		
	    		
	    	</div> <!--END CONTENT -->
		 	
				











			 <?php
			 require("inc/footer.php");
			 ?> 



		     <?php
		     require("inc/js.php");
		     ?> 

	  	</body><!-- END BODY -->
</html>