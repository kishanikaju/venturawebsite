<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register user</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Ventura Admin</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new member</p>

      <form action="<?php echo base_url('admin/registerprocess');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="full_name" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email_id" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
                       
                        <select class="form-control" name="gender" required>
                        <option>select Gender</option>
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                          
                        </select>
                      </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!--<div class="input-group mb-3">-->
        <!--  <input type="hidden" class="form-control" name="password" placeholder="Retype password" password_verify>-->
        <!--  <div class="input-group-append">-->
        <!--    <div class="input-group-text">-->
        <!--      <span class="fas fa-lock"></span>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <div class="form-group">
                       
                       <select class="form-control" name="userrole">
                       <option>User Belongs Group</option>
                       <?php foreach($tbl_rolemaster as $row):?>
                       <option value="<?php echo $row['roleid']?>"><?php echo $row['role']?></option>
                        
                         <?php endforeach;?>
                       </select>
                     </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="<?php echo base_url('admin/login')?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->

</body>
</html>
