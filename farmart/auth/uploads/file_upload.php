<?php

session_start();

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
          

    include('../../food/config/config.php');

        $user_name = $_SESSION["username"];

        // Get all the submitted data from the form
        $sql = " UPDATE user SET picture = '$filename' WHERE username = '$user_name'";
  }
  ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload an image</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    Select an image to upload:
    <input type="file" name="uImage" id="uImage">
    <input type="submit" value="Upload" name="submit"><br><br>

    <!-- Select a document to upload:
    <input type="file" name="Udoc" id="Udoc">
    <input type="submit" value="Upload" name="submit"> -->
  </form>
</body>

</html>
<?php
// include_once("../../food/config/config.php");

$target_dir = "C:/xampp/htdocs/File_directory/uploads/";

$target_file = $target_dir . basename($_FILES["uImage"]["name"]);
// $target_file_doc = $target_dir.basename($_FILES["Udoc"]["name"]);
$uploadOk = 1;
$Filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// $docFileType = strtolower(pathinfo($target_file_doc,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check_img = getimagesize($_FILES["uImage"]["tmp_name"]);
  if ($check_img !== false) {
    echo "File is an image - " . $check_img["mime"] . ".<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.<br>";
    $uploadOk = 0;
  }
}

  //document
  // $check_doc =  filesize($_FILES["uDocument"]["tmp_name"]);
  //         if($check_doc !== false) {
  //             echo "File is a document - " . $check_doc["mime"] . ".<br>";
  //             $uploadOk = 1;
  //         } else {
  //             echo "File is not a document.<br>";
  //             $uploadOk = 0;
  //         }



//for document remaining

// if ($docFileType != "docx" && ($docFileType != "pdf" && ($docFileType != "ppt"
// && ($docFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
//   $uploadOk = 0;
// }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.<br>";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["uImage"]["size"]  > 50000000) {
  echo "Sorry, your file is too large.<br>";
  $uploadOk = 0;
}
// Allow certain file formats
if (
  $Filetype != "jpg" && $Filetype != "png" && $Filetype != "jpeg"
  && $Filetype != "gif" 
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.<br>";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["uImage"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["uImage"]["name"])) . " has been uploaded.";
  }  else {
    echo "Sorry, there was an error uploading your file.<br>";
  }
}
?>