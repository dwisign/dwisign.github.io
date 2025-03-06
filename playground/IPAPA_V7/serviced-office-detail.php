<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Serviced Office Detail</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_office_detail.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.css">
    <!--Fancybox-->
    <link href="plugin/fancybox/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css">
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm cntn-inside cntn-office">

    <div id="officeBanner">
      <div class="officeBannerTitle">
        <h3 class="title-2">CEO Suite - WIsma GKBI</h3>
        <p class="with-hr">Jalan RA Kartini Kav.8 Cilandak, Jakarta Selatan</p>
        <div class="optionOffice">
          <span class="searchInside">
            <a href="#"><span class="labelOption">Cari kantor lain </span><i class="fa fa-search" aria-hidden="true"></i></a>
          </span>
          <!-- <span class="compareInside">
            <a href="#"><span class="labelOption">Bandingkan </span><i class="fa fa-columns" aria-hidden="true"></i></a>
          </span> -->
          <span class="singleIcon">
            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
            </span>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 officeBannerLeft">
          <div class="owl-carousel owl-theme" id="servicedOfficeGallery">
            <div class="item">
                <a class="fancybox zoom" href="img/ceo-suite-wisma-gkbi.jpeg">
                  <div class="imgOfficeBanner" style="background: url('img/ceo-suite-wisma-gkbi.jpeg')"></div>
                </a>
            </div>
            <div class="item">
                <a class="fancybox zoom" href="img/green-hub.jpeg">
                  <div class="imgOfficeBanner" style="background: url('img/green-hub.jpeg')"></div>
                </a>
            </div>
            <div class="item">
                <a class="fancybox zoom" href="img/cre8-voffice.jpeg">
                  <div class="imgOfficeBanner" style="background: url('img/cre8-voffice.jpeg')"></div>
                </a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 officeBannerRight">
          <div class="row gutter-0">
            <div class="col-xs-12">
              <div class="boxPrice">
                <h4><span class="ipapa-iconmoney"></span> <span class="priceText">IDR 180000</span></h4>
                <p class="smallInfo">Start From</p>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="boxAvailable">
                <i class="fa fa-building-o" aria-hidden="true"></i>
                <h3>59</h3>                  
                <p class="smallInfo">Office Available</p>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="boxView">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <h3>34358</h3>
                <p class="smallInfo">View Interest</p>
              </div>
            </div>
            <div class="col-xs-12">
              <a href="#">
                <div class="campaign" style="background: url('img/instagram-banner.jpg')"></div>
              </a>
            </div>
          </div> 
        </div>
      </div>
    </div>

    <div id="unit-kantor">
      <h3 class="title-4 with-hr">Unit Serviced Office</h3>
      <div class="switch-button">
        <a href="#" id="half"><i class="fa fa-th" aria-hidden="true"></i></a>&nbsp&nbsp<a href="#" id="full"><i class="fa fa-th-list" aria-hidden="true"></i></a>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <a class="showUnit" target="1" id="pushDesc">
            <div class="item-unit">
              <div class="row">
                <div class="col-xs-4">
                  <p><span class="smallInfo">Unit</span><br/><b>TA 06-12</b></p>
                </div>
                <div class="col-xs-3">
                  <p><span class="smallInfo">Area(m2)</span><br/><b>280</b></p>
                </div>
                <div class="col-xs-2">
                  <p><span class="smallInfo">Floor</span><br/><b>12</b></p>
                </div>
                <div class="col-xs-3">
                  <div class="arrowBlue">
                    <i class="fa fa-arrow-circle-o-right fa-2x" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 switchDown">
          <a class="showUnit" target="2">
            <div class="item-unit">
              <div class="row">
                <div class="col-xs-4">
                  <p><span class="smallInfo">Unit</span><br/><b>TA 06-13</b></p>
                </div>
                <div class="col-xs-3">
                  <p><span class="smallInfo">Area(m2)</span><br/><b>280</b></p>
                </div>
                <div class="col-xs-2">
                  <p><span class="smallInfo">Floor</span><br/><b>12</b></p>
                </div>
                <div class="col-xs-3">
                  <div class="arrowBlue">
                    <i class="fa fa-arrow-circle-o-right fa-2x" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div id="unit1" class="col-sm-12 switchTop targetUnit collapse">
          <div class="row">
            <div class="col-sm-8" id="officeUnitGalleryWrap">
                <div class="owl-carousel owl-theme officeUnitGallery" id="officeUnitGallery1">
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/cre8-voffice.jpeg');"></div></div>
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/conclave.jpeg');"></div></div>
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/green-hub.jpeg');"></div></div>
                </div>
                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-outline-grey rounded-left">Galeri</a>
                  <a href="#" class="btn btn-outline-grey rounded-right">Gambar 360</a>
                </div>
            </div>
            <div class="col-sm-4">
              <h5 class="title-3">TA 06-12</h5><hr>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. <br/><br/>It has survived not only 
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
              </p>
            </div>
          </div>
        </div>
        <div id="unit2" class="col-sm-12 targetUnit collapse">
          <div class="row">
            <div class="col-sm-8" id="officeUnitGalleryWrap">
                <div class="owl-carousel owl-theme officeUnitGallery" id="officeUnitGallery2">
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/cre8-voffice.jpeg');"></div></div>
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/conclave.jpeg');"></div></div>
                  <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/green-hub.jpeg');"></div></div>
                </div>
                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-outline-grey rounded-left">Galeri</a>
                  <a href="#" class="btn btn-outline-grey rounded-right">Gambar 360</a>
                </div>
            </div>
            <div class="col-sm-4">
              <h5 class="title-3">TA 06-13</h5><hr>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. <br/><br/>It has survived not only 
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <a class="showUnit" target="3">
            <div class="item-unit">
              <div class="row">
                <div class="col-xs-4">
                  <p><span class="smallInfo">Unit</span><br/><b>TA 06-14</b></p>
                </div>
                <div class="col-xs-3">
                  <p><span class="smallInfo">Area(m2)</span><br/><b>280</b></p>
                </div>
                <div class="col-xs-2">
                  <p><span class="smallInfo">Floor</span><br/><b>12</b></p>
                </div>
                <div class="col-xs-3">
                  <div class="arrowBlue">
                    <i class="fa fa-arrow-circle-o-right fa-2x" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a class="showUnit" target="4">
            <div class="item-unit">
              <div class="row">
                <div class="col-xs-4">
                  <p><span class="smallInfo">Unit</span><br/><b>TA 06-15</b></p>
                </div>
                <div class="col-xs-3">
                  <p><span class="smallInfo">Area(m2)</span><br/><b>280</b></p>
                </div>
                <div class="col-xs-2">
                  <p><span class="smallInfo">Floor</span><br/><b>12</b></p>
                </div>
                <div class="col-xs-3">
                  <div class="arrowBlue">
                    <i class="fa fa-arrow-circle-o-right fa-2x" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div id="unit3" class="col-sm-12 targetUnit collapse">
            <div class="row">
              <div class="col-sm-8" id="officeUnitGalleryWrap">
                  <div class="owl-carousel owl-theme" id="officeUnitGallery3">
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/cre8-voffice.jpeg');"></div></div>
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/conclave.jpeg');"></div></div>
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/green-hub.jpeg');"></div></div>
                  </div>
                  <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-outline-grey rounded-left">Galeri</a>
                    <a href="#" class="btn btn-outline-grey rounded-right">Gambar 360</a>
                  </div>
              </div>
              <div class="col-sm-4">
                <h5 class="title-3">TA 06-14</h5><hr>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                  printer took a galley of type and scrambled it to make a type specimen book. <br/><br/>It has survived not only 
                  five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                </p>
              </div>
            </div>
        </div>
        <div id="unit4" class="col-sm-12 targetUnit collapse">
            <div class="row">
              <div class="col-sm-8" id="officeUnitGalleryWrap">
                  <div class="owl-carousel owl-theme" id="officeUnitGallery4">
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/cre8-voffice.jpeg');"></div></div>
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/conclave.jpeg');"></div></div>
                    <div class="item"><div class="officeUnitGalleryItem" style="background: url('img/green-hub.jpeg');"></div></div>
                  </div>
                  <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-outline-grey rounded-left">Galeri</a>
                    <a href="#" class="btn btn-outline-grey rounded-right">Gambar 360</a>
                  </div>
              </div>
              <div class="col-sm-4">
                <h5 class="title-3">TA 06-15</h5><hr>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                  printer took a galley of type and scrambled it to make a type specimen book. <br/><br/>It has survived not only 
                  five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                </p>
              </div>
            </div>
        </div>
      </div>
      <br/>
      <div class="text-center">
        <p>Masuk ke dalam akun Anda untuk lebih banyak unit kantor</p>
        <a href="sign-in.php" class="btn btn-danger btn-rounded">MASUK <i class="fa fa-sign-in" aria-hidden="true"></i></a>
      </div>
    </div>

    <div id="fasilitas">
      <h3 class="title-4">Fasilitas</h3>
      <div class="white-box-facility">
        <div class="owl-carousel owl-theme" id="officeFacility">
          <div class="item">
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
          </div>
          <div class="item">
            <div class="listFacility"><i class="fa fa-credit-card" aria-hidden="true"></i> ATM</div>
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
          </div>
          <div class="item">
            <div class="listFacility"><i class="fa fa-hospital-o" aria-hidden="true"></i> Health / Clinic</div>
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
          </div>
          <div class="item">
            <div class="listFacility"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Post Office</div>
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
          </div>
          <div class="item">
            <div class="listFacility"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Post Office</div>
            <div class="listFacility"><i class="fa fa-university" aria-hidden="true"></i> Bank</div>
          </div>
        </div>
      </div>
    </div>

    <div id="officeInformation">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="title-4">Lokasi</h3>
          <div class="white-box-sidebar"></div>
        </div>
        <div class="col-sm-8">
          <div class="deskripsiWrap">
            <h3 class="title-4 with-hr">Deskripsi Serviced Office</h3>
            <p>
              Rent Office Space South Quarter - Pt Intiland Development Tbk is currently developing the largest commercial estate in the vicinity to have green building certification called South Quarter, this estate will comprise of 3 office tower, which will be divided into 2 towers for lease and 1 tower for strata in the TB Simatupang area.
              <br/><br/>
              South Quarter is located in Jl RA Kartini, South Jakarta. The location can be easily access through Pondok indah or Cilandak.  This exclusive area is surrounded by many other office buildings, hospital, hotels and other famous landmark in South Jakarta area.
              <br/><br/>
              South Quarter offers many facilities within this building, such as telecommunication system, security system, fire alarm system that compliance with NFPA and local building code, other facilities include Restaurant or café, Atm centre, supermarket, children day care and also a bookstore.
              <br/><br/>
              With Highly Prestigious Location Nestled Perfectly in the commercial area and plenty of facilities to let you enjoy the benefits of modern lifestyle, South quarter offer a very competitive price to its tenants; it will be a perfect space for your office.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="officeSimilar">
        <h3 class="title-4 with-hr">Gedung kantor yang serupa</h3>
        <div class="row">
          <div class="col-sm-3 col-xs-6 text-center">
            <a href="#">
              <div class="item-officeSimilar with-zoom" style="background: url('img/marque.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                <div class="bg-lens-black">
                  <p>Marquee<br/><span class="small">12 Office Available</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-6 text-center">
            <a href="#">
              <div class="item-officeSimilar with-zoom" style="background: url('img/green-hub.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                <div class="bg-lens-black">
                  <p>Green Hub<br/><span class="small">12 Office Available</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-6 text-center">
            <a href="#">
              <div class="item-officeSimilar with-zoom" style="background: url('img/ceo-suite.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                <div class="bg-lens-black">
                  <p>CEO Suite<br/><span class="small">12 Office Available</span></p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-6 text-center">
            <a href="#">
              <div class="item-officeSimilar with-zoom" style="background: url('img/cre8-voffice.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                <div class="bg-lens-black">
                  <p>Cre8 Voffice<br/><span class="small">12 Office Available</span></p>
                </div>
              </div>
            </a>
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

    <!--Special js for selected page-->
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script src="plugin/fancybox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#servicedOfficeGallery').owlCarousel({
            loop: true,
            nav: true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        $('#officeFacility').owlCarousel({
            loop:false,
            nav:false,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            dots:true,
            margin:50,
            responsive:{
                0:{
                    items:1
                },
                640:{
                    items:2
                },
                768:{
                    items:4
                }
            }
        })
        $('#officeUnitGallery1').owlCarousel({
            loop:true,
            nav:false,
            dots:true,
            items: 1
        })
        $('#officeUnitGallery2').owlCarousel({
            loop:true,
            nav:false,
            dots:true,
            items: 1
        })
        $('#officeUnitGallery3').owlCarousel({
            loop:true,
            nav:false,
            dots:true,
            items: 1
        })
        $('#officeUnitGallery4').owlCarousel({
            loop:true,
            nav:false,
            dots:true,
            items: 1
        })
        $("closeTab").click(function(){$("div").removeClass("targetUnit");}); 
      });

      //SHOWHIDE UNIT
      $(function(){
          $('.showUnit').click(function(){
            $('.targetUnit').hide();
            $('#unit'+$(this).attr('target')).show();
          });
          $(".item-unit").click(function() {
            $(".active").removeClass("active");
            $(this).addClass("active");
          });
      });

      //SWITCH GRID LIST    
      $('#full').click(function(event){event.preventDefault();$('#unit-kantor .col-sm-6').addClass('col-sm-12');$('#unit-kantor .col-sm-12').removeClass('col-sm-6');});
      $('#half').click(function(event){event.preventDefault();$('#unit-kantor .col-sm-12').addClass('col-sm-6');});
      //$('#pushDesc').click(function(event){event.preventDefault();$('switchDown').addClass('col-sm-pull-12');$('switchTop').addClass('col-sm-push-12');});

      //RUN FANCYBOX
      $('.fancybox').fancybox();
    </script> 
  </body>
</html>

