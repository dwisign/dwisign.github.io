<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require("inc/header.php");
    ?> 
  </head>
  <body>
    
    <?php
      require("inc/top-menu.php");
    ?>


    <div class="content_inside">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h3 class="title_inside">Hubungi Kami</h3>
            <div class="underline"></div>
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name">Nama<span>*</span></label>
                      <input type="text" class="form-control" id="name" placeholder="Nama">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">Email<span>*</span></label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="subject">Subjek<span>*</span></label>
                      <input type="subject" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <label for="pesan">Pesan<span>*</span></label>
                      <textarea class="form-control" rows="15"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="submit text-center">
                        <button class="btn btn_rounded btn_red" href="#" role="button">Kirim</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>



    <?php
      require("inc/footer.php");
    ?> 

    <?php  
      require("inc/js.php");
    ?> 
  </body>
</html>