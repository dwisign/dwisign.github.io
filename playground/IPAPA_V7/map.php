<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Map</title>
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