<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Receive Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Receive Order</h5><br/>
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
                        <!-- <div class="col-8">
                            <div class="text-right">
                                <a href="add-customer.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Customer</a>
                                <a href="add-supplier.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Supplier</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-ro-nomor-po"><i class="fas fa-plus-circle"></i> Create RO</a>
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
                                                <th>No Penerimaan</th>
                                                <th>Surat Jalan</th>
                                                <th>No. PO</th>
                                                <th>No. Manifest</th>
                                                <th>Status Penerimaan</th>
                                                <th>Lokasi</th>
                                                <th>Tanggal Dibuat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>RC601-2018-73</td>
                                                <td>DO-001</td>
                                                <td>PO601-2018-80</td>
                                                <td>Mnf001</td>
                                                <td>Posted</td>
                                                <td>RAK A</td>
                                                <td>07/03/2020</td>
                                                <td class="text-center"><a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-ro.php"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>RC601-2018-74</td>
                                                <td>DO-002</td>
                                                <td>PO601-2018-81</td>
                                                <td>Mnf001</td>
                                                <td>Outstanding</td>
                                                <td>RAK A</td>
                                                <td>08/03/2020</td>
                                                <td class="text-center"><a href="images/INV-3.pdf" target="_blank"><i class="fas fa-download"></i></a> &nbsp <a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-ro.php"><i class="far fa-edit"></i></a></td>
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
                require 'inc/modal-ro-nomor-po.php';
                require 'inc/modal-confirm-delete.php';  
                require 'inc/footer.php';
            ?>
            </div>
        </div>
    </body>
</html>

    