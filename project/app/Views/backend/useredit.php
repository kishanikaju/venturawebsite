<?php $this->extend('backend/dashbord_layout/main.php') ?>

<?php $this->section('content') ?>
    
<?= $this->include('backend/dashbord_layout/header.php') ?>

  <!-- Main Sidebar Container -->
  <?= $this->include('backend/dashbord_layout/sidebar.php') ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
if(session()->getFlashdata('status'))
{
    echo "<h4 style='color:green;'>".session()->getFlashdata('status')."</h4>";
}
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User Detail  </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="col-md-6">
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit User Detail </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="register-box">
 

  <div class="card">
    <div class="card-body register-card-body">
     

       <form action="<?php echo base_url('admin/update/'.$tbl_usermaster['userid']);?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="full_name" placeholder="Full name" value="<?php echo $tbl_usermaster['name']; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email_id" placeholder="Email" value="<?php echo $tbl_usermaster['username']; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" value="<?php echo $tbl_usermaster['phone_no']; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
        <select class="form-control" name="gender" >
                        <option value="">select Gender</option>
                          <option value="M" <?php if($tbl_usermaster['gender']=="M") echo "selected"; ?>>Male</option>
                          <option value="F" <?php if($tbl_usermaster['gender']=="F") echo "selected";?>>Female</option>
                          
                        </select>
                        
                      </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $tbl_usermaster['password']; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        
        <div class="form-group">
                       
                       <select class="form-control" name="userrole">
                       <option>User Belongs Group</option>
                       
                       <?php foreach($tbl_rolemaster as $row):?>
                       <option value="<?php echo $row['roleid']?>" <?php if($tbl_usermaster['role']==$row['roleid']) echo "selected"; ?>><?php echo $row['role']?></option>
                        
                         <?php endforeach;?>
                         
                       </select>
                     </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
            </div>
            </div>
            <div class="col-md-6"></div>
          </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <style type="text/css">
    label{       width: 40%;
    font-size: 15px;}
    td input, td select, input[type="file"] {
    width: 50%;
    padding: 5px;display: inline;
    font-size: 15px;
}

</style>  
  <script type="text/javascript">
    
    function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('#preview').html('<img src="'+event.target.result+'" width="300" height="auto"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}
$("#userfile").change(function () {
    imagePreview(this);
});
</script>  
  <?php $this->endSection() ?>