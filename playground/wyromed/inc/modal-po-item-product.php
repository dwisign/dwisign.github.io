<div class="modal fade" id="modal-po-item-product" tabindex="-1" role="dialog" aria-labelledby="modal-po-item-product" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-po-item-product">Tambah Item Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <select id="pilih_product" class="form-control select2">
                        <option selected>-- Pilih Product --</option>
                        <option>Chetaphil Gentle (M-01)</option>
                        <option>Chetaphil Kids (M-02)</option>
                        <option>Chetaphil Kids (M-03)</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label>Harga Beli</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label>Kode Produk Supplier</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <label>Quantity</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label>Barcode ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <label>Satuan</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="add-po.php" type="button" class="btn btn-primary">Simpan</a>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        </div>
    </div>
  </div>
</div>