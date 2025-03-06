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
        <h3>Masuk ke dalam akun</h3>
        <p>Belum punya akun? <a href="sign-up.php">Silakan daftar disini</a></p>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group form-login">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <input class="form-control form-rounded" placeholder="Email" type="email">
            </div>
            <div class="form-group form-login">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input class="form-control form-rounded" placeholder="Password" type="password">
            </div>
            <div class="form-group btn-login">
              <a href="#" class="btn btn-danger btn-block btn-rounded">MASUK</a>
              <br/><p>atau</p>
              <a href="#" class="btn btn-outline-grey btn-block btn-rounded"><i class="fa fa-facebook-square" aria-hidden="true"></i> Masuk dengan facebook</a>
              <br/><p><a href="lupa-password.php">Lupa password?</a></p>
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