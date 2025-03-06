<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Home | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-tachometer-alt"></i> Dashboard</h5><br/>
                    <?php require 'inc/side-menu.php'; ?>
                </div>
                <div class="col-9">
                    <!--CONTENT -->
                    <div class="row">
                        <div class="col-12">
                            <div class="text-right">
                                <a href="add-customer.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Customer</a>
                                <a href="add-supplier.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Supplier</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="content-half">
                                <h5>Selamat Datang di <b>WYROMED</b></h5>
                                <p class="small">Update setiap aktifitas usaha perusahaanmu secara berkala untuk mendapatkan laporan perkembangan perusahaan secara realtime.</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="content-half text-center">
                                <h1 class="customer" data-to="159" data-speed="1500">159</h1>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="content-half text-center">
                                <h1 class="supplier" data-to="60" data-speed="1500">60</h1>
                                <p>Supplier</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="content-half-2">
                                <div class="row">
                                    <div class="col-6">
                                        <div id="chart-1"></div>
                                    </div>
                                    <div class="col-6">
                                        <div id="chart-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php require 'inc/footer.php'; ?>
            </div>
        </div>
    </body>
</html>

    