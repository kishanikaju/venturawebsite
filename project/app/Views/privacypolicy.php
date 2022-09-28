<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/homepage.css">
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
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                       
                      </div>
                      <div class="col-8">
                        <h1><?php echo $cms_page['name'];?></h1>
                        <div class="vt-span">
                            <p><?php echo $cms_page['cms_content'];?>
                           
                        </p></div>
                      </div>
                      <div class="col">
                       
                      </div>
                                   
                </div>
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
                            <div class="card text-bg-dark text-center">
                                <div class="card-body">
                                  <h5 class="card-title">QUICK LINKS</h5>
                                  
                                  
                                  <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Privacy Policy</a></li>
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="<?php echo base_url();?>/assets/js/lightslider-new.js"></script>
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