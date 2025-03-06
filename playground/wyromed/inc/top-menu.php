<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"><i class="fab fa-google-wallet fa-2x green-brand"></i></a> <b>WYROMED</b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav mr-auto"></div>
    <div class="my-2 my-lg-0">
      <div class="notifikasi">
        <a href="#" id="float-notifikasi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell"></i><span class="notif-alert">10</span></a>
        <div class="dropdown-menu dropdown-menu-right float-notifikasi" aria-labelledby="float-notifikasi">
            <ul class="list-notifikasi">
              <li><a href="#" data-toggle="modal" data-target="#modal-stock-entry-request">Request stock dari mobile apps</a><br/><span class="small">1 Jam yang lalu</span></li>
              <li><a href="#" data-toggle="modal" data-target="#modal-stock-entry-request">Request stock dari mobile apps</a><br/><span class="small">1 Jam yang lalu</span></li>
              <li><a href="#" data-toggle="modal" data-target="#modal-stock-entry-request">Request stock dari mobile apps</a><br/><span class="small">1 Jam yang lalu</span></li>
              <li class="text-center"><a href="dashboard.php" type="button" class="btn btn-outline-success">View All Notification</a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="my-2 my-lg-0">
      <div class="profile user-name">
        <i class="far fa-user-circle fa-2x"></i> &nbsp Hello, Jhon      
      </div>
    </div>
    <div class="my-2 my-lg-0">
      <div class="profile">
        <h6><a href="index.php" id="float-profile"><i class="fas fa-sign-out-alt green-brand"></i></a></h6>
        <!-- <a href="#" id="float-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars fa-2x green-brand"></i></a>
        <div class="dropdown-menu dropdown-menu-right float-profile" aria-labelledby="float-profile">
            <a class="dropdown-item" href="index.php">Log Out</a>
        </div> -->
      </div>
    </div>
</nav>

<?php require 'inc/modal-stock-entry-request.php';?>