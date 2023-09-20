<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_daftarkontak where id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="get" action="edit/edit_data.php">
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" 
                    value="<?php echo $view['nama'];?>">
                    <input type="text" class="form-control" placeholder="Nama" name="id"
                    value="<?php echo $view['id'];?>" hidden >
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nomer Handphone</label>
                    <input type="text" class="form-control" placeholder="Nomer Hp" name="nohp"
                    value="<?php echo $view['nohp'];?>">
                  </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Pilih</label>
                      <select class="custom-select" id="inputGroupSelect01" name="jenis">
                        <option value="<?php echo $view['jenis'];?>" selected><?php echo $view['jenis'];?></option>
                        <option value="Telkomsel">Telkomsel</option>
                        <option value="XL">XL</option>
                        <option value="Tri">Tri</option>
                        <option value="Indoosat">Indoosat</option>
                        <option value="Luar Negeri">Luar Negeri</option>
                      </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                      <label>Pilih</label>
                      <select class="custom-select" id="inputGroupSelect01" name="status">
                        <option value="<?php echo $view['status'];?>" selected><?php echo $view['status'];?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                      </select>
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-sm btn-info bg-success">Update</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
    </div>
</section>
