<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  if(!$_SESSION['nama']){
    header('location: ../index.php?session=expired');
  }
  include('header.php');?>
  <?php include('../config/koneksi.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- content header -->
    <?php include('contentheader.php'); ?>
    <!-- akhir content header -->
  <?php 
  if(isset($_GET['page'])){
    if($_GET['page']== 'dashboard'){
      include('main.php');
    }else if($_GET['page']== 'datakontak'){
      include('datakontak.php');
    }else if($_GET['page']== 'kelolakontak'){
      include('kelolakontak.php');
    }
    else if($_GET['page']== 'edit_data'){
      include('update/update.php');
    }else if($_GET['page']== 'kategori'){
      include('kategori.php');
    } else if($_GET['page']== 'dataoperator'){
        include('dataoperator.php');
    } else if($_GET['page']== 'dataadmin'){
        include('dataadmin.php');
    } else if($_GET['page']== 'manadmin'){
        include('admin-controller.php');
    } else if($_GET['page']== 'manoperator'){
        include('operator-controller.php');
    } else if($_GET['page']== 'edit_admin'){
        include('admin/edit_admin.php');
    } else{
      include('main.php');
    }
  }else{
    include('main.php');
  }
  ?>

  </div>
  <!-- /.content-wrapper -->

  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
