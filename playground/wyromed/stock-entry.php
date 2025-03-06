<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Stock Entry | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Stock Entry</h5><br/>
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
                                <a href="add-supplier.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Supplier</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-stock-entry"><i class="fas fa-plus-circle"></i> Add Stock</a>
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
                                                <th>Kode Item</th>
                                                <th>Nama</th>
                                                <th>Qty</th>
                                                <th>Satuan</th>
                                                <th>Catatan</th>
                                                <th>Batch</th>
                                                <th>Bin</th>
                                                <th>Detail Bin</th>
                                                <th>Tanggal dibuat</th>
                                                <th>Dibuat Oleh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-edit"><i class="far fa-edit"></i></a> &nbsp
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-move"><i class="fas fa-random"></i></a> &nbsp 
                                                </td>
                                                <td>M-01</td>
                                                <td>Cetaphil Gentle</td>
                                                <td>50</td>
                                                <td>Botol</td>
                                                <td>New Varian</td>
                                                <td>4321</td>
                                                <td>1234</td>
                                                <td>1</td>
                                                <td>13/04/2020</td>
                                                <td>user1@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-edit"><i class="far fa-edit"></i></a> &nbsp
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-move"><i class="fas fa-random"></i></a> &nbsp  
                                                </td>
                                                <td>M-02</td>
                                                <td>Cetaphil Kids</td>
                                                <td>40</td>
                                                <td>Botol</td>
                                                <td>New Varian</td>
                                                <td>4321</td>
                                                <td>1234</td>
                                                <td>1</td>
                                                <td>13/04/2020</td>
                                                <td>user1@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-edit"><i class="far fa-edit"></i></a> &nbsp
                                                    <a href="" data-toggle="modal" data-target="#modal-stock-entry-move"><i class="fas fa-random"></i></a> &nbsp  
                                                </td>
                                                <td>M-03</td>
                                                <td>Cetaphil Adult</td>
                                                <td>50</td>
                                                <td>Botol</td>
                                                <td>New Varian</td>
                                                <td>4321</td>
                                                <td>1234</td>
                                                <td>1</td>
                                                <td>13/04/2020</td>
                                                <td>user1@gmail.com</td>
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
                require 'inc/modal-stock-entry.php';
                require 'inc/modal-stock-entry-edit.php';
                require 'inc/modal-stock-entry-move.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    