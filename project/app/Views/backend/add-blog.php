
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
            <h1 class="m-0">Add Blog  </h1>
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
                <h3 class="card-title">Add Blog </h3>
              </div>
              <!-- /.card-header -->
             
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url('admin/add-blog') ?>" enctype="multipart/form-data" method="post" id="quickForm">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="blog_title" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSlug" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="slug" name="blog_url" placeholder="Slug">
                    </div>
                  </div>
                  <script>$(document).on('change', '#name', function() {
var name = $(this).val();

 name = name.toLowerCase();
 name = name.replace(/\s+/g, '-');
$("#slug").val(name);

});</script>
                  <div class="form-group row">
                    <label for="inputSlug" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="blog_category" required>
                        <option>---------</option>
                        <?php foreach($blog_category as $row):?>
                          <option value="<?php echo $row["blogcatid"] ?>"><?php echo $row["blogcat_name"] ?></option>
                          
                          <?php endforeach ;?>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Excerpt</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="editor" name="excerpt" ></textarea>
                      
                      <script src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>
                      <script src="<?php echo base_url();?>/ckfinder/ckfinder.js"></script>
                      <script>
                      var editor=CKEDITOR.replace('editor');
                        CKEDITOR.config.extraPlugins='colorbutton';
                        CKFinder.setupCKEditor(editor);
                      </script>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="editor1" name="content" ></textarea>
                      <script src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>
                      <script src="<?php echo base_url();?>/ckfinder/ckfinder.js"></script>
                      <script>
                      var editor1=CKEDITOR.replace('editor1');
                        CKEDITOR.config.extraPlugins='colorbutton';
                        CKFinder.setupCKEditor(editor1);
                      </script>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Tag</label>
                    <div class="col-sm-3">                      
                      <input type="text" class="form-control" id="inputviewcount" name="tag" placeholder="Tag">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-md-3">
                      <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_ispublished" id="exampleCheck1" value="Y" >
                        <label class="form-check-label" for="exampleCheck1">Is Published</label>
                      </div>                     
                    </div>
                    <div class="col-md-4">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_ispublished" id="exampleCheck1" value="N" checked>
                        <label class="form-check-label" for="exampleCheck1">Is Not Published</label>
                      </div>
                      </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputHeadscript" class="col-sm-2 col-form-label">Head script</label>
                    <div class="col-sm-6">
                    <textarea id="inputHeadscript" name="headscript" class="form-control"  rows="5"></textarea>
                     
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-md-2">
                      <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_isactive" id="exampleCheck2" value="Y" >
                        <label class="form-check-label" for="exampleCheck2">Is Active</label>
                      </div>                     
                    </div>
                    <div class="col-md-2">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_isactive" id="exampleCheck3" value="N" checked>
                        <label class="form-check-label" for="exampleCheck3">Inactive</label>
                      </div>
                      </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-2">                      
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_status" id="exampleCheck4" value="Y" >
                        <label class="form-check-label" for="exampleCheck4">active</label>
                      </div>
                    </div>
                    <div class="col-sm-2">                      
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_status" id="exampleCheck5" value="N" checked>
                        <label class="form-check-label" for="exampleCheck5">Inactive</label>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Published On</label>
                    <div class="col-sm-3"> Date:                     
                      <input type="date" class="form-control" id="date" name="publishdate" name="pubdate">
                      Time:<input type="time" class="form-control" id="time" name="publishtime"  name="pubtime">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Featured</label>
                    <div class="col-sm-2">                      
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_is_featured" id="exampleCheck2" value="Y" >
                        <label class="form-check-label" for="exampleCheck2">active</label>
                      </div>
                    </div>
                    <div class="col-sm-2">                      
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="blog_is_featured" id="exampleCheck2" value="N" checked>
                        <label class="form-check-label" for="exampleCheck2">Inactive</label>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-6">
                      
                      <input type="text" class="form-control" id="inputMetaTitle" name="metatitle" placeholder="Meta Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMetaDescription" class="col-sm-2 col-form-label">Meta Description</label>
                    <div class="col-sm-6">
                    <textarea id="inputMetaDescription" name="metadescription" class="form-control"  rows="5"></textarea>
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputMetaKeywords" class="col-sm-2 col-form-label">Meta Keywords</label>
                    <div class="col-sm-6">
                    <textarea id="inputMetaKeywords" name="metakeywords" class="form-control"  rows="5"></textarea>
                      
                    </div>
                  </div>
                  
                  
                  <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Created by</label>
                    <div class="col-sm-6">                      
                      <input type="text" class="form-control" id="inputMetaTitle" name="blog_createdby" placeholder="Created by">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">Updated by</label>
                    <div class="col-sm-6">                      
                      <input type="text" class="form-control" id="inputMetaTitle" name="blog_updatedby" placeholder="Updated by">
                    </div>
                  </div> -->
                  
                  <!-- <div class="form-group row">
                    <label for="inputMetaTitle" class="col-sm-2 col-form-label">View count</label>
                    <div class="col-sm-3">                      
                      <input type="text" class="form-control" id="inputviewcount" name="blog_viewcount" placeholder="View count">
                    </div>
                  </div> -->
                  <div class="form-group row">
                   <!-- <label for="customFile">Custom File</label> -->
                    
                        <label for="formFile" class="col-sm-2 col-form-label">Upload image</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" name="userfile" id="userfile">
                        </div>
                    
                  </div>
                  
                  <div class="form-group row" >
                    <!-- <label for="customFile">Custom File</label> -->
                    
                        
                        <div class="col-sm-6" id="preview">
                        
                        </div>
                    
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div><?php //echo phpinfo(); ?>
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
