<div class="modal fade" id="modal-do-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delivery Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="noTelp">Tipe Delivery Order</label>
                <select id="tipe_sales_order" class="form-control select2">
                    <option selected>-- Pilih Tipe --</option>
                    <option>Standar</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Customer Name</label>
                        <select id="customer_id" class="form-control select2">
                            <option selected>-- Pilih Customer --</option>
                            <option>RS Pondok Indah</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Nomor Referensi</label>
                        <select id="no_ref" class="form-control select2">
                            <option selected>-- Pilih No Ref --</option>
                            <option>SO601-2018-151</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="add-do.php" type="button" class="btn btn-primary">Simpan</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>