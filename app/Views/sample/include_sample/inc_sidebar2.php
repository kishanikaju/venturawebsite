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
                    <p>food</p>
                </a>
            </li>
            <li class="vt-logo1 <?php if($page=='services-we'){echo 'activemenu';}?>">
                <a  href="<?php echo base_url('services-we');?>">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-32.png" alt="" />
                    <p>Contstruction</p>
                </a>
            </li>
            <li class="vt-logo1">
                <a href="#">
                    <img src="<?php echo base_url();?>/assets/img/HomePage_4-33.png" alt="" />
                    <p>Banking</p>
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