<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $this->config->item('title'); ?> : <?php echo $this->config->item('caption'); ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets'); ?>/dist/img/logoico.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition login-page" style="background-image: url('<?php echo base_url('assets'); ?>/dist/img/background.jpg');background-size: contain;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center" style="background-color: #003459;
    border-bottom: 1px solid rgb(0 52 89);">
      <a href="<?php echo base_url(''); ?>" class="h1"><img src="<?php echo base_url('assets'); ?>/dist/img/logo.png" width="100px"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login_form" name="login_form" method="post" action="<?php echo base_url('login'); ?>/loginform" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="login_username" name="login_username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
          <input type="password" class="form-control" id="login_code" name="login_code" placeholder="Secret Code">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
	  <?php if ($this->session->flashdata('success')) {
	  header('Refresh: 1; url='.base_url('admin'));
	  ?>
	  <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <i class="icon fa fa-check"></i> Success! Redirecting...
      </div>
	  <?php } ?>
	  <?php if ($this->session->flashdata('error')) { ?>
	  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-ban"></i> Error! Invalid Username Password
      </div>
	  <?php } ?>
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
