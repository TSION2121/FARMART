<?php
  // Initialize sessions
  require_once "controllerUserData.php"; 

  // Check if the user is already logged in, if yes then redirect him to user-otp page



  // Include config file
  // require "config/config.php";

  // Define variables and initialize with empty values
  $username = $email= $password = '';
  $username_err =$email_err = $password_err = '';

  // Process submitted form data
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 <!----------------swiper js---------------------------------------------------------->


  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!----------------font awesome---------------------------------------------------------->

<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">







<style>
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
	</style>


  </head>


  <body>



 <!-------------------------------------------------------->
 <!--              header                                -->
 <!-------------------------------------------------------->

  <header>

    <div class="header-1">

        <a href="../../index.php" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a>
<!-- 
        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form> -->

    </div>

    <div class="header-2">
    <h2 >Press  <a href="../../index.php" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a> to exit to the homepage</h2>


        <!-- <div id="menu-bar" class="fas fa-bars"></div> -->
        <!-- <nav class="navbar">
               <a href="PHP/home.php"><span>home</span></a>
               <a href="PHP/newsfeed.php">newsfeed</a>
               <a href="PHP/shop-all-1.php">shop</a>
               <a href="PHP/about.php">about</a>
               <a href="PHP/shop-all-1.php" >work with us</a>    
           </nav>
    -->

        <!-- <div class="icons">
            <a href="signed-up/shop-all-1.php#ccart" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="logout.php" class="fas fa-user-circle"></a>
        </div> -->

    </div>

</header>
  <main>
    <section class="container wrapper">
      <h2 class="display-4 pt-3">Login</h2>
          <p class="text-center">Please fill this form to Login.</p>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="">
          
          

          <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                   
          
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          
          
          
          
          
          
          
          
          
          
          
          <div class="form-group <?php (!empty($username_err))?'has_error':'';?>">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
              <span class="help-block"><?php echo $username_err;?></span>
            </div>
            		
			<div class="form-group <?php (!empty($email_err))?'has_error':'';?>">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>">
				<span class="help-block"><?php echo $email_err;?></span>

				</div>

            <div class="form-group <?php (!empty($password_err))?'has_error':'';?>">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>">
              <span class="help-block"><?php echo $password_err;?></span>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-block btn-outline-primary" name="login" id="login" value="login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
          </form>
    </section>
  </main>
</body>
</html>