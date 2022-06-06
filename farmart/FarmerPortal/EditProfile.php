<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $pan = $row['farmer_pan'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $account = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>
    <link rel="shortcut icon" href="../Images/Website/icon.png" type="image/x-icon" />
    
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

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: rgb(78, 180, 121);


        }




        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {


            float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;

        }

        .again {
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left: 100px;


        }

        .say {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;



        }

        .say:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <div class="just">
        <a href="farmerHomepage.php" style="color:#2ecc71"> <i class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1 style="color:#2ecc71"> EDIT PROFILE</h1>
                </tr>
                <tr align="center">
                    <div class="in-icons">
                        <td>
                            <label><b style="color:#2ecc71">Name:</b></label>
                        </td>
                        <td>
                            <textarea rows="2" column="18" value="" disabled><?php echo $name; ?></textarea>
                        </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">Zip Number:</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="20" disabled><?php echo $pan; ?></textarea>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">Phone:</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone; ?>" />
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">Address:</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address; ?> " />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">State:</b></label>
                    </td>
                    <td>
                    <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
                                            <option value="0">--Select cities or town--</option>
                                            <option value="Addis Ababa">Addis Ababa</option>
                                            <option value="Adama">Adama</option>
                                            <option value="Addis Alem">Addis Alem</option>
                                            <option value="Akaki">Akaki</option>
                                            <option value="Ambo">Ambo</option>
                                            <option value="Awash">Awash</option>
                                            <option value="Awassa">Awassa</option>
                                            <option value="Axum">Axum</option><option value="Bahir Dar">Bahir Dar</option>
                                            <option value="Babille">Babille</option>
                                            <option value="Baco">Baco</option>
                                            <option value="Bahir Dar">Bahir Dar</option>
                                            <option value="Bati">Bati</option>
                                            <option value="Bichena">Bichena</option>
                                            <option value="Bishoftu">Bishoftu</option><option value="Dessie">Dessie</option>
                                            <option value="Dire Dawa">Dire Dawa</option>
                                            <option value="Gonder">Gonder</option>
                                            <option value="Jimma">Jimma</option>
                                            <option value="Jijiga">Jijiga</option>
                                            <option value="Mekelle">Mekelle</option>
                                            <option value="Mizan">Mizan</option>
                                            <option value="Mojo">Mojo</option>
                                            <option value="Moyale">Moyale</option>
                                            <option value="Nekemte">Nekemte</option>
                                            <option value="Shashemene">Shashemene</option>
                                            <option value="Shire">Shire</option>
                                            <option value="Sodore">Sodore</option>
                                            <option value="Tippi">Tippi</option>
                                            <option value="Turmi">Turmi</option>
                                            <option value="Wolaita Sodo">Wolaita Sodo</option>
                                            <option value="Woldia">Woldia</option>
                                            <option value="Wolleka">Wolleka</option>
                                            <option value="Wuchale">Wuchale</option>
                                            <option value="Yabelo">Yabelo</option>
                                            <option value="Yeha">Yeha</option>
                                            <option value="Ziway">Ziway</option>
                                            </select>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">District:</b></label>
                    </td>
                    <td><select name="district" id="district" class="form-control border border-dark">
                                            <option>Select District</option>
                                        </select></td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b style="color:#2ecc71">Bank:</b></label>
                    </td>
                    <td>
                        <input type="number" name="bank" value="<?php echo $account; ?>" />
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>
                <tr colspan=2>
                    <td colspan=2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>

        <div class="again">
            <a href="ChangePassword.php"><button class="say">Change Password</button></a>
        </div>

    </div>



</body>

</html>

<?php


if (isset($_POST['confirm'])) {
    $phone = mysqli_real_escape_string( $con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string( $con, $_POST['address']);
    $district = mysqli_real_escape_string( $con, $_POST['district']);
    $state = mysqli_real_escape_string( $con, $_POST['statevalue']);
    $account = mysqli_real_escape_string( $con, $_POST['bank']);

    $query = "update farmerregistration 
              set farmer_phone = '$phone', farmer_address = '$address',
              farmer_bank = '$account', farmer_state = '$state',
              farmer_district = '$district'
              where farmer_id 
              in (select farmer_id from farmerregistration 
              where farmer_phone='$sessphonenumber')";
    $run = mysqli_query($con, $query);
    
    $_SESSION['phonenumber'] = $phone;
    echo "<script>window.open('FarmerProfile.php','_self')</script>";
}
?>