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

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


 <!----------------font awesome---------------------------------------------------------->

<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://kit.fontawesome.com/c487c6ca9b.js" crossorigin="anonymous"></script>

 

<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link rel="stylesheet" type="text/css" href="../css/fogotf.css" >


 


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

    <div class="container">
    <form id="Form1">
        <h3>Forgot password</h3>
        <input type="username" placeholder="username" required>

        <div class="con">
        <input type="password" id="pass" placeholder="new password" required>
        <p id="message">password is <span id="strength"></span></p> 
    </div> 
                <input type="password" id="confirm" placeholder="confirm password " required>
                    <span id="text1"></span>
        <div class="btn-box">
            <button type="submit" ><a href="admindashboard.html">Login</a></button>
        </div>
        </form>
    </div>
    <script>

var pass = document.getElementById("pass");
var msg = document.getElementById("message");
var str = document.getElementById("strength");
        
        pass.addEventListener('input', () => {
            if(pass.value.length > 0){
                msg.style.display = "block";
            }
            else{
                msg.style.display = "none";
            }
            if(pass.value.length < 4){
                str.innerHTML = "weak";
                pass.style.borderColor ="red";
                msg.style.color = "#ff5925";
            }
           else if(pass.value.length >= 4 && pass.value.length < 8){
                str.innerHTML = "medium";
                pass.style.borderColor ="yellow";
                msg.style.color = "yellow";
            }
           else if(pass.value.length >= 8){
                str.innerHTML = "strong";
                pass.style.borderColor ="green";
                msg.style.color = "green";
            }
        } )


var pass1 = document.getElementById("pass");
var confirm = document.getElementById("confirm");
var text1 = document.getElementById("text1");
confirm.addEventListener("input",()=>{
    if(confirm.value == pass1.value){
        text1.innerHTML="password matched";
        text1.style.color="green";
    }else{
            text1.innerHTML="password doesn't match";
            text1.style.color="red";
    }

})

    </script>
    


 <!-------------------------------------------------------->
 <!--              footer                                -->
 <!-------------------------------------------------------->

 <?php
            require('footer.php');
            require_once('footer.php');
        ?>
<script src="js/main.js"></script>
</body>
</html>