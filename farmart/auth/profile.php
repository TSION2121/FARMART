<?php


session_start();
require "PHP/profile.php";
require "config/config.php";

// if (!isset($_SESSION["username"])) {
//     header("Location: farmer/welcome.php");
// }

echo "<h1> <br><center> Hi ". $_SESSION["username"]."!</center><br></h1>";
echo $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
</head>
<body>
    <style>

    </style>
<main>



<?php 
        $username = $_SESSION["username"];
        $id = $_SESSION["farmerID"];
          $sql = "SELECT picture FROM farmersignup WHERE farmerID ='$id'";
          $res = $mysql_db->query($sql);

          $output = "";

        if (mysqli_num_rows($res) == $_SESSION["farmerID"]) {
        $output .= "<h3 class='text-center'>No image Uploaded</h3>";    
        }

          	while ($row = mysqli_fetch_assoc($res)) { 
                $picture = $row["picture"];
                $output .= "<img src='".$picture."' class='my-3' style='width:125px; height:125px;'>";
                echo "$output";
                ?>

             <div class="alb">
             	<img src="../File_directory/uploads/<?php echo $row['picture'];?>" class="img" title="<?php echo $row['picture'];?>">
             </div>
          		
    <?php } ?>

<script>
    document.location.href= "../File_directory/uploads/<?=$row['picture']?>";
</script>

        <h2>
        <a href="upload.php" class="fas fa-file-upload">Upload a profile picture</a><br>
        <a  class="fas fa-user-cog" href="forgot-password.php">Reset Password</a><br>
        <a href="farmer/logout.php"class="fas fa-sign">Logout</a><br>


    </h2>
    <br>
   
</main>
    <a href="logout.php"></a>
</body>
</html>
<?php
require "PHP/footer.php";
?>