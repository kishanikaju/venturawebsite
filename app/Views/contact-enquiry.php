<?php $page="contact"; include 'include/inc_header1.php';?>

<?php include 'include/inc_sidebar2.php';?>

<main class="vt-main">
<section class="vt-contact-header-bg">
<img src="<?php echo base_url();?>/assets/img/ContactUs_ 3-02.png" class="img-fluid" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-3 vt-contact-heding text-center">                
                <p><span>Get in touch </span>with<br><span>Ventura</span></p>
            </div>
            <div class="col-md-9 vt-contact-heding">  </div>
        </div>
    </div>
</section>
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3  vt-font-color"><strong class="vt-curcive-font vt-font-size-45">Ready?</strong><br><span class="vt-p-font-size">This will only take a few minutes.</span></div>
            </div><br>
            <div class="vt-enq-row">
                <img src="<?php echo base_url();?>/assets/img/KnowVentura-19.png"  alt="">
                <form class="form-horizontal" action="<?php echo base_url('sendmail') ?>" enctype="multipart/form-data" method="post" id="quickForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What's your first name?*</label>
                        <input type="text" class="form-control1 form-control" name="fname" id="exampleFormControlInput1">
                        <span class="text-danger">
                        <?= (isset($validation) && $validation->hasError('fname')) ? $validation->getError('fname') : ''?>
                        </span>
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What's your last name?*</label>
                        <input type="text" class="form-control1 form-control" name="lname" id="exampleFormControlInput1">
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What's your email?*</label>
                        <input type="text" class="form-control1 form-control" name="email" id="exampleFormControlInput1">
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What's your phone number?</label>
                        <input type="text" class="form-control1 form-control" name="ph" id="exampleFormControlInput1">
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What company do you work for?*</label>
                        <input type="text" class="form-control1 form-control" name="company" id="exampleFormControlInput1">
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">What's your role in the company?*</label>
                        <input type="text" class="form-control1 form-control" name="role" id="exampleFormControlInput1">
                        <div id="emailHelp" class="form-text">Please complete this required field.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Connect now</button>
                </div>
            </div>
        </form>
            </div>
        </div>
        <div class="vt-ek-div-30">&nbsp;</div>
    </section>
<?php include 'include/inc_footer3.php';?>
</main>
<?php include 'include/inc_bottom4.php';?>