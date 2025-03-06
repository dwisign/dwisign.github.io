<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Home</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_home style -->
    <link href="css/ipapav7_home.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.css"> 
  </head>
  <body>
    
    <?php
      require("inc/topbar-login.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm">
      <div class="banner-tagline">
        <div class="row">
          <div class="col-sm-12">
            <h1>Temukan kantor idaman <br/>di Jakarta yang sesuai dengan <br/>kebutuhan Anda.</h1>
            <div class="form-group office-search">
              <img class="img-building-top" src="img/building-ornament.png">
              <div class="input-group">
                <input class="form-control form-rounded" type="text">
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">Cari</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="homeAdSlide">
        <div class="row">
          <div class="col-sm-8">
            <div class="owl-carousel owl-theme" id="homeAdSlide">
              <div class="item"><a href="#"><img src="img/bannerAd-1.jpg"></a></div>
              <div class="item"><a href="#"><img src="img/bannerAd-2.jpg"></a></div>
              <div class="item"><a href="#"><img src="img/bannerAd-1.jpg"></a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <a href="#"><img src="img/downloadAd.jpg" width="100%" class="download-vert"><img src="img/downloadAd-hrz.jpg" width="100%" class="download-hrz"></a>
          </div>
        </div>
      </div>

      <div id="officeHome" class="officeTabFilter">
        <div class="row">
          <div class="col-sm-12">
            <ul class="list-inline tab-title nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#gedungkantor" aria-controls="home" role="tab" data-toggle="tab"><h3>Gedung perkantoran</h3></a></li>
              <li role="presentation"><h3>&nbsp&nbsp|&nbsp&nbsp</h3></li>
              <li role="presentation"><a href="#serviceoffice" aria-controls="profile" role="tab" data-toggle="tab"><h3>Service office</h3></a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane in active text-center" id="gedungkantor">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome" style="background: url('img/alianz-tower.jpg');">
                          <div class="bg-lens-black">
                            <p>Alianz Tower<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome" style="background: url('img/dea-tower.jpg');">
                          <div class="bg-lens-black">
                            <p>Dea Tower<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome" style="background: url('img/menara-prima.jpg');">
                          <div class="bg-lens-black">
                            <p>Menara Prima<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome" style="background: url('img/nobel-house.jpg');">
                          <div class="bg-lens-black">
                            <p>South Quarter<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br/>
                  <a href="#" class="btn btn-danger btn-rounded">CARI LEBIH BANYAK</a>
              </div>
              <div role="tabpanel" class="tab-pane text-center" id="serviceoffice">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome with-zoom" style="background: url('img/marque.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                          <div class="bg-lens-black">
                            <p>Marquee<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome with-zoom" style="background: url('img/green-hub.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                          <div class="bg-lens-black">
                            <p>Green Hub<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome with-zoom" style="background: url('img/ceo-suite.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                          <div class="bg-lens-black">
                            <p>CEO Suite<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                      <a href="#">
                        <div class="item-officeHome with-zoom" style="background: url('img/cre8-voffice.jpeg');"><!--gunakan with-zoom class untuk image yang tidak sesuai ukurannya-->
                          <div class="bg-lens-black">
                            <p>Cre8 Voffice<br/><span class="small">12 Office Available</span></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <br/>
                  <a href="#" class="btn btn-danger btn-rounded">CARI LEBIH BANYAK</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="layanan">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="title-1 with-hr">Layanan</h3>
            <div class="row gutter-0">
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan">
                  <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-icondesign"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Design</h4>
                      <p>Kami menciptakan design interior kantor terbaik yang sesuai dengan keinginan dan impian Anda.</p>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan">
                  <!-- <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-iconbuild"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Build</h4>
                      <p>IPAPA Indonesia memiliki tim yang telah berpengalaman dalam membangun kantor idaman Anda. </p>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-iconfurniture"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Furniture</h4>
                      <p>Kami menyediakan berbagai pilihan produk furnitur premium dengan harga yang kompetitif dan tampilan yang menawan untuk digunakan pada ruang kantor atau pusat bisnis Anda.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan">
                  <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-iconmoving"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Moving</h4>
                      <p>Tim profesional kami akan membantu anda dalam proses pindah/moving kantor dan berbagai fasilitas lain, ke kantor yang baru secara aman dan nyaman.</p>
                    </div>
                  </div>     
                </div> 
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan">
                  <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-iconfitting-out"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Fitting Out</h4>
                      <p>Kami menawarkan layanan Fitting Out dengan kualitas terbaik dan kami memastikan fasilitas yang kami berikan memiliki nilai lebih.</p>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan">
                  <div class="row">
                    <div class="col-xs-3">
                      <span class="icon ipapa-icondemolish"></span>
                    </div>
                    <div class="col-xs-9">
                      <h4>Demolish</h4>
                      <p>Dengan tim yang profesional dan alat yang modern, kami dapat melakukan proses Demolish kantor Anda secara cepat dan teratur.</p>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item-layanan item-layanan-last">
                  <div class="row">
                    <div class="col-xs-12 text-center">
                      <br/><br/>
                      <h4>Pelajari Lebih Lanjut</h4>
                      <a href="#" class="btn btn-danger btn-rounded">PELAJARI <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="klien">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="title-1 with-hr">Klien Kami</h3>
            <div class="klien">
                <div class="owl-carousel owl-theme" id="klien">
                  <div><img src="img/puma.jpg"></div>
                  <div><img src="img/oppo.jpg"></div>
                  <div><img src="img/qraved.jpg"></div>
                  <div><img src="img/instashop.jpg"></div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="blogSubscribeHome">
        <div class="row gutter-0">
          <div class="col-sm-6">
            <div class="blogHome">  
              <h3 class="title-1">Artikel Terbaru</h3>
              <br/>
              <div class="itemBlogHome">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="img/blog-1.jpg" width="100%">
                  </div>
                  <div class="col-xs-8">
                    <a href="blog-detail.php">Pelaku Startup Asing Minati Sewa Kantor di Bali</a>
                    <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                  </div>
                </div>
              </div>
              <div class="itemBlogHome">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="img/blog-2.jpg" width="100%">
                  </div>
                  <div class="col-xs-8">
                    <a href="blog-detail.php">6 Camilan Sehat di Kantor Yang tak Bikin Gendut</a>
                    <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                  </div>
                </div>
              </div>
              <div class="itemBlogHome">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="img/blog-3.jpg" width="100%">
                  </div>
                  <div class="col-xs-8">
                    <a href="blog-detail.php">Tips Aman Meninggalkan Rumah Saat Mudik Lebaran</a>
                    <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                  </div>
                </div>
              </div>
              <br/>
              <a href="blog.php"><p class="small text-right">BACA LEBIH BANYAK <span class="fa fa-angle-right" aria-hidden="true"></span></p></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="sbscrb">
              <div class="ico-sbscrb">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </div>
              <h4>Subscribe sekarang !</h4><br/>
              <div class="input-sbscrb">
                <input class="form-control form-rounded form-sbscrb" id="inputEmail" placeholder="Email" type="text">
                <a href="#" class="btn btn-danger btn-rounded btn-sbscrb"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
              </div>
              <br/>
              <p class="small">Dapatkan pemberitahuan dari update kami di email Anda</p>
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

    <!--Special js for selected page-->
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //SLIDER PROMO
        $('#homeAdSlide').owlCarousel({
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

        //SLIDER SERVICE
        $('#serviceOfficeHome').owlCarousel({
            loop:true,
            nav:true,
            margin: 20,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })

        //SLIDER MITRA
        $('#klien').owlCarousel({
            loop:true,
            nav:false,
            dots: false,
            margin: 150,
            responsive:{
                0:{
                    items:3,
                    margin: 10
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
      });
    </script> 
  </body>
</html>