<?php
	// Initialize session
	session_start();
    require_once 'config/config.php';
	// require_once "controllerUserData.php";
	
	
?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM multilogin WHERE email = '$email'";
    $run_Sql =$mysql_db->query($sql);
    if($run_Sql){
        $fetch_info =$run_Sql->fetch_assoc();
        $status = $fetch_info['status'];
        $activation_code = $fetch_info['activation_code'];
        if($status == "verified"){
            if($activation_code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: inddex.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to FarmArt <?php echo $fetch_info['username'] ?> | Home</title>
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous"> -->
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/style2.css">
	<!-- <link rel="stylesheet" href="../css/app.css"> -->
	<!-- <link rel="stylesheet" href="../css/index.css"> -->



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
	<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>
    <h2 >Press  <a href="../../index.php" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a> to exit to the homepage</h2>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
               <a href="../PHP/home.php"><span>home</span></a>
               <a href="../PHP/newsfeed.php">newsfeed</a>
               <a href="../PHP/shop-all-1.php">shop</a>
               <a href="../PHP/about.php">about</a>
               <a href="../PHP/index2.php" >work with us</a>    
           </nav>
   

		<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  
 
  <div class="icons">
            <a href="PHP/shop-all-1.php#ccart" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
			<a href="profile.php" class="fas fa-user">Profile</a>

			
        </div>
</button>
  
</div>

    </div>
	

</header>
	<main>
		<section class="container wrapper">
			<div class="page-header">
				<h2 class="display-5">Welcome home   <?php echo $fetch_info['username']; ?></h2>
               
			</div>
			<a href="../File directory/File_directory.php" class="btn btn-block btn-outline-danger"> Work with File &directory</a>
			 <a href="forgot-password.php" class="btn btn-block btn-outline-warning">Reset Password</a>
			 <!-- <a href="../verifys/verification.php" class="btn btn-block btn-outline-danger">Verify Your Account</a> -->
			<!-- <a href="logout.php" class="btn btn-block btn-outline-danger">Sign Out</a>  -->
		</section>
	</main>
</body>
</html>