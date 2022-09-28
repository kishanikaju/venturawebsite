
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
              <form class="form-horizontal" action="<?php echo base_url('admin/privileges-access') ?>" enctype="multipart/form-data" method="post" id="quickForm">
              
                <div class="card-body">
                
                <div class="form-group row">
                        <label for="inputSlug" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="user" required>
                                <option>---------</option>
                               
                                <?php foreach($tbl_rolemaster as $row):?>
                          <option value="<?php echo $row["roleid"] ?>"><?php echo $row["role"] ?></option>
                          
                          <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                    <table class="table table-bordered ">
                      <tr>
                      <th>Privilege</th>
                      
                      </tr>
                      <?php foreach($tbl_formaccess as $row):?>
                      <tr>
                        <td><input type="checkbox" name="formid[]" value="<?php echo $row["formid"] ?>" style="border:none ;">
                        
                                <label class="form-check-label"  for="exampleCheck4"><?php echo $row["form_name"] ?></label>
                        </td>
                        <!-- <td><input type="checkbox" class="form-check-input" name="status[]" id="exampleCheck3" value="Y">
                        <input type="hidden" class="form-check-input" name="status[]" id="exampleCheck3" value="N">
                      </td> -->
                      </tr>
                      <?php endforeach ;?>
                      
                    </table>
                    
                    
                  
                  
                  
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
