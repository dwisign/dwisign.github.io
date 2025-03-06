<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require("inc/header.php"); ?>
  </head>
  <body>

    <div class="container">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="text-center text-info"><br/>CLIENT'S DETAILS</h2>
        <div id="rootwizard">

          <ul class="tab-step pager">
            <li><a href="#tab1" class="btn disabled" data-toggle="tab"><span class="desc-step">Step 1</span></a></li>
            <li><a href="#tab2" class="btn disabled" data-toggle="tab"><span class="desc-step">Step 2</span></a></li>
            <li><a href="#tab3" class="btn disabled" data-toggle="tab"><span class="desc-step">Step 3</span></a></li>
          </ul>
          <form name="formWizard">
            <fieldset>
              <div id="bar" class="progress progress-striped active">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
              </div>

              <div class="tab-content">
                <div class="tab-pane" id="tab1">
                  <?php require("step1.php"); ?> 
                </div>
                <div class="tab-pane" id="tab2">
                  <?php require("step2.php"); ?>
                </div>
                <div class="tab-pane" id="tab3">
                  <?php require("step3.php"); ?>
                </div>

                <div id="modalSuccess" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br/><br/>
                        <div class="alert alert-dismissible alert-success">
                          <h2 class="glyphicon glyphicon-check" aria-hidden="true"></h2>
                          <h4><strong>Thank You!</strong></h4><p>Your submission is received and we will contact you soon.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <ul class="pager wizard">
                  <li class="previous"><a href="#">Back</a></li>
                  <li class="next"><a href="#">Next</a></li>
                  <li class="finish"><a href="javascript:;">Submit</a></li>
                </ul>
                </div>
              </fieldset>
            </form>
        </div>
      </div>
    </div>

    <div class="bg"><img src="img/bg-email.png"></div>


    <?php require("inc/js.php"); ?> 

  </body>
</html>