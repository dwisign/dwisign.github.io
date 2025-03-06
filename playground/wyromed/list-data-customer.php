<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>List Data Customer | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-clipboard-list"></i> List Data Customer</h5><br/>
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
                        <div class="row">
                            <div class="col-12">
                                <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>Nama Customer</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CSID-01</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-02</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-03</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-04</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-05</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-06</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-07</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-08</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-09</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-10</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-11</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CSID-12</td>
                                            <td>RS Pondok Indah</td>
                                            <td>021 567482927</td>
                                            <td>cs@rspi.co.id</td>
                                            <td class="text-center">
                                                <h6><a href="" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="edit-data-customer.php"><i class="far fa-edit"></i></a></h6>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>

                        
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php require 'inc/modal-confirm-delete.php'; ?>
            <?php require 'inc/footer.php'; ?>
            </div>
        </div>
    </body>
</html>

    