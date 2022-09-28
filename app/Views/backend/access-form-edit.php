
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
            <h1 class="m-0"><?php echo $title;?>  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title;?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title;?> </h3>
              </div>
              <!-- /.card-header -->
             
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url('admin/access-form-update/'.$tbl_formaccess['formid']) ?>"  method="post" >
              
                <div class="card-body">
                
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Page Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputName" name="formname" value="<?php echo $tbl_formaccess['form_name'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSlug" class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputSlug" name="url" value="<?php echo $tbl_formaccess['url'];?>">
                    </div>
                  </div>  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  <?php $this->endSection() ?>
