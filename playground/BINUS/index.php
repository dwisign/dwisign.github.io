<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require("inc/header.php");
    ?> 
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?>

    
    <!--BANNER-->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div id="slideBanner" class="owl-carousel">
                <div class="item"><a href="#"><img src="image/banner.jpg" width="100%"></a></div>
                <div class="item"><a href="#"><img src="image/banner.jpg" width="100%"></a></div>
                <div class="item"><a href="#"><img src="image/banner.jpg" width="100%"></a></div>
                <div class="item"><a href="#"><img src="image/banner.jpg" width="100%"></a></div>
            </div>   
          </div>
        </div>
      </div>
    </div>

    <!--ACCREDITATION-->
    <div class="accreditation text-center">
      <div class="container">
        <img src="image/ico-acc.png">
        <h4 class="title-blue">Accreditation</h4><br/>
        <div id="slideAccreditation">        
          <div class="item"><a href="#"><img src="image/efmd.png" alt="accreditation"></a></div>
          <div class="item"><a href="#"><img src="image/banpt.png" alt="accreditation"></a></div>
          <div class="item"><a href="#"><img src="image/best.png" alt="accreditation"></a></div>
          <div class="item"><a href="#"><img src="image/accsb.png" alt="accreditation"></a></div>
        </div>
      </div>
    </div>
    <!--END ACCREDITATION-->

    <!--PROGRAM-->
    <div class="program">
      <div class="container">
        <div class="title-center">
          <img src="image/ico-prog.png">
          <h4 class="title-blue">Programs</h4>
        </div>
        <div class="row gutter-0">
          <div class="col-sm-3">
            <ul class="nav menu-prog">
              <li class=""><a href="#international" data-toggle="tab" aria-expanded="false">Undergraduate Program International</a></li>
              <li class="active"><a href="#regular" data-toggle="tab" aria-expanded="true">Undergraduate Program Regular</a></li>
              <li class=""><a href="#magister" data-toggle="tab" aria-expanded="true">Magister Management Program</a></li>
              <li class=""><a href="#doctor" data-toggle="tab" aria-expanded="true">Doctoral in Management Program</a></li>
            </ul>
          </div>
          <div class="col-sm-9">
            <div id="myTabContent" class="tab-content prog-content">
              <h4 class="subtitle-blue">School of Business & Management</h4><br/>
              <div class="tab-pane fade" id="international">
                Undergraduate Program International
              </div>
              <div class="tab-pane fade active in" id="regular">
                <div class="item-prog">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="image/prog-img-1.jpg" width="100%">
                    </div>
                    <div class="col-md-4">
                      <h4><a href="#">Alam Sutra</a></h4>
                      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="#" class="small">Read More <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-prog">
                        <li><a href="#">International Bussiness Management</a></li>
                        <li><a href="#">International Marketing</a></li>
                        <li><a href="#">Bussiness Creation</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item-prog">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="image/prog-img-2.jpg" width="100%">
                    </div>
                    <div class="col-md-4">
                      <h4><a href="#">Kemanggisan</a></h4>
                      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="#" class="small">Read More <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-prog">
                        <li><a href="#">Management</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item-prog item-last">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="image/prog-img-3.jpg" width="100%">
                    </div>
                    <div class="col-md-4">
                      <h4><a href="#">Bekasi</a></h4>
                      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="#" class="small">Read More <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-prog">
                        <li><a href="#">Bussiness Management</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="magister">
                Magister Management Program
              </div>
              <div class="tab-pane fade" id="doctor">
                Doctoral in Management Program
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END PROGRAM-->


    <!--ABOUT - LOCATION-->
    <div class="about-loc">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 about-left">
            <div class="title-center">
              <img src="image/ico-about.png">
              <h4 class="title-blue">Tentang SOB</h4>
            </div>
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
            <br/>
            <h5 class="content-title">Visi</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <br/>
            <h5 class="content-title">Misi</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          </div>
          <div class="col-sm-6">
            <div class="title-center">
              <img src="image/ico-loc.png">
              <h4 class="title-blue">Location</h4>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.30766276427!2d106.64672991437045!3d-6.223102462680378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbe0345c4c65%3A0xfbaf475ba0a7978d!2sBinus+University+-+Alam+Sutera!5e0!3m2!1sen!2s!4v1496903661424" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h4><b>Alam Sutera Campus</b></h4>
            <ul class="list-inline list-loc">
              <li><a href="#">Binus Kemanggisan</a></li>
              <li><a href="#">Binus JWC</a></li>
              <li><a href="#">Binus Alam Sutera</a></li>
              <li><a href="#">Binus Bekasi</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--END ABOUT - LOCATION-->

    <!--INFO-->
      <div class="info">
        <div class="container">
          <div class="col-sm-4 block-info">
            <div class="title-center">
              <img src="image/ico-event.png">
              <h4 class="title-blue">Event</h4>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/event-1.jpg" width="100%">
                <h4>Binus Startup Accelerator : Batch 3</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/event-2.jpg" width="100%">
                <h4>Binus Startup Accelerator : Batch 2</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="title-center">
              <a href="#">View All Event <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
            </div>
          </div>
          <div class="col-sm-4 block-info">
            <div class="title-center">
              <img src="image/ico-article.png">
              <h4 class="title-blue">Articles</h4>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/article-1.jpg" width="100%">
                <h4>Kerja sama Binus University dengan international peace of</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/article-2.jpg" width="100%">
                <h4>Binusian become baidu campus ambassador</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="title-center">
              <a href="#">View All Article <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="title-center">
              <img src="image/ico-news.png">
              <h4 class="title-blue">News</h4>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/news-1.jpg" width="100%">
                <h4>leadership role in organizational performance</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="item-info">
              <a href="#">
                <img src="image/news-2.jpg" width="100%">
                <h4>nationwide university network in indonesia</h4>
              </a>
              <P>October 1, 2013</P>
            </div>
            <div class="title-center">
              <a href="#">View All News <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
            </div>
          </div>
        </div>
      </div>
    <!--END INFO-->

    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?> 
  </body>
</html>