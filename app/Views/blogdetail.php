<!DOCTYPE html>
<html lang="en">
<?php $page='blog-list'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/homepage.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/commanstyle.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightslider-new.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $meta_desc;?>" />
</head>

<body>
    
   <div class="vt-side-nav" id="vtMenu">
        <ul class="vt-nav">
            <li class="vt-logo">
                <a href="<?php echo base_url();?>">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-30.png" alt="" />
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Home">
                        <use xlink:href="#home"></use>
                    </svg>
                    Home
                </a>
            </li> -->
            <li class="vt-logo1 <?php if($page=='homepage'){echo 'activemenu';}?>">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-31.png" alt="" />
                    <p>Who We Are</p>
                </a>
            </li>
            <li class="vt-logo1 <?php if($page=='services'){echo 'activemenu';}?>">
                <a  href="<?php echo base_url('services');?>">
                    
                    <?php if($page=='services'){?>
                        <img  src="<?php echo base_url();?>/assets/img/HomePage_selected.png" alt="" />
                    <?php }else{?>
                        <img  src="<?php echo base_url();?>/assets/img/HomePage_4-32.png" alt="" />
                        <?php }?>
                    
                        <p>Services We Specialise In</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-33.png" alt="" />
                    <p>Why Work With Us</p>
                </a>
            </li>
            <li class="vt-logo1 dropend">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-34.png" alt="" />
                    <p>Our Success Stories</p>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </li>
            <li class="vt-logo1 <?php if($page=='blog-list'){echo 'activemenu';}?>">
                <a href="<?php echo base_url('blog-list');?>">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-35.png" alt="" />
                    <p>Knowledge Centre</p>
                </a>
                
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-36.png" alt="" />
                    <p>Join Our Team</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-37.png" alt="" /><p>Contact Us</p>
                </a>
            </li>
        </ul>
        <div class="mobile-nav">
            <a href="#" onclick="myFunction()">
                <img src="<?php echo base_url();?>/assets/img/HomePage_4-30.png" alt="" class="vt-logo" />
            </a>
            <!-- <button type="button" class="menu-icon" onclick="myFunction()">
                <span></span>
                <span></span>
                <span></span>
            </button> -->
            <button class="close-menu" onclick="myFunction()">
                &times;
            </button>
        </div>
</div>

    <main class="vt-main">
        <section>
            <img src="<?php echo base_url();?>/assets/img/blogbanner.png" class="img-fluid" alt="">
        </section>



        <section class="vt-blog-bg">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="<?php echo base_url();?>/assets/img/blognewslatter.png" class="vt-blog-strip" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row py-3 my-4">
                    <div class="col-md-9">
                        <div class="card mb-3 card-bg" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url();?>/assets/img/blogwriter.png" class="img-fluid"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><span style="vertical-align: -130px;">
                                                <?php echo $blogdetail->blog_createdby; ?>
                                            </span></h5>

                                        <p class="card-text"><small class="card-text-muted">Ventura Technology |
                                                <?php $pudate = $blogdetail->blog_createon; ?>
                                                <?php echo date("M d,Y", strtotime($pudate) );?>
                                            </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h1>
                                <?php echo $blogdetail->blog_title; ?>
                            </h1>
                            <div id="contant-img">
                            <?php echo $blogdetail->blog_contents; ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
<!-- LinkedIn Social Media -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url('/blogs/'.$blogdetail->blog_url);?>" target="_blank">
                    <i class="fa fa-lg fa-linkedin" aria-hidden="true">&nbsp;</i>
    </a>   
     <!-- Facebook Social Media -->
     <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url('/blogs/'.$blogdetail->blog_url);?>" target="_blank">
        <i class="fa fa-lg fa-facebook" aria-hidden="true">&nbsp;</i>
    </a>
     <!-- Twitter Social Media -->
     <a href="https://twitter.com/share?url=<?php echo base_url('/blogs/'.$blogdetail->blog_url);?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
     <i class="fa fa-lg fa-twitter" aria-hidden="true">&nbsp;</i>
    </a>
                    </div>
                    

                </div>
                <!-- <div class="row justify-content-between">
                    <div class="col-4">
                        <a href="#" class="btn btn-primary btn-sm">Prev Blog</a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-primary btn-sm float-end">Next Blog</a>
                    </div>
                  </div> -->

            </div>

        </section>

        <section class="vt-footer">

            <div class="container">
                <footer class="justify-content-between align-items-center py-3 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-bg-dark text-center">
                                <div class="card-body">
                                    <h5 class="card-title">VENTURA INDIA</h5>

                                    <p class="card-text"><i class="fa fa-lg fa-map-marker"
                                            aria-hidden="true">&nbsp;</i>Ventura Learning Technologies LLP,<br>
                                        OFFICE 401, City Avenue, Next To Hotel Sayaji, Wakad, <br>Pune - 411057
                                        INDIA</p>
                                    <p><i class="fa fa-lg fa-mobile" aria-hidden="true">&nbsp;</i>
                                        +91 755-9398-411
                                    </p>
                                    <p><i class="fa fa-lg fa-envelope" aria-hidden="true">&nbsp;</i>
                                        connect@venturatechnologies.in
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-bg-dark text-center">
                                <div class="card-body">
                                    <h5 class="card-title">QUICK LINKS</h5>


                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">


                        </div>

                    </div>





                </footer>

            </div>
            <div class="vt-footer-res">
                <p class="text-center">copyright &copy; 2022. All Rights Reserved</p>
            </div>


        </section>

    </main>


    <script>
        function myFunction() {
            var element = document.getElementById("vtMenu");
            element.classList.toggle("open");
        }
        window.addEventListener('click', function (e) {
            if (document.getElementById('vtMenu').contains(e.target)) {
                // Clicked in box
            } else {
                var element = document.getElementById("vtMenu");
                element.classList.remove("open");
            }
        });
    </script>

</body>

</html>