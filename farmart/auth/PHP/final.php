<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FarMart/final</title>
    <meta name="author" content="group-2">
    <meta name="description" content="a food and other agricultural products e-comerce platform" >
    <meta name="keywords" content="food,website,e-comerce,website,FarMart">

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


 <!----------------font awesome---------------------------------------------------------->

<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://kit.fontawesome.com/c487c6ca9b.js" crossorigin="anonymous"></script>

 

<link rel="stylesheet" type="text/css" href="../css/style2.css">


 <script src="js/main.js" async></script>

<script src="js/minuteCounter.js"></script>
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
 <!--              delivery time                         -->
 <!-------------------------------------------------------->
<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">Thank you for your purchase!</h3>
        <p>Your favorite grocery will be delivered to you in</p>

        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
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