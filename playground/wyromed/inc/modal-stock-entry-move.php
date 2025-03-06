<div class="modal fade" id="modal-stock-entry-move" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Product Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Item</label>
                        <input type="text" class="form-control" value="Cetaphil Gentle">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Quantity</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Satuan</label>
                        <input type="text" class="form-control" value="botol">
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Cabang</label>
                        <select id="pilih_warehouse" class="form-control select2">
                            <option selected>-- Pilih Warehouse --</option>
                            <option>Default Warehouse</option>
                            <option>Cabang 05</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Lokasi Asal</label>
                        <select id="pilih_rak_asal" class="form-control select2">
                            <option selected>-- Pilih Rak --</option>
                            <option>Rak A</option>
                            <option>Rak B</option>
                            <option>Rak C</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Lokasi Tujuan</label>
                        <select id="pilih_rak_tujuan" class="form-control select2">
                            <option selected>-- Pilih Rak --</option>
                            <option>Rak A</option>
                            <option>Rak B</option>
                            <option>Rak C</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="stock-entry.php" type="button" class="btn btn-primary">Pindahkan</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>