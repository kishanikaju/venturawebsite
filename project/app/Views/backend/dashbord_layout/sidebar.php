<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="" class="brand-link">

      <img src="<?php echo base_url();?>/dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">

      <span class="brand-text font-weight-light">Ventura Admin</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="image">

          <img src="<?php echo base_url();?>/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">

        </div>

        <div class="info"><?php $session = session(); ?>

          <a href="#" class="d-block"><?php echo $session->name; ?></a>

          <a href="<?php echo base_url('admin/logout');?>" class="d-block">Logout</a>

        </div>

      </div>



      <!-- SidebarSearch Form -->

      <div class="form-inline">

        <div class="input-group" data-widget="sidebar-search">

          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

          <div class="input-group-append">

            <button class="btn btn-sidebar">

              <i class="fas fa-search fa-fw"></i>

            </button>

          </div>

        </div>

      </div>



      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">

                <a href="<?php echo base_url('admin/user-list');?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>User List</p>

                </a>

              </li>
              
                <!-- <li class="nav-item">

                <a href="<?php echo base_url('admin/cms-list');?>" class="nav-link ">

                  <i class="far fa-circle nav-icon"></i>

                  <p>CMS List</p>

                </a>

              </li>   -->
             
              <!-- <li class="nav-item">

                <a href="<?php echo base_url('admin/blog-category-list');?>" class="nav-link ">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Blog Category List</p>

                </a>

              </li> -->
              
              <li class="nav-item">

                <a href="<?php echo base_url('admin/blog-list');?>" class="nav-link ">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Blog List</p>

                </a>

              </li>
                <!-- <li class="nav-item">

                <a href="<?php echo base_url('admin/blog-comment-list');?>" class="nav-link ">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Blog Comment List</p>

                </a>

              </li> -->
              

              
             
              
              
              


        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>