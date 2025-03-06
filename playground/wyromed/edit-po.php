<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Edit Purchase Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Edit Purchase Order</h5><br/>
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
                                <a href="add-supplier.php" type="button" class="btn btn-outline-warning"><i class="fas fa-plus-circle"></i> Add Supplier</a>
                                <a href="purchase-order.php" type="button" class="btn btn-outline-warning"><i class="fas fa-list"></i> List PO</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <h6>PO Detail</h6><hr>
                                    <form>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-4">
                                                    <label for="noTelp">Supplier</label>
                                                    <input type="text" class="form-control" value="PT Anugrah Mandiri" disabled>
                                                </div>
                                                <div class="col-4">
                                                    <label for="noTelp">Tanggal Pemesanan</label>
                                                    <input type="text" class="form-control" id="po_order_date" value="03/02/2018">
                                                </div>
                                                <div class="col-4">
                                                    <label for="noTelp">Tanggal Berakhir PO</label>
                                                    <input type="text" class="form-control" id="po_end_date" value="03/05/2018">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noTelp">Keterangan</label>
                                            <input type="text" class="form-control" value="Harap segera diproses">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-3">
                                                    <label for="inputTOP">Term of Payment</label>
                                                    <select id="top" class="form-control select2">
                                                        <option>-- Pilih Term --</option>
                                                        <option>Tunai</option>
                                                        <option selected>Kredit</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="inputCurrency">Currency</label>
                                                    <select id="currency" class="form-control select2">
                                                        <option selected>-- Pilih Currency --</option>
                                                        <option selected>Rp</option>
                                                        <option>USD</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="inputStatus">Status</label>
                                                    <select id="status" class="form-control select2">
                                                        <option selected>-- Pilih Status --</option>
                                                        <option selected>Open</option>
                                                        <option>Close</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-po-item-product"><i class="fas fa-plus-circle"></i> Add Item</a>
                                    <a href="#" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-file-csv"></i> CSV</a>
                                    <a href="#" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-file-pdf"></i> PDF</a>
                                    <a href="#" type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-print"></i> Print</a><br/><br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Item</th>
                                                <th>Nama Produk</th>
                                                <th>Deskripsi</th>
                                                <th>Qty</th>
                                                <th>Satuan</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Eceran</th>
                                                <th>Kode Produk Supplier</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>M-01</td>
                                                <td>Chetaphil Gentle</td>
                                                <td>Chetaphil Gentle 500 ml</td>
                                                <td>2</td>
                                                <td>Botol</td>
                                                <td>400.000</td>
                                                <td>200.000</td>
                                                <td></td>
                                                <td class="text-center"><a href="#" type="button" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#"  type="button" data-toggle="modal" data-target="#modal-po-edit-item-product"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>M-02</td>
                                                <td>Chetaphil Gentle</td>
                                                <td>Chetaphil Gentle 500 ml</td>
                                                <td>3</td>
                                                <td>Botol</td>
                                                <td>600.000</td>
                                                <td>200.000</td>
                                                <td></td>
                                                <td class="text-center"><a href="#" type="button" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i></a> &nbsp <a href="#" type="button" data-toggle="modal" data-target="#modal-po-edit-item-product"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                    </table>
                                    <div class="text-right">
                                        <br/><br/>
                                            <a href="purchase-order.php" type="button" class="btn btn-success">Simpan</a> <a href="#" type="button" class="btn btn-outline-danger">Batal</a>
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
                require 'inc/modal-po-item-product.php';
                require 'inc/modal-po-edit-item-product.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    