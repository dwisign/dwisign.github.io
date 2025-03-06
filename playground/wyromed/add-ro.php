<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Create Receive Order | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-sign-in-alt green-brand"></i> Create Receive Order</h5><br/>
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
                                <a href="receive-order.php" type="button" class="btn btn-outline-warning"><i class="fas fa-list"></i> List RO</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="custom-scrollbar-js p-2" id="content-scroll">
                            <div class="row">
                                <div class="col-12">
                                    <h6>RO Detail</h6><hr>
                                    <form>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-4">
                                                    <label for="noPO">Nomor PO</label>
                                                    <input type="text" class="form-control" value="PO601-2018-80" disabled>
                                                </div>
                                                <div class="col-4">
                                                    <label for="status-penerimaan">Status Penerimaan</label>
                                                    <select id="status" class="form-control select2">
                                                        <option selected>-- Pilih Status --</option>
                                                        <option>Posted</option>
                                                        <option>Received</option>
                                                        <option>Outstanding</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="noTelp">No. Manifestasi</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-4">
                                                    <label for="noTelp">Surat Jalan</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-4">
                                                    <label for="noTelp">Lokasi</label>
                                                    <select id="top" class="form-control select2">
                                                        <option selected>-- Pilih Lokasi --</option>
                                                        <option>Rak A</option>
                                                        <option>Rak B</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="noTelp">Catatan</label>
                                                    <textarea class="form-control"></textarea> 
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br/><br/>
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
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Satuan</th>
                                                <th>Qty Pesan</th>
                                                <th>Qty Indent</th>
                                                <th>Qty Terima</th>
                                                <th>Qty Retur</th>
                                                <th>Harga Beli</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>KANEBO_01</td>
                                                <td>Kanebo</td>
                                                <td>Botol</td>
                                                <td>55</td>
                                                <td>0</td>
                                                <td>2</td>
                                                <td>0</td>
                                                <td>44,444</td>
                                                <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i> &nbsp <a href="#" data-toggle="modal" data-target="#modal-ro-item-product"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>KANEBO_02</td>
                                                <td>Kanebo</td>
                                                <td>Botol</td>
                                                <td>55</td>
                                                <td>0</td>
                                                <td>2</td>
                                                <td>0</td>
                                                <td>44,444</td>
                                                <td class="text-center"><a href="#" data-toggle="modal" data-target="#modal-confirm-delete"><i class="far fa-trash-alt"></i> &nbsp <a href="#" data-toggle="modal" data-target="#modal-ro-item-product"><i class="far fa-edit"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-right">
                                        <br/><br/>
                                            <a href="receive-order.php" type="button" class="btn btn-success">Simpan</a> <a href="#" type="button" class="btn btn-outline-danger">Batal</a>
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
                require 'inc/modal-ro-item-product.php';
                require 'inc/modal-confirm-delete.php';
                require 'inc/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>

    