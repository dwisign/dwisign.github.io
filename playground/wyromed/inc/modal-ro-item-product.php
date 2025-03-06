<div class="modal fade" id="modal-ro-item-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Receive Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="noTelp">Product</label>
                <input type="text" class="form-control" value="Kanebo">
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label>Harga Beli</label>
                        <input type="text" class="form-control" value="44,444">
                    </div>
                    <div class="col-6">
                        <label>Satuan</label>
                        <input type="text" class="form-control" value="botol" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label>Batch Number</label>
                        <input type="text" class="form-control" value="3435363535">
                    </div>
                    <div class="col-6">
                        <label>Quantity Indent</label>
                        <input type="text" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label>Expired Date</label>
                        <input type="text" class="form-control" id="expired_date" value="31/10/2019"> 
                    </div>
                    <div class="col-6">
                        <label>Quantity Terima</label>
                        <input type="text" class="form-control" value="2">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label>Catatan</label>
                        <input type="text" class="form-control"> 
                    </div>
                    <div class="col-6">
                        <label>Status</label>
                        <select id="pilih_suplier" class="form-control select2">
                            <option>-- Pilih Status --</option>
                            <option selected>Open</option>
                            <option>Close</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="add-ro.php" type="button" class="btn btn-primary">Simpan</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>