<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../Images/Website/icon.png" type="image/x-icon" />
    
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <script>
        function state() {
            var a = document.getElementById('states').value;

            if (a === 'Addis Ababa') {
                var array = ['Addis Ababa'];
            } else if (a === 'Gonder') {
                var array = ['Gonder'];
            } else if (a === 'Adama') {
                var array = ['Adama'];
            } else if (a === 'Awassa') {
                var array = ['Awassa'];
            } else if (a === 'Bishoftu') {
                var array = ['Bishoftu'];
            } else if (a === 'Mizan') {
                var array = ['Mizan'];
            } else if (a === 'Axum') {
                var array = ['Axum'];
            } else if (a === 'Addis Alem') {
                var array = ['Addis Alem'];
            } else if (a === 'Ambo') {
                var array = ['Ambo'];
            } else if (a === 'Awash') {
                var array = ['Awash'];
            } else if (a === 'Nekemte') {
                var array = ['Nekemte'];
            } else if (a === 'Shashemene') {
                var array = ['Shashemene'];
            } else if (a === 'Yeha') {
                var array = ['Yeha'];
            } else if (a === 'Woldia') {
                var array = ['Woldia'];
            } else if (a === 'Moyale') {
                var array = ['Moyale'];
            } else if (a === 'Mojo') {
                var array = ['Mojo '];
            } else if (a === 'Dessie') {
                var array = ['Dessie'];
            } else if (a === 'Jimma') {
                var array = ['Jimma'];
            } else if (a === 'Dire Dawa') {
                var array = ['Dire Dawa'];
            } else if (a === 'Akaki') {
                var array = ['Akaki'];
            } else if (a === 'Bichena') {
                var array = ['Bichena'];
            } else if (a === 'Sodore') {
                var array = ['Sodore'];
            } else if (a === 'Yabelo') {
                var array = ['Yabelo'];
            } else if (a === 'Baco') {
                var array = ['Baco'];
            } else if (a === 'Wuchale') {
                var array = ['Wuchale'];
                //check
            } else if (a === 'Wolleka') {
                var array = ['Wolleka'];
            } else if (a === 'Turmi') {
                var array = ['Turmi'];
            } else if (a === 'Babille') {
                var array = ['Babille '];
            } else if (a === 'Tippi') {
                var array = ['Tippi'];
            } else if (a === 'Mekelle') {
                var array = ['Mekelle'];
            } else if (a === 'Bahir Dar') {
                var array = ['Bahir Dar'];
            } else if (a === 'Jijiga') {
                var array = ['Jijiga'];
            } else if (a === 'Ziway') {
                var array = ['Ziway'];
            }




            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";
            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;

        }
    </script>
    <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.visibility = "hidden";
                document.getElementById("show").style.visibility = "visible";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script>
    <style>
        .myfooter {
            background-color: #2ecc71;

            color: black;
            margin-top: 15px;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: black;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color:#2ecc71;
        }

        nav {
            background-color: #2ecc71;
            color:black;
        }

        .navbar-custom {
            background-color: #2ecc71;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #2ecc71;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #2ecc71;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #2ecc71;
        }

        .firstimage {
            height: 500px;
            width: 100%;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }

        .card {
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        /* .images {
            transition: 0.5s;
        } */

        .images:hover {

            height: 220px;
            box-shadow: 5px 5px 10px grey;
            transition: 0.3s;
        }

        .guard {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #ffc857;
            /* background-color: #ffc857; */
            line-height: 0.1em;
            margin: 10px 0 20px;
            /* font-family: serif; */
        }

        .guard span {
            background: white;
            padding: 0 10px;
        }

        /* .settings{
    margin-left:10px;
} */
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mycarousel {
                display: none;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
            .settings{
            margin-left:79%;
        } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }

            .guard {
                /* width: 100%; */
                text-align: center;
                border-bottom: 1px solid #ffc857;
                /* background-color: #ffc857; */
                /* line-height: 0.1em; */
                /* margin: 10px 0 20px; */
                /* font-family: serif; */

            }

            .guard span {
                background: white;
                padding: 0 10px;
            }
        }




        /* Image Grig */


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        .myfooter {
            background-color: #2ecc71;
            color: black;
            margin-top: 15px;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }






        #headings {
            /* text-shadow: 2px 1px #666666; */
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        @media screen and (max-width: 800px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                max-height: 40%;
            }
        }

        @media screen and (max-width: 600px) {
            .kolum {
                flex: 50%;
                max-width: 50%;
                max-height: 40%;
            }
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
    </style>
    <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>

    <nav class="navbar navbar-expand-xl ">

        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
           <!-- <a class="float-left" href="bhome.php">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a> -->
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button><!--
        <a class="float-left" href="bhome.php">
            <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                </form>
            </div>

            
            <div class="list-group moblists">

                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
                    echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
                    echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
                    echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
                    echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
                }
                ?>
                <div class='loginz' style="text-align:center;">
                               <?php getUsername(); ?>
                          </div>

            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:black">&#61562;</i></a>
                    <span id="icon" style="color:black"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="dropdown p-2 settings " style="
            color:black">
                <button class="btn  dropdown-toggle text-success" style = "color:black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                        echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                        echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                        echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                        echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                        echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                    } else {
                        echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                    }
                    ?>
                </div>
            </div>


            <div class="text-success  login">Login</div>
        </div>

    </nav>


    <div class="container">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fruits
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getFruits();
                        ?>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vegetables
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getVegetables();
                        ?>
                    </div>
                </div>
            </div>
            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crops
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        getCrops();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container"> <img src="blog-1.jpg" class="img-fluid firstimage d-block mx-auto" alt="Responsive image">
    </div>
    <br>
    <br>


    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Fruits </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getFruitsHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>


    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Vegetables </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getVegetablesHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>

    <div class="container">

        <div class="text-center">
            <h1 id="headings" class="longguard"><span><b>Best Selling Products All Over Ethiopia </b></span>
            </h1>
        </div>
        <br>
        <div class="row">
            <?php
            cart(); 
            getProducts();
            ?>
        </div>
        <br><br>


    </div>
    </div>



    <!-- footer -->
    <section id="footer" class="myfooter" >
                <div class="container" >
                     <div class="row text-center text-xs-center text-sm-left text-md-left">
                          <div class="col aligncenter">
                               <br>
                               <h5 style="color:black">Payment Option</h5>
                               <img src="../Images/Website/telebirr.png" alt="paytm" style="height:37px; width:37;">
                               <img src="../Images/Website/cbe.jpg" alt="paytm" style="height:37px; width:37;">
                               
                          </div>
                     </div>
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook" style="color:black"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter" style="color:black"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram" style="color:black"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus" style="color:black"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope" style="color:black"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                               <p style="color:black"><u><a href="#" style="color:black">FarMart Corporation</a></u> is a Multitrading Company for farmers an traders</p>
                               <p class="h6" style="color:black"> All right Reversed |<a class="text-green ml-2" href="#" target="_blank" style="color:black">Farmart</a></p>
                          </div>
                          </hr>
                     </div>
                </div>
           </section>

</body>

</html>