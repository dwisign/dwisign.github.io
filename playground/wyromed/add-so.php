<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Create Sales Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Create Sales Order</h5><br/>
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
                                <a href="sales-order.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> List SO</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <h6>SALES ORDER</h6><hr>
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


                                    <form role="form" action="sales-order.php">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-sm-12">
                                                <h6>Step 1</h6><br/>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col-4">
                                                            <label for="noTelp">Tipe Sales Order</label>
                                                            <input type="text" class="form-control" value="Standar">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="soDate">Tanggal SO</label>
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
                                                        <div class="col-4">
                                                            <label for="soDate">Tanggal Pengiriman</label>
                                                            <input type="text" class="form-control" id="so_send_date">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="noTelp">Term of Payment</label>
                                                            <select id="customer_id" class="form-control select2">
                                                                <option selected>-- Pilih Term --</option>
                                                                <option>Cash</option>
                                                                <option>Credit</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="noPO">No. PO</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col-4">
                                                            <label for="soDate">Batas Akhir PO</label>
                                                            <input type="text" class="form-control" id="so_end_date">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="soDate">Kode Forwarder</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="noTelp">Sales Status</label>
                                                            <select id="customer_id" class="form-control select2">
                                                                <option selected>-- Pilih Status --</option>
                                                                <option>Open</option>
                                                                <option>Close</option>
                                                            </select>
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
                                                        <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-so-add-product"><i class="fas fa-plus-circle"></i> Add Product</a>
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
                                                                    <th>Order Qty</th>
                                                                    <th>Confirmed Qty</th>
                                                                    <th>Delivered Qty</th>
                                                                    <th>Satuan</th>
                                                                    <th>Harga</th>
                                                                    <th>Diskon</th>
                                                                    <th>Total Harga</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-so-edit-product"><i class="far fa-edit"></i></a></td>
                                                                    <td>M-02</td>
                                                                    <td>Sebamed Oil 200 ml </td>
                                                                    <td>5</td>
                                                                    <td>5</td>
                                                                    <td>5</td>
                                                                    <td>Botol</td>
                                                                    <td>100000</td>
                                                                    <td>10</td>
                                                                    <td>450000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#" data-toggle="modal" data-target="#modal-so-edit-product"><i class="far fa-edit"></i></a></td>
                                                                    <td>M-03</td>
                                                                    <td>Dettol Cair 500 ml</td>
                                                                    <td>10</td>
                                                                    <td>10</td>
                                                                    <td>8</td>
                                                                    <td>Botol</td>
                                                                    <td>100000</td>
                                                                    <td>10</td>
                                                                    <td>900000</td>
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
                                                            <label for="noTelp">Nama Salesman</label>
                                                            <select id="salesman_name" class="form-control select2">
                                                                <option selected>-- Pilih Salesman --</option>
                                                                <option>Jhon Doe</option>
                                                                <option>Richard Roe</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="noTelp">Catatan</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="noTelp">Total (Rp)</label>
                                                            <input type="text" class="form-control" value="" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="noTelp">Total Discount (Rp)</label>
                                                            <input type="text" class="form-control" value="" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="noTelp">PPN (Rp)</label>
                                                            <input type="text" class="form-control" value="" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="noTelp">Grand Total (Rp)</label>
                                                            <input type="text" class="form-control" value="" disabled>
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
                require 'inc/modal-so-add-product.php';
                require 'inc/modal-so-edit-product.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    