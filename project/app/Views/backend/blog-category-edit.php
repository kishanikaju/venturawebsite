
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
            <h1 class="m-0">Edit Blogs Category </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Blogs Category</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url('admin/blog-category-update/'.$blog_category['blogcatid']) ?>" enctype="multipart/form-data" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $blog_category['blogcat_name']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSlug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="<?php echo $blog_category['blogcat_slug']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSlug" class="col-sm-2 col-form-label">Parent</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="parent" required>
                        <option>---------</option>
                          <option value="1">aaa</option>
                          <option value="2">bbb</option>
                          
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="editor" name="editor" ><?php echo $blog_category['blogcat_description']; ?></textarea>
                      <script src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>
                      <script src="<?php echo base_url();?>/ckfinder/ckfinder.js"></script>
                      <script>
                      var editor=CKEDITOR.replace('editor');
                        CKEDITOR.config.extraPlugins='colorbutton';
                        CKFinder.setupCKEditor(editor);
                      </script>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-6">
                      
                      <input type="text" class="form-control" id="inputMetaTitle" name="metatitle" placeholder="Meta Title" value="<?php echo $blog_category['blogcat_meta_title']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMetaDescription" class="col-sm-2 col-form-label">Meta Description</label>
                    <div class="col-sm-6">
                    <textarea id="inputMetaDescription" name="metadescription" class="form-control"  rows="5"><?php echo $blog_category['blogcat_meta_desc']; ?></textarea>
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMetaKeywords" class="col-sm-2 col-form-label">Meta Keywords</label>
                    <div class="col-sm-6">
                    <textarea id="inputMetaKeywords" name="metakeywords" class="form-control"  rows="5"><?php echo $blog_category['blogcat_meta_key']; ?></textarea>
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputHeadscript" class="col-sm-2 col-form-label">Head script</label>
                    <div class="col-sm-6">
                    <textarea id="inputHeadscript" name="headscript" class="form-control"  rows="5"><?php echo $blog_category['blogcat_head_script']; ?></textarea>
                     
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <!-- <label for="customFile">Custom File</label> -->
                    
  <label for="formFile" class="col-sm-2 col-form-label">Upload image</label>
  <div class="col-sm-6">
  <input class="form-control" type="file" name="userfile" id="formFile" value="<?php echo $blog_category['blogcat_img']; ?>">
  </div>
                    
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">SAVE</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<script>$(document).on('change', '#name', function() {
var name = $(this).val();

 name = name.toLowerCase();
 name = name.replace(/\s+/g, '-');
$("#slug").val(name);

});</script> 

  <?php $this->endSection() ?>
