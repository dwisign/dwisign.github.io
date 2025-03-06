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

    <div class="banner">
      <div class="row">
        <div class="col-xs-12">
          <div class="badge-promo">
            <img src="img/badge.png">
          </div>
          <div class="caption text-center">
            <h1>GET SPECIAL PRICE<br/>FROM OUR SERVICES</h1>
            <h4>BY USING COUPON CODE</h4>
          </div>
          <div class="callToAct-btn text-center">
            <a href="#" data-toggle="modal" data-target=".signIn" class="btn btn-cta"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> GRAB YOUR COUPON NOW!</a>
            <br/><br/>
            <h5>Design // Build // Fitting Out <br/> Furniture // Moving // Demolish</h5>
          </div>
        </div>
      </div>
    </div>

    <!--POPUP SIGN-->
    <div class="modal fade signIn" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="home-login.php">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2 form-wrap">
                              <div class="tab-content">
                                  <div class="tab-pane active" id="signIn"><h3 class="modal-title">Sign In</h3>
                                      <div class="row">
                                          <div class="col-sm-11 col-xs-10">
                                              <div class="form-group">
                                                  <span class="label label-primary" id="top_signin_message_success"></span>
                                                  <span class="label label-danger" id="top_signin_message_failed"></span>
                                              </div>
                                              <div class="form-group">
                                                  <input class="form-control" autocomplete="off" id="top_signin_email" placeholder="Email" type="email">
                                              </div>
                                              <div class="form-group">
                                                  <input class="form-control" autocomplete="off" id="top_signin_password" placeholder="Password" type="password">
                                              </div>
                                              <div class="form-group">
                                                  <p class="small notMember">Not a member <a href="#signUp" class="btn-sign-modal" data-toggle="tab">Sign Up</a> <a href="#forgotPassword" class="forgotPasswordLink" data-toggle="tab">Forgot Password?</a></p>
                                              </div>
                                            <br/>
                                          <p class="small notMember text-center">Or Sign in with</p>
                                            <div class="row">
                                              <div class="col-sm-12">
                                                <a href="#" class="btn btn-social btn-block btn-facebook"><span class="fa fa-facebook"></span> Sign in with facebook</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-1 col-xs-2 btn-signIn-wrap">
                                              <button id="top_signin_submit" class="btn btn-subscribe btn-signInUp"><span class="icon ipapa-iconright-arrow-light"></span></button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane" id="signUp">
                                      <div class="tab-pane active" id="signIn"><h3 class="modal-title">Sign Up</h3>
                                          <div class="row">
                                              <div class="col-sm-11 col-xs-10">
                                                  <div class="form-group">
                                                      <span class="label label-primary" id="top_signup_message"></span>
                                                  </div>
                                                  <div class="form-group">
                                                      <input class="form-control" id="top_signup_email" placeholder="Email" type="email">
                                                  </div>
                                                  <div class="form-group">
                                                      <input class="form-control" id="top_signup_password" placeholder="Password" type="password">
                                                  </div>
                                                  <div class="form-group">
                                                      <input class="form-control" id="top_signup_password_confirm" placeholder="Confirm Password" type="password">
                                                  </div>
                                                  <div class="form-group">
                                                      <p class="small notMember">Already have account <a href="#signIn" class="btn-sign-modal" data-toggle="tab">Sign In</a><a href="#forgotPassword" class="forgotPasswordLink" data-toggle="tab">Forgot Password</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-sm-1 col-xs-2 btn-signUp-wrap">
                                                  <button id="top_signup_submit" class="btn btn-subscribe btn-signInUp"><span class="icon ipapa-iconright-arrow-light"></span></button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane" id="forgotPassword">
                                      <div class="tab-pane active" id="signIn"><h3 class="modal-title">Forgot Password</h3>
                                          <div class="row">
                                              <div class="col-sm-11 col-xs-10">
                                                  <div class="form-group">
                                                      <span class="label label-primary" id="top_forgot_message_forgot"></span>
                                                  </div>
                                                  <div class="form-group">
                                                      <input class="form-control" id="top_forgot_email" placeholder="Email" type="text">
                                                  </div>
                                                  <div class="form-group">
                                                      <p class="small notMember">Back to <a href="#signIn" class="btn-sign-modal" data-toggle="tab">Sign In</a></p>
                                                  </div>
                                              </div>
                                              <div class="col-sm-1 col-xs-2 btn-forgot-wrap">
                                                  <button id="top_forgot_submit" class="btn btn-subscribe btn-signInUp"><span class="icon ipapa-iconright-arrow-light"></span></button>
                                              </div>
                                          </div>                               
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END POPUP SIGN-->







    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?> 
  </body>
</html>