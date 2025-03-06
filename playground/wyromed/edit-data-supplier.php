<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/header.php'; ?>
        <title>Edit Data Supplier | Wyromed</title>
    </head>
    <body>
        <div class="appWrap">
            <?php require 'inc/top-menu.php'; ?>
            
            <div class="content-wrap container">
            <div class="row">
                <div class="col-3">
                    <h5><i class="fas fa-notes-medical"></i> Edit Data Supplier</h5><br/>
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
                                <a href="list-data-supplier.php" type="button" class="btn btn-outline-warning"><i class="fas fa-list"></i> List Supplier</a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="namaRS">Nama Supplier</label>
                                                <input type="text" class="form-control" value="PT Anugrah Mandiri">
                                            </div>
                                            <div class="col">
                                                <label for="noTelp">Nomor Telepon</label>
                                                <input type="text" class="form-control" value="021 567482927">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="3">Pondok Indah Raya No.25 Jakarta Selatan</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKontrak">Periode Kontrak</label>
                                        <select id="inputKontrak" class="form-control select2">
                                            <option>1 Tahun</option>
                                            <option>2 Tahun</option>
                                            <option selected>3 Tahun</option>
                                            <option>4 Tahun</option>
                                            <option>5 Tahun</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="inputItem">Item Barang</label>
                                        <select multiple class="select2" data-allow-clear="1" placeholder="Pilih item barang">
                                            <option selected>CT Scan</option>
                                            <option selected>RT PCR</option>
                                            <option selected>QPCR</option>
                                        </select>
                                    </div> -->
                                    <div class="text-right">
                                        <br/><br/><br/><br/><a href="list-data-supplier.php" type="button" class="btn btn-outline-success">Save</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        
                    </div>
                    <!--END CONTENT -->
                </div>
            </div>
            <?php require 'inc/footer.php'; ?>
            </div>
        </div>
    </body>
</html>

    