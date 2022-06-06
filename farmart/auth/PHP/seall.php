<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarMart/about</title>
    <meta name="author" content="group-2">
    <meta name="description" content="a food and other agricultural products e-commerce platform" >
    <meta name="keywords" content="food,website,e-commerce,website,FarMart">
   
   
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/c487c6ca9b.js" crossorigin="anonymous"></script>
    
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


 <!----------------font awesome---------------------------------------------------------->

<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link rel="stylesheet" type="text/css" href="../css/seall.css">

  </head>


  <body>

 <!-------------------------------------------------------->
 <!--              header                                -->
 <!-------------------------------------------------------->

 <?php
            require('header.php');
            require_once('header.php');
        ?>

<!-------------------------------------------------------->
 <!--              main                                 -->
 <!-------------------------------------------------------->


<!-- header section ends -->

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Farmart</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    
      <div class="profile-details">
        <img src="../img/Capture.PNG" alt="">
        <span class="admin_name">Farmart</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
        
        <div class="box">
         <p>All sales</p>
        </div>
        
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Your Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>

            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Abebe Alemayehu</a></li>
            <li><a href="#">Fatima kedir</a></li>
            <li><a href="#">Samirawit lema</a></li>
            <li><a href="#">Blen araya </a></li>
            <li><a href="#">Mamo wolde</a></li>
            <li><a href="#">haile belachew</a></li>
            <li><a href="#">ayele w/selasie</a></li>

          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$106.50</a></li>
            <li><a href="#">$86.25</a></li>

          </ul>
          </div>
         
        </div>
        
      </div>
    </div>
  </section>

 

 <!-------------------------------------------------------->
 <!--              footer                                -->
 <!-------------------------------------------------------->

 <?php
            require('footer.php');
            require_once('footer.php');
        ?>

  


</body>
</html>