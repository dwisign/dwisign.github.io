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

								    
								    		<div class="form-horizontal" data-toggle="validator" role="form">
								      		<legend>Registrasi Pengguna</legend>
								      		<div class="row">
								      			<div class="col-md-6 col-md-offset-3">
				                                    <div class="alert alert-dismissible alert-success">
													  <button type="button" class="close" data-dismiss="alert">×</button>
													  <strong>Selamat!</strong> Akun anda telah masuk ke dalam database kami. 
													  Untuk proses selanjutnya kami telah mengirimkan link dan kode aktivasi akun Anda melalui email dan SMS.  
													</div>
												</div>
											</div>

		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Nama</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_name" id="inputName" value="Rhazak">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">No Handphone</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_handphone" id="user_hanphone" value="08567891011">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Email</label>
		                                        <div class="col-md-4">
		                                            <input type="text" class="form-control" name="user_email" id="user_email" value="rhazak@gmail.com">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Password</label>
		                                        <div class="col-md-4">
		                                            <input type="password" class="form-control" name="user_password" id="user_password" value="123456">
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div> 
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Confirm Password</label>
		                                        <div class="col-md-4">
		                                            <input type="password" class="form-control" name="user_password" id="user_password" value="123456">
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
										            <input type="checkbox" checked> Saya telah membaca dan memahami persyaratan dan prosedur pengajuan pendirian SPBU.
										          </label>
										        </div>
										      </div>
										    </div> 
											</br></br>
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