
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="" method="post">
        <input type="hidden" name="UserID" value="">
        <input type="hidden" name="BukuID" value="">
        <div class="form-group">
          <label for="Judul">Judul Buku</label>
          <input type="text" id="Judul" class="form-control"
          value="" readonly>
        </div>
        
        <div class="form-group">
          <label for="Penulis">Penulis</label>
          <input type="text" id="Penulis" class="form-control" 
          value="" readonly>
        </div>
        
        <div class="form-group">
          <label for="Ulasan">Ulasan</label>
          <input type="text" id="Ulasan" name="Ulasan" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Rating">Rating</label>
          <select name="Rating" id="Rating" class="form-control">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
        </div>
      
        <div class="form-group">
          <a href="" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Tambah Ulasan</button>
        </div>
      </form>
    </div>
  </div>
</div>
