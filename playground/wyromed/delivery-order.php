<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Delivery Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-out-alt green-brand"></i> Delivery Order</h5><br/>
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
                                <a href="add-customer.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Customer</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-do-create"><i class="fas fa-plus-circle"></i> Create DO</a>
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
                                                <th style="width:200px !important;">Action</th>
                                                <th>DO Number</th>
                                                <th>DO Type</th>
                                                <th>DO Date</th>
                                                <th>Status</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Kode Forwarder</th>
                                                <th>Berat Bersih</th>
                                                <th>Berat Kotor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="picking.php"><i class="fas fa-shipping-fast"></i> &nbsp <a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="edit-do.php"><i class="far fa-edit"></i></a></td>
                                                <td>DO-601-2018-55</td>
                                                <td>Standar</td>
                                                <td>05/03/2018</td>
                                                <td><a href="" type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-do-status-complete"> Open</a> </td>
                                                <td></td>
                                                <td>CSID-01</td>
                                                <td>RS Pondok Indah</td>
                                                <td>jne-987653452</td>
                                                <td>13</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="picking.php"><i class="fas fa-shipping-fast"></i> &nbsp <a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="edit-do.php"><i class="far fa-edit"></i></a></td>
                                                <td>DO-601-2018-55</td>
                                                <td>Standar</td>
                                                <td>05/03/2018</td>
                                                <td>Completed</td>
                                                <td></td>
                                                <td>CSID-01</td>
                                                <td>RS Pondok Indah</td>
                                                <td>jne-987653452</td>
                                                <td>13</td>
                                                <td>18</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php 
                require 'inc/modal-do-create.php';
                require 'inc/modal-do-status-complete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    