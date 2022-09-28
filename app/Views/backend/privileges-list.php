
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
            <h1 class="m-0">Privileges</h1>
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
              <a class="btn btn-danger" href="<?php echo base_url('admin/privileges-access')?>">Add Privileges Access</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                    <th>Role</th>
                    <th>Page Name</th>
                    
                    
                    
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_roleaccess as $row) :?>
                    <tr>
                    <td><?php echo $row["roleaccessid"] ?></td>
                    <td><?php foreach($tbl_rolemaster as $doc):
                         if($row['roleid']==$doc['roleid']){echo $doc['role'];} 
                         endforeach ;?>
                      <?php //echo $row["roleid"] ?></td>
                    <td>
                    <?php foreach($tbl_formaccess as $doc1):
                         if($row['formid']==$doc1['formid']){echo $doc1['form_name'];} 
                         endforeach ;?>
                    <?php //echo $row["formid"] ?></td>
                   
                    
                    <td><a class="btn btn-danger" href="<?php echo base_url()?>/admin/privilege-delete/<?php echo $row["roleaccessid"] ?>">Delete</a></td>
                   </tr>
                        <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Role</th>
                    <th>Page Name</th>
                    
                    
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
<script src="../../plugins/jquery/jquery.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>



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
