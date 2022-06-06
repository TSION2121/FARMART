<?php
	// Include config file
	// require_once '../config/config.php';
	// require '../verification.php';
	require_once "controllerUserData.php"; 

	// Define variables and initialize with empty values
	$firstName = $lastName = $email =$phoneNo = $username = $password = $confirmPassword = $address = $role = $state = $status = "";
	$firstName_err = $lastName_err = $emai_errl =$phoneNo_err = $username_err = $password_err = $confirmPassword_err = $address_err = $role_err = $state_err = $status_err = "";



	//sanitize
	// $email = $mysql_escape_string($email);
	// $username = $mysql_escape_string($username);
	// $password = $mysql_escape_string($password);
	// $confirm_password = $mysql_escape_string($confirm_password);

	// Generating a key
	// $activation_code = md5(time().$email);
	// $activation_code = substr(md5(mt_rand().$email),0,15);

	// Process submitted form data
// 	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// // Check if username is empty
// 		if (empty(trim($_POST['username']))) {
// 			$username_err = "Please enter a username.";

// 			// Check if username already exist
// 		} 
// 		//if the username isn't empty
// 		else {

// 			// Prepare a select statement
// 			$sql = 'SELECT farmerID FROM farmersignup WHERE username = ? AND email =? AND picture = ?';

// 	if ($stmt = $mysql_db->prepare($sql)) {
// 				// Set parameter
// 				$param_username = trim($_POST['username']);
// 				$param_email = trim($_POST['email']);
// 				$param_picture= trim($_POST['uImage']);
// 				// Bind param variable to prepares statement
// 				$stmt->bind_param('ssb', $param_username, $param_email, $param_picture);

// 				// Attempt to execute statement
// 		if ($stmt->execute()) {
					
// 					// Store executed result
// 					$stmt->store_result();
// 				//To make the username unique
// 			if ($stmt->num_rows == 1) {

// 						$username_err = 'This username is already taken.';
// 									} 
// 									// else if( $stmt->num_rows == 1){
// 									// 	$email_err = " This email is already taken";

// 									// }
// 					else {
// 						$username = trim($_POST['username']);
// 						$email = trim($_POST['email']);
// 						$picture = trim($_POST['uImage']);
// 					}
// 								} 
// 				else {
// 					echo "Oops! ${$username}, something went wrong. Please try again later.";
// 						}

// 				// Close statement
// 				$stmt->close();
// 											}
// 			 else {

// 		// Close db connection if the database isn't prepared with the respective parameter
// 				$mysql_db->close();
// 			}
// 		}
// 		//-------------------------------

// 		// Validate password
// 	    if(empty(trim($_POST["password"]))){
// 	        $password_err = "Please enter a password.";     
// 	    } elseif(strlen(trim($_POST["password"])) < 6){
// 	        $password_err = "Password must have atleast 6 characters.";
// 	    } else{
// 	        $password = trim($_POST["password"]);
// 	    }
    
// 	    // Validate confirm password
// 	    if(empty(trim($_POST["confirm_password"]))){
// 	        $confirm_password_err = "Please confirm password.";     
// 	    } else{
// 	        $confirm_password = trim($_POST["confirm_password"]);
// 			// check if password  not matches when no password error
// 	        if(empty($password_err) && ($password != $confirm_password)){
// 	            $confirm_password_err = "Password did not match.";
// 	        }
// 	    }

// 		if(empty(trim($_POST["uImage"]))){
// 			$picture_err ="Please select a picture";
// 		}
// 		else {
// 			$picture = trim($_POST["uImage"]);
// 		}

// 	    // Check input error before inserting into database

// 	    if (empty($picture_err) && empty($username_err) && empty($password_err) && empty($confirm_err)) {

// 	    	// Prepare insert statement
// 			$sql = 'INSERT INTO farmersignup (username, email, password, picture) VALUES (?,?,?,?)';

// 			if ($stmt = $mysql_db->prepare($sql)) {

// 				// Set parmater
// 				$param_username = $username;
// 				$param_email = $email;
// 				$param_password = password_hash($password, PASSWORD_DEFAULT); // Created a password
// 				$param_picture = $picture;

// 				// Bind param variable to prepares statement
// 				$stmt->bind_param('sssb', $param_username, $param_email,$param_password, $param_picture);

// 				// Attempt to execute
// 						if ($stmt->execute()) {
// 					// Redirect to login page
// 					header('location: login.php');//was ../index.php before
// 					// echo "Will  redirect to login page";
// 												}
// 						else {
// 							echo "Something went wrong. Try signing in again.";
// 						}

// 				// Close statement
// 				$stmt->close();	
// 			}

