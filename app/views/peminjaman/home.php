
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                          <form action="" method="post">
                          <input type="hidden" name="TanggalPengembalian" value="<?= date('Y-m-d'); ?>">
                          <input type="hidden" name="StatusPeminjaman" value="Sudah di Kembalikan">
                            <button class="btn btn-info">Kembalikan</button>
                          </form>
                       
                      </td>
                  	</tr>
                  	
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
