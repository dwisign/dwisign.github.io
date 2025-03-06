<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Profil</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_about.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm cntn-inside">
      <div class="map-desc">
        <h3 class="title-1 with-hr">Profil Kami</h3>
        <div class="row">
          <div class="col-md-7">
            <img src="img/map-about.png" width="100%">
          </div>
          <div class="col-md-5 about-desc">
            <p>
              <br/>
              IPAPA database has covered hundreds of building, 
              ranging from skyscraper towers to office houses. 
              The numbers in our database are growing constantly, 
              and Indonesia is a perfect place to invest in property 
              business nowadays. Rest assured, will help you in 
              searching for your ideal office space IPAPA.<br/><br/>

              Our professional Marketing Associates are ready to serve 
              and consult you in selecting which office to choose. They 
              will be there to accompany and assist you in every step 
              of the way until you can settle into your brand new office. 
            </p>
          </div>
        </div>
      </div>

      <div class="workCulture">
        <h3 class="title-1 with-hr">Budaya dan Proses Kerja</h3>
        <p>
          We believe that the best way to deliver satisfaction to all of our client is through strong <br/>dedication, so not only the result that we care about but the whole proccess as well. 
        </p>
        <div class="aboutSlide">
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel owl-theme" id="aboutSlide">
                <div class="item"><img src="img/work-culture-01.jpg"></div>
                <div class="item"><img src="img/work-culture-02.jpg"></div>
                <div class="item"><img src="img/work-culture-03.jpg"></div>
                <div class="item"><img src="img/work-culture-04.jpg"></div>
                <div class="item"><img src="img/work-culture-05.jpg"></div>
                <div class="item"><img src="img/work-culture-06.jpg"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="advantage">
        <h3 class="title-1 with-hr">Keunggulan</h3>
        <div class="row">
          <div class="col-sm-4 item-advantage">
            <h1 class="icon ipapa-iconprice"></h1>
            <h4>Harga yang sebanding</h4>
            <p>Worry-less about the price. We offer the best quality services at a reasonable price. </p>
          </div>
          <div class="col-sm-4 item-advantage">
            <h1 class="icon ipapa-iconcustomer"></h1>
            <h4>Fokus pada pelanggan</h4>
            <p>It’s all about giving satisfaction. As this company grow through experiences, we have completed many customers’ complex request. Because when we see you smile, our sweat pays off.  </p>
          </div>
          <div class="col-sm-4 item-advantage">
            <h1 class="icon ipapa-iconteam"></h1>
            <h4>Tim yang profesional</h4>
            <p>The more complex the task, the more interesting for us. We have a solid team of professional people to ensure that your request is fully resolved  </p>
          </div>
        </div>
      </div>

      <div class="career-sec">
        <h3 class="title-1 with-hr">Bergabung bersama kami</h3>
        <div class="row">
          <div class="col-xs-12 item">
            <img src="img/career-icon.png">
            <br/><br/>
            <p>Kami selalu mencari orang-orang berbakat  yang mampu mempercepat kemajuan IPAPA Indonesia . Tertarik? Yuk, <br/>bergabung dengan kami! Kami akan dengan senang hati menerimamu. </p>
            <br/>
            <a href="#" class="btn btn-danger btn-rounded">IPAPA KARIR</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="contact-sec">
         <img src="img/map-marker-ipapa-blue.png" width="100">
         <h4>IPAPA Indonesia</h4>
         <p>Bellagio Boutique Mall, 1st Floor Unit OL2-12, <br>Jalan Mega Kuningan Barat Kav. E3.4, Setiabudi, RT.5/RW.2, <br>Jakarta Selatan 12950, Indonesia</p>
      </div>
    </div>
    <!--end content wrap-->

    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?>

    <!--Special js for selected page-->
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#aboutSlide').owlCarousel({
            loop:false,
            nav:false,
            dots:false,
            margin: 0,
            responsive:{
                0:{
                    items:2
                },
                480:{
                    items:3
                },
                1024:{
                    items:6
                }
            }
        })
      });
    </script> 
  </body>
</html>