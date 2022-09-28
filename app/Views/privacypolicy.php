<?php $page="priv"; include 'include/inc_header1.php';?>

<?php include 'include/inc_sidebar2.php';?>

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
        <style>
          .date {
    display: inline-block;
    background-color: #025497;
    color: #fff;
    padding: 3px 4px;
    text-align: center;
    font-weight: 500;
    position: absolute;
    left: 60px;
    top: -20%;
}
.date:before {
    content: "";
   transform: skew(244deg,-7deg);
    width: 35px;
    height: 6px;
    position: absolute;
    background-color: #247793;
    /* bottom: -21px; */
    left: 41px;
    z-index: -1;
    top: 2px;
}
.date:after{
  content: "";
   transform: skew(122deg,6deg);
    width: 35px;
    height: 6px;
    position: absolute;
    background-color: #247793;
    /* bottom: -21px; */
    left: -5px;
    z-index: -1;
    top: 45px;
    top: 2px;
}
        </style>
            <div class="container">
              <p class="date">Blog List</p>
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