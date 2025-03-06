<div class="modal fade" id="modal-stock-entry-request" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="noTelp">Item</label>
                <input type="text" class="form-control" value="Cetaphil Gentle" disabled>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <label for="noTelp">Quantity</label>
                        <input type="text" class="form-control" value="50" disabled>
                    </div>
                    <div class="col-6">
                        <label for="noTelp">Satuan</label>
                        <input type="text" class="form-control" value="botol" disabled>
                    </div>
                </div>
            </div>            
            <div class="form-group">
                <label for="noTelp">Catatan</label>
                <textarea class="form-control">Harap segera dikirimkan</textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="stock-entry.php" type="button" class="btn btn-primary">Terima</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>