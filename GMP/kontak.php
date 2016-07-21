<!DOCTYPE html>
<html lang="en">
	  	<head>
		    <?php
		    require("inc/header.php");
		    ?>   
	  	</head>

  	  	<body>	
	  		<?php
	    	require("inc/top-bar.php");
	    	?>
		 	
			<!-- START HOME CONTENT -->
			
			<div class="banner banner-content">
				<div class="container wide">
					<div class="row content-title-inside">
						<div class="col-sm-4 sub-title">
							<h4>KONTAK KAMI</h4>
						</div>
						<div class="col-sm-8 text-right">
							<ul class="list-inline breadcrumb">
								<li><a href="index.php">HOME</a></li>
								<li class="active">KONTAK</li>
							</ul>
						</div>
		      		</div>
				</div>
			</div>

			<div class="content content-inside">
				<div class="container wide">
					<div class="row">
						<div class="col-sm-8">
							<p>
								Pesan/Masukan yang anda kirimkan akan diterima oleh admin@gunungmadu.co.id.
								Untuk memudahkan kami dalam menghubungi anda kembali mohon bisa mencantumkan email anda
							</p>

							<form>
							  <fieldset>
							  	<div class="form-group">
							      <label for="inputName" class="control-label">Nama</label>
							      <input class="form-control" id="inputName" placeholder="Nama" type="text">
							    </div>
							    <div class="form-group">
							      <label for="inputEmail" class="control-label">Email</label>
							      <input class="form-control" id="inputEmail" placeholder="Email" type="email">
							    </div>
							    <div class="form-group">
							      <label for="inputSubjek" class="control-label">Subjek</label>
							      <input class="form-control" id="inputSubjek" placeholder="Subjek" type="text">
							    </div>
							    <div class="form-group">
							      <label for="textArea" class="control-label">Pesan</label>
							        <textarea class="form-control" rows="3" id="textArea"></textarea>
							    </div>
							    <div class="form-group">
							        <button type="reset" class="btn btn-default">Cancel</button>
							        <button type="submit" class="btn btn-orange">Submit</button>
							    </div>
							  </fieldset>
							</form>	
						</div>

						<div class="col-sm-1"></div>

						<div class="col-sm-3 address">
							<h5><b>KANTOR PUSAT</b></h5>
							<p>
								Jalan Kebon Sirih no.39</br>
								Jakarta Pusat - Kode Pos 33211</br>
								Phone : (021)31937575</br>
								Fax : (021)3142159
							</p>

							</br>

							<h5><b>KANTOR CABANG</b></h5>
							<p>
								Jalan Kebon Sirih no.39</br>
								Jakarta Pusat - Kode Pos 33211</br>
								Phone : (021)31937575</br>
								Fax : (021)3142159
							</p>

							</br>

							<h5><b>PERKEBUNAN & PABRIK</b></h5>
							<p>
								Jalan Kebon Sirih no.39</br>
								Jakarta Pusat - Kode Pos 33211</br>
								Phone : (021)31937575</br>
								Fax : (021)3142159
							</p>
	
						</div>
						

						




					</div>
				</div>
			</div>









			<!-- END HOME CONTENT  -->


			 <?php
			 require("inc/footer.php");
			 ?> 
	    <?php
	    require("inc/js.php");
	    ?> 


	  	</body><!-- END BODY -->
</html>