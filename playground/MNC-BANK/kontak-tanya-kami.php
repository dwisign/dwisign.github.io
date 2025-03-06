<!DOCTYPE html>

<html lang="en">

<?php

require("inc/header.php");

?> 

				



		  <body>



		  	<div class="container">

		  		<?php

				require("inc/top-bar-2.php");

				?>

				



				<div class="bg-content"></div>

				



				<ol class="breadcrumb">

				  <li><a href="#">Kontak Kami</a></li>

				  <li>Tanya Kami</li>

				</ol>



				<div class="row services">

					<!-- Nav tabs -->

					<div class="tab-control">

						<ul class="nav nav-tabs">
						  <li>

						  	<a href="kontak-call-me.php" style="float:left;">Call Me</a>

						  	<img src="images/panah-2.png" class="tab-panah-img">

						  </li>

						  <li>

						  	<a href="kontak-daftar-cabang.php" style="float:left;">Daftar Cabang</a>

						  	<img src="images/panah-2.png" class="tab-panah-img">

						  </li>

						   <!--<li>

						  	<a href="#" style="float:left;">Daftar ATM</a>

						  	<img src="images/panah-2.png" class="tab-panah-img">

						  </li>-->

						  <li class="active">

						  	<a href="kontak-tanya-kami.php" style="float:left;">Tanya Kami</a>

						  	<img src="images/panah-2.png" class="tab-panah-img">

						  </li>

						  

						</ul>

					</div>



					<!-- Tab panes -->

					<div class="tab-container" id="scrollbar1">

					  <div class="tab-pane active" id="tabunganmnc">

					  	  <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>

				            <div class="viewport">

				                 <div class="overview">



									 <h3>Tanya Kami</h3>
									 <br>
									 <form class="form-horizontal left-label" role="form">

									 <div class="form-group">
									    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
									    <div class="col-sm-7">
									      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
									    </div>
									  </div> 

									  <div class="form-group">
									    <label for="inputEmail" class="col-sm-3 control-label">Name</label>
									    <div class="col-sm-7">
									      <div class="row">
									      	<div class="col-xs-5">
									      		<select  class="form-control">
										    		<option>Bapak/Saudara</option>
										    		<option>Ibu/Saudari</option>
									    		</select>
									      	</div>

									      	<div class="col-xs-7">
									      		<input type="text" class="form-control" id="inputName" placeholder="Name">
									      	</div>
									  	  </div>
									    </div>
									  </div>

									  

									  <div class="form-group">
									    <label for="inputCompany" class="col-sm-3 control-label">Perusahaan</label>
									    <div class="col-sm-7">
									      <input type="company" class="form-control" id="inputCompany" placeholder="Perusahaan">
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputTelepon" class="col-sm-3 control-label">No Telepon</label>
									    <div class="col-sm-7">
									      <input type="telepon" class="form-control" id="inputTelepon" placeholder="Telepon">
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputJanis" class="col-sm-3 control-label">Jenis</label>
									    <div class="col-sm-7">
									    	<select  class="form-control">
									    		<option>Tabungan dan Deposito</option>
									    		<option>Kartu Kredit</option>
									    		<option>Pinjaman Konsumer</option>
									    		<option>Pinjaman Komersial</option>
									    		<option>Treasury</option>
									    		<option>Pembiayaan Perdagangan</option>
									    		<option>Umum</option>
									    		<option>Sekretaris Perusahaan</option>
									    	</select>
									      
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputTelepon" class="col-sm-3 control-label">Judul Pesan</label>
									    <div class="col-sm-7">
									      <input type="telepon" class="form-control" id="inputTelepon" placeholder="Judul Pesan">
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="inputPesan" class="col-sm-3 control-label">Pesan</label>
									    <div class="col-sm-7">
									      <textarea class="form-control" rows="5"></textarea>
									    </div>
									  </div>

									  <div class="form-group">
									  	<label for="inputPhone" class="col-sm-3 control-label">Ketik Kode</label>
									    <div class="col-sm-7">
									    	<div class="row">
										    	<div class="col-xs-5">
										    		<img src="images/capca.jpg">
										    	</div>
										    	<div class="col-xs-6">
										    		<a href="#">Coba Kode Lain</a>
										    	</div>
									    	</div>
									    	<br>
									    	<input type="text" class="form-control" id="inputPhone" placeholder="kode">
									    </div>
									  </div>

									  <div class="form-group">
									    <div class="col-sm-offset-3 col-sm-8">
									      <a href="#" class="btn btn-default2">Kirim Pesan</a>
									    </div>
									    
									  </div>

									</form>

									

								</div>  

							</div>	

					  </div>  

					</div>

				</div>

		  		







			<?php

			require("inc/footer.php");

			?> 







		  	</div><!--END-CONTAINER-->



		  	



		  	<?php

			require("inc/js.php");

			?> 





				

						



		  </body>

</html>	





				

				