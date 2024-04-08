<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= config('Boilerplate')->appName ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css'); ?>">
 <!-- Custom style for RTL -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/login.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?= base_url(config('Boilerplate')->theme['sidebar']['brand']['logo']['icon']) ?>" class="brand-image img-circle elevation-<?= config('Boilerplate')->theme['sidebar']['brand']['logo']['shadow'] ?>">
      <b><?= config('Boilerplate')->appName ?></b>
    </div>
    <?= $this->renderSection('content') ?>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.2/dist/js/adminlte.min.js"></script>

</body>

</html>
