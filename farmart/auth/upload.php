<?php

session_start();
include('../food/config/config.php');
   
if (isset($_POST["submit"])) {
    $user_name = $_SESSION["username"];
    
$target_dir = "C:/xampp/htdocs/farmart/uploads/";
$filename = $_FILES["uImage"]["name"];
$tempname = $_FILES["uImage"]["tmp_name"]; 
$target_file = $target_dir . basename($filename);

// Get all the submitted data from the form
$uploadOk = 1;
$Filetype = explode("/", $target_file);
$Filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 if(!empty($tempname)){
    $check_img = getimagesize($tempname);
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
      }
    if ($check_img !== false) {
      echo "File is an image - " . $check_img["mime"] . ".<br>";
      $uploadOk = 1;
      $sql = " UPDATE farmersignup SET picture = '$target_file' WHERE username = '$user_name' LIMIT 1";
  $mysql_db->query($sql);
    }
     else {
      echo "File is not an image.<br>";
      $uploadOk = 0;
    }
    if ($_FILES["uImage"]["size"]  > 50000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
      }
      if ($Filetype != "jpg" && $Filetype != "png" && $Filetype != "jpeg"
        && $Filetype != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
      }
      // if (in_array($Filetype)) {
      //   $new_img_name = uniqid("IMG-"true).".".$Filetype;
      // }

      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
        // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($tempname, $target_file)) {
          echo "The file " . htmlspecialchars(basename($filename)) . " has been uploaded.";
          header("location:../food/profile.php");
      
        }  else {
          echo "Sorry, there was an error uploading your file.<br>";
        }
      }
 }

 else{
     echo "You haven't upload a file";
 }




// Check if file already exists

// // Check file size

// // Allow certain file formats


// Check if $uploadOk is set to 0 by an error

}
else {
    echo " file is not uploaded";
}

  
  ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
       Select an image to upload:
       <input type="file" name="uImage" id="uImage"> 
       <input type="submit" value="Upload" name="submit"><br><br>
<!-- 
       Select a document to upload:
       <input type="file" name="Udoc" id="Udoc">
       <input type="submit" value="Upload" name="submit"> -->
    </form>
</body>
</html>