<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Sales Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-out-alt green-brand"></i> Sales Order</h5><br/>
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
                                    <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-so-create"><i class="fas fa-plus-circle"></i> Create SO</a>
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
                                                <th style="width:120px;">Action</th>
                                                <th>SO Number</th>
                                                <th>SO Type</th>
                                                <th>SO Date</th>
                                                <th>Customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Term of Payment</th>
                                                <th>Pajak (Rp)</th>
                                                <th>Total (Rp)</th>
                                                <th>Dibuat Oleh</th>
                                                <th>Status</th>
                                                <th>Return Approval</th>
                                                <th>Return Reason</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-so.php"><i class="far fa-edit"></i></a></td>
                                                <td>SO601-2018-151</td>
                                                <td>Standar</td>
                                                <td>05/03/2018</td>
                                                <td>PR601-2018-1</td>
                                                <td>RS Pondok Indah</td>
                                                <td>Cash</td>
                                                <td>135000</td>
                                                <td>1350000</td>
                                                <td>mail@gmail.com</td>
                                                <td>Open</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-so.php"><i class="far fa-edit"></i></a></td>
                                                <td>SO601-2018-151</td>
                                                <td>Standar</td>
                                                <td>05/03/2018</td>
                                                <td>PR601-2018-1</td>
                                                <td>RS Pondok Indah</td>
                                                <td>Cash</td>
                                                <td>135000</td>
                                                <td>1350000</td>
                                                <td>mail@gmail.com</td>
                                                <td>Open</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-so.php"><i class="far fa-edit"></i></a></td>
                                                <td>SO601-2018-151</td>
                                                <td>Standar</td>
                                                <td>05/03/2018</td>
                                                <td>PR601-2018-1</td>
                                                <td>RS Pondok Indah</td>
                                                <td>Cash</td>
                                                <td>135000</td>
                                                <td>1350000</td>
                                                <td>mail@gmail.com</td>
                                                <td>Open</td>
                                                <td>-</td>
                                                <td>-</td>
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
                require 'inc/modal-so-create.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    