// 			// Close connection
// 			$mysql_db->close();
// 	    }
// 	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../css/index.css">

 <!----------------swiper js---------------------------------------------------------->



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
	
<header>

<div class="header-1">

	<a href="index.php" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a>


</div>

<div class="header-2">
<h2 >Press  <a href="index.php" class="logo"><i class="fas fa-shopping-basket"></i>FarMart</a> to exit to the homepage</h2>



</div>

</header>
	<main>
		<section class="container wrapper">
			<h2 class="display-4 pt-3">Sign Up</h2>
        	<p class="text-center">Please fill in your credentials.</p>
        	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="">

			<h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>


			<div class="form-group ">
				<label for="firstName">First Name:</label>
				<input type="firstName" name="firstName" id="firstName" required class="form-control" value="<?php echo $firstName ?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group ">
				<label for="lastName">Last Name:</label>
				<input type="lastName" name="lastName" id="lastName" required class="form-control" value="<?php echo $lastName ?>">
				<span class="help-block"></span>
            </div>
			<div class="form-group ">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required class="form-control" value="<?php echo $email ?>">
				<span class="help-block"></span>
			</div>
			<div class="form-group ">
				<label for="phoneNo">Phone Number:</label>
				<input type="phoneNo" name="phoneNo" id="phoneNo"  required class="form-control" value="<?php echo $phoneNo ?>">
				<span class="help-block"></span>
			</div>
            <div class="form-group >">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group >">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="form-control" value="<?php echo $password ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="confirmPassword" required id="confirmPassword" class="form-control" value="<?php echo $confirmPassword; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group ?>">
                <label for="address">Current Address</label>
                <input type="text" name="address" id="address"  required class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"></span>
            </div>
            <div>
                <label for="select">Select Type</label>
            <div>
                <select class="form-control" name="role" id="role">
            <option value="" selected="selected"> Select Role</option>
            <option value="admin">Admin</option>
            <option value="farmer">Farmer</option>
            <option value="customer">Customer</option>
                </select>
            </div>
            </div>
            <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right" style="color:#2ecc71"><b><i class="fas fa-globe-americas mr-2" style="color:#2ecc71"></i>State</b></label>
                        <div class="col-md-6">
                            <select name="state" id="states" onchange="state()" class="form-control border border-dark">
                                <option value="0">--Select State--</option>
                                <option value="Addis Ababa">Addis Ababa</option>
                                <option value="Adama">Adama</option>
                                <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                                <option value="JHARKAND">JHARKAND</option>
                                <option value="KARNATAKA">KARNATAKA</option>
                                <option value="Awash">Awash</option>
                                <option value="Awassa">Awassa</option>
                                <option value="Axum">Axum</option>
                                
                                <option value="Bahir Dar">Bahir Dar</option>
                                <option value="Bishoftu">Bishoftu</option><option value="Dessie">Dessie</option>
                                <option value="Dire Dawa">Dire Dawa</option>
                                <option value="Gonder">Gonder</option>
                                <option value="Jimma">Jimma</option>
                                <option value="Jijiga">Jijiga</option>
                                <option value="Mekelle">Mekelle</option>
                                <option value="Mojo">Mojo</option><option value="HARYANA">HARYANA</option>
                                <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                <option value="MAHARASHTRA">MAHARASHTRA</option>
                                <option value="MANIPUR">MANIPUR</option>
                                <option value="MEGHALAYA">MEGHALAYA</option>
                                <option value="MIZORAM">MIZORAM</option>
                                <option value="NAGALAND">NAGALAND</option>
                                <option value="ODISHA">ODISHA</option>
                                <option value="PUDUCHERRY">PUDUCHERRY</option>
                                <option value="PUNJAB">PUNJAB</option>
                                <option value="RAJASTHAN">RAJASTHAN</option>
                                <option value="SIKKIM">SIKKIM</option>
                                <option value="TAMIL NADU">TAMIL NADU</option>
                                <option value="TELANGANA">TELANGANA</option>
                                <option value="TRIPURA">TRIPURA</option>
                                <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                <option value="UTTARAKHAND">UTTARAKHAND</option>
                                <option value="UTTARANCHAL">UTTARANCHAL</option>
                                <option value="WEST BENGAL">WEST BENGAL</option>
                            </select>
                        </div>
                                </div>    

			

        		<div class="form-group">
        			<input type="submit" class="btn btn-block btn-outline-success" name="Register" value="Register">
        			<input type="reset" class="btn btn-block btn-outline-primary" value="Reset">
        		</div>
        		<p>Already have an account? <a href="index.php">Login here</a>.</p>
        	</form>
		</section>
	</main>
</body>
</html>
