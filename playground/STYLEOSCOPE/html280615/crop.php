<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	

	  		<div class="top-bar"></div>
		 	
			<!-- START HOME CONTENT -->


			<div class="content container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h3>Crop or resize that </br>awesome face.</h3>
						<div class="row upload row-crop">
							<div class="col-xs-12">
						        <div class="img-container">
						          <img src="images/img-crop.jpg" alt="Picture">
						        </div>
						        <!-- <div class="PostContent">
                                      <div class="boxes">
                                          <div id="crop_container2"></div>
                                          <div class="result2">
                                                <div id="movement"></div>
                                                <div id="zoom"></div>
                                                <div id="rot"></div>
                                                <br />
                                                <div id="result_image"></div>
                                          </div> 
                                          <div class="cleared"></div>  
                                      </div>  
                                      <br />
                                      <span class="button-wrapper" id="restore2">
                                            <span class="l"> </span>
                                            <span class="r"> </span>
                                            <a class="button" href="javascript:void(0)">Restore</a>
                                      </span>
                                      <span class="button-wrapper" id="crop2">
                                            <span class="l"> </span>
                                            <span class="r"> </span>
                                            <a class="button" href="javascript:void(0)">Crop</a>
                                      </span>   
                                </div> -->
						     </div>
						</div>

						<div class="row zoom">
							<button class="btn btn-warning" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
					             <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
					        </button>
					        <button class="btn btn-warning" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">  
					              <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>    
					        </button>
						</div>

						<div class="row upload-btn">
							<div class="col-sm-6">
								<a href="#" class="btn btn-white btn-block btn-take-photo" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 100 }" type="button">CROP</a>
							</div>
							<div class="col-sm-6">
								<a href="upload-photo.php" class="btn btn-white btn-block">CANCEL</a>
							</div>
						</div>           
					</div>
				</div>
			</div>


			<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
	          <div class="modal-dialog crop-img-modal">
	            <div class="modal-content">
	              <div class="modal-header">
	                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
	                <h4 class="modal-title" id="getCroppedCanvasTitle">Preview</h4>
	              </div>
	              <div class="modal-body text-center"></div>
	              <div class="modal-footer">
	                <a href="enter-name.php" class="btn btn-default btn-block" type="button">SUBMIT</a>
	              </div>
	            </div>
	          </div>
	        </div><!-- /.modal -->

			

			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 

		     <?php
		     require("inc/js.php");
		     ?> 
	  	</body><!-- END BODY -->
</html>