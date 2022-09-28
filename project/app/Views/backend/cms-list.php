
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
            <h1 class="m-0"><?php echo $title;?></h1>
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  
    <!-- Main content -->
    <div class="card">
              <div class="card-header">
              <a class="btn btn-danger" href="<?php echo base_url('admin/add-cms')?>">Add Cms</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Page Title</th>
                    <th>Meta Title</th>                    
                    <th>Blog Meta Des</th>                                      
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($cms_page as $row) :?>
                    <tr>
                    <td><?php echo $row["cms_id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["meta_title"] ?></td>
                    <td><?php echo $row["meta_des"] ?></td>
                   
                    
                    <td><a class="btn btn-primary" href="<?php echo base_url()?>/admin/cms-edit/<?php echo $row["cms_id"] ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="<?php echo base_url()?>/admin/cms-delete/<?php echo $row["cms_id"] ?>">Delete</a></td>
                   </tr>
                        <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Page Title</th>
                    <th>Meta Title</th>                    
                    <th>Blog Meta Des</th>                                      
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
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
