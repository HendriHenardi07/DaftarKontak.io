  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Kontak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-default bg-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah</button> <br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomer Handphone</th>
                    <th>Jenis Operator</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_daftarkontak");
                    while($dft = mysqli_fetch_array($query)){
                      $no++
                  ?>
                  <tr>
                    <td width=5% ><?php echo $no ?></td>
                    <td><?php echo $dft['nama']; ?></td>
                    <td><?php echo $dft['nohp']; ?></td>
                    <td><?php echo $dft['jenis']; ?></td>
                    <td><?php echo $dft['status']; ?></td>
                    <td width=22%>
                  <a href="index.php?page=edit_data&&id=<?php echo $dft['id'];?>" 
                  class="btn btn-default bg-success">Edit</a>
                  <a onclick="hapus_data()" href="delete/delete.php?id=<?php echo $dft['id'];?>" 
                  class="btn btn-default bg-danger">Hapus</a>
                  <a class="view-data btn btn-info" data-toggle="modal" data-target="#modal-view" 
                  data-nama="<?php echo $dft['nama']; ?>"
                  data-num="<?php echo $dft['nohp']; ?>"
                  data-jenis="<?php echo $dft['jenis']; ?>"
                  >Lihat Data</a>
                  </td>
                  </tr>
                  </tbody>
                  <?php } ?>
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nomer Handphone" name="nohp" required>
                </div>
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name="jenis" required>
                  <option selected>Pilih</option>
                  <option value="Telkomsel">Telkomsel</option>
                  <option value="XL">XL</option>
                  <option value="Tri">Tri</option>
                  <option value="Indoosat">Indoosat</option>
                  <option value="Luar Negeri">Luar Negeri</option>
                </select>
                </div>
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name="status" required>
                  <option selected>Pilih</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- modal view data -->
    <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">

              <div class="form-row">
              <div class="col">
                  Nama : <span id="nama"></span>
                </div>
                <div class="col">
                  Nomer Handphone : <span id="nohp"></span>
                </div>
                <div class="col">
                  Jenis : <span id="jenis"></span>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

      <script>
        function hapus_data(data_id){
          // window.location=("delete/delete.php?id="+data_id);
          Swal.fire({
            title: 'Apakah anda akan menghapus datanya?',
            // showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Hapus data',
            confirmButtonColor: '#CD5C5C',
            // denyButtonText: `Don't save`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location=("delete/delete.php?id="+data_id);
            }
          })
        }
      </script>
