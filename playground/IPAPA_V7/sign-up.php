<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Sign In</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_login.css" rel="stylesheet">
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm cntn-inside">
      <div class="ipapa-login-wrap">
        <img src="img/logo-ipapa.png" class="ipapa-logo" width="120">
        <h3>Daftar akun baru</h3>
        <p>Daftar akun baru dengan mengisi form di bawah ini.<br/>Jika sudah punya akun <a href="sign-in.php">Silakan Sign in</a></p>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="row gutter-5">
              <div class="col-sm-6">
                <div class="form-group form-login">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Nama Depan" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group form-login">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Nama Belakang" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group form-login">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Email" type="email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group form-login">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Telp" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group form-login">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Password" type="password">
                </div>
                <div class="form-group form-login">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  <input class="form-control form-rounded" placeholder="Konfirmasi Password" type="password">
                </div>
                <div class="form-group btn-login">
                  <a href="#" class="btn btn-danger btn-block btn-rounded">DAFTAR</a>
                  <br/><p>atau</p>
                  <a href="#" class="btn btn-outline-grey btn-block btn-rounded"><i class="fa fa-facebook-square" aria-hidden="true"></i> Masuk dengan facebook</a>
                </div>
              </div>
            </div>         
          </div>
        </div>
      </div>


    </div>
    <!--end content wrap-->

    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?> 
  </body>
</html>