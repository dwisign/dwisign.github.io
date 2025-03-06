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

	    			<legend>Verifikasi Pendaftaran SPBU</legend>

	    			<ul class="pager">
					  <li class="next status"><a href="#">STATUS PENDAFTAR : <b>PROSES VERIFIKASI</b></a></li>
					</ul>

					<!-- <p>Cocokkan data yang diinputkan oleh calon mitra APMS di sebelah kiri dengan data yang telah diverifikasi pada inputan di sebelah kanan.</p>  -->
					
					<hr>

					

					
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<div class="row">
					  		<div class="col-xs-10">
					  			<h4>Data Registrasi</h4>
					  		</div>
					  		<div class="col-xs-2 text-right">
					  			<h4 class="glyphicon glyphicon-ok-sign verified" aria-hidden="true"></h4>
					  		</div>
					  	</div>
					  </div>
					  <div class="panel-body">


					    <form class="form-horizontal">
					      <div class="row">
					      	<div class="col-sm-4"></div>
					      	<div class="col-sm-4">
						      	<h5><b>Data pada sistem</b></h5>
							  	<hr>
						  	</div>
						  	<!-- <div class="col-sm-4">
						      	<h5><b>Data hasil verifikasi</b></h5>
							  	<hr>
						  	</div> -->
					      </div>
					      
					      <div class="row">
						  		<div class="col-sm-12">
						  			
						  			  <div class="form-group">
		                                    <label for="fieldname" class="col-md-4 control-label">Nama Pemohon</label>
		                                    <div class="col-md-4">
		                                    	<input type="text" class="form-control" placeholder="Khairu Ramadani" disabled>
		                                    </div>
		                                    <!-- <div class="col-md-4">
		                                    	<input type="text" class="form-control" value="Khairu Ramadani">
		                                    </div> -->
		                                </div>
		                                <div class="form-group">
		                                    <label for="fieldname" class="col-md-4 control-label">Tempat, Tanggal Lahir</label>
		                                    <div class="col-md-2">
		                                    	<input type="text" class="form-control" placeholder="Jakarta" disabled>
		                                    </div>
		                                    <div class="col-md-2">
		                                    	<input type="text" class="form-control" placeholder="07/02/1970" id="datepicker" disabled>
		                                    </div>
		                                    <!-- <div class="col-md-2">
		                                    	<input type="text" class="form-control" value="Jakarta">
		                                    </div>
		                                    <div class="col-md-2">
		                                    	<input type="text" class="form-control" id="datepicker" placeholder="07/02/1970">
		                                    </div> -->
		                                </div>
		                                <div class="form-group">
		                                    <label for="fieldname" class="col-md-4 control-label">No. KTP</label>
		                                    <div class="col-md-4">
		                                    	<input type="text" class="form-control" placeholder="9836552729000187266" disabled>
		                                    </div>
		                                    <!-- <div class="col-md-4">
		                                    	<input type="text" class="form-control" value="9836552729000187266">
		                                    </div> -->
		                                </div>
		                                <div class="form-group">
		                                    <label for="fieldname" class="col-md-4 control-label">Alamat Provinsi</label>
		                                    <div class="col-md-4">
		                                        <select class="form-control" name="pendidikan"  id="pendidikan" disabled>
		                                        	<option>Banten</option>
		                                        </select>
		                                    </div>
		                                    <!-- <div class="col-md-4">
		                                        <select class="form-control" name="pendidikan"  id="pendidikan" >
		                                        	<option>Banten</option>
		                                        </select>
		                                    </div> -->
		                                </div>

		                                	  
										<!-- MORE -->
						  				<div class="collapse" id="collapse1">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kabupaten/Kota</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" disabled>
		                                            	<option>Tangerang</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" >
		                                            	<option>Tangerang</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kecamatan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" disabled>
		                                            	<option>Larangan</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" >
		                                            	<option>Larangan</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kelurahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" disabled>
		                                            	<option>Ciledug</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" >
		                                            	<option>Ciledug</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Tinggal</label>
		                                        <div class="col-md-4">
		                                        	<textarea class="form-control" rows="3" disabled>
		                                        		Jalan Gaga IB Rt 003/09 No.21
		                                        	</textarea>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<textarea class="form-control" rows="3">
		                                        		Jalan Gaga IB Rt 003/09 No.21
		                                        	</textarea>
		                                        </div> -->
		                                    </div> 
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kode Pos</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled placeholder="15154">
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control" value="15154">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No. Telepon</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" placeholder="021-78365625" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control" value="021-78365625">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No. Handphone</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control"  placeholder="085678926543" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control" value="085678926543" >
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Email</label>
		                                        <div class="col-md-4">
		                                            <input type="email" class="form-control" placeholder="a@email.com" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="email" class="form-control" value="a@email.com">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Pekerjaan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
											<div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Pendidikan Terakhir</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" disabled></select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No. NPWP Perorangan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No. Rekening</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Saldo Rekening</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kepemilikan Deposito</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kepemilikan Giro</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control"disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kepemilikan Saham</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control"disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kepemilikan Valas</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control"disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="text" class="form-control">
		                                        </div> -->
		                                    </div>

		                                    <hr>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Upload Scan KTP</label>
		                                        <div class="col-md-4">
		                                            <a href="http://localhost:8888/pertamina/pertamina-260315/images/KTP.jpg" class="btn btn-primary btn-xs">Lihat File</a> <span>KTP.jpg</span>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="npwp_file" >
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Upload Scan NPWP</label>
		                                        <div class="col-md-4">
		                                            <a href="http://localhost:8888/pertamina/pertamina-260315/images/NPWP.jpg" class="btn btn-primary btn-xs">Lihat File</a> <span>NPWP.jpg</span>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="npwp_file" >
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Upload Scan Rekening Koran</label>
		                                        <div class="col-md-4">
		                                            <a href="http://localhost:8888/pertamina/pertamina-260315/images/rek-koran.jpg" class="btn btn-primary btn-xs">Lihat File</a> <span>rekening-koran.jpg</span>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="npwp_file" >
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Upload Scan Tabungan/Giro/Deposito </label>
		                                        <div class="col-md-4">
		                                            <a href="ttp://localhost:8888/pertamina/pertamina-260315/images/tabungan.jpg" class="btn btn-primary btn-xs">Lihat File</a> <span>Tabungan.jpg</span>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="npwp_file" >
		                                        </div> -->
		                                    </div>
		                                </div>
						  		</div>
						  </div>

						  <hr>

						  <ul class="pager">
						  	  <li class="next"><a data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Selengkapnya</a></li>
							  <!-- <li class="next"><a href="#">Verifikasi Data</a></li> -->
						  </ul>

						</form>
					  </div>
					</div><!--END DATA REGISTRASI-->



					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<div class="row">
					  		<div class="col-xs-10">
					  			<h4>Profil Pengusaha</h4>
					  		</div>
					  		<div class="col-xs-2 text-right">
					  			<h4 class="glyphicon glyphicon-remove-sign unverified" aria-hidden="true"></h4>
					  		</div>
					  	</div>
					  </div>
					  <div class="panel-body">


					    <form class="form-horizontal">
					      <div class="row">
					      	<div class="col-sm-4"></div>
					      	<div class="col-sm-4">
						      	<h5><b>Data pada sistem</b></h5>
							  	<hr>
						  	</div>
						  	<!-- <div class="col-sm-4">
						      	<h5><b>Data hasil verifikasi</b></h5>
							  	<hr>
						  	</div> -->
					      </div>
					      
					      <div class="row">
						  		<div class="col-sm-12">
						  			<div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Pernah Memiliki Usaha SPBU Sebelumnya</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" id="jml-spbu-outer" disabled>
		                                    	<option value="yes">Ya</option>
		                                    	<option value="no">Tidak</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" id="jml-spbu-outer-4" >
		                                    	<option value="yes">Ya</option>
		                                    	<option value="no">Tidak</option>
		                                    </select>
		                                </div> -->
		                            </div>

		                            <div id="jml-spbu">
		                                <div class="form-group">
		                                    <label for="fieldname" class="col-md-4 control-label">Jumlah SPBU</label>
		                                    <div class="col-md-4">
		                                        <select class="form-control" id="jml-spbu-2" disabled>
		                                        	<option>1</option>
		                                        	<option>2</option>
		                                        	<option>3</option>
		                                        	<option>4</option>
		                                        	<option>5</option>
		                                        	<option>6</option>
		                                        	<option>7</option>
		                                        	<option>8</option>
		                                        	<option>9</option>
		                                        	<option>10</option>
		                                        </select>
		                                    </div>
		                                    <!-- <div class="col-md-4">
		                                        <select class="form-control" id="jml-spbu-3">
		                                        	<option>1</option>
		                                        	<option>2</option>
		                                        	<option>3</option>
		                                        	<option>4</option>
		                                        	<option>5</option>
		                                        	<option>6</option>
		                                        	<option>7</option>
		                                        	<option>8</option>
		                                        	<option>9</option>
		                                        	<option>10</option>
		                                        </select>
		                                    </div> -->
		                                </div>

		                            
		                                <div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 1</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                </div>

		                             

		                                <div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 2</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 3</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 4</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 5</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 6</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                       <!--  <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 7</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 8</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 9</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>

		                            	<div class="spbu-val">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi SPBU 10</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Aceh</option>
		                                            	<option>Sumatera Utara</option>
		                                            	<option>Sumatera Barat</option>
		                                            	<option>Sumater Selatan</option>
		                                            	<option>Riau</option>
		                                            	<option>Kepulauan Riau</option>
		                                            	<option>Jambi</option>
		                                            	<option>Bengkulu</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" disabled>
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div> -->
		                                    </div>
		                            	</div>
		                        	</div>

		                       	<!-- MORE -->
				  				<div class="collapse" id="collapse2">
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Pernah/Memiliki Pengalaman Usaha Lain Di Luar BBM</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" id="otherbusiness" disabled>
		                                    	<option value="yes">Ya</option>
		                                    	<option value="no">Tidak</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" id="otherbusiness">
		                                    	<option value="yes">Ya</option>
		                                    	<option value="no">Tidak</option>
		                                    </select>
		                                </div> -->
		                            </div>

		                            <div id="formbusiness">
		                            <hr>


		                            <div class="form-group">
		                            	<div class="col-md-1 text-right">&nbsp;</div>
		                                <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman usaha lainnya</div>
		                           	</div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Nama Perusahaan 1</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jabatan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jenis Usaha</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" disabled>
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control">
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Lama Beroperasi</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">No. NPWP Perusahaan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            
		                            <hr>

		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Nama Perusahaan 2</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jabatan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jenis Usaha</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" disabled>
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control">
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Lama Beroperasi</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">No. NPWP Perusahaan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>

		                            <hr>

		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Nama Perusahaan 3</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jabatan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Jenis Usaha</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" disabled>
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" disabled>
		                                    	<option>Perdagangan</option>
		                                    	<option>Pertanian</option>
		                                    	<option>Pariwisata</option>
		                                    	<option>Manufaktur</option>
		                                    	<option>Properti</option>
		                                    	<option>Lain-lain</option>	
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Omzet per Tahun</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>< 300 Juta</option>
		                                    	<option>300 Juta - 2,5 Milyar</option>
		                                    	<option>2,5 Milyar - 5 Milyar</option>
		                                    	<option>> 5 Milyar</option>
		                                    </select>
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Lama Beroperasi</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>
		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">No. NPWP Perusahaan</label>
		                                <div class="col-md-4">
		                                	<input type="text" class="form-control" disabled>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                	<input type="text" class="form-control">
		                                </div> -->
		                            </div>

		                            <hr>

		                            </div>

		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Mempunyai Gambaran untuk Menjalankan Bisnis SPBU</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>Ya</option>
		                                    	<option>Tidak</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control">
		                                    	<option>Ya</option>
		                                    	<option>Tidak</option>
		                                    </select>
		                                </div> -->
		                            </div>

		                            <div class="form-group">
		                                <label for="fieldname" class="col-md-4 control-label">Orang yang akan Menjalankan Usaha SPBU</label>
		                                <div class="col-md-4">
		                                    <select class="form-control" disabled>
		                                    	<option>Diri Sendiri</option>
		                                    	<option>Anggota Keluarga</option>
		                                    	<option>Pegawai Perusahaan</option>
		                                    </select>
		                                </div>
		                                <!-- <div class="col-md-4">
		                                    <select class="form-control">
		                                    	<option>Diri Sendiri</option>
		                                    	<option>Anggota Keluarga</option>
		                                    	<option>Pegawai Perusahaan</option>
		                                    </select>
		                                </div> -->
		                            </div>
		                         </div> 
		                      </div>          
						  </div>
						  
						  

						  <hr>

						  <ul class="pager">
						  	  <li class="next"><a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Selengkapnya</a></li>
							  <!-- <li class="next"><a href="#">Verifikasi Data</a></li> -->
						  </ul>


						</form>
					  </div>
					</div> <!--END PROFIL PENGUSAHA-->
						

					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<div class="row">
					  		<div class="col-xs-10">
					  			<h4>Tata Letak</h4>
					  		</div>
					  		<div class="col-xs-2 text-right">
					  			<h4 class="glyphicon glyphicon-ok-sign verified" aria-hidden="true"></h4>
					  		</div>
					  	</div>
					  </div>
					  <div class="panel-body">


					    <form class="form-horizontal">
					      <div class="row">
					      	<div class="col-sm-4"></div>
					      	<div class="col-sm-4">
						      	<h5><b>Data pada sistem</b></h5>
							  	<hr>
						  	</div>
						  	<!-- <div class="col-sm-4">
						      	<h5><b>Data hasil verifikasi</b></h5>
							  	<hr>
						  	</div> -->
					      </div>
					      
					      <div class="row">
						  		<div class="col-xs-12">
						  			<div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi Umum Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_umum_lahan" id="lokasi_umum_lahan" disabled>
		                                        		<option>Pulau Tanpa Supply Point</option>
		                                        		<option>Dalam Kota</option>
		                                        		<option>Luar Kota</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_umum_lahan" id="lokasi_umum_lahan" >
		                                        		<option>Pulau Tanpa Supply Point</option>
		                                        		<option>Dalam Kota</option>
		                                        		<option>Luar Kota</option>
		                                        	</select>
		                                        </div> -->   
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lokasi Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_lahan" id="lokasi_lahan" disabled>
		                                        		<option>Kawasan Perdagangan/Jasa/Perkantoran/Komersial</option>
		                                        		<option>Kawasan Permukiman Kota</option>
		                                        		<option>Kawasan Pertanian/Perkebunan/Hutan</option>
		                                        		<option>Kawasan Industri</option>
		                                        		<option>Lainnya</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_lahan" id="lokasi_lahan" >
		                                        		<option>Kawasan Perdagangan/Jasa/Perkantoran/Komersial</option>
		                                        		<option>Kawasan Permukiman Kota</option>
		                                        		<option>Kawasan Pertanian/Perkebunan/Hutan</option>
		                                        		<option>Kawasan Industri</option>
		                                        		<option>Lainnya</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Bentuk Lahan</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-4">
		                                        		<label class="radio-inline"><input type="radio" name="optradio" disabled><img src="images/bentuk1.jpg" width="77" height="74" alt=""/></label>
		                                       	    	 <br>
		                                        		<label class="radio-inline"><input type="radio" name="optradio" disabled><img src="images/bentuk2.jpg" width="77" height="74" alt=""/></label>
		                                           	</div>
		                                            <div class="col-md-4">
		                                        		<label class="radio-inline"><input type="radio" name="optradio" disabled><img src="images/bentuk3.jpg" width="77" height="74" alt=""/></label>
		                                        		<br>
		                                        		<label class="radio-inline"><input type="radio" name="optradio" disabled><img src="images/bentuk4.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <div class="col-md-4"> 
		                                        		<label class="radio-inline"><input type="radio" name="optradio" disabled><img src="images/bentuk5.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<div class="col-md-4">
		                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk1.jpg" width="77" height="74" alt=""/></label>
		                                       	    	 <br>
		                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk2.jpg" width="77" height="74" alt=""/></label>
		                                           	</div>
		                                            <div class="col-md-4">
		                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk3.jpg" width="77" height="74" alt=""/></label>
		                                        		<br>
		                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk4.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <div class="col-md-4"> 
		                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk5.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Tipe Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="tipe_lahan" id="tipe_lahan" disabled>
		                                        		<option>Lahan Kosong</option>
		                                        		<option>Tidak Ada Perkerasan/Perkerasan Tanah</option>
		                                        		<option>Perkerasan Aspal/Batu</option>
		                                        		<option>Lahan Bekas Pemanfaatan Tertentu</option>
		                                        	</select>
		                                        </div>
		                                       <!--  <div class="col-md-4">
		                                        	<select class="form-control" name="tipe_lahan" id="tipe_lahan" >
		                                        		<option>Lahan Kosong</option>
		                                        		<option>Tidak Ada Perkerasan/Perkerasan Tanah</option>
		                                        		<option>Perkerasan Aspal/Batu</option>
		                                        		<option>Lahan Bekas Pemanfaatan Tertentu</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>

		                        		<!-- MORE -->
				  						<div class="collapse" id="collapse3">
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Posisi Lahan</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio" disabled>&nbsp;<img src="images/posisi1.jpg" width="77" height="74" alt=""/></label>
		                                           	</div>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio" disabled>&nbsp;<img src="images/posisi2.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <br>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio" disabled>&nbsp;<img src="images/posisi3.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio" disabled>&nbsp;<img src="images/posisi4.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio">&nbsp;<img src="images/posisi1.jpg" width="77" height="74" alt=""/></label>
		                                           	</div>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio">&nbsp;<img src="images/posisi2.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <br>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio">&nbsp;<img src="images/posisi3.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                            <div class="col-md-6">
		                                        		<label class="radio"><input type="radio" name="optradio">&nbsp;<img src="images/posisi4.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Batas Lokasi Lahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_depan_lahan" id="batas_depan_lahan" disabled>
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="batas_depan_lahan" id="batas_depan_lahan" >
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div> -->
		                                        <label for="fieldname" class="col-md-1 control-label-text-left">Depan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_belakang_lahan" id="batas_belakang_lahan" disabled>
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="batas_belakang_lahan" id="batas_belakang_lahan" >
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div> -->
		                                        <label for="fieldname" class="col-md-1 control-label-text-left">Belakang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_kanan_lahan" id="batas_kanan_lahan" disabled>
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="batas_kanan_lahan" id="batas_kanan_lahan" >
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div> -->
		                                        <label for="fieldname" class="col-md-1 control-label-text-left">Kanan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_kiri_lahan" id="batas_kiri_lahan" disabled>
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <select class="form-control" name="batas_kiri_lahan" id="batas_kiri_lahan" >
		                                            	<option>Tanah Kosong</option>
		                                            	<option>Jalan Raya</option>
		                                            	<option>Rumah Tinggal</option>
		                                            	<option>Kantor/Komersil</option>
		                                            	<option>Sarana Pendidikan</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Sarana Peribadatan</option>
		                                            	<option>Sarana Olahraga</option>
		                                            	<option>Sarana Kesehatan</option>
		                                            	<option>Terminal</option>
		                                            	<option>Stasiun Kereta</option>
		                                            	<option>Bandara</option>
		                                            	<option>Pelabuhan</option>
		                                            	<option>SUTET</option>
		                                            </select>
		                                        </div> -->
		                                        <label for="fieldname" class="col-md-1 control-label-text-left">Kiri</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Status Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" disabled>
		                                        		<option>Jalan Kabupaten/Kota</option>
		                                        		<option>Jalan Provinsi</option>
		                                        		<option>Jalan Negara</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" >
		                                        		<option>Jalan Kabupaten/Kota</option>
		                                        		<option>Jalan Provinsi</option>
		                                        		<option>Jalan Negara</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kelas Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" disabled>
		                                        		<option>Kelas 1</option>
		                                        		<option>Kelas 2</option>
		                                        		<option>Kelas 3A</option>
		                                        		<option>Kelas 3B</option>
		                                        		<option>Kelas 3C</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" >
		                                        		<option>Kelas 1</option>
		                                        		<option>Kelas 2</option>
		                                        		<option>Kelas 3A</option>
		                                        		<option>Kelas 3B</option>
		                                        		<option>Kelas 3C</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Tingkat Perjalanan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="tingkat_perjalanan" id="tingkat_perjalanan" disabled>
		                                        		<option>Jarak Dekat</option>
		                                        		<option>Jarak Sedang</option>
		                                        		<option>Jarak Jauh</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="tingkat_perjalanan" id="tingkat_perjalanan" >
		                                        		<option>Jarak Dekat</option>
		                                        		<option>Jarak Sedang</option>
		                                        		<option>Jarak Jauh</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kecepatan Pengguna Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="kecepatan_pengguna_jalan" id="kecepatan_pengguna_jalan" disabled>
		                                        		<option>Tinggi</option>
		                                        		<option>Sedang</option>
		                                        		<option>Rendah</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="kecepatan_pengguna_jalan" id="kecepatan_pengguna_jalan" >
		                                        		<option>Tinggi</option>
		                                        		<option>Sedang</option>
		                                        		<option>Rendah</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Jalan Masuk</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_jalan_masuk" id="jumlah_jalan_masuk" disabled>
		                                        		<option>Dibatasi Secara Berdaya Guna</option>
		                                        		<option>Dibatasi</option>
		                                        		<option>Tidak Dibatasi</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_jalan_masuk" id="jumlah_jalan_masuk" >
		                                        		<option>Dibatasi Secara Berdaya Guna</option>
		                                        		<option>Dibatasi</option>
		                                        		<option>Tidak Dibatasi</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lebar Akses Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lebar_akses_jalan" id="lebar_akses_jalan" disabled>
		                                        		<option>< 5m</option>
		                                        		<option>5m - 11m</option>
		                                        		<option>12 - 16m</option>
		                                        		<option>> 16m</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="lebar_akses_jalan" id="lebar_akses_jalan" >
		                                        		<option>< 5m</option>
		                                        		<option>5m - 11m</option>
		                                        		<option>12 - 16m</option>
		                                        		<option>> 16m</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Lajur Akses Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_lajur_jalan" id="jumlah_lajur_jalan" disabled>
		                                        		<option>1 Lajur</option>
		                                        		<option>2 Lajur</option>
		                                        		<option>3 Lajur</option>
		                                        		<option>4 Lajur</option>
		                                        		<option>> 5 Lajur</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_lajur_jalan" id="jumlah_lajur_jalan" >
		                                        		<option>1 Lajur</option>
		                                        		<option>2 Lajur</option>
		                                        		<option>3 Lajur</option>
		                                        		<option>4 Lajur</option>
		                                        		<option>> 5 Lajur</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Keberadaan Median/Pembatas Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" disabled>
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Status Kepemilikan Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" disabled>
		                                        		<option>Hak Milik</option>
		                                        		<option>Sewa</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Hak Milik</option>
		                                        		<option>Sewa</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No. Akta Tanah</label>
		                                        <div class="col-md-4">
		                                        	<input class="form-control" disabled>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<input class="form-control">
		                                        </div> -->
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Izin Pemerintah Daerah</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" disabled>
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div> -->
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Upload Scan Sertifikat Tanah/Akta Jual Beli/Dokumen Pengganti </label>
		                                        <div class="col-md-4">
		                                            <a href="http://localhost:8888/pertamina/pertamina-260315/images/rek-koran.jpg" class="btn btn-primary btn-xs">Lihat File</a> <span>sertifikat-tanah.jpg</span>
		                                        </div>
		                                        <!-- <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="serifikat_tanah_file" >
		                                        </div> -->
		                                    </div>

		                                </div>
						  		</div>    	         
						  </div>
						  
						  

						  <hr>

						  <ul class="pager">
						  	  <li class="next"><a data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Selengkapnya</a></li>
							  <!-- <li class="next"><a href="#">Verifikasi Data</a></li> -->
						  </ul>


						</form>
					  </div>
					</div> <!--END TATA LETAK-->


					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<div class="row">
					  		<div class="col-xs-10">
					  			<h4>Update Status Pendaftar</h4>
					  		</div>
					  		<div class="col-xs-2 text-right">
					  			<h4 class="glyphicon glyphicon-ok-sign verified" aria-hidden="true"></h4>
					  		</div>
					  	</div>
					  </div>
					  <div class="panel-body">
					  	<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
						    Gagal Seleksi Lokas
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						    Proses Seleksi Lokasi	
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Input Data
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Kirim Data
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Kirim Dokumen
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked>
						    Proses Verifikasi
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Sudah Verifikasi
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Rekomendasi Disetujui
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    Tidak Disetujui
						  </label>
						</div>

						<hr>

						<ul class="pager">
						  	  <li class="next green"><a data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Update</a></li>
							  <!-- <li class="next"><a href="#">Verifikasi Data</a></li> -->
						  </ul>
					 </div>
					</div> <!--END UPDATE STATUS-->
					

					
					


					


					



					

	    			

               
		    		
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