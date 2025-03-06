<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Login | Wyromed</title>
    </head>
    <body>
        <div id="bg-login">
            <img src="images/bg-login.jpg" alt="">
        </div>  

        <div class="appWrap">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="height: 100vh">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <div class="login-box">
                            <i class="fab fa-google-wallet fa-2x green-brand"></i></a> <br/><b>WYROMED</b>
                            <br/><br/><br/>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <br/>
                                <a href="dashboard.php" type="submit" class="btn btn-outline-success">Sign In</a> <a href="sign-up.php" type="submit" class="btn btn-success">Sign Up</a>
                            </form>
                        </div>
                        <br/>
                        <p class="text-center small green-brand-dark">Copyright 2020, PT. ABS Digital Indonesia.<br/>All Rights Reserved</p>
                    </div>
                </div>
                
            <?php require 'inc/footer.php'; ?>
            </div>
        </div>
    </body>
</html>

    