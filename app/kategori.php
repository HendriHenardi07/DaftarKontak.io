  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Indonesia</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $totalind = mysqli_query($koneksi,"SELECT COUNT(id) AS ind FROM tb_daftarkontak WHERE jenis!='Luar Negeri'");
                    $ttl = mysqli_fetch_array($totalind);
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_daftarkontak WHERE jenis!='Luar Negeri'");
                    while($dft = mysqli_fetch_array($query)){
                  ?>
                <tr>
                    <td><?php echo $dft['nohp']; ?></td>
                    <td><?php echo $dft['status']; ?></td>
                </tr> 
                  </tbody>
                  <?php } ?>
                    <tr class="text-primary">
                        <td><h4><b>Total</b></h4></td>
                        <td><h4><b><?php echo $ttl['ind']; ?></b></h4></td>
                    </tr>
                  <br>
                  <thead>
                        <tr>
                            <th>Luar Negeri</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $totalluar = mysqli_query($koneksi,"SELECT COUNT(id) AS luar FROM tb_daftarkontak WHERE jenis='Luar Negeri'");
                        $lr = mysqli_fetch_array($totalluar);
                        $luar = mysqli_query($koneksi,"SELECT * FROM tb_daftarkontak WHERE jenis='Luar Negeri'");
                        while($l = mysqli_fetch_array($luar)){
                            ?>
                        <tr>
                            <td><?php echo $l['nohp']; ?></td>
                            <td><?php echo $l['status']; ?></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                    <tr class="text-primary">
                        <td><h4><b>Total</b></h4></td>
                        <td><h4><b><?php echo $lr['luar']; ?></b></h4></td>
                    </tr>
                    
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
    
