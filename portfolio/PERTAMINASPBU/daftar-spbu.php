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
		            	<div id="rootwizard">
							

							

		                    <div class="panel panel-default">
							  <div class="panel-heading text-center"><h4><b>FORM PENDAFTARAN SPBU ONLINE</b></h4></div>
							  <div class="panel-body">

							  	<p>Berikut adalah informasi yang perlu diketahui dan data-data yang harus dilengkapi oleh calon mitra.</p>
							
								</br>

								
								<ul class="row step">
									<li class="col-xs-1"></li>
									<li class="col-xs-1 text-center"><a href="#tab1" data-toggle="tab">1 </a></br><p class="small">Registrasi Pengguna</p></li>
									<li class="col-xs-1 text-center"><a href="#tab2" data-toggle="tab">2 </a></br><p class="small">Rencana Lokasi SPBU</p></li>
									<li class="col-xs-1 text-center"><a href="#tab3" data-toggle="tab">3 </a></br><p class="small">Data Pribadi Perusahaan</p></li>
									<li class="col-xs-1 text-center"><a href="#tab4" data-toggle="tab">4 </a></br><p class="small">Profil Pengusaha</p></li>
									<li class="col-xs-1 text-center"><a href="#tab5" data-toggle="tab">5 </a></br><p class="small">Data Rencana SPBU</p></li>
									<li class="col-xs-1 text-center"><a href="#tab6" data-toggle="tab">6 </a></br><p class="small">Tata Letak</p></li>
									<li class="col-xs-1 text-center"><a href="#tab7" data-toggle="tab">7 </a></br><p class="small">Bentuk Kerjasama</p></li>
									<li class="col-xs-1 text-center"><a href="#tab8" data-toggle="tab">8 </a></br><p class="small">Biaya Operasional</p></li>
									<li class="col-xs-1 text-center"><a href="#tab9" data-toggle="tab">9 </a></br><p class="small">Rencana Investasi</p></li>
									<li class="col-xs-1 text-center"><a href="#tab10" data-toggle="tab">10 </a></br><p class="small">Preview</p></li>
									<li class="col-xs-1"></li>
								</ul>
									

								</br>


								<div id="bar" class="progress active">
			                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
			                    </div>
							  	<div class="tab-content">

								    <div class="tab-pane" id="tab1">
								    		<div class="form-horizontal" data-toggle="validator" role="form">
								      		<legend>Registrasi Pengguna</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_name" id="inputName" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No Handphone</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_handphone" id="user_hanphone" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Email</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_email" id="user_email" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Password</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_password" id="user_password" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <legend>Informasi Penting</legend>
		                                   

		                                    <div class="form-group">
		                                    	<ol>
		                                    		<li>Proses pendaftaran ini terdiri dari dua tahap, yaitu pengecekan seluruh dokumen yang telah dikirim calon mitra dan verifikasi lokasi.</li>
		                                    		<li>Keputusan mengenai hasil kelayakan bisnis ini merupakan bagian yang terpisahkan dari hasil ijin pembangunan SPBU yang dikeluarkan oleh PEMDA setempat ataupun bentuk-bentuk ijin lainnya yang dibutuhkan.</li>
		                                    		<li>Nomor registrasi beserta password akan diperoleh setelah calon mitra melengkapi seluruh data yang diminta.</li>
		                                    		<li>Nomor registrasi dan password akan dikirimkan ke email dan nomor handphone yang didaftarkan oleh calon mitra.</li>
		                                    		<li>Nomor registrasi dan password diperlukan oleh calon mitra untuk mengecek status aplikasi dan keperluan lainnya yang berhubungan dengan calon mitra.</li>
		                                    		<li>Jadwal periode pembukaan registrasi SPBU pertamina mulai dari 1 Januari 2015 - 30 Juni 2015.</li>
		                                    		<li>Berikut adalah kriteria yang harus dipelajari dan dilengkapi oleh calon mitra.</li>
		                                    	</ol>
		                                    </div>

		                                    <div class="form-group">  	
										      <div class="col-xs-10">  
										        <div class="checkbox">
										          <label>
										            <input type="checkbox"> Saya telah membaca dan memahami persyaratan dan prosedur pengajuan pendirian SPBU.
										          </label>
										        </div>
										      </div>
										    </div> 
											</br></br>
		                                  </div>
								    </div>

								    <div class="tab-pane" id="tab2">
								    		<div class="form-horizontal">
								      		<legend>Rencana Lokasi SPBU</legend>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">Berikut adalah peta Rencana Perkembangan Jaringan Pertamina, silakan pilih area yang ingin Anda ajukan</div>
		                                   	</div>
		                                    <div class="form-group">
		                                    	
		                                        <div class="col-md-12">
		                                        	<iframe id='headerMap' frameborder='0' height='465px' width='100%' scrolling='no' src='' frameborder="0" allowfullscreen></iframe>
		                                        </div>

		                                   	</div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Provinsi</label>
		                                        <div class="col-md-4">
		                                            <select disabled class="form-control" name="provinsi" id="provinsi" onchange='$("#kabupaten").empty();ajax_dropdown("kabupaten","kabupaten/0/"+this.value);'></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-5 control-label">Kota/Kabupaten</label>
		                                        <div class="col-md-4"><select disabled class="form-control" name="kabupaten" id="kabupaten" onchange='$("#kecamatan").empty();ajax_dropdown("kecamatan","kecamatan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldurl" class="col-md-5 control-label">Kecamatan</label>
		                                        <div class="col-md-4"><select disabled class="form-control" name="kecamatan" id="kecamatan" onchange='$("#kelurahan").empty();ajax_dropdown("kelurahan","kelurahan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Kelurahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="kelurahan" id="kelurahan"></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-5 control-label">Alamat</label>
		                                        <div class="col-md-4"><textarea class="form-control" name="alamat" id="alamat" ></textarea></div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldurl" class="col-md-5 control-label">No / Kaveling / Kilometer / Persil</label>
		                                        
		                                        	<div class="col-md-2">
		                                        		<select class="form-control" name="kaveling" id="kaveling" >
		                                        			<option value="no">Nomor</option>
		                                        			<option value="kav">Kaveling</option>
		                                        			<option value="km">Kilometer</option>
		                                        			<option value="persil">Persil</option>
		                                        		</select>
		                                        	</div>
		                                            <div class="col-md-2"><input type="text" class="form-control" name="nomor" id="nomor" ></div>
		                                            <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Lokasi yang tidak berada pada area yang telah ditetapkan Pertamina akan gagal seleksi.<br> * Lokasi pada jalan yang sama, namun berbeda kecamatan dan kelurahan masih dapat dipertimbangkan.</div>
		                                   	</div>
		                                   	</div>
								    </div>

									<div class="tab-pane" id="tab3">
										<div class="form-horizontal">
											<legend>Data Pribadi &amp; Perusahaan</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Nama Perusahaan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" required name="perusahaan" id="perusahaan" >
		                                        </div>
		                                        <div class="col-md-4 control-label-text-left">( Nama perusahaan tidak dapat dirubah )</div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Nama Direktur</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" required name="direktur" id="direktur" >
		                                        </div>
		                                        <div class="col-md-4 control-label-text-left">( Jika lebih dari 1, pisahkan dengan tanda koma )</div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Nama Komisaris</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" required name="komisaris" id="komisaris" >
		                                        </div>
		                                        <div class="col-md-4 control-label-text-left">( Jika lebih dari 1, pisahkan dengan tanda koma )</div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Perusahaan</label>
		                                        <div class="col-md-4"><textarea class="form-control" name="alamat_prs" id="alamat_prs" ></textarea></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Provinsi</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="provinsi1" id="provinsi1" onchange='$("#kabupaten1").empty();ajax_dropdown("kabupaten1","kabupaten/0/"+this.value);'></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Kota/Kabupaten</label>
		                                        <div class="col-md-4"><select class="form-control" name="kabupaten1" id="kabupaten1" onchange='$("#kecamatan1").empty();ajax_dropdown("kecamatan1","kecamatan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldurl" class="col-md-4 control-label">Alamat Kecamatan</label>
		                                        <div class="col-md-4"><select class="form-control" name="kecamatan1" id="kecamatan1" onchange='$("#kelurahan1").empty();ajax_dropdown("kelurahan1","kelurahan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kelurahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="kelurahan1" id="kelurahan1" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kode Pos</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="kodepos1" id="kodepos1" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No Telepon</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_telp1" id="no_telp1" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No Fax</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_fax1" id="no_fax1" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No Akta Perusahaan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_akta_prsh" id="no_akta_prsh" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">NPWP Perusahaan</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_npwp_prsh" id="no_npwp_prsh" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Tanggal Pendirian</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="tgl_pendirian" id="tgl_pendirian" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Key Person diutamakan salah satu direksi atau komisaris dan merupakan orang yang bertanggungjawab atas pengajuan SPBU baru, dan harus dapat dihubungi sewaktu-waktu.</div>
		                                   	</div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Nama Key Person</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="key_person_name" id="key_person_name" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jenis Kelamin</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="key_person_jk" id="key_person_jk" >
		                                            	<option value="L">Laki-laki</option>
		                                            	<option value="P">Perempuan</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Tempat, Tanggal Lahir</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-4"><input type="text" class="form-control" name="key_person_tl" id="key_person_tl"></div>
		                                            <div class="col-md-1 control-label-text-left">/</div>
		                                            <div class="col-md-7">
		                                            	
		                                            	<select name="key_person_date" id="key_person_date" style="width:40px">
		                                            		<?php 
		                                            			for ($i=1; $i<=31 ; $i++) { 
		                                            				echo '<option value="'.$i.'">'.$i.'</option>';
		                                            			}
		                                            		?>
		                                            	</select>

		                                            	<select  style="width:90px" name="key_person_month" id="key_person_month" >
		                                            		<?php 
		                                            			$months=array("1"=>"Januari","2"=>"Februari","3"=>"Maret","4"=>"April","5"=>"Mei",
		                                            							"6"=>"Juni","7"=>"Juli","8"=>"Agustus","9"=>"September",
		                                            							"10"=>"Oktober","11"=>"November","12"=>"Desember");
		                                            			foreach ($months as $key=>$val) {
		                                            			 	echo '<option value="'.$key.'">'.$val.'</option>';
		                                            			}
		                                            		?>		                                            		
		                                            	</select>

		                                            	<select  style="width:70px" name="key_person_year" id="key_person_year" >
		                                            		<?php 
		                                            			for ($i=1900; $i<=1995 ; $i++) { 
		                                            				echo '<option value="'.$i.'">'.$i.'</option>';
		                                            			}
		                                            		?>		                                            		
		                                            	</select>
		                                            	
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No KTP</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="key_person_ktp" id="key_person_ktp" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Tinggal</label>
		                                        <div class="col-md-4"><textarea class="form-control" name="key_person_alamat" id="key_person_alamat" ></textarea></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Provinsi</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="provinsi2" id="provinsi2"  onchange='$("#kabupaten2").empty();ajax_dropdown("kabupaten2","kabupaten/0/"+this.value);'></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Kota/Kabupaten</label>
		                                        <div class="col-md-4"><select class="form-control" name="kabupaten2" id="kabupaten2" onchange='$("#kecamatan2").empty();ajax_dropdown("kecamatan2","kecamatan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldurl" class="col-md-4 control-label">Alamat Kecamatan</label>
		                                        <div class="col-md-4"><select class="form-control" name="kecamatan2" id="kecamatan2" onchange='$("#kelurahan2").empty();ajax_dropdown("kelurahan2","kelurahan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kelurahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="kelurahan2" id="kelurahan2" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Kode Pos</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="key_person_kodepos" id="kecamatan2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No Telepon</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_telp2" id="no_telp2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">No Handphone</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="no_hp2" id="no_hp2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Alamat email</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="email2" id="email2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Akta Pendirian Perusahaan</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="akta_file" id="akta_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">NPWP</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="npwp_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Rekening Koran (1 tahun terakhir)</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="rek_koran_file" id="rek_koran_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Tabungan/Giro/Deposito (1 tahun terakhir)</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="tabungan_file" id="tabungan_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">KTP</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="ktp_file" id="ktp_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
		                                    </div>
										</div>
								    </div>

									<div class="tab-pane" id="tab4">
										<div class="form-horizontal">
										<legend>Profil Pengusaha</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Pendidikan Terakhir</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Pernah/Memiliki Usaha Sejenis</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="usaha_sejenis" id="usaha_sejenis" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman usaha lainnya</div>
		                                   	</div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" required name="usaha_lain_nama1" id="usaha_lain_nama1" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" required name="usaha_lain_jenis1" id="usaha_lain_jenis1" >
		                                            	<option>Option 1</option>
		                                            </select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="usaha_lain_nama2" id="usaha_lain_nama2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="usaha_lain_jenis2" id="usaha_lain_jenis2" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="usaha_lain_nama3" id="usaha_lain_nama3" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="usaha_lain_jenis3" id="usaha_lain_jenis3" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman kerja</div>
		                                   	</div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" required name="pengalaman_perusahaan1" id="pengalaman_perusahaan1" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label" name="pengalaman_jabatan1" id="pengalaman_jabatan1" >Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" required>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label" name="pengalaman_lama1" id="pengalaman_lama1" >Lama Bekerja</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" required>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_perusahaan2" id="pengalaman_perusahaan2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_jabatan2" id="pengalaman_jabatan2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Bekerja</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_lama2" id="pengalaman_lama2" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_perusahaan3" id="pengalaman_perusahaan3" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_jabatan3" id="pengalaman_jabatan3" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Bekerja</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="pengalaman_lama3" id="pengalaman_lama3" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    </div>
								    </div>

									<div class="tab-pane" id="tab5">
										<div class="form-horizontal">
											<legend>Data Rencana SPBU</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Status Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_lahan" id="status_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Keterangan/No Perjanjian Sewa</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="keterangan_lahan" id="keterangan_lahan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No Akta Tanah</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="akta_tanah" id="akta_tanah" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Atas Nama</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="atas_nama" id="atas_nama" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Luas Lahan</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="luas_lahan" id="luas_lahan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">m2</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lebar Samping SPBU</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="lebar_samping" id="lebar_samping" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lebar Muka SPBU</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="lebar_muka" id="lebar_muka" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Produk BBM yang ingin dijual</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-lg-6"> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="bbm[]" name="bbm[]" value="1">Premium</label><br> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="bbm[]" name="bbm[]" value="2">Pertamax</label><br> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="bbm[]" name="bbm[]" value="3">Pertamina Dex</label>
		                                        	</div>
		                                            <div class="col-lg-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bbm[]" name="bbm[]" value="4">Pertamax Plus</label><br> 
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bbm[]" name="bbm[]" value="5">Solar</label>
		                                            
		                                        	</div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Produk Non BBM yang ingin dijual</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-lg-6"> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="nonbbm[]" name="nonbbm[]" value="1">LPG</label><br> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="nonbbm[]" name="nonbbm[]" value="2">Minyak Tanah</label><br> 

		                                        		<br>
		                                        	</div>
		                                            <div class="col-lg-6"> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="nonbbm[]" name="nonbbm[]" value="2">Pelumas</label><br> 
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Usaha Lainnya</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-lg-6"> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="usaha_lain[]" name="usaha_lain[]" value="1">Carwash</label><br> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="usaha_lain[]" name="usaha_lain[]" value="1">Restoran</label>
		                                        	</div>
		                                            <div class="col-lg-6"> 
		                                        		<label class="checkbox-inline"><input type="checkbox" id="usaha_lain[]" name="usaha_lain[]" value="1">Minimarket</label><br> 		   
		                                        		<label class="checkbox-inline"><input type="checkbox" id="usaha_lain[]" name="usaha_lain[]" value="1">Lain-lain </label>
		                                            	<input type="text" class="form-control">
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Sertifikat Tanah/Akta Jual Beli/Dokumen Pengganti</label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="status_lahan_file" id="status_lahan_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
										</div>
								    </div>

									<div class="tab-pane" id="tab6">
										<div class="form-horizontal">
											<legend>Tata Letak</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Umum Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_umum_lahan" id="lokasi_umum_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_lahan" id="lokasi_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Bentuk Lahan</label>
		                                        <div class="col-md-4">
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
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Tipe Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="tipe_lahan" id="tipe_lahan" ></select>
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
		                                        		<label class="radio"><input type="radio" name="optradio">&nbsp;<img src="images/posisi4.jpg" width="77" height="74" alt=""/></label>
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Batas Lokasi Lahan</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_depan_lahan" id="batas_depan_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Depan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_belakang_lahan" id="batas_belakang_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Belakang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_kanan_lahan" id="batas_kanan_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kanan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="batas_kiri_lahan" id="batas_kiri_lahan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kiri</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lebar Akses Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lebar_akses_jalan" id="lebar_akses_jalan" ></select>
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Lajur Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_lajur_jalan" id="jumlah_lajur_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Pembatas Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Arah</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_arah" id="jumlah_arah" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Permukaan Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="permukaan_jalan" id="permukaan_jalan" ></select>
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Kondisi Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="kondisi_jalan" id="kondisi_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Ketinggian Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="ketinggian_jalan" id="ketinggian_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Topografi Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="topografi_lahan" id="status_lahan_file" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (1)</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jarak_spbu_lain" id="jarak_spbu_lain" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (2)</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jarak_spbu_lain2" id="jarak_spbu_lain2" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (3)</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jarak_spbu_lain3" id="jarak_spbu_lain3" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Kendaraan/Jam</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="kendaraan_perjam" id="kendaraan_perjam" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Status Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Tingkat Perjalanan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="tingkat_perjalanan" id="tingkat_perjalanan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Kecepatan Pengguna Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="kecepatan_pengguna_jalan" id="kecepatan_pengguna_jalan" ></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">KDB</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="kdb_lahan" id="kdb_lahan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">(%)</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">GSB</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="gsb_lahan" id="gsb_lahan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
		                                    </div>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* KDB dan GSB dapat diperoleh dari Dinas Tata Kota setempat. Apabila tidak ada maka dapat menggunakan KDB dan GSB kawasan.</div>
		                                   	</div>
										</div>
								    </div>

									<div class="tab-pane" id="tab7">
										<div class="form-horizontal">
											<legend>Bentuk Kerjasama</legend>
		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11"><b>CODO (Company Owned Dealer Operated)</b>, SPBU CODO Pertamina merupakan SPBU sebagai bentuk kerjasama antara PT. Pertamina (PERSERO) dengan pihak-pihak tertentu. Antara lain kerjasama pemanfaatan lahan milik perusahaan maupun individu untuk dibangun SPBU Pertamina. Skema CODO hanya akan diberikan kepada calon SPBU tipe A, B, dan C yang ditentukan berdasarkan hasil verifikasi.<p>&nbsp;</p>
		                                        <p class="text-center"><img src="images/codo.jpg" width="700" height="509" alt=""/></p>
		                                        </div>
		                                   	</div>
										</div>
								    </div>

								    <div class="tab-pane" id="tab8">
										<div class="form-horizontal">
											<legend>Biaya Operasional</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Logistik Mesin &amp; Perlengkapan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_logistik" id="biaya_logistik" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Biaya Operasional Tenaga Kerja</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_tenaga_kerja" id="biaya_tenaga_kerja" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Operator</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_operator" id="jumlah_tenaga_operator" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Supervisor</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_supervisor" id="jumlah_tenaga_supervisor" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Security</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_security" id="jumlah_tenaga_security" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Administrasi</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_administrasi" id="jumlah_tenaga_administrasi" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Keuangan</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_keuangan" id="jumlah_tenaga_keuangan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Tenaga Kebersihan</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_tenaga_kebersihan" id="jumlah_tenaga_kebersihan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Jumlah Karyawan Ritel Non BBM</label>
		                                        <label for="fieldname" class="col-md-1 control-label"></label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="jumlah_karyawan_nonbbm" id="jumlah_karyawan_nonbbm" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Biaya Sewa Tanah</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_sewa_tanah" id="biaya_sewa_tanah" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Asuransi Aset Perusahaan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_asuransi_aset" id="biaya_asuransi_aset" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Perawatan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_perawatan" id="biaya_perawatan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Listrik</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_listrik" id="biaya_listrik" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Telepon</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_telepon" id="biaya_telepon" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Air</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_air" id="biaya_air" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Pajak Bumi Bangunan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_pbb" id="biaya_pbb" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Lain-Lain</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_lainnya" id="biaya_lainnya" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Sub Total Biaya Operasional</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <label for="fieldname" class="col-md-4 control-label" name="biaya_operasional_total" id="biaya_operasional_total" ></label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Biaya Administrasi</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_admin" id="biaya_admin" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
										</div>
								    </div>

								    <div class="tab-pane" id="tab9">
										<div class="form-horizontal">
											<legend>Rencana Investasi</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Bank</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="nama_bank" id="nama_bank" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nomor Rekening</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama Pemilik Rekening</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="nama_pemilik_rekening" id="nama_pemilik_rekening" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Biaya Pembangunan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="biaya_pembangunan" id="biaya_pembangunan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Investasi Tanah</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="investasi_tanah" id="investasi_tanah" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Investasi Bangunan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="investasi_bangunan" id="investasi_bangunan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                        		<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Filing Hall</label><br> 
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Canopy</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Kantor</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Ruang Serba Guna</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Jalan dan Lapangan Parkir</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Pagar, Taman, dan Drainage</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Toilet</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Mushola</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Ruang Genset</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                        		<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Pagar Dinding</label><br> 
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lambang Pertamina</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Gril Oil Catcher</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Rumah Racun Api</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Toko Retail</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Septic Tank</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Sumur Pantau</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lain-lain</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Pulau Pompa</label>
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Investasi Mesin &amp; Alat</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="investasi_mesin" id="investasi_mesin" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Mesin Dispenser</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Tanki Pemadam</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Genset
		                                            </div>
		                                            <div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Mesin Jet Pump</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lain-lain</label>
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Investasi Utilitas</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="investasi_utilitas" id="investasi_utilitas" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Instalasi PLN</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Instalasi Air</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Instalasi Telepon</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Hydrant Pump</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Hydrant Terpasang</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Racun Api</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lampu Explosion Proof</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lampu Jalan</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Pulau Pompa</label>
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Investasi Peralatan Pelengkap</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="investasi_peralatan" id="investasi_peralatan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
		                                        	<div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Security System</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Sound System</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Lemari Besi</label>
		                                            </div>
		                                            <div class="col-md-6">
		                                            	<label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Komputer &amp; Printer</label><br>
		                                                <label class="checkbox-inline"><input type="checkbox" id="bangunan[]" name="bangunan[]" value="1">Meubelir</label>
		                                            </div>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Modal Kerja</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="modal_kerja" id="modal_kerja" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Dana Awal Perijinan</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="dana_awal_perijinan" id="dana_awal_perijinan" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Modal Pribadi</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="modal_pribadi" id="modal_pribadi" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-4 control-label">Modal Pinjaman</label>
		                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="modal_pinjaman" id="modal_pinjaman" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lama Pinjaman</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="lama_pinjamana" id="lama_pinjamana" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">tahun</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Suku Bunga Pinjaman</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="suku_bunga_pinjaman" id="suku_bunga_pinjaman" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Droping Dana</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="droping_dana" id="droping_dana" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Grace Periode</label>
		                                        <div class="col-md-4">
		                                        	<input type="text" class="form-control" name="grace_periode" id="grace_periode" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">tahun</label>
		                                    </div>			
										</div>
								    </div>

								    <div class="tab-pane" id="tab10">
										<div class="form-horizontal">
											<legend>Preview</legend>
		                                    <div class="form-group">
		                                        <div class="panel-group align-left" id="accordion" role="tablist" aria-multiselectable="true">
												  <div class="panel panel-default">
												  	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												    <div class="panel-heading" role="tab" id="headingOne">
												      
													      <h4 class="panel-title">
													          Step 1 - Informasi Penting
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
												      <div class="panel-body">
												        <div class="form-group">
					                                    	<div class="col-md-1 text-right">1.</div>
					                                        <div class="col-md-11">Proses pendaftaran ini terdiri dari dua tahap, yaitu pengecekan seluruh dokumen yang telah dikirim calon mitra dan verifikasi lokasi.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">2.</div>
					                                        <div class="col-md-11">Keputusan mengenai hasil kelayakan bisnis ini merupakan bagian yang terpisahkan dari hasil ijin pembangunan SPBU yang dikeluarkan oleh PEMDA setempat ataupun bentuk-bentuk ijin lainnya yang dibutuhkan.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">3.</div>
					                                        <div class="col-md-11">Nomor registrasi beserta password akan diperoleh setelah calon mitra melengkapi seluruh data yang diminta.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">4.</div>
					                                        <div class="col-md-11">Nomor registrasi dan password akan dikirimkan ke email dan nomor handphone yang didaftarkan oleh calon mitra.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">5.</div>
					                                        <div class="col-md-11">Nomor registrasi dan password diperlukan oleh calon mitra untuk mengecek status aplikasi dan keperluan lainnya yang berhubungan dengan calon mitra.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">6.</div>
					                                        <div class="col-md-11">Jadwal periode pembukaan registrasi SPBU pertamina mulai dari 1 Januari 2015 - 30 Juni 2015.</div> 
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">7.</div>
					                                        <div class="col-md-11">Berikut adalah kriteria yang harus dipelajari dan dilengkapi oleh calon mitra.</div>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">Saya telah membaca dan memahami persyaratan dan prosedur pengajuan pendirian SPBU.</div>
					                                    </div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												    <div class="panel-heading" role="tab" id="headingTwo">
												      
													      <h4 class="panel-title">
													          Step 2 - Rencana Lokasi SPBU 
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
												      <div class="panel-body">
												        <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">Berikut adalah peta Rencana Perkembangan Jaringan Pertamina, silakan pilih area yang ingin Anda ajukan</div>
					                                   	</div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11"></div>
					                                   	</div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Provinsi</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label"><span ></span></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-5 control-label">Kota/Kabupaten</label>
					                                        <div class="col-md-4"><label class="control-label" id="kabupaten-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldurl" class="col-md-5 control-label">Kecamatan</label>
					                                        <div class="col-md-4"><label class="control-label" id="kecamatan-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Kelurahan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="kelurahan-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-5 control-label">Alamat</label>
					                                        <div class="col-md-4"><label class="control-label" id="alamat-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldurl" class="col-md-5 control-label">No / Kaveling / Kilometer / Persil</label>
					                                        
					                                        	<div class="col-md-2"><label class="control-label" id="kaveling-view" style="text-align:left;"></label></div>
					                                            <div class="col-md-2"><label class="control-label" id="nomor-view" style="text-align:left;"></label></div>
					                                            <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">* Lokasi yang tidak berada pada area yang telah ditetapkan Pertamina akan gagal seleksi.<br> * Lokasi pada jalan yang sama, namun berbeda kecamatan dan kelurahan masih dapat dipertimbangkan.</div>
					                                   	</div>
					                                   	<div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep2">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												    <div class="panel-heading" role="tab" id="headingThree">
												      
													      <h4 class="panel-title">
													          Step 3 - Data Pribadi & Perusahaan
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												      <div class="panel-body">
												        <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Nama Perusahaan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="perusahaan-view" style="text-align:left;"></label>
					                                        </div>
					                                        <div class="col-md-4 control-label-text-left">( Nama perusahaan tidak dapat dirubah )</div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Nama Direktur</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="direktur-view" style="text-align:left;"></label>
					                                        </div>
					                                        <div class="col-md-4 control-label-text-left">( Jika lebih dari 1, pisahkan dengan tanda koma )</div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Nama Komisaris</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="komisaris-view" style="text-align:left;">Abdul </label>
					                                        </div>
					                                        <div class="col-md-4 control-label-text-left">( Jika lebih dari 1, pisahkan dengan tanda koma )</div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Perusahaan</label>
					                                        <div class="col-md-4"><label class="control-label" id="alamat_prs-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Alamat Provinsi</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="provinsi1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Kota/Kabupaten</label>
					                                        <div class="col-md-4"><label class="control-label" id="kabupaten1-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldurl" class="col-md-4 control-label">Alamat Kecamatan</label>
					                                        <div class="col-md-4"><label class="control-label" id="kecamatan1-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kelurahan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="kelurahan1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Kode Pos</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="kodepos1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No Telepon</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="no_telp1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No Fax</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="no_fax1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No Akta Perusahaan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label"  id="no_akta_prsh-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">NPWP Perusahaan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="no_npwp_prsh-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Tanggal Pendirian</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="tgl_pendirian-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <hr>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">* Key Person diutamakan salah satu direksi atau komisaris dan merupakan orang yang bertanggungjawab atas pengajuan SPBU baru, dan harus dapat dihubungi sewaktu-waktu.</div>
					                                   	</div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Nama Key Person</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="key_person_name-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Jenis Kelamin</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="key_person_jk-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Tempat, Tanggal Lahir</label>
					                                        <div class="col-md-4 margin-minus">
					                                        	<div class="col-md-4"><label class="control-label" id="key_person_tl-view" style="text-align:left;"></label></div>
					                                            <div class="col-md-1 control-label-text-left">/</div>
					                                            <div class="col-md-2"><label class="control-label" id="key_person_date-view" style="text-align:left;"></label></div>
					                                            <div class="col-md-2"><label class="control-label" id="key_person_month-view" style="text-align:left;"></label></select></div>
					                                            <div class="col-md-3"><label class="control-label" id="key_person_year-view" style="text-align:left;"></label></select></div>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No KTP</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="key_person_ktp-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Tinggal</label>
					                                        <div class="col-md-4"><label class="control-label" id="key_person_alamat-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Alamat Provinsi</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="provinsi2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldemail" class="col-md-4 control-label">Alamat Kota/Kabupaten</label>
					                                        <div class="col-md-4"><label class="control-label" id="kabupaten2-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldurl" class="col-md-4 control-label">Alamat Kecamatan</label>
					                                        <div class="col-md-4"><label class="control-label" id="kecamatan2-view" style="text-align:left;"></label></div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Alamat Kelurahan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="kelurahan2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Kode Pos</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="key_person_kodepos-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No Telepon</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="no_telp2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">No Handphone</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="no_hp2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Alamat email</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="email2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <hr>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Akta Pendirian Perusahaan</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="akta_file-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">NPWP</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="npwp_file-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Rekening Koran (1 tahun terakhir)</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="rek_koran_file-view" style="text-align:left;">rekening-koran.pdf</label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">Tabungan/Giro/Deposito (1 tahun terakhir)</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="tabungan_file-view" style="text-align:left;">tabungan.jpg</label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-4 control-label">KTP</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="ktp_file-view" style="text-align:left;">ktp.jpg</label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-4 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep3">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												    <div class="panel-heading" role="tab" id="headingFour">
												      
													      <h4 class="panel-title">
													          Step 4 - Profil Pengusaha
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
												      <div class="panel-body">
												       <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Pendidikan Terakhir</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="pendidikan-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Pernah/Memiliki Usaha Sejenis</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="usaha_sejenis-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <hr>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman usaha lainnya</div>
					                                   	</div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="usaha_lain_nama1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
					                                        <div class="col-md-4"> 
					                                            <label class="control-label" id="usaha_lain_jenis1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="usaha_lain_nama2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="usaha_lain_jenis2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Nama Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="usaha_lain_nama3-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jenis Usaha</label>
					                                        <div class="col-md-4">
					                                            <label class="control-label" id="usaha_lain_jenis3-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <hr>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11">* Abaikan kolom lainnya jika Anda hanya memiliki satu pengalaman kerja</div>
					                                   	</div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_perusahaan1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_jabatan1-view" style="text-align:left;">Direktur</label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Lama Bekerja</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_lama1-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_perusahaan2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_jabatan2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Lama Bekerja</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_lama2-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Instansi/Perusahaan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_perusahaan3-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Jabatan</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_jabatan3-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                        <label for="fieldname" class="col-md-5 control-label">Lama Bekerja</label>
					                                        <div class="col-md-4">
					                                        	<label class="control-label" id="pengalaman_lama3-view" style="text-align:left;"></label>
					                                        </div>
					                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
					                                    </div>
					                                    <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep4">Edit Data</a></div>
					                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												    <div class="panel-heading" role="tab" id="headingFive">
												      
													      <h4 class="panel-title">
													          Step 5 - Data Rencana SPBU
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
												      <div class="panel-body">
												            <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Status Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="status_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Keterangan/No Perjanjian Sewa</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="keterangan_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">No Akta Tanah</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="akta_tanah-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Atas Nama</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="atas_nama-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Luas Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="luas_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">m2</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lebar Samping SPBU</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lebar_samping-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lebar Muka SPBU</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lebar_muka-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Produk BBM yang ingin dijual</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-lg-6">
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Premium<br>
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pertamax<br> 
						                                        		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Pertamina Dex
						                                        	</div>
						                                            <div class="col-lg-6"> 
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pertamax Plus<br> 
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Solar
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Produk Non BBM yang ingin dijual</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-lg-6">
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> LPG<br> 
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>Minyak Tanah
						                                        	</div>
						                                            <div class="col-lg-6"> 
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pelumas
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Usaha Lainnya</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-lg-6"> 
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Carwash<br> 
						                                        		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Restoran
						                                        	</div>
						                                            <div class="col-lg-6"> 
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Minimarket<br> 
						                                            	Lain-lain <label class="control-label">-</label>
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Sertifikat Tanah/Akta Jual Beli/Dokumen Pengganti</label>
						                                        <div class="col-md-4">
						                                            <label class="control-label" id="status_lahan_file-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep5">Edit Data</a></div>
						                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												    <div class="panel-heading" role="tab" id="headingSix">
												      
													      <h4 class="panel-title">
													          Step 6 - Tata Letak
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
												      <div class="panel-body">
												            <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Umum Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lokasi_umum_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lokasi_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Bentuk Lahan</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-4">
						                                        		<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked>
																		    <img src="images/bentuk1.jpg" width="77" height="74" alt=""/>
																		  </label>
																		</div>
																		<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option2">
																		    <img src="images/bentuk2.jpg" width="77" height="74" alt=""/>
																		  </label>
																		</div>
						                                           	</div>
						                                            <div class="col-md-4">
						                                            	<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios1" id="optionsRadios3" value="option3">
																		    <img src="images/bentuk3.jpg" width="77" height="74" alt=""/>
																		  </label>
																		</div>
																		<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios1" id="optionsRadios4" value="option4">
																		    <img src="images/bentuk4.jpg" width="77" height="74" alt=""/>
																		  </label>
																		</div>  
						                                            </div>
						                                            <div class="col-md-4">
						                                            	<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios1" id="optionsRadios5" value="option5">
																		    <img src="images/bentuk5.jpg" width="77" height="74" alt=""/>
																		  </label>
																		</div> 	
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Tipe Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="tipe_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Posisi Lahan</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-3">
						                                        		<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios2" id="optionsRadios6" value="option6">
																		    <img src="images/posisi1.jpg" width="50"  alt=""/>
																		  </label>
																		</div> 	 
						                                           	</div>
						                                            <div class="col-md-3">
						                                            	<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios2" id="optionsRadios7" value="option7" checked>
						                                            	 	<img src="images/posisi2.jpg" width="50"  alt=""/>
																		  </label>
																		</div>
						                                            </div>
						                                            <div class="col-md-3">
						                                            	<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios2" id="optionsRadios8" value="option8">
						                                            	 	<img src="images/posisi3.jpg" width="50"  alt=""/>
																		  </label>
																		</div>
						                                            </div>
						                                            <div class="col-md-3">
						                                            	<div class="radio">
																		  <label>
																		    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option4">
						                                            	 	<img src="images/posisi4.jpg" width="50" alt=""/>
																		  </label>
																		</div>
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Batas Lokasi Lahan</label>
						                                        <div class="col-md-4">
						                                            <label class="control-label" id="batas_depan_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Depan</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <label class="control-label" id="batas_belakang_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Belakang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <label class="control-label" id="batas_kanan_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kanan</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                            <label class="control-label" id="batas_kiri_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kiri</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lebar Akses Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lebar_akses_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Lajur Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_lajur_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Pembatas Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="pembatas_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Arah</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_arah-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Permukaan Jalan</label>
						                                        <div class="col-md-3">
						                                        	<label class="control-label" id="permukaan_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Kondisi Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="kondisi_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Ketinggian Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="ketinggian_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Topografi Lahan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="topografi_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (1)</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jarak_spbu_lain-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (2)</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jarak_spbu_lain2-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jarak dengan SPBU Lain (3)</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jarak_spbu_lain3-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Kendaraan/Jam</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="kendaraan_perjam-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Status Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="status_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Tingkat Perjalanan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="tingkat_perjalanan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Kecepatan Pengguna Jalan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="kecepatan_pengguna_jalan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">KDB</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="kdb_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">(%)</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">GSB</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="gsb_lahan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">meter</label>
						                                    </div>
						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11">* KDB dan GSB dapat diperoleh dari Dinas Tata Kota setempat. Apabila tidak ada maka dapat menggunakan KDB dan GSB kawasan.</div>
						                                   	</div> 
						                                   	<div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep6">Edit Data</a></div>
						                                   	</div>
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
												    <div class="panel-heading" role="tab" id="headingSeven">
												      
													      <h4 class="panel-title">
													         Step 7 - Bentuk Kerjasama
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
												      <div class="panel-body">
												         <div class="form-group">
					                                    	<div class="col-md-1 text-right">&nbsp;</div>
					                                        <div class="col-md-11"><b>CODO (Company Owned Dealer Operated)</b>, SPBU CODO Pertamina merupakan SPBU sebagai bentuk kerjasama antara PT. Pertamina (PERSERO) dengan pihak-pihak tertentu. Antara lain kerjasama pemanfaatan lahan milik perusahaan maupun individu untuk dibangun SPBU Pertamina. Skema CODO hanya akan diberikan kepada calon SPBU tipe A, B, dan C yang ditentukan berdasarkan hasil verifikasi.<p>&nbsp;</p>
					                                        <p class="text-center"><img src="images/codo.jpg" width="700" height="509" alt=""/></p>
					                                        </div>
					                                   	</div>  
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
												    <div class="panel-heading" role="tab" id="headingEight">
												      
													      <h4 class="panel-title">
													         Step 8 - Biaya Operasional
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
												      <div class="panel-body">
												            <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Logistik Mesin &amp; Perlengkapan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_logistik-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Biaya Operasional Tenaga Kerja</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_tenaga_kerja-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Operator</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_operator-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Supervisor</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_supervisor-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Security</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_security-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Administrasi</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_administrasi-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Keuangan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_keuangan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Tenaga Kebersihan</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_tenaga_kebersihan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Karyawan Ritel Non BBM</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="jumlah_karyawan_nonbbm-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">orang</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Biaya Sewa Tanah</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_sewa_tanah-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Asuransi Aset Perusahaan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_asuransi_aset-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Perawatan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_perawatan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Listrik</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_listrik-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Telepon</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_telepon-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Konsumsi Air</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_air-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Pajak Bumi Bangunan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_pbb-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Lain-Lain</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_lainnya-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Sub Total Biaya Operasional</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_operasional_total-view" style="text-align:left;"><b></b></label>
						                                        </div>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Biaya Administrasi</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_admin-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div> 
						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep7">Edit Data</a></div>
						                                   	</div>  
												      </div>
												    </div>
												  </div>
												  <div class="panel panel-default">
												  	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
												    <div class="panel-heading" role="tab" id="headingNine">
												      
													      <h4 class="panel-title">
													         Step 9 - Rencana Investasi
													      </h4>
												      
												    </div>
												    </a>
												    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
												      <div class="panel-body">
												            <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nama Bank</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="nama_bank-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nomor Rekening</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="nomor_rekening-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Nama Pemilik Rekening</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="nama_pemilik_rekening-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Biaya Pembangunan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="biaya_pembangunan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Investasi Tanah</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="investasi_tanah-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Investasi Bangunan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="investasi_bangunan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Filing Hall<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Canopy<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Kantor<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Ruang Serba Guna<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Jalan dan Lapangan Parkir<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pagar, Taman, dan Drainage<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Toilet<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Mushola<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Ruang Genset
						                                            </div>
						                                            <div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pagar Dinding<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lambang Pertamina<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Gril Oil Catcher<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Rumah Racun Api<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Toko Retail<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Septic Tank<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Sumur Pantau<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lain-lain<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pulau Pompa
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Investasi Mesin &amp; Alat</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="investasi_mesin-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Mesin Dispenser<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Tanki Pemadam<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Genset
						                                            </div>
						                                            <div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Mesin Jet Pump<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lain-lain
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Investasi Utilitas</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="investasi_utilitas-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Instalasi PLN<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Instalasi Air<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Instalasi Telepon<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Hydrant Pump<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Hydrant Terpasang
						                                            </div>
						                                            <div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Racun Api<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lampu Explosion Proof<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lampu Jalan<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Pulau Pompa
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Investasi Peralatan Pelengkap</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="investasi_peralatan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
						                                        <div class="col-md-4">
						                                        	<div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Security System<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Sound System<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Lemari Besi
						                                            </div>
						                                            <div class="col-md-6">
						                                            	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Komputer &amp; Printer<br>
						                                                <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Meubelir
						                                            </div>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Modal Kerja</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="modal_kerja-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Dana Awal Perijinan</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="dana_awal_perijinan-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Modal Pribadi</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="modal_pribadi-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-4 control-label">Modal Pinjaman</label>
						                                        <label for="fieldname" class="col-md-1 control-label">Rp</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="modal_pinjaman-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Lama Pinjaman</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="lama_pinjamana-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">tahun</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Suku Bunga Pinjaman</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="suku_bunga_pinjaman-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Droping Dana</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="droping_dana-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">*</label>
						                                    </div>
						                                    <div class="form-group">
						                                        <label for="fieldname" class="col-md-5 control-label">Grace Periode</label>
						                                        <div class="col-md-4">
						                                        	<label class="control-label" id="grace_periode-view" style="text-align:left;"></label>
						                                        </div>
						                                        <label for="fieldname" class="col-md-3 control-label-text-left">tahun</label>
						                                    </div> 
						                                    <div class="form-group">
						                                    	<div class="col-md-1 text-right">&nbsp;</div>
						                                        <div class="col-md-11 align-right"><a href="#" class="btn btn-primary" id="EditStep9">Edit Data</a></div>
						                                   	</div>  
												      </div>
												    </div>
												  </div>
												  
												  
												</div>
		                                    </div>
											
										</div>
								    </div>

									<ul class="pager wizard">
										<li class="previous first" style="display: none;"><a href="#">First</a></li>
										<li class="previous"><a href="#">Previous</a></li>
										<li class="next last" style="display: none;"><a href="#">Last</a></li>
									  	<li class="next"><a href="#">Next</a></li>
									  	<li class="finish"><a href="javascript:;">Finish</a></li>
									</ul>
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