  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Management Admin</h3>
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
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE level='Admin'");
                    while($dft = mysqli_fetch_array($query)){
                      $no++
                  ?>
                  <tr>
                    <td width=5% ><?php echo $no ?></td>
                    <td><?php echo $dft['nama']; ?></td>
                    <td><?php echo $dft['username']; ?></td>
                    <td><?php echo $dft['password']; ?></td>
                    <td><?php echo $dft['level']; ?></td>
                    <td width=22%>
                  <a onclick="hapus_data()" href="admin/hapus-admin.php?id=<?php echo $dft['id'];?>" 
                  class="btn btn-default bg-danger">Hapus</a>
                  <a class="view-data-admin btn btn-info" data-toggle="modal" data-target="#modal-view" 
                  data-nama="<?php echo $dft['nama']; ?>"
                  data-username="<?php echo $dft['username']; ?>"
                  data-password="<?php echo $dft['password']; ?>"
                  data-level="<?php echo $dft['level']; ?>"
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
            <form method="get" action="admin/add-admin.php">
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Level" name="level" required>
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
              <h4 class="modal-title">View Data Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="tambah/add-admin.php">
            <div class="modal-body">

              <div class="form-row">
              <div class="col">
                  Nama : <span id="nama"></span>
                </div>
                <div class="col">
                  Username : <span id="username"></span>
                </div>
                <div class="col">
                  Password : <span id="password"></span>
                </div>
                <div class="col">
                  level : <span id="level"></span>
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
