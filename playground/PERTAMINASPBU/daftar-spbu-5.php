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
									<div class="col-xs-3 text-center"><a href="daftar-spbu-4.php">2 </a></br></br><p class="small">Profil Pengusaha</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-5.php" class="active">3 </a></br></br><p class="small">Tata Letak</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-6.php">4 </a></br></br><p class="small">Preview</p></div>	
								</div>
									

								</br>


								<div class="progress">
								  <div class="progress-bar progress-bar-success" style="width: 60%"></div>
								</div>


								
										<div class="form-horizontal">
											<legend>Tata Letak</legend>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Umum Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_umum_lahan" id="lokasi_umum_lahan" >
		                                        		<option>Pulau Tanpa Supply Point</option>
		                                        		<option>Dalam Kota</option>
		                                        		<option>Luar Kota</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lokasi Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lokasi_lahan" id="lokasi_lahan" >
		                                        		<option>Kawasan Perdagangan/Jasa/Perkantoran/Komersial</option>
		                                        		<option>Kawasan Permukiman Kota</option>
		                                        		<option>Kawasan Pertanian/Perkebunan/Hutan</option>
		                                        		<option>Kawasan Industri</option>
		                                        		<option>Lainnya</option>
		                                        	</select>
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
		                                        	<select class="form-control" name="tipe_lahan" id="tipe_lahan" >
		                                        		<option>Lahan Kosong</option>
		                                        		<option>Tidak Ada Perkerasan/Perkerasan Tanah</option>
		                                        		<option>Perkerasan Aspal/Batu</option>
		                                        		<option>Lahan Bekas Pemanfaatan Tertentu</option>
		                                        	</select>
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
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Depan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
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
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Belakang</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
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
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kanan</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">&nbsp;</label>
		                                        <div class="col-md-4">
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
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">Kiri</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Status Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" >
		                                        		<option>Jalan Kabupaten/Kota</option>
		                                        		<option>Jalan Provinsi</option>
		                                        		<option>Jalan Negara</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Kelas Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="status_jalan" id="status_jalan" >
		                                        		<option>Kelas 1</option>
		                                        		<option>Kelas 2</option>
		                                        		<option>Kelas 3A</option>
		                                        		<option>Kelas 3B</option>
		                                        		<option>Kelas 3C</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Tingkat Perjalanan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="tingkat_perjalanan" id="tingkat_perjalanan" >
		                                        		<option>Jarak Dekat</option>
		                                        		<option>Jarak Sedang</option>
		                                        		<option>Jarak Jauh</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Kecepatan Pengguna Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="kecepatan_pengguna_jalan" id="kecepatan_pengguna_jalan" >
		                                        		<option>Tinggi</option>
		                                        		<option>Sedang</option>
		                                        		<option>Rendah</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Jalan Masuk</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_jalan_masuk" id="jumlah_jalan_masuk" >
		                                        		<option>Dibatasi Secara Berdaya Guna</option>
		                                        		<option>Dibatasi</option>
		                                        		<option>Tidak Dibatasi</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Lebar Akses Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="lebar_akses_jalan" id="lebar_akses_jalan" >
		                                        		<option>< 5m</option>
		                                        		<option>5m - 11m</option>
		                                        		<option>12 - 16m</option>
		                                        		<option>> 16m</option>
		                                        	</select>
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Lajur Akses Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="jumlah_lajur_jalan" id="jumlah_lajur_jalan" >
		                                        		<option>1 Lajur</option>
		                                        		<option>2 Lajur</option>
		                                        		<option>3 Lajur</option>
		                                        		<option>4 Lajur</option>
		                                        		<option>> 5 Lajur</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Keberadaan Median/Pembatas Jalan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Status Kepemilikan Lahan</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Hak Milik</option>
		                                        		<option>Sewa</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No. Akta Tanah</label>
		                                        <div class="col-md-4">
		                                        	<input class="form-control"></input>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Izin Pemerintah Daerah</label>
		                                        <div class="col-md-4">
		                                        	<select class="form-control" name="pembatas_jalan" id="pembatas_jalan" >
		                                        		<option>Ada</option>
		                                        		<option>Tidak Ada</option>
		                                        	</select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <hr>
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Sertifikat Tanah/Akta Jual Beli/Dokumen Pengganti </label>
		                                        <div class="col-md-4">
		                                            <input type="file" name="npwp_file" id="serifikat_tanah_file" >
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div> 

		                                    
		                                    
		                                   
		                                    
		                                    
		                                    
		                                    
		                                    
		                                    
										</div>
									
										
								
							  	

								    
							  		
										
								    
								    

									


								<ul class="pager">
								  <li class="previous"><a href="daftar-spbu-4.php">← Prev</a></li>
								  <li class="next"><a href="daftar-spbu-6.php">Next →</a></li>
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