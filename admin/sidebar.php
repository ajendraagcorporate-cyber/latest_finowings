<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if ($_SESSION['user']['username'] == 'finoadmin') {
?>
  <nav class="main-header navbar navbar-expand navbar-dark" style="background: #273158;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>


      <li class="nav-item">
        <div style="margin-top:-15px;">
          <?php if (isset($_SESSION['user'])) : ?>
            <strong style="display:none;"><?php echo $_SESSION['user']['username']; ?></strong>

            <small>
              <i style="color: #888; display:none;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
              <br>
              <a href="logout.php" style="color: #FFFFFF;font-size: 16px;font-weight: 600;font-family: poppins; ">Logout</a>

            </small>

          <?php endif ?>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #273158;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="background: #273158;">

      <span style="font-weight:bold; color:#FFFFFF; font-size:16px;">Finowings Training Academy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: #273158;">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="background: #273158;">
        <ul class="nav nav-pills nav-sidebar flex-column" style="font-family: poppins;font-size: 14px;color: #ffffff;font-weight: 600;" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>

          <li class="nav-item">


          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="fa fa-home"></i> &nbsp;
              <p>Home</p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <!--<li class="nav-item">
                <a href="homeslider_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Main Slider</p>
                </a>
              </li>
			  
			   <li class="nav-item">
                <a href="cwws-list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage CWWS Records</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="webinar_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Webinar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="featuredin_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Featured-In</p>
                </a>
              </li>
              <!--<li class="nav-item">
                <a href="testimonial_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Testimonial</p>
                </a>
              </li>-->
            </ul>
          </li>


          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-home"></i> &nbsp;
              <p>About Us Page</p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="aboutmukulsir.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>About Mukul Sir</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="aboutfinowings.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>About Finowings</p>
                </a>
              </li>

              <!--<li class="nav-item">
                <a href="visionmissionvalues.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Vision, Mission & Values</p>
                </a>
              </li>-->

            </ul>
          </li>

          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Blog</p>
              <i class="fas fa-angle-left right"></i>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="blog_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="blogcat_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Category</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Finowings Academy</p>
              <i class="fas fa-angle-left right"></i>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="freecourseintro.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Heading and Description</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="freestudytopic_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Topic</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="freestudychapter_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Chapter</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="media_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Media</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-home"></i> &nbsp;
              <p>Manage Courses</p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="course_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>All Courses</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="courseleads_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Course Leads</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="books_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Books</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="dividend_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Dividend List</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="ipoques_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage IPO FAQs</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="dematques_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Demat FAQs</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Contact Form Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry-mutual-fund.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Mutual Fund Enquiry (HP)</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry-mutual-fund-1.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Mutual Fund Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="quiz_users_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Quiz Users List</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="home_popup_enquiry.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Homepage Popup Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="blog-comments.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Blog Comments</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="finacademy-aspirants.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>FinAcademy Aspirants</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry-hindiweb-class-ctr.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Hindi Website Class CTR Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="local-pages-enquiry.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Local Pages Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="edit-strategy-page.php?id=1" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Inraday Landing Page</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>




          <!--<li class="nav-item">
                <a href="course.php" class="nav-link">
                  <i class="fa fa-folder"></i>&nbsp;
                  <p>Course</p>
                </a>
              </li>
             
              
			  
              <li class="nav-item">
                <a href="page.php" class="nav-link">
                  <i class="fa fa-address-book"></i>&nbsp;
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="page.php" class="nav-link">
                  <i class="fa fa-users"></i>&nbsp;
                  <p>Affiliate</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="page.php" class="nav-link">
                  <i class="fa fa-cubes"></i>&nbsp;
                  <p>Open demat account</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="career.php" class="nav-link">
                  <i class="fa fa-graduation-cap"></i>&nbsp;
                  <p>Career</p>
                </a>
              </li>
			 
           
          </li>
		 
       
          
          <li class="nav-item">
            <a href="social.php" class="nav-link">
              <i class="fa fa-share-alt"></i>&nbsp;
              <p>
                Social media
               
              </p>
            </a>
    </li>-->



          <li class="nav-item">
            <a href="users.php" class="nav-link">
              <i class="fa fa-users"></i>&nbsp;
              <p>
                Users

              </p>
            </a>

          </li>
          <!--  <li class="nav-item">
            <a href="payment.php" class="nav-link">
              <i class="fa fa-credit-card"></i>&nbsp;
              <p>
                Payment Records
              
              </p>
            </a>
            
          </li>
		  <li class="nav-item">
            <a href="query.php" class="nav-link">
              <i class="fa fa-phone"></i>&nbsp;
              <p>
                Contact Form Query
              
              </p>
            </a>
            
          </li>
		  
		   <li class="nav-item">
		 
		  
		  </li>
		  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php
} elseif (($_SESSION['user']['username'] == 'callingteam')) {
?>
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>


      <li class="nav-item">
        <div style="margin-top:-15px;">
          <?php if (isset($_SESSION['user'])) : ?>
            <strong style="display:none;"><?php echo $_SESSION['user']['username']; ?></strong>

            <small>
              <i style="color: #888; display:none;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
              <br>
              <a href="logout.php" style="color: red;font-size: 18px;font-weight: 600;font-family: poppins; ">logout</a>

            </small>

          <?php endif ?>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="images/logo.png" alt="Mukul Agrawal" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Finowings</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" style="font-family: poppins;font-size: 14px;color: #ffffff;font-weight: 600;" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>


          <li class="nav-item">
            <a href="courseleads_list.php" class="nav-link">
              <i class="fa fa-cog"></i>&nbsp;
              <p>Course Leads</p>
            </a>
          </li>


          </li>

          <li class="nav-item">
            <a href="quiz_users_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Quiz Users List</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Contact Form Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry-mutual-fund.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Mutual Fund Enquiry (HP)</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="enquiry-mutual-fund-1.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Mutual Fund Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>


          <li class="nav-item">
            <a href="home_popup_enquiry.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Homepage Popup Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="finacademy-aspirants.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>FinAcademy Aspirants</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>



          <li class="nav-item">
            <a href="blog-comments.php" class="nav-link">
              <i class="fa fa-cog"></i>&nbsp;
              <p>Blog Comments</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="enquiry-hindiweb-class-ctr.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Hindi Website Class CTR Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>


          <li class="nav-item">
            <a href="local-pages-enquiry.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Local Pages Enquiry</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="edit-strategy-page.php?id=1" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Inraday Landing Page</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>



    </div>
    <!-- /.sidebar -->
  </aside>

<?php
} else {
?>
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>


      <li class="nav-item">
        <div style="margin-top:-15px;">
          <?php if (isset($_SESSION['user'])) : ?>
            <strong style="display:none;"><?php echo $_SESSION['user']['username']; ?></strong>

            <small>
              <i style="color: #888; display:none;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
              <br>
              <a href="logout.php" style="color: red;font-size: 18px;font-weight: 600;font-family: poppins; ">logout</a>

            </small>

          <?php endif ?>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="images/logo.png" alt="Mukul Agrawal" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Finowings</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" style="font-family: poppins;font-size: 14px;color: #ffffff;font-weight: 600;" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>


          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Blog</p>
              <i class="fas fa-angle-left right"></i>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="blog_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Blog</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="blog.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Finowings Academy</p>
              <i class="fas fa-angle-left right"></i>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="freestudychapter_list.php" class="nav-link">
                  <i class="fa fa-cog"></i>&nbsp;
                  <p>Manage Chapter</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="media_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Media</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="books_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Books</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="dividend_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Dividend List</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="ipoques_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage IPO FAQs</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="dematques_list.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Manage Demat FAQs</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="blog-comments.php" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Blog Comments</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

          <li class="nav-item">
            <a href="edit-strategy-page.php?id=1" class="nav-link">
              <i class="fa fa-cubes"></i>&nbsp;
              <p>Inraday Landing Page</p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>

    </div>
    <!-- /.sidebar -->
  </aside>

<?php
}
?>