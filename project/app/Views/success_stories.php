<!DOCTYPE html>
<html lang="en">

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
    <title>Document</title>
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
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-31.png" alt="" />
                    <p>Who We Are</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-32.png" alt="" />
                    <p>Services We Specialise In</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-33.png" alt="" />
                    <p>Why Work With Us</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-34.png" alt="" />
                    <p>Our Success Stories</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
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
            <div class="container text-center" >
                  <div class="row">
                    <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn active btn-outline-primary btn-lg" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Interactive</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn btn-outline-primary btn-lg" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Scenario based</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn btn-outline-primary btn-lg" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Gamified</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn btn-outline-primary btn-lg" id="pills-Video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Video-based</button>
                        </li>
                    </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-09.png" alt="" class="img-fluid"/>
                    

                </div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-10.png" alt="" class="img-fluid"/></div>
            </div><br>
            <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-11.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-12.png" alt="" class="img-fluid"/></div>
            </div><br>
            <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-13.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-14.png" alt="" class="img-fluid"/></div>
            </div><br>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-11.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-12.png" alt="" class="img-fluid"/></div>
            </div><br>
            <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-13.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-14.png" alt="" class="img-fluid"/></div>
            </div><br>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        
            <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-13.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-14.png" alt="" class="img-fluid"/></div>
            </div><br>
        </div>
        <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
        <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-11.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-12.png" alt="" class="img-fluid"/></div>
            </div><br>
            <div class="row">
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-13.png" alt="" class="img-fluid"/></div>
                <div class="col-md-6"><img src="<?php echo base_url();?>/assets/img/OurSuccessStories_2-14.png" alt="" class="img-fluid"/></div>
            </div><br>
        </div>
        </div>
                    </div>
                  </div>
                </div> 
                <div class="container" > 
                
                
                
                 </div>
            
       </section>
       
       <section class="vt-footer">
        
            <div class="container">
                <footer class="justify-content-between align-items-center py-3 my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-bg-dark text-center" >
                                <div class="card-body">
                                  <h5 class="card-title">VENTURA INDIA</h5>
                                  
                                  <p class="card-text">Ventura Learning Technologies LLP,
                                    Vistar Shubharambh, Balewadi,
                                    Pune - 411045 INDIA</p>
                                    <p>
                                        +91 800-777-3153
                                    </p>
                                  <p>
                                    connect@venturatechnologies.in
                                  </p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-bg-dark text-center" >
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
      
       <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/HomePage_4-11.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/HomePage_4-10.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/HomePage_4-12.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>      
    </div>
  </div>
</div>
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