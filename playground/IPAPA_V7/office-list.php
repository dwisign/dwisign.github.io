<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Office</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_office_list.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm">
      <div class="office-search-inside">
        <div class="form-group office-search">
          <div class="input-group">
            <input class="form-control form-rounded" type="text">
            <span class="input-group-btn">
              <button class="btn btn-danger" type="button">Cari</button>
            </span>
          </div>
        </div>
      </div>
      <div id="officeHome" class="officeTabFilter">
        <div class="row">
          <div class="col-sm-12">
            <ul class="list-inline tab-title nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#gedungkantor" aria-controls="home" role="tab" data-toggle="tab"><h4>Gedung perkantoran</h4></a></li>
              <li role="presentation"><h4>&nbsp&nbsp|&nbsp&nbsp</h4></li>
              <li role="presentation"><a href="#serviceoffice" aria-controls="profile" role="tab" data-toggle="tab"><h4>Serviced office</h4></a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="gedungkantor">
                <div class="premiumBuilding">
                  <h4><img src="img/premium-icon.png" width="40">Premium Building</h4>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="owl-carousel owl-theme" id="premiumBuildingSlide">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/premium-icon.png">
                            </div>
                          </div>
                          <hr>
                          <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                          <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                        </div>
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/dea-tower.jpg');"></div></a>
                          <div class="row">
                            <div class="col-xs-9">
                              <h3 class="title-2">South Quarter South Quarter South Quarter</h3>
                              <p>Jln. RA Kartini Kav. 8 - Cilandak, Jakarta Selatan</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/premium-icon.png">
                            </div>
                          </div>
                          <hr>
                          <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                          <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                        </div>
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/menara-prima.jpg');"></div></a>
                          <div class="row">
                            <div class="col-xs-9">
                              <h3 class="title-2">Menara Prima</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/premium-icon.png">
                            </div>
                          </div>
                          <hr>
                          <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                          <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                        </div>
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/menara-prima.jpg');"></div></a>
                          <div class="row">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/premium-icon.png">
                            </div>
                          </div>
                          <hr>
                          <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                          <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="office-list" id="officeListGrid">
                  <div class="switch-button">
                    <ul>
                      <li class="count">587 Hasil</li>
                      <li class="sort">
                        <select class="form-sort">
                          <option>Urutkan</option>
                          <option>Acak</option>
                          <option>Popularitas</option>
                          <option>Ascending</option>
                          <option>Descending</option>
                          <option>Price (Low to High)</option>
                          <option>Price (High to Low)</option>
                        </select>
                      </li>
                      <li class="iconSwitch"><a href="#" id="threeGrid"><i class="fa fa-th" aria-hidden="true"></i></a>&nbsp&nbsp<a href="#" id="oneList"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                    </ul> 
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="office-detail.php"><div class="img-building" style="background: url('img/alianz-tower.jpg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Alianz Tower</h3>
                              <p>Jln. Hr. Rasuna Said</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                      <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
              <div role="tabpanel" class="tab-pane" id="serviceoffice">
                <div class="office-list" id="officeServicedListGrid">
                  <div class="switch-button">
                    <ul>
                      <li class="count">587 Hasil</li>
                      <li class="sort">
                        <select class="form-sort">
                          <option>Urutkan</option>
                          <option>Acak</option>
                          <option>Popularitas</option>
                          <option>Ascending</option>
                          <option>Descending</option>
                          <option>Price (Low to High)</option>
                          <option>Price (High to Low)</option>
                        </select>
                      </li>
                      <li class="iconSwitch"><a href="#" id="threeGridServiced"><i class="fa fa-th" aria-hidden="true"></i></a>&nbsp&nbsp<a href="#" id="oneListServiced"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
                    </ul>      
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">88 Office</h3>
                              <p>88 Kasablanca</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">CEO Suites</h3>
                              <p>Axa Tower</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">CEO Suites</h3>
                              <p>Sahid Sudirman Center</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">CEO Suites</h3>
                              <p>One Pasific Place</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">CEO Suites</h3>
                              <p>Bursa Efek Jakarta / Jakarta Stock Exchange</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">CEO Suites</h3>
                              <p>Wisma GKBI</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Amethyst Service Office</h3>
                              <p>18 Office Park</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Aviso Service Office</h3>
                              <p>Epicentrum Walk </p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="item">
                          <a href="serviced-office-detail.php"><div class="img-building" style="background: url('img/ceo-suite-wisma-gkbi.jpeg');"></div></a>
                          <div class="row buildingName">
                            <div class="col-xs-9">
                              <h3 class="title-2">Bintaro Business Center</h3>
                              <p>Bintaro Business Center</p>
                            </div>
                            <div class="col-xs-3 text-right">
                              <br/><img src="img/reguler-icon.png" width="35">
                            </div>
                          </div>
                          <hr>
                          <div class="priceDetail">
                            <h5 class="price-space"><span class="ipapa-iconmoney"></span> Start From <span class="price">IDR 180000/m2</span><br/><i class="fa fa-building-o" aria-hidden="true"></i> 59 Office Available</h5>
                            <p><span class="mssg"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Kirirm Pesan</a></span> <span class="compare"><a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Bandingkan</a></span></p>
                            <a href="serviced-office-detail.php" class="btn btn-outline-blue btn-block btn-rounded">DETAIL</a>
                          </div>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center">
                      <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
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

    <!--Special js for selected page-->
    <script src="plugin/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#premiumBuildingSlide').owlCarousel({
            loop:false,
            nav:true,
            dots:false,
            margin: 30,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:3
                },
                1024:{
                    items:3
                }
            }
        })

        //SWITCH GRID LIST
        $('#oneListServiced').click(function(event){event.preventDefault();
          $('#officeServicedListGrid .col-sm-4').addClass('col-sm-12');
          $('#officeServicedListGrid .col-sm-12').removeClass('col-sm-4');
        });    
        $('#oneList').click(function(event){event.preventDefault();
          $('#officeListGrid .col-sm-4').addClass('col-sm-12');
          $('#officeListGrid .col-sm-12').removeClass('col-sm-4');
        });
        $('#threeGrid').click(function(event){event.preventDefault();
          $('#officeListGrid .col-sm-12').addClass('col-sm-4');
          $('#officeListGrid .col-sm-4').removeClass('col-sm-12');
        });

        $('#threeGridServiced').click(function(event){event.preventDefault();
          $('#officeServicedListGrid .col-sm-12').addClass('col-sm-4');
          $('#officeServicedListGrid .col-sm-4').removeClass('col-sm-12');
        });
      });
    </script> 
  </body>
</html>