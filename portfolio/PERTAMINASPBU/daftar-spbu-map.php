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

								
								
								
							  	

								    

								   
								    		<div class="form-horizontal">
								      		<legend>Rencana Lokasi SPBU (MAP) </legend>
		                                    
		                                    <div class="form-group">	
		                                        <div class="col-md-12">
		                                        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.3061112405708!2d106.84271700000001!3d-6.2233079999999985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38d200f03e5%3A0xaf54cb631563acce!2sKota+Kasablanka!5e0!3m2!1sid!2sid!4v1427365997759" width="100%" height="450" frameborder="0" style="border:0"></iframe>
		                                        </div>
		                                   	</div>

		                                   	</br>

								
								
								
							  	

								    

								   
								    		<div class="form-horizontal">
								      		<legend>Rencana Lokasi SPBU</legend>
		                                    
		                                    
		                                    <div class="form-group">
		                                        <label for="fieldname" class="col-md-5 control-label">Provinsi</label>
		                                        <div class="col-md-4">
		                                            <select class="form-control" name="provinsi" id="provinsi" onchange='$("#kabupaten").empty();ajax_dropdown("kabupaten","kabupaten/0/"+this.value);'></select>
		                                        </div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-5 control-label">Kota/Kabupaten</label>
		                                        <div class="col-md-4"><select class="form-control" name="kabupaten" id="kabupaten" onchange='$("#kecamatan").empty();ajax_dropdown("kecamatan","kecamatan/0/"+this.value);'></select></div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldemail" class="col-md-5 control-label">Alamat</label>
		                                        <div class="col-md-4"><textarea class="form-control" name="alamat" id="alamat" ></textarea></div>
		                                        <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="fieldurl" class="col-md-5 control-label">Kecamatan</label>
		                                        <div class="col-md-4"><select class="form-control" name="kecamatan" id="kecamatan" onchange='$("#kelurahan").empty();ajax_dropdown("kelurahan","kelurahan/0/"+this.value);'></select></div>
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
		                                        <label for="fieldurl" class="col-md-5 control-label">Kode Pos</label>	
	                                            <div class="col-md-4"><input type="text" class="form-control" name="nomor" id="nomor" ></div>
	                                            <label for="fieldname" class="col-md-3 control-label-text-left">&nbsp;</label>
		                                    </div>

		                                    <div class="form-group">
		                                    	<div class="col-md-1 text-right">&nbsp;</div>
		                                        <div class="col-md-11">* Lokasi yang tidak berada pada area yang telah ditetapkan Pertamina akan gagal seleksi.<br> * Lokasi pada jalan yang sama, namun berbeda kecamatan dan kelurahan masih dapat dipertimbangkan.</div>
		                                   	</div>
		                                   	</div>
		                                    
		                                    
		                                    
		                                    
		                                   	</div>
								    



									<ul class="pager">
									  <li class="previous"><a href="daftar-spbu-map.php">← Prev</a></li>
									  <li class="next"><a href="daftar-spbu-2.php">Next →</a></li>
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