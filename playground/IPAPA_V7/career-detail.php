<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IPAPA V.7 | Karir</title>
    <?php
      require("inc/header.php");
    ?>
    <!-- Ipapa v.7_about style -->
    <link href="css/ipapav7_careerDetail.css" rel="stylesheet">
  </head>
  <body>
    
    <?php
      require("inc/topbar.php");
    ?> 

    <!--content wrap-->
    <div class="content-wrap container ctnr-cstm cntn-inside">
      <div class="row">
        <div class="col-md-8">
          <h3 class="title-1 with-hr">IPAPA Karir</h3>
          <div class="item-career-inside">
            <h4>Marketing Manager</h4>
            <p class="date"><i class="fa fa-map-marker" aria-hidden="true"></i> Jakarta | Valid sampai dengan : 05-09-2017</p>
            <div class="career-text">
              <div class="responsibility">
                 <span class="title-3">Responsibility</span><br/>
                 <ul>
                   <li>Monitoring daily task & process on Finance & Accounting Department</li>
                   <li>Handle Tax & E-SPT</li>
                   <li>Make Financial Report & Tax Report</li>
                   <li>Filling Document</li>
                   <li>Coordination & Follow up with other Department related to financial issue.</li>
                   <li>Participate in regular tax audits and payroll</li>
                   <li>Prepare budgeting reports and forecast revenues</li>
                   <li>Manage month-end and year-end closing</li>
                   <li>Monitor the daily performance of the accounting department</li>
                   <li>Organize financial data into useable information and maintain updated records</li>
                   <li>Track the progress of financial and accounting objectives</li>
                   <li>Establish accounting policies and procedures, aligned with company’s targets</li>
                   <li>Ensure compliance with the law</li>
                 </ul>
               </div>

              <div class="requirements">
                <span class="title-3">Requirements</span><br/>
                <ul>
                   <li>Mandarin and English proficiency (Mandarin is preferable)</li>
                   <li>Candidate must possess at least a Diploma or Bachelor Degree in Accounting Major</li>
                   <li>Having 1 (one) year experience in the same field</li>
                   <li>Good knowledge of AR, GL, Credit Control and Taxations</li>
                   <li>Proficient in MS office applications</li>
                   <li>Available to join immediately</li>
                   <li>1 Full-time positions available</li>
                 </ul>
               </div>

               <div class="additional">
                <span class="title-3">Additional Information</span><br/>
                <p>
                  -
                 </p>
               </div>

               <a data-toggle="collapse" href="#kirimLamaranForm" aria-expanded="false" aria-controls="kirimLamaranForm" class="btn btn-danger btn-rounded">KIRIM LAMARAN <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
               <div class="collapse" id="kirimLamaranForm">
                  <div class="form-group">
                    <label for="inputNama" class="control-label">Nama Anda *</label>
                    <input class="form-control" id="inputNama" placeholder="Nama" type="text">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="control-label">Email *</label>
                    <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                  </div>
                  <div class="form-group">
                    <label for="inputPosition" class="control-label">Posisi</label>
                    <input class="form-control" id="inputPosisi" placeholder="Marketing Manager" type="text" disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputPosition" class="control-label">Make your Pitch! (Tell us why you are best suited for this position)*</label>
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="inputPosition" class="control-label">Attach Resume (max. file size: 3mb, type: pdf)</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                  <br/>
                  <a data-toggle="collapse" href="#" class="btn btn-danger btn-rounded">KIRIM <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
               </div>
               <br/>
               <hr>
               <p>Please put your photo into your CV, mention availability and your expected salary, also write down on subject the position applied and your domicile. Email to recruitment@ipapa.co.id </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sidebar">
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
    <!--end content wrap-->

    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?>
  </body>
</html>