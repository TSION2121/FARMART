<?php
error_reporting(0);
?>
<?php
//   $msg = "";
$picture = $picture_err ="";
  
  // If upload button is clicked ...
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (empty(trim($_POST['uploadfile']))) {
        $picture_err = "Please enter a username.";

        // Check if username already exist
    } 
    //if the username isn't empty
    else {

        // Prepare a select statement
        $sql = 'SELECT farmerID FROM farmersignup WHERE username = ? AND picture =?';

if ($stmt = $mysql_db->prepare($sql)) {
            // Set parameter
            $param_username = trim($_POST['username']);
           
            $stmt->bind_param('sb', $param_username,$param_picture);

            // Attempt to execute statement
    if ($stmt->execute()) {
                
                // Store executed result
                $stmt->store_result();
            //To make the username unique
       
                            } 
            else {
                echo "Oops! ${$user_name}, something went wrong. Please try again later.";
                    }

            // Close statement
            $stmt->close();
                                        }
         else {

    // Close db connection if the database isn't prepared with the respective parameter
            $mysql_db->close();
        }
    }

    if (isset($_POST['upload'])) {
  
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "/farmer".$filename;
        
              
        include('config/config.php');
            session_start();
            $user_name = $_SESSION["username"];
    
            
            // Get all the submitted data from the form
            $sql = " UPDATE farmersignup SET picture = '$filename' WHERE username = '$user_name'";
      
            if ($stmt = $mysql_db->prepare($sql)) {
                $param_picture = $picture;
                $param_username = $user_name;
                $stmt->bind_param('sb', $param_username, $param_picture);
    
            // Attempt to execute
                    if ($stmt->execute()) {
                // Redirect to login page
                header('location:profile.php');//was ../index.php before
                // echo "Will  redirect to login page";
                                            }
                    else {
                        echo "Something went wrong. Try signing in again.";
                    }
    
            // Close statement
            $stmt->close();	
        }
    
        // Close connection
        $mysql_db->close();
    }
    
            // Execute query
          
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
                $msg = "Image uploaded successfully";
                header("location:profile.php");
    
            }else{
                $msg = "Failed to upload image";
            }
  }
  
  
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
 <style>
     #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
 </style>
</head>
<body>
    
<div id="content">
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
        
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>