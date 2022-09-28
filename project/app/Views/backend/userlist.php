
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
            <h1 class="m-0">User List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  
    <!-- Main content -->
    <div class="card">
              <div class="card-header">
                <a class="btn btn-danger" href="<?php echo base_url('admin/register');?>">Add User </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Emailid</th>
                    <th>User Role</th>
                    <th>Gender</th>
                    <th>phone No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php foreach($tbl_usermaster as $row) :?>
                    <tr>
                    <td><?php echo $row["userid"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["username"] ?></td>
                    <td><?php foreach($tbl_rolemaster as $doc):
                         if($row['role']==$doc['roleid']){echo $doc['role'];} 
                         endforeach ;?>
                      <?php //echo $row["role"] ?></td>
                    <td><?php if($row["gender"]=='M'){ echo 'Male';}else{echo 'Female';}   ?></td>
                    <td><?php echo $row["phone_no"] ?></td>
                    
                    <td><a class="btn btn-primary" href="<?php echo base_url()?>/admin/edit/<?php echo $row["userid"] ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="<?php echo base_url()?>/admin/delete/<?php echo $row["userid"] ?>">Delete</a></td>
                   </tr>
                        <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                    <th>Emailid</th>
                    <th>User Role</th>
                    <th>Gender</th>
                    <th>phone No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    
  </div>
  <!-- /.content-wrapper -->

  <!-- jQuery -->
<script src="<?php echo base_url();?>/plugins/jquery/jquery.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- AdminLTE App -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
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
  <?php $this->endSection() ?>
