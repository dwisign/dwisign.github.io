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
        <h3>Lupa password</h3>
        <p><a href="sign-up.php">Daftar</a> atau <a href="sign-in.php">Masuk</a></p>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group form-login">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <input class="form-control form-rounded" placeholder="Email" type="email">
            </div>
            <div class="form-group btn-login">
              <a href="lupa-password-submit.php" class="btn btn-danger btn-block btn-rounded">MASUK</a>
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