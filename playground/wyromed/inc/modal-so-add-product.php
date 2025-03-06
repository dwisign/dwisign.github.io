<div class="modal fade" id="modal-so-add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Kode Product</label>
                        <select id="product_code" class="form-control select2">
                            <option selected>-- Pilih Kode Product --</option>
                            <option>Sebamed Oil 200 ml (M-02)</option>
                            <option>Dettol Cair 500 ml (M-03)</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Satuan</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Deskripsi</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Harga Satuan</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Order Quantity</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Discount (%)</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Confirmed Quantity</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Total</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Delivered Quantity</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Status</label>
                        <select id="customer_id" class="form-control select2">
                            <option selected>-- Pilih Status --</option>
                            <option>Open</option>
                            <option>Close</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
      <div class="modal-footer">
        <a href="add-so.php#step-2" type="button" class="btn btn-primary" data-dismiss="modal">Simpan</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>