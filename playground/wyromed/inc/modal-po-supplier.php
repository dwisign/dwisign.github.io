<div class="modal fade" id="modal-po-supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pilih Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-8">
                        <label for="noTelp">Supplier</label>
                        <select id="pilih_suplier" class="form-control select2">
                            <option selected>-- Pilih Suplier --</option>
                            <option>SPID-01 | PT Anugrah Mandiri</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="noTelp">Belum ada supplier?</label>
                        <a href="add-supplier.php" type="button" class="btn btn-outline-success">Add Supplier</a>
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