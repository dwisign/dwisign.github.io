<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require("inc/header.php");
    ?>
    <style type="text/css">
      .footer{
        position: relative;
        background: #F2F2F2;
        color: #0094C1;
        border-top: 1px solid #dedede;
        margin-top: 30px;
      }
    </style> 
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <div class="banner">
      <div class="row">
        <div class="col-xs-12">
          <div class="badge-promo">
            <img src="img/badge.png">
          </div>
          <div class="caption text-center">
            <h1>GET SPECIAL PRICE<br/>FROM OUR SERVICES</h1>
            <h4>BY USING COUPON CODE</h4>
          </div>
          <div class="callToAct-btn text-center">
            <a href="#coupon" class="btn btn-cta"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> GRAB YOUR COUPON NOW!</a>
            <br/><br/>
            <h5>Design // Build // Fitting Out <br/> Furniture // Moving // Demolish</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="coupon-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="border text-center" id="coupon">
              <div class="image-coupon">
                <img src="img/coupon.jpg" width="400">
                <h4 class="coupon-code"><span class="label label-primary"><b>CHK0867HG</b></span></h4>
              </div>
              <br/>
              <a href="#" class="btn btn-default btn-xs">Send Coupon To Email</a><br/>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tou">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h4 class="text-center"><b>TERM OF USE</b></h4><br/>
            <div class="row">
              <div class="col-sm-6">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries, but also the leap into electronic typesetting, 
                  remaining essentially unchanged.<br/><br/> 

                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
                  Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                  including versions of Lorem Ipsum.
                </p>
              </div>
              <div class="col-sm-6">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries, but also the leap into electronic typesetting, 
                  remaining essentially unchanged.<br/><br/> 

                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
                  Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                  including versions of Lorem Ipsum.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact text-center">
      <img src="img/logo-ipapa-full.png" class="logo-footer">
      <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@ipapa.co.id<br/><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +62 (21) 300 66 511</p>
    </div>


    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?> 
  </body>
</html>