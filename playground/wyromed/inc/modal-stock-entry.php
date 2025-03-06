<div class="modal fade" id="modal-stock-entry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Stock Entry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="noTelp">Item</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Quantity</label>
                        <input type="text" class="form-control">
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
                        <label for="noTelp">Batch</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Kadaluarsa</label>
                        <input type="text" class="form-control" id="expired_date">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Tipe Bin</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Lokasi Rak</label>
                        <select id="pilih_rak" class="form-control select2">
                            <option selected>-- Pilih Rak --</option>
                            <option>Rak A</option>
                            <option>Rak B</option>
                            <option>Rak C</option>
                            <option>Rak D</option>
                            <option>Rak E</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="noTelp">Catatan</label>
                <textarea class="form-control"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="stock-entry.php" type="button" class="btn btn-primary">Simpan</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>