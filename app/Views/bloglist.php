<?php $page="blog-list"; include 'include/inc_header1.php';?>

<?php include 'include/inc_sidebar2.php';?>

<main class="vt-main">
        <section>
            <img src="<?php echo base_url();?>/assets/img/blogbanner.png" class="img-fluid" alt="">
        </section>
        
        <section class="vt-blog-bg">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 offset-md-4">
                        <img src="assets/img/blognewslatter.png" class="vt-blog-strip" alt="">
                    </div>
                </div>
                <!-- list -->
                <div class="row py-3 my-4" id="myDIV2">

                    
                    <?php  foreach ($blogslied as $key => $value) { ?>
<div class="col-md-4 py-3 new-class">
  <div class="card h-100">
    
    <div class="vt-blog-list-bg">
      
        <div class="row g-0">
          <div class="col-md-3">
            <img src="<?php echo base_url();?>/uploads/blog/<?php echo $value['blog_img'];?>" class="img-fluid"
              alt="...">
          </div>
          <div class="col-md-9">
            <div class="card-body vt-card-height">
              <h5 class="card-title">
                <?php echo $value['blog_createdby'];?>
              </h5>

              <p class="card-text"><small class="text-white">
                  <?php foreach($cat as $row):
                                            if($value['blog_cat']==$row['blogcatid']){echo $row['blogcat_name'];} 
                                            endforeach ;?> Ventura Technology |
                  <?php $pudate = $value['blog_createon']; ?>
                  <?php echo date("M d,Y", strtotime($pudate) );?>
                </small></p>
            </div>
          </div>
        </div>
        <hr>
        <h4>
          <?php $content = $value['blog_title']; echo $result = substr($content, 0, 60);echo "..."?>
        </h4>
                    
    </div>
    

    <div class="card-body vt-card-height">

      <p>
        <?php $content = $value['blog_meta_desc']; echo $result = substr($content, 0, 300);echo "..."?>
      </p>
      <a href="<?php echo base_url('blogs/'.$value['blog_url'])?>">
        <span aria-hidden="true" class="float-end">Read More &raquo;</span>
      </a>
    </div>
  </div>
</div>
<?php } ?>
                    
                </div>
                <!-- list end -->
<div id="myDIV" style="display:none;">
                <!-- list -->
                <div class="row py-3 my-4">

                    
                    <?php  foreach ($blog as $key => $value) { ?>
                    <div class="col-md-4 py-3 new-class">
                        <div class="card h-100"> 
                            <div class="vt-blog-list-bg">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="<?php echo base_url();?>/uploads/blog/<?php echo $value['blog_img'];?>" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $value['blog_createdby'];?></h5>

                                            <p class="card-text"><small class="text-white"><?php foreach($cat as $row):
                         if($value['blog_cat']==$row['blogcatid']){echo $row['blogcat_name'];} 
                         endforeach ;?> Ventura Technology | <?php $pudate = $value['blog_createon']; ?><?php echo date("M d,Y", strtotime($pudate) );?></small></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>
                                <?php $content = $value['blog_title']; echo $result = substr($content, 0, 60);echo "..."?>
                            </h4>
                            </div>
                            <div class="card-body">

                                <p><?php $content = $value['blog_meta_desc']; echo $result = substr($content, 0, 300);echo "..."?> </p>
                                <a href="<?php echo base_url('blogs/'.$value['blog_url'])?>">
                                    <span aria-hidden="true" class="float-end">Read More &raquo;</span>
                                </a>
                            </div>
                        </div>
                    </div><?php } ?>
                    
                </div>
                <!-- list end -->

                

</div>
                <div class="wrapper1" id="divHide" onclick="divShowHide()">
                    <a href="javascript:void(0)" class="cta" >
                        <span>View all</span>
                        <span>
                            <svg width="30px" height="25px" viewBox="0 0 66 43" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path class="one"
                                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path class="two"
                                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path class="three"
                                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                </g>
                            </svg>
                        </span>
                                            </a>
                </div>
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
                                  
                                  <p class="card-text"><i class="fa fa-lg fa-map-marker" aria-hidden="true">&nbsp;</i>Ventura Learning Technologies LLP,<br>
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
    <script>
function divShowHide() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("divHide");
  var z = document.getElementById("myDIV2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  }
}
</script>
</body>

</html>