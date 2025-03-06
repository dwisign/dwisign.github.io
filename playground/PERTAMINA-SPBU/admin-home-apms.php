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

	    			<legend>Dashboard Pendaftar APMS</legend>

	    			</br>
						

								
					<div class="row count">
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-1">
								<h6>Jumlah Pendaftar</h6>
								<h3><b class="timer" id="earth" data-to="136" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="admin-pendaftar-filter-PA.php">
							<div class="count-2">
								<h6>Pengecekan APMS (PA)</h6>
								<h3><b class="timer" id="earth" data-to="7" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>APMS Tidak Terdaftar (TT)</h6>
								<h3><b class="timer" id="earth" data-to="10" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Input Data (ID)</h6>
								<h3><b class="timer" id="earth" data-to="15" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>


						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Proses Verifikasi (PV)</h6>
								<h3><b class="timer" id="earth" data-to="12" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Pemeriksaan SAM (PS)</h6>
								<h3><b class="timer" id="earth" data-to="1" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
					</div>


					</br>

					<div class="row count">
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-1">
								<h6>Pemeriksaan GM (GM)</h6>
								<h3><b class="timer" id="earth" data-to="5" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Pemeriksaan RD (RD)</h6>
								<h3><b class="timer" id="earth" data-to="18" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Pemeriksaan VP (VP)</h6>
								<h3><b class="timer" id="earth" data-to="20" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						

						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Pemeriksaan DD (DD)</h6>
								<h3><b class="timer" id="earth" data-to="15" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>


						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Disetujui (DS)</h6>
								<h3><b class="timer" id="earth" data-to="10" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
						
						<div class="col-md-2 col-sm-6">
							<a href="#">
							<div class="count-2">
								<h6>Ditolak (DT)</h6>
								<h3><b class="timer" id="earth" data-to="8" data-speed="2000"></b></h3>
							</div>
							</a>
						</div>
						
					</div>
					


					</br>


					
					<div class="well">
						<div class="row">
							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Search">
									</div>

									<div class="col-sm-3">
										<button type="submit" class="btn btn-success btn-block">Search</button>
									</div>
								</div>
							</div>

							<div class="col-sm-4 text-right">
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
							            <th>ID</th>
							            <th>Provinsi</th>
							            <th>TT</th>
							            <th>PA</th>
							            <th>ID</th>
							            <th>PV</th>
							            <th>PS</th>
							            <th>GM</th>
							            <th>RD</th>
							            <th>VP</th>
							            <th>DD</th>
							            <th>DS</th>
							            <th>DT</th>
							          </tr>
							        </thead>
							        <tbody>
							          <tr>
							            <td>11</td>
							            <td>Nanggroe Aceh Darussalam</td>
							            <td></td>
							            <td><a href="#">3</a></td>
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
							            <td>12</td>
							            <td>Sumatera Utara</td>
							            <td><a href="#">1</a></td></td>
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
							            <td>13</td>
							            <td>Sumatera Barat</td>
							            <td></td>
							            <td><a href="#">1</a></td>
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
							            <td>14</td>
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
							            <td></td>
							          </tr>

							          <tr>
							            <td>15</td>
							            <td>Sumatera Selatan</td>
							            <td><a href="#">1</a></td></td>
							            <td><a href="#">2</a></td>
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
							            <td>16</td>
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
							            <td></td>
							          </tr>

							          <tr>
							            <td>17</td>
							            <td>Bengkulu</td>
							            <td></td>
							            <td><a href="#">1</a></td>
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
							            <td>18</td>
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
							            <td></td>
							          </tr>

							          <tr>
							            <td>19</td>
							            <td>Bangka Belitung</td>
							            <td><a href="#">2</a></td></td>
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
							            <td>20</td>
							            <td>Kepulauan Riau</td>
							            <td><a href="#">1</a></td></td>
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
							            <td>21</td>
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
							            <td></td>
							          </tr>

							          <tr>
							            <td>22</td>
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
							            <td></td>
							          </tr>


							          <tr>
							            <td>23</td>
							            <td>Jawa Tengah</td>
							            <td><a href="#">3</a></td></td>
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
							            <td>24</td>
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
							            <td></td>
							          </tr>
							          <tr>
							            <td>25</td>
							            <td>Jawa Timur</td>
							            <td><a href="#">2</a></td></td>
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