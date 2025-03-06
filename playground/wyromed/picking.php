<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Picking | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-shipping-fast"></i> Picking</h5><br/>
                    <?php require 'inc/side-menu.php'; ?>
                </div>
                <div class="col-9">
                    <!--CONTENT -->
                    <div class="row">
                        <div class="col-4">
                            <div class="text-left">
                                <a href="dashboard.php" type="button" class="btn btn-outline-success"><i class="fas fa-long-arrow-alt-left"></i> Back To Dashboard</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="text-right">
                                <a href="delivery-order.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> List DO</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <!-- <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-initial-pick"><i class="fas fa-plus-circle"></i> Initial Pick</a> -->
                                    <a href="" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-file-csv"></i> CSV</a>
                                    <a href="" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-file-pdf"></i> PDF</a>
                                    <a href="" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-print"></i> Print</a><br/><br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Kode Product</th>
                                                <th>Deskripsi Product</th>
                                                <th>Delivery Qty</th>
                                                <th>Satuan</th>
                                                <th>Picked Qty</th>
                                                <th>Nomor SO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-initial-pick"><i class="fas fa-shipping-fast"></i> Initial Pick</a></td>
                                                <td>M-02</td>
                                                <td>Sebamed Oil 200 ml </td>
                                                <td>5</td>
                                                <td>Botol</td>
                                                <td>0</td>
                                                <td>SO601-2018-151</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-initial-pick"><i class="fas fa-shipping-fast"></i> Initial Pick</a></td>
                                                <td>M-02</td>
                                                <td>Sebamed Oil 200 ml </td>
                                                <td>5</td>
                                                <td>Botol</td>
                                                <td>0</td>
                                                <td>SO601-2018-151</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-right">
                                        <br/><br/>
                                            <a href="delivery-order.php" type="button" class="btn btn-success">Simpan</a> <a href="delivery-order.php" type="button" class="btn btn-outline-danger">Batal</a>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php 
                require 'inc/modal-initial-pick.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    