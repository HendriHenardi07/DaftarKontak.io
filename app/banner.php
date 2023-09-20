<?php 
include('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT COUNT(id) AS jmlkt FROM tb_daftarkontak");
$ya = mysqli_query($koneksi, "SELECT COUNT(*) AS ya FROM tb_daftarkontak WHERE status='Aktif'");
$tidak = mysqli_query($koneksi, "SELECT COUNT(*) AS tidak FROM tb_daftarkontak WHERE status='Tidak Aktif'"); 
$luar = mysqli_query($koneksi,"SELECT COUNT(*) AS luar FROM tb_daftarkontak WHERE jenis='Luar Negeri'");
$ind = mysqli_query($koneksi,"SELECT COUNT(*) AS ind FROM tb_daftarkontak WHERE jenis!='Luar Negeri'");


$total = mysqli_fetch_array($query);
$view = mysqli_fetch_array($luar);
$views = mysqli_fetch_array($ind);
$no = mysqli_fetch_array($tidak);
$yes = mysqli_fetch_array($ya);
?>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total['jmlkt']; ?></h3>

                <p>Total Kontak</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?page=datakontak" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $views['ind']; ?><sup style="font-size: 20px"></sup></h3>

                <p>Nomor Indonesia</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?page=datakontak" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $view['luar']; ?></h3>

                <p>Nomor Luar Negeri</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?page=datakontak" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $yes['ya']; ?></h3>

                <p>Aktif</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?page=kategori" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6 ">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $no['tidak']; ?></h3>

                <p>Tidak Aktif</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?page=kategori" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <!-- ./col -->
