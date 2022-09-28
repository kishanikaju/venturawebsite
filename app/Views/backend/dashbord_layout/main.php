<?php $session = session();
if($session->has('role')){?>
      
     <!DOCTYPE html>

<!--

This is a starter template page. Use this page to start your new project from

scratch. This page gets rid of all links and provides the needed markup only.

-->

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>VenturaTechnology Admin</title>


  <!-- /.content-wrapper -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- jQuery -->

<script src="<?php echo base_url();?>/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">



<?= $this->renderSection('content') ?>





</div>

<!-- ./wrapper -->



<!-- REQUIRED SCRIPTS -->





<!-- Bootstrap 4 -->

<script src="<?php echo base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->

<script src="<?php echo base_url();?>/dist/js/adminlte.min.js"></script>

</body>

</html> 
  <?php  }else{
  header("location:https://onespottechnologies.in/myci4/admin/login");
   }?>



