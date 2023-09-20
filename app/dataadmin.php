  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kontak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomer Handphone</th>
                    <th>Jenis Operator</th>
                    <th>Status</th>
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

    <!-- modal-lg -->
    
