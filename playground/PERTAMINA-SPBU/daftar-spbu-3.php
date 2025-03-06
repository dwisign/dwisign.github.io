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
									<div class="col-xs-3 text-center"><a href="daftar-spbu-3.php" class="active">1 </a></br></br><p class="small">Data Registrasi</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-4.php">2 </a></br></br><p class="small">Profil Pengusaha</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-5.php">3 </a></br></br><p class="small">Tata Letak</p></div>
									<div class="col-xs-3 text-center"><a href="daftar-spbu-6.php">4 </a></br></br><p class="small">Preview</p></div>	
								</div>
									

								</br>


								<div class="progress">
								  <div class="progress-bar progress-bar-success" style="width: 20%"></div>
								</div>


								
							  	

								    
							  		
											<div class="form-horizontal">
											<legend>Data Registrasi</legend>

												<div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Nama Pemohon</label>
			                                        <div class="col-md-4">
			                                        	<input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Tempat, Tanggal Lahir</label>
			                                        <div class="col-md-2">
			                                        	<input type="text" class="form-control">
			                                        </div>
			                                        <div class="col-md-2">
			                                        	<input type="text" class="form-control" id="datepicker">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">No. KTP</label>
			                                        <div class="col-md-4">
			                                        	<input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Alamat Provinsi</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kabupaten/Kota</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kecamatan</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Alamat Kelurahan</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Alamat Tinggal</label>
			                                        <div class="col-md-4">
			                                        	<textarea class="form-control" rows="3"></textarea>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div> 
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Kode Pos</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">No. Telepon</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">No. Handphone</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Email</label>
			                                        <div class="col-md-4">
			                                            <input type="email" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Pekerjaan</label>
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
			                                        <label for="fieldname" class="col-md-5 control-label">Pendidikan Terakhir</label>
			                                        <div class="col-md-4">
			                                            <select class="form-control" name="pendidikan" id="pendidikan" ></select>
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">No. NPWP Perorangan</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">No. Rekening</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Jumlah Saldo Rekening</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Deposito</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Giro</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Saham</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Kepemilikan Valas</label>
			                                        <div class="col-md-4">
			                                            <input type="text" class="form-control">
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>

			                                    <hr>

			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan KTP</label>
			                                        <div class="col-md-4">
			                                            <input type="file" name="npwp_file" id="npwp_file" >
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan NPWP</label>
			                                        <div class="col-md-4">
			                                            <input type="file" name="npwp_file" id="npwp_file" >
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Rekening Koran</label>
			                                        <div class="col-md-4">
			                                            <input type="file" name="npwp_file" id="npwp_file" >
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>
			                                    <div class="form-group">
			                                        <label for="fieldname" class="col-md-5 control-label">Upload Scan Tabungan/Giro/Deposito </label>
			                                        <div class="col-md-4">
			                                            <input type="file" name="npwp_file" id="npwp_file" >
			                                        </div>
			                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
			                                    </div>    
		                                    </div>
								    
					

									<ul class="pager">
									  <li class="previous"><a href="daftar-spbu-2.php">← Prev</a></li>
									  <li class="next"><a href="daftar-spbu-4.php">Next →</a></li>
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