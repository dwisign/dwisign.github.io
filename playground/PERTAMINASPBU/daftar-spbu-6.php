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
							  <div class="panel-body preview">

							
								</br>

								
								<div class="row step">	
									<div class="col-xs-3 text-center"><a href="daftar-spbu-3.php">1 </a></br></br><p class="small">Data Registrasi</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-4.php">2 </a></br></br><p class="small">Profil Pengusaha</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-5.php">3 </a></br></br><p class="small">Tata Letak</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-6.php" class="active">4 </a></br></br><p class="small">Preview</p></div>	
								</div>
									

								</br>


								<div class="progress">
								  <div class="progress-bar progress-bar-success" style="width: 100%"></div>
								</div>


								<div class="form-horizontal">
											<legend>Preview</legend>
		                                    <div class="form-group">
		                                        <div class="panel-group align-left" id="accordion" role="tablist" aria-multiselectable="true">
												  
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												    <div class="panel-heading" role="tab" id="headingTwo">
												      
													      <h4 class="panel-title">
													          1 - Rencana Pengembangan Jaringan 
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
												      <div class="panel-body">
												        
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11"></div>
					                                   	</div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Provinsi</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Banten</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-5 control-label">Kota/Kabupaten</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">Tangerang</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-5 control-label">Alamat</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">Jalan Ciledug Raya No. 20</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldurl" class="col-md-5 control-label">Kecamatan</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">Ciledug</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kelurahan</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Petukangan</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kode Pos</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">15154</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                   
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">* Lokasi yang tidak berada pada area yang telah ditetapkan Pertamina akan gagal seleksi.<br> * Lokasi pada jalan yang sama, namun berbeda kecamatan dan kelurahan masih dapat dipertimbangkan.</div>
					                                   	</div>
					                                   	<div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="daftar-spbu-1.php" class="btn btn-primary" id="EditStep2">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												    <div class="panel-heading" role="tab" id="headingThree">
												      
													      <h4 class="panel-title">
													          2 - Data Registrasi
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												      <div class="panel-body">
												      	<div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Nomor Registrasi</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;"><b>3111006001</b></p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
												      	<div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Nama Pemohon</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">H. JUMRANI</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Tempat, Tanggal Lahir</label>
					                                        <div class="col-md-2">
					                                        	<p style="margin-top: 10px;">Banjarmasin,14 Januari 1971</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">No. KTP</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">63.7104.140171.0003</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Alamat Tinggal</label>
					                                        <div class="col-md-4">
					                                        	<p style="margin-top: 10px;">Jl. Brigjend H. Hasan Basri Komplek Pondok Metro B/6 Banjarmasin - Alalak Utara - Banjarmasin Utara - Banjarmasin - Kalimantan Selatan</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kelurahan</label>
					                                        <div class="col-md-4">
					                                           <p style="margin-top: 10px;">Jingah</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kecamatan</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Teweh Tengah</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kabupaten/Kota</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Barito Utara</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Alamat Provinsi</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Kalimantan Tengah</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kode Pos</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">15154</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">No. Telepon</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">021-7345678</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">No. Handphone</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">0856789101</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Email</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">h.jumberi@gmail.com</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Pekerjaan</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Wiraswasta</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
														<div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Direktur</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Pendidikan Terakhir</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">S1</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perorangan</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">06.931.347.6-711.000</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">No. Rekening</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">90000458373665</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Saldo Rekening</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">5.000.000.000</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Deposito</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">-</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Giro</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">-</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Saham</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">-</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Valas</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">-</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>

					                                    <hr>

					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan KTP</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">KTP.jpg</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan NPWP</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">NPWP.jpg</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Rekening Koran</label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">REK-KORAN.jpg</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Tabungan/Giro/Deposito </label>
					                                        <div class="col-md-4">
					                                            <p style="margin-top: 10px;">Tabungan.jpg</p>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div> 
												        
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="daftar-spbu-3.php" class="btn btn-primary" id="EditStep3">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												    <div class="panel-heading" role="tab" id="headingFour">
												      
													      <h4 class="panel-title">
													          3 - Profil Pengusaha
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
												      <div class="panel-body">
												       		<div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Pernah Memiliki Usaha SPBU Sebelumnya</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Ya</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah SPBU</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">2 - 5</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lokasi SPBU</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Aceh</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">300 Juta - 2,5 Milyar</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Pernah/Memiliki Pengalaman Usaha Lain Di Luar BBM</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Ya</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <div class="collapse in" id="collapse6">
						                                    <hr>


						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman usaha lainnya</div>
						                                   	</div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 1</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">PT. ABZ</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Direktur</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Pariwisata</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">< 300 Juta</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">3 Tahun</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">06.931.347.6-711.000</p> 
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    
						                                    <hr>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 2</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <hr>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan 3</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Omzet per Tahun</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lama Beroperasi</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perusahaan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">-</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <hr>

						                                    </div>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Mempunyai Gambaran untuk Menjalankan Bisnis SPBU</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Ya</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Orang yang akan Menjalankan Usaha SPBU</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Diri Sendiri</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

		                                    			<div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="daftar-spbu-4.php" class="btn btn-primary" id="EditStep3">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												    <div class="panel-heading" role="tab" id="headingSix">
												      
													      <h4 class="panel-title">
													          4 - Tata Letak
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
												      <div class="panel-body">
												            <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Umum Lahan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Pulau Tanpa Supply Point</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Lahan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Kawasan Permukiman Kota</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Bentuk Lahan</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-4">
						                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk1.jpg" width="77" height="74" alt=""/></label>
						                                       	    	 <br>
						                                        		<label class="radio-inline"><input type="radio" name="optradio" checked><img src="images/bentuk2.jpg" width="77" height="74" alt=""/></label>
						                                           	</div>
						                                            <div class="col-md-4">
						                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk3.jpg" width="77" height="74" alt=""/></label>
						                                        		<br>
						                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk4.jpg" width="77" height="74" alt=""/></label>
						                                            </div>
						                                            <div class="col-md-4"> 
						                                        		<label class="radio-inline"><input type="radio" name="optradio"><img src="images/bentuk5.jpg" width="77" height="74" alt=""/></label>
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Tipe Lahan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Lahan Kosong</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Posisi Lahan</label>
						                                        <div class="col-md-4">
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
						                                        		<label class="radio"><input type="radio" name="optradio" checked>&nbsp;<img src="images/posisi4.jpg" width="77" height="74" alt=""/></label>
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Batas Lokasi Lahan</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Kantor Komersil</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Depan</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Tanah Kosong</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Belakang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Kantor Komersil</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kanan</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Kantor Komersil</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kiri</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Status Jalan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Jalan Provinsi</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Kelas Jalan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Kelas 2</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Tingkat Perjalanan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Jarak Sedang</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>

						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Kecepatan Pengguna Jalan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Sedang</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Jalan Masuk</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Dibatasi</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lebar Akses Jalan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">5m - 11m</p>
						                                        </div>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Lajur Akses Jalan</label>
						                                        <div class="col-md-4">	
						                                        	<p style="margin-top: 10px;">3 Jalur</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Keberadaan Median/Pembatas Jalan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Tidak Ada</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Status Kepemilikan Lahan</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Hak Milik</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">No. Akta Tanah</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">87664782664830283645748</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Izin Pemerintah Daerah</label>
						                                        <div class="col-md-4">
						                                        	<p style="margin-top: 10px;">Ada</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <hr>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Sertifikat Tanah/Akta Jual Beli/Dokumen Pengganti </label>
						                                        <div class="col-md-4">
						                                            <p style="margin-top: 10px;">Sertifikat.jpg</p>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11 align-right"><a href="daftar-spbu-5.php" class="btn btn-primary" id="EditStep4">Edit Data</a></div>
						                                   	</div>
												      </div>
												    </div>
												  </div>
												  
												  
												  
												  
												  
												</div>
		                                    </div>
											
										</div> 
								
							    
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