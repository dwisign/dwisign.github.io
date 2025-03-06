<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Create Delivery Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Create Delivery Order</h5><br/>
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
                                    <h6>DELIVERY ORDER</h6><hr>
                                    <br/>
                                    <div class="stepwizard">
                                        <div class="stepwizard-row setup-panel">
                                            <div class="stepwizard-step">
                                                <a href="#step-1" type="button" class="btn btn-warning btn-circle">1</a>
                                            </div>
                                            <div class="stepwizard-step">
                                                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                            </div>
                                            <div class="stepwizard-step">
                                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                            </div>
                                        </div>
                                    </div>


                                    <br/><br/><br/>


                                    <form role="form" action="delivery-order.php">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-sm-12">
                                                <h6>Step 1</h6><br/>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col-4">
                                                            <label for="noTelp">Tipe Delivery Order</label>
                                                            <input type="text" class="form-control" value="Standar">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="soDate">Tanggal DO</label>
                                                            <input type="text" class="form-control" id="so_order_date" value="05/03/2020"  disabled >
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="noTelp">Kode Pelanggan</label>
                                                            <input type="text" class="form-control" value="SO601-2018-151 | RS Pondok Indah">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <label for="soDate">Tanggal Pengiriman</label>
                                                            <input type="text" class="form-control" id="so_send_date" value="07/03/2018">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="noPO">Tujuan Pengiriman</label>
                                                            <input type="text" class="form-control" id="" value="RS Pondok Indah">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col-4">
                                                            <label for="noPO">Net Weight</label>
                                                            <input type="text" class="form-control" id="" value="13">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="soDate">Gross Weight</label>
                                                            <input type="text" class="form-control" value="18">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="soDate">Kode Forwarder</label>
                                                            <input type="text" class="form-control" value="jne-987653452">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br/><br/>
                                                <div class="text-right">
                                                    <button class="btn btn-outline-success nextBtn btn-sm" type="button" style="width: 200px;">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-sm-12">
                                                <h6>Step 2</h6><br/>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-12">
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
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-do-edit-product"><i class="far fa-edit"></i></a></td>
                                                                    <td>M-02</td>
                                                                    <td>Sebamed Oil 200 ml </td>
                                                                    <td>5</td>
                                                                    <td>Botol</td>
                                                                    <td>0</td>
                                                                    <td>SO601-2018-151</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-do-edit-product"><i class="far fa-edit"></i></a></td>
                                                                    <td>M-02</td>
                                                                    <td>Sebamed Oil 200 ml </td>
                                                                    <td>5</td>
                                                                    <td>Botol</td>
                                                                    <td>0</td>
                                                                    <td>SO601-2018-151</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="text-right">
                                                    <button class="btn btn-outline-success nextBtn btn-sm" type="button" style="width: 200px;">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-3">
                                            <div class="col-sm-12">
                                                <h6>Step 3</h6><br/>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="noTelp">No Referensi Sistem</label>
                                                            <input type="text" class="form-control" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="noTelp">Catatan</label>
                                                            <textarea class="form-control">Harap Segera Di Pickup</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="text-right">
                                                    <button class="btn btn-outline-success btn-sm pull-right" type="submit" style="width: 200px;">Finish!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php 
                require 'inc/modal-do-edit-product.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    