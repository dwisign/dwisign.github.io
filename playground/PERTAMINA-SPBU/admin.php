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

	    			<legend>Jumlah Pendaftar Berdasarkan Provinsi</legend>

	    			</br>
					
					<div class="well">
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
                                <select class="form-control" id="jml-spbu-2">
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                	<option>Periode 15 : 14 Juli 2015 -16 Agustus 2015</option>
                                </select>
                            </div>
						</div>			
					</div>

								
					<div class="row count">
						<div class="col-md-4 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Hingga Saat Ini</h6>
								<h3><b class="timer" id="earth" data-to="136" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>

						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-1">
								<h6>Hari Ini</h6>
								<h3><b class="timer" id="earth" data-to="2" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Registrasi Lokasi (RL)</h6>
								<h3><b class="timer" id="earth" data-to="10" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Gagal Lokasi (GL)</h6>
								<h3><b class="timer" id="earth" data-to="15" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>


						<div class="col-md-2 col-sm-12">
							<a href="#">
							<div class="count-2">
								<h6>Input Data (ID)</h6>
								<h3><b class="timer" id="earth" data-to="12" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
					</div>


					</br>

					<div class="row count">
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Kirim Data (KD)</h6>
								<h3><b class="timer" id="earth" data-to="1" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-1">
								<h6>Kirim Dokumen (KM)</h6>
								<h3><b class="timer" id="earth" data-to="5" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Proses Verifikasi (PV)</h6>
								<h3><b class="timer" id="earth" data-to="18" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Sudah Verifikasi (SV)</h6>
								<h3><b class="timer" id="earth" data-to="20" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Rekomendasi Disetujui (RD)</h6>
								<h3><b class="timer" id="earth" data-to="15" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>


						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Tidak Disetujui (TD)</h6>
								<h3><b class="timer" id="earth" data-to="10" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
						
						
						
					</div>
					


					</br>


					
					

					

		    		<div class="row pendaftar">
							<div class="col-xs-12">
							  <div class="table-responsive">
							      <table class="table table-bordered table-striped table-hover">
							        <thead>
							          <tr>
							            <th>REGION</th>
							            <th>Provinsi</th>
							            <th>PENDAFTAR</th>
							            <th>RL</th>
							            <th>GL</th>
							            <th>ID</th>
							            <th>KD</th>
							            <th>KM</th>
							            <th>PV</th>
							            <th>SV</th>
							            <th>RD</th>
							            <th>TD</th>
							          </tr>
							        </thead>
							        <tbody>
							          <tr>
							            <td>Region 5</td>
							            <td>Nanggroe Aceh Darussalam</td>
							            <td></td>
							            <td><a href="admin-pendaftar.php">3</a></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 1</td>
							            <td>Sumatera Utara</td>
							            <td><a href="admin-pendaftar.php">1</a></td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 5</td>
							            <td>Sumatera Barat</td>
							            <td></td>
							            <td><a href="admin-pendaftar.php">1</a></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 3</td>
							            <td>Riau</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 4</td>
							            <td>Sumatera Selatan</td>
							            <td><a href="admin-pendaftar.php">1</a></td></td>
							            <td><a href="admin-pendaftar.php">2</a></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 6</td>
							            <td>Jambi</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 5</td>
							            <td>Bengkulu</td>
							            <td></td>
							            <td><a href="admin-pendaftar.php">1</a></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>


							          <tr>
							            <td>Region 2</td>
							            <td>Lampung</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 2</td>
							            <td>Bangka Belitung</td>
							            <td><a href="admin-pendaftar.php">2</a></td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 3</td>
							            <td>Kepulauan Riau</td>
							            <td><a href="admin-pendaftar.php">1</a></td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 4</td>
							            <td>DKI Jakarta</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 3</td>
							            <td>Jawa Barat</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>


							          <tr>
							            <td>Region 1</td>
							            <td>Jawa Tengah</td>
							            <td><a href="admin-pendaftar.php">3</a></td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>

							          <tr>
							            <td>Region 2</td>
							            <td>DI Yogyakarta</td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							          </tr>
							          <tr>
							            <td>Region 6</td>
							            <td>Jawa Timur</td>
							            <td><a href="admin-pendaftar.php">2</a></td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
							            <td></td>
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