<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Blog</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_blog.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    
    <?php
      require("inc/topbar-blog.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm cntn-inside">

      <div id="blog-slider" class="homeBlogSlide">
        <div class="row">
          <div class="col-md-8 blog-left">
            <div class="owl-carousel owl-theme" id="homeBlogSlide">
              <div class="item">
                <a href="blog-detail.php">
                    <h4 class="caption-blog-slider">Karyawan kerja secara remote, kantor WordPress akan dijual</h4>
                    <h4 class="view-count"><i class="fa fa-eye"></i> 102</h4> 
                    <div class="bg-lens-black"></div>
                    <div class="img-item-blog-slider" style="background: url('img/banner-blog-1.jpg');"></div> 
                </a>
              </div>
              <div class="item">
                <a href="blog-detail.php">
                    <h4 class="caption-blog-slider">Pelaku Startup Asing Minati Sewa Kantor di Bali </h4>
                    <h4 class="view-count"><i class="fa fa-eye"></i> 102</h4>  
                    <div class="bg-lens-black"></div>
                    <div class="img-item-blog-slider" style="background: url('img/banner-blog-2.jpg');"></div> 
                </a>
              </div>
              <div class="item">
                <a href="blog-detail.php">
                    <h4 class="caption-blog-slider">Telegram harus buka kantor di Indonesia </h4>
                    <h4 class="view-count"><i class="fa fa-eye"></i> 102</h4>  
                    <div class="bg-lens-black"></div>
                    <div class="img-item-blog-slider" style="background: url('img/banner-blog-3.jpg');"></div> 
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 blog-right">
              <!-- Nav tabs -->
              <div class="officeTabFilter">
                <ul class="nav tab-title nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#terbaru" aria-controls="terbaru" role="tab" data-toggle="tab"><h4>Terbaru</h4></a></li>
                  <li role="presentation"><h4>&nbsp|&nbsp</h4></li>
                  <li role="presentation"><a href="#terpopuler" aria-controls="terpopuler" role="tab" data-toggle="tab"><h4>Populer</h4></a></li>
                </ul>
              </div>
 
              <!-- Tab panes -->
              <div class="tab-content blog-tab-content">
                <div role="tabpanel" class="tab-pane active" id="terbaru">
                  <p class="small more-blog"><a href="blog-kategori.php">LEBIH BANYAK <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                  <div class="blogHome">  
                    <div class="itemBlogHome">
                      <div class="row">
                        <div class="col-xs-4">
                          <img src="img/blog-1.jpg" width="100%">
                        </div>
                        <div class="col-xs-8">
                          <p class="title-itemBlogHome"><a href="blog-detail.php">Pelaku Startup Asing Minati Sewa Kantor di Bali Pelaku Startup Asing Minati Sewa Kantor di Bali</a></p>
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
                          <p class="title-itemBlogHome"><a href="blog-detail.php">6 Camilan Sehat di Kantor Yang tak Bikin Gendut</a></p>
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
                          <p class="title-itemBlogHome"><a href="blog-detail.php">Tips Aman Meninggalkan Rumah Saat Mudik Lebaran</a></p>
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
                          <p class="title-itemBlogHome"><a href="blog-detail.php">6 Camilan Sehat di Kantor Yang tak Bikin Gendut</a></p>
                          <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="terpopuler">
                  <p class="small more-blog"><a href="blog-kategori">LEBIH BANYAK <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                  <div class="blogHome">
                    <div class="itemBlogHome">
                      <div class="row">
                        <div class="col-xs-4">
                          <img src="img/blog-2.jpg" width="100%">
                        </div>
                        <div class="col-xs-8">
                          <p class="title-itemBlogHome"><a href="blog-detail.php">6 Camilan Sehat di Kantor Yang tak Bikin Gendut</a></p>
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
                          <p class="title-itemBlogHome"><a href="blog-detail.php">Tips Aman Meninggalkan Rumah Saat Mudik Lebaran</a></p>
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
                          <p class="title-itemBlogHome"><a href="blog-detail.php">6 Camilan Sehat di Kantor Yang tak Bikin Gendut</a></p>
                          <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                        </div>
                      </div>
                    </div>
                    <div class="itemBlogHome">
                      <div class="row">
                        <div class="col-xs-4">
                          <img src="img/blog-1.jpg" width="100%">
                        </div>
                        <div class="col-xs-8">
                          <p class="title-itemBlogHome"><a href="blog-detail.php">Pelaku Startup Asing Minati Sewa Kantor di Bali</a></p>
                          <p class="blogDateHome">Rabu, 30-08-2017 | Bisnis</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div id="blog-cat-home">
        <div class="row">
          <div class="col-md-8 blog-left">
            <div class="blog-cat-item">
              <h3 class="title-1 with-hr">Bisnis</h3>
              <div class="more-blog-cat"><a href="blog-kategori.php">Cari Lebih Banyak <span class="fa fa-angle-right" aria-hidden="true"></span></a></div>
              <div class="row">
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-1.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali Pelaku start up asing minati sewa kantor di Bali </a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-2.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-3.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-cat-item">
              <h3 class="title-1 with-hr">Interior</h3>
              <div class="more-blog-cat"><a href="blog-kategori.php">Cari Lebih Banyak <span class="fa fa-angle-right" aria-hidden="true"></span></a></div>
              <div class="row">
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-1.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-2.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-3.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="blog-cat-item">
              <h3 class="title-1 with-hr">Properti</h3>
              <div class="more-blog-cat"><a href="blog-kategori.php">Cari Lebih Banyak <span class="fa fa-angle-right" aria-hidden="true"></span></a></div>
              <div class="row">
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-1.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-2.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <a href="blog-detail.php"><div class="img-item-blog" style="background: url(img/blog-3.jpg);"></div></a>
                  <p class="date-item-blog">Jumat, 25-08-2017</p>
                  <p class="title-item-blog"><a href="blog-detail.php">Pelaku start up asing minati sewa kantor di Bali</a></p>
                  <div class="more-view">
                    <div class="row">
                      <div class="col-xs-6">
                        <p><i class="fa fa-eye" aria-hidden="true"></i> 192</p>
                      </div>
                      <div class="col-xs-6 text-right">
                        <p><a href="blog-detail.php">Baca <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <a><img src="img/downloadAd-hrz.jpg" width="100%"></a>
          </div>
          <div class="col-md-4 blog-right">
            <div class="sidebar">
              <div class="white-box-sidebar">
                <h3 class="title-4 with-hr">Kategori</h3>
                <div class="list-white-box"><a href="blog-kategori.php">Bisnis <span class="count-1">(20)</span></a></div>
                <div class="list-white-box"><a href="blog-kategori.php">Interior <span class="count-1">(30)</span></a></div>
                <div class="list-white-box"><a href="blog-kategori.php">kuliner <span class="count-1">(50)</span></a></div>
                <div class="list-white-box"><a href="blog-kategori.php">Internasional <span class="count-1">(40)</span></a></div>
                <div class="list-white-box"><a href="blog-kategori.php">Berita <span class="count-1">(20)</span></a></div>
              </div>
              <div class="white-box-sidebar">
                <h3 class="title-4 with-hr">Arsip</h3>
                <p class="small more-blog"><a href="blog-arsip.php">LIHAT SEMUA <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
                <div class="list-white-box"><a href="blog-arsip.php">2015 <span class="count-1">(20)</span></a></div>
                <div class="list-white-box"><a href="blog-arsip.php">2016 <span class="count-1">(30)</span></a></div>
                <div class="list-white-box"><a href="blog-arsip.php">2017 <span class="count-1">(50)</span></a></div>
              </div>
              <div class="ad-sidebar">
                <a href="#"><img src="img/downloadAd.jpg" width="100%" class="download-vert"><img src="img/downloadAd-hrz.jpg" width="100%" class="download-hrz"></a>
              </div>
              <div class="sbscrb-sidebar">
                <div class="ico-sbscrb-sidebar">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <h4>Subscribe sekarang !</h4><br/>
                <div class="input-sbscrb-sidebar">
                  <input class="form-control form-rounded form-sbscrb-sidebar" id="inputEmail" placeholder="Email" type="text">
                  <a href="#" class="btn btn-danger btn-rounded btn-sbscrb-sidebar"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
                <br/>
                <p class="small">Dapatkan pemberitahuan dari update kami di email Anda</p>
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

    <!--Special js for selected page-->
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //SLIDER PROMO
        $('#homeBlogSlide').owlCarousel({
            loop: true,
            nav: false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots: true,
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
      });
    </script> 
  </body>
</html>