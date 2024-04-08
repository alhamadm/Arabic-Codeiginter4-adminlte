<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <title><?= $title ?? '' ?> | <?= config('Boilerplate')->appName ?></title>
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/sweetalert2/sweetalert2.min.css') ?>">
  <!-- Render section boilerplate css -->
  <?= $this->renderSection('css') ?> 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css'); ?>">
   <!-- Bootstrap 4 RTL -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/bootstrap.min.css') ?>">
  <!-- Custom style for RTL -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/custom.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">
  
  

</head>

<body class="layout-fixed layout-navbar-fixed sidebar-mini <?= config('Boilerplate')->theme['footer']['fixed'] ? 'layout-footer-fixed' : '' ?> <?= config('Boilerplate')->theme['body-sm'] ? 'text-sm' : '' ?>">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include('agungsugiarto\boilerplate\Views\layout\header') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('agungsugiarto\boilerplate\Views\layout\mainsidebar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?= $this->include('agungsugiarto\boilerplate\Views\layout\contentheader') ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('content') ?>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <!-- <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div> -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <strong><a href="https://github.com/agungsugiarto/boilerplate">Q8astro</a></strong>
      </div>
      <!-- Default to the left -->
      <strong>&copy; <?= date('Y') ?> <a href="<?= config('Boilerplate')->theme['footer']['vendorlink'] ?>"><?= config('Boilerplate')->theme['footer']['vendorname']?></a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo base_url('plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('dist/js/adminlte.min.js'); ?>"></script>
  <!-- Preload Scriptt -->
  <script>
  $('.sidebar-toggle').on('click',function(event){event.preventDefault();if(Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))){sessionStorage.setItem('sidebar-toggle-collapsed','')}else{sessionStorage.setItem('sidebar-toggle-collapsed','1')}});(function(){if(Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))){var body=document.getElementsByTagName('body')[0];body.className=body.className+' sidebar-collapse'}})()
  </script>
  <!-- Render section boilerplate js -->
  <?= $this->renderSection('js') ?>
  <script>
  $.ajaxSetup({headers:{'<?= config('Security')->headerName ?>':$('meta[name="<?= config('Security')->tokenName ?>"]').attr('content')}})
  </script>
  <!-- Sweeat alert -->
  <script src="<?php echo base_url('plugins/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url('plugins/chart.js/Chart.min.js'); ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
  <script src="<?php echo base_url('plugins/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url('dist/js/pages/sample.js'); ?>"></script>
 
  <script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  <?php if (session('sweet-success')) { ?>
    Toast.fire({
      icon: 'success',
      title: '<?= session('sweet-success.') ?>'
    });
  <?php } ?>
  <?php if (session('sweet-warning')) { ?>
    Toast.fire({
      icon: 'warning',
      title: '<?= session('sweet-warning.') ?>'
    });
  <?php } ?>
  <?php if (session('sweet-error')) { ?>
    Toast.fire({
      icon: 'error',
      title: '<?= session('sweet-error.') ?>'
    });
  <?php } ?>
  </script>
</body>

</html>
