<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    define(MAPS_URL, "http://192.168.3.74/maps/");
		    define(POST_URL, "http://192.168.3.74/maps/admin/area/post_data");
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	

	  		<?php
	    	require("inc/top-bar-user-login.php");
	    	?>

	    	<div id="bg-top-home"></div>

	    	
	    	

	    	<div class="content">
	    		 <div class="container">
	    		 </br></br></br></br></br>
		            	
							

							

		                    <div class="panel panel-default">
							  <div class="panel-heading text-center">
							  	<h4><b>FORM PENDAFTARAN SPBU ONLINE</b></h4>
							  	<p>Berikut adalah informasi yang perlu diketahui dan data-data yang harus dilengkapi oleh calon mitra.</p>
							  </div>
							  <div class="panel-body">

							  
							
								</br>

								
								<div class="row step">	
									<div class="col-xs-3 text-center"><a href="daftar-spbu-3.php">1 </a></br></br><p class="small">Data Registrasi</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-4.php" class="active">2 </a></br></br><p class="small">Profil Pengusaha</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-5.php">3 </a></br></br><p class="small">Tata Letak</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-6.php">4 </a></br></br><p class="small">Preview</p></div>	
								</div>
									

								</br>


								<div class="progress">
								  <div class="progress-bar progress-bar-success" style="width: 40%"></div>
								</div>


								
										<div class="form-horizontal">
										<legend>Profil Pengusaha</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Pernah Memiliki Usaha SPBU Sebelumnya</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" id="jml-spbu-outer" >
		                                            	<option value="yes">Ya</option>
		                                            	<option value="no">Tidak</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div id="jml-spbu">
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Jumlah SPBU</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" id="jml-spbu-2">
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
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>

		                                    
			                                    <div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 1</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                    </div>

			                                    <div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 2</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 3</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 4</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 5</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 6</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 7</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 8</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 9</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>

			                                	<div class="spbu-val">
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU 10</label>
				                                        <div class="col-md-4">
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
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
				                                    <div class="form-group">
				                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
				                                        <div class="col-md-4">
				                                            <select class="form-control">
				                                            	<option>< 300 Juta</option>
				                                            	<option>300 Juta - 2,5 Milyar</option>
				                                            	<option>2,5 Milyar - 5 Milyar</option>
				                                            	<option>> 5 Milyar</option>
				                                            </select>
				                                        </div>
				                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
				                                    </div>
			                                	</div>
		                                	</div>


		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Pernah/Memiliki Pengalaman Usaha Lain Di Luar BBM</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" id="otherbusiness">
		                                            	<option value="yes">Ya</option>
		                                            	<option value="no">Tidak</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div id="formbusiness">
		                                    <hr>


		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman usaha lainnya</div>
		                                   	</div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 1</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                            	<option>Perdagangan</option>
		                                            	<option>Pertanian</option>
		                                            	<option>Pariwisata</option>
		                                            	<option>Manufaktur</option>
		                                            	<option>Properti</option>
		                                            	<option>Lain-lain</option>	
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    
		                                    <hr>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 2</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                            	<option>Perdagangan</option>
		                                            	<option>Pertanian</option>
		                                            	<option>Pariwisata</option>
		                                            	<option>Manufaktur</option>
		                                            	<option>Properti</option>
		                                            	<option>Lain-lain</option>	
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <hr>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 3</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                            	<option>Perdagangan</option>
		                                            	<option>Pertanian</option>
		                                            	<option>Pariwisata</option>
		                                            	<option>Manufaktur</option>
		                                            	<option>Properti</option>
		                                            	<option>Lain-lain</option>	
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>< 300 Juta</option>
		                                            	<option>300 Juta - 2,5 Milyar</option>
		                                            	<option>2,5 Milyar - 5 Milyar</option>
		                                            	<option>> 5 Milyar</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <hr>

		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Mempunyai Gambaran untuk Menjalankan Bisnis SPBU</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Ya</option>
		                                            	<option>Tidak</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Orang yang akan Menjalankan Usaha SPBU</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control">
		                                            	<option>Diri Sendiri</option>
		                                            	<option>Anggota Keluarga</option>
		                                            	<option>Pegawai Perusahaan</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    
		                                    </div>
								
							  	

								    
							  		
										
								    
								    

									


									<ul class="pager">
									  <li class="previous"><a href="daftar-spbu-3.php">← Prev</a></li>
									  <li class="next"><a href="daftar-spbu-5.php">Next →</a></li>
									</ul>


								
							    
							  </div>
							</div>

							
						
		     	</div><!-- container -->		
	    	</div> <!--END CONTENT -->
		 	
				











			 <?php
			 require("inc/footer.php");
			 ?> 



		     <?php
		     require("inc/js.php");
		     ?> 
        <script>

        $(document).ready(function(){
   			 //Load Wizards
		    $('#basicwizard').stepy();
		    $('#wizard').stepy({

		        finishButton: true, titleClick: true, block: true, validate: true,
		          back: function(index) {
		           if(index=2){
		                setTimeout(function(){ jQuery("iframe#headerMap").attr("src", "<?php echo MAPS_URL;?>admin/area"); }, 1000);            
		           }
		          },
		          next: function(index) {
		           
		           if(index===2){
		                setTimeout(function(){ jQuery("iframe#headerMap").attr("src", "<?php echo MAPS_URL;?>admin/area"); }, 1000);            
	         
				        $.post('<?php echo POST_URL;?>',$('#wizard').serialize(),function(data){
				        	console.log(data);
						});

		           }else if(index===10){
					//	console.log($('#wizard').serializeArray()); 
		           		var dataArray = $("#wizard").serializeArray(),
						    dataObj = {};

						$(dataArray).each(function(i, field){
						  $("#"+field.name+"-view").text(field.value);
						});
		           }
		          }
		    });

		    //Add Wizard Compability - see docs
		    $('.stepy-navigator').wrapInner('<div class="pull-right"></div>');

		    //Make Validation Compability - see docs
		    $('#wizard').validate({
		        errorClass: "help-block",
		        validClass: "help-block",
		        highlight: function(element, errorClass,validClass) {
		           $(element).closest('.form-group').addClass("has-error");
		        },
		        unhighlight: function(element, errorClass,validClass) {
		            $(element).closest('.form-group').removeClass("has-error");
		        }
		     });

     		ajax_dropdown("provinsi","provinsi");

			ajax_dropdown("provinsi1","provinsi");
			$("#provinsi1").trigger('change');	
			ajax_dropdown("provinsi2","provinsi");
			$("#provinsi2").trigger('change');	

		    $('#wizard').submit(function(e){
		      e.preventDefault();
		      console.log($('#wizard').serialize());
		        //$.post('".$post_url."',$('#formNew').serialize(),function(data){
		        //	if(data=='1'){					  
		        //		window.location.href = '".base_url('admin/participant/create/'.$participant.'/z')."';	 
		        //	}else{
		        //	 $('#message').html(data);
		        //	}
				//});
			  });
		    <?php 
			    for ($i=1; $i <=9 ; $i++) { 
			    	$idx=$i+1;
			        echo '$("#EditStep'.$idx.'").click(function(){
				        $("#wizard-head-'.$i.'").click();
				    });';
			    }
		    ?>
		});
        
		function ajax_dropdown(id,url){
			$.getJSON("<?php echo MAPS_URL;?>admin/location/"+url, function (data) {
			     $.each(data, function (index, item) {
			     	 //$('#'+id)[0].options.length = 0;
			         $('#'+id).append(
			              $('<option></option>').val(index).html(item)
			          );
			     });
				 //$('#'+id).val($('#'+id+' option:first').val());
			     $('#'+id).select2().select2("val", null);
			 });
		}			 
		function set_address(arrdata){
					$("#provinsi").val(arrdata['id_provinsi']);	
					$("#provinsi").trigger('change');
					setTimeout(function(){	
					$("#kabupaten").val( arrdata['id_kabupaten'] );
					$("#kabupaten").trigger('change');	
					}, 2000);
					setTimeout(function(){	
					$("#kecamatan").val( arrdata['id_kecamatan'] );	
					$("#kecamatan").trigger('change');	
					}, 3000);			
		}
		function get_address(ltd,lng){
			$.getJSON("<?php echo MAPS_URL;?>admin/location/get_address/"+ltd+"/"+lng, function (data) {
					var optVal = $("#provinsi option:contains('"+data['provinsi'].toUpperCase()+"')").attr('value');
					$("#provinsi").val( optVal );	
					$("#provinsi").trigger('change');	
					setTimeout(function(){	
					var optVal = $("#kabupaten option:contains('"+data['kota'].toUpperCase()+"')").attr('value');
					$("#kabupaten").val( optVal );
					$("#kabupaten").trigger('change');	
					}, 2000);
					setTimeout(function(){	
					var optVal = $("#kecamatan option:contains('"+data['kecamatan'].toUpperCase()+"')").attr('value');
					$("#kecamatan").val( optVal );	
					$("#kecamatan").trigger('change');	
					}, 3000);	
			 });
		}			 
        </script>
	  	</body><!-- END BODY -->
</html>