<?php $page="samples"; include 'include_sample/inc_header1.php';?>

<?php include 'include_sample/inc_sidebar2.php';?>

<main class="vt-main">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3"> 
                <h3>
                    category
                </h3>
                
                <!-- asasas -->
               
			<form name="advanced_filter" id="advanced_filter" method="get" action="<?php echo base_url('samples');?>">
              <div class="filter-box">
				
				<div id="category">
                <?php //$getCategory = $this->request->getGet('Category') ? $this->request->getGet('Category') : array();?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="catinputid1" name="Category" value="food">
                    <label class="form-check-label" for="catinputid1">
                        food
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="catinputid2" name="Category" value="banking">
                    <label class="form-check-label" for="catinputid2">
                    banking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="catinputid3" name="Category" value="mobile">
                    <label class="form-check-label" for="catinputid3">
                    mobile
                    </label>
                </div>
                                                
                </div>
                </div>





            </div>
            <div class="col-md-9">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Sample</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Level 1 Sample</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Level 2 Sample</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-lavel3-tab" data-bs-toggle="pill" data-bs-target="#pills-lavel3" type="button" role="tab" aria-controls="pills-lavel3" aria-selected="false">Level 3 Sample</button>
                    </li>
                </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <?php  foreach ($sample_portfolio as $key => $value) { ?>
                                <p><?php echo $value['smp_name'];?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php  foreach ($level1_list as $key => $value) { ?>
                                <p><?php echo $value['smp_name'];?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <?php  foreach ($level2_list as $key => $value) { ?>
                                <p><?php echo $value['smp_name'];?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="pills-lavel3" role="tabpanel" aria-labelledby="pills-lavel3-tab">
                            <?php  foreach ($level3_list as $key => $value) { ?>
                                <p><?php echo $value['smp_name'];?></p>
                            <?php } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>


</section>

<?php include 'include_sample/inc_footer3.php';?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() { 
   $('input[name="Category"]').change(function(){
        $('#advanced_filter').submit();
   });
     $('.cat_filter').on('change',function(){
            $('#advanced_filter').submit();
            });
  });
</script>
<?php include 'include_sample/inc_bottom4.php';?>