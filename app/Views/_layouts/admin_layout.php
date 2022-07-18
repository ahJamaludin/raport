<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Rapor|SMKTH &mdash; <?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/backend/css/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="<?= base_url(); ?>/public/assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <!-- <nav class="main-header navbar navbar-expand navbar-dark"> -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('auth'); ?>" class="nav-link">
            <h5>SMK Terpadu Hadziqiyyah
            </h5>
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <?php if (session()->get('username') == "") { ?>
          <li>
            <a href="<?= base_url('auth'); ?>"><i class="fas fa-sign-in-alt"> </i> Login</a>
          </li>
        <?php } else { ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if (session()->get('level') == 1) { ?>
                <img src="<?= base_url('public/assets/foto/user/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= session()->get('nama') ?></span>
              <?php } elseif (session()->get('level') == 2) { ?>
                <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= session()->get('nama') ?></span>
              <?php } elseif (session()->get('level') == 3) { ?>
                <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= session()->get('nama') ?></span>
              <?php } ?>

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if (session()->get('level') == 1) { ?>
                  <img src="<?= base_url('public/assets/foto/user/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                <?php } elseif (session()->get('level') == 2) { ?>
                  <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                <?php } elseif (session()->get('level') == 3) { ?>
                  <img src="<?= base_url('public/assets/foto/ptk/' . session()->get('foto')) ?>" class="img-circle" alt="User Image">
                <?php } ?>
                <p>
                  <?= session()->get('nama') ?> | <?php if (session()->get('level') == 1) {
                                                    echo 'Administrator';
                                                  } elseif (session()->get('level') == 2) {
                                                    echo 'Wali Kelas';
                                                    session()->get('kelas');
                                                  } elseif (session()->get('level') == 3) {
                                                    echo 'Guru Mapel';
                                                  } ?>






                  <small><?= date('d M Y') ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="list-group-item">
                <a href="<?= base_url('user') ?>" type="button" class="btn btn-success btn-sm">Profil</a>
                <a href="<?= base_url('auth/logout') ?>" type="button" class="btn btn-primary float-right btn-sm">Logout</a>
              </li>
            </ul>
          </li>
        <?php } ?>
      </ul>
      <ul class="navbar"> </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('auth') ?>" class="brand-link">
        <img src="<?= base_url(); ?>/public/assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">eRapor|SMKTH</span>
      </a>

      <!-- Sidebar -->




      <?php

      if (session()->get('level') == 1) {
        echo $this->include('_layouts/admin_menu');
      } elseif (session()->get('level') == 2) {
        echo $this->include('_layouts/wali_menu');
      } elseif (session()->get('level') == 3) {
        echo $this->include('_layouts/guru_menu');
      } elseif (session()->get('level') == 4) {
        echo $this->include('_layouts/guru_menu');
      }
      ?>

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content  -->
      <?php echo $contents ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?= date('Y'); ?> <a href="https://smkth.sch.id">SMK Terpadu Hadziqiyyah</a>.</strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.0.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/public/assets/backend/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/raphael/raphael.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/public/assets/backend/dist/js/demo.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.all.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/sweetalert/js/sweetalert2.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/sweetalert/js/myscript.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="<?= base_url(); ?>/public/assets/backend/dist/js/pages/dashboard2.js"></script> -->
  <!-- bs-custom-file-input -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>

  <!-- DataTables  & Plugins -->
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [
          //   "copy",
          //   "csv",
          //   "excel",
          // "pdf",
          //   "print",
          // "c olvis"
        ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <!-- <script>
    function bacaGambar(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar_load').attr('scr', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $('#preview_gambar').change(function() {
      bacaGambar(this);
    });
  </script> -->

  <script>
    function bacaGambar(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar_load').attr('scr', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $('#preview_gambar').change(function() {
      bacaGambar(this);
    });
  </script>


</body>

</html>