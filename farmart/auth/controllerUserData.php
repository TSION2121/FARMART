<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
	require_once 'config/config.php';

function send_mail($email,$subject,$message,$case,$sender)
{
$email = $_SESSION['email'] ;

$mail = new PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
//$mail->Host       = "smtp.mail.yahoo.com";
$mail->Username   = "2emailme1234@gmail.com";
$mail->IsHTML(true);
$mail->AddAddress($email, "esteemed customer");
$mail->SetFrom("2emailme1234@gmail.com", "My website");
//$mail->AddReplyTo("reply-to-email", "reply-to-name");
//$mail->AddCC("cc-recipient-email", "cc-recipient-name");
$mail->Subject = $subject;
$mail->sender = $sender;
$content = $message;
$mail->message = $message;
$mail->case = $case;
$mail->email = $email;



$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  //echo "<pre>";
  //var_dump($mail);
  // return false;
} else {
  echo "Email sent successfully";
  // return true;
}
}
$email = "";
$name = "";
$errors = array();
$message = "<h2>Hello !</h2> <h3>You are recieving this email beacause you have requested  ";

//if user signup button
if(isset($_POST['Register'])){
    $firstName = $mysql_db->real_escape_string($_POST['firstName']);
    $lastName = $mysql_db->real_escape_string($_POST['lastName']);
    $email= $mysql_db->real_escape_string($_POST["email"]); 
    $username = $mysql_db->real_escape_string($_POST["username"]);
    $phoneNo = $mysql_db->real_escape_string($_POST["phoneNo"]);
    $password=$mysql_db->real_escape_string($_POST['password']);
    $confirmPassword=$mysql_db->real_escape_string( $_POST['confirmPassword']);
    $address= $mysql_db->real_escape_string($_POST["address"]);
    $state = $mysql_db->real_escape_string($_POST["state"]);
    $role = $mysql_db->real_escape_string($_POST["role"]);

    
    if($password !== $confirmPassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM multilogin WHERE email = '$email'";
    $res = $mysql_db->query( $email_check);
    if($res->num_rows > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $activation_code = substr(number_format(time() *  rand(),0,'',''),0,6);
        $status = "notverified";
        $insert_data = "INSERT INTO multilogin (firstName,lastName,email,username,phoneNo,password,confirmPassword,address,state,activation_code,status,role)
                        values('$firstName','$lastName','$email','$username','$phoneNo','$encpass','$confirmPassword','$address','$state','$activation_code','$status','$role')";
        $data_check = $mysql_db->query( $insert_data);
        if($data_check){
            // $activation_code = substr(number_format(time() *  rand(),0,'',''),0,6);

            $subject = 'FarMart activation code';
            $case = 'an Email verification';
            $message .= $case;
            $message .=" for your account.<br><br>";
            $message .= 'This  is your activation_code </h3> </t>';
            $message .= "<h3>$activation_code</h3>"; 
            $message .="<br><br>You can either enter your activation code directly  going to the page or enter the activation link below!<br><br>";
            $message .="<a href='http://localhost/food/farmer/user-otp.php?activation_code=$activation_code&email=$email'>Click here</a>";
            $sender ='From: 2emailme1234@gmail.com';
            $sent =send_mail($email, $subject, $message, $case, $sender);
            if(true){
            

                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification activation_code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_activation_code = $mysql_db->real_escape_string( $_POST['otp']);
        $check_activation_code = "SELECT * FROM multilogin WHERE activation_code = $otp_activation_code";
        $activation_code_res = $mysql_db->query( $check_activation_code);
        if($activation_code_res->num_rows > 0){
            $fetch_data = $activation_code_res->fetch_assoc();
            $fetch_activation_code = $fetch_data['activation_code'];
            $email = $fetch_data['email'];
            $activation_code = 0;
            $status = 'verified';
            $update_otp = "UPDATE multilogin SET activation_code = $activation_code, status = '$status' WHERE activation_code = $fetch_activation_code";
            $update_res = $mysql_db->query( $update_otp);
            if($update_res){
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                header('location: ../home.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating activation code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect activation code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = $mysql_db->real_escape_string( $_POST['email']);
        $username = $mysql_db->real_escape_string( $_POST['username']);
        $password = $mysql_db->real_escape_string( $_POST['password']);
        $check_email = "SELECT * FROM multilogin WHERE email = '$email'";
        $res = $mysql_db->query($check_email);
        if($res->num_rows > 0){
            $fetch = $res->fetch_assoc();
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: ../home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = $mysql_db->real_escape_string( $_POST['email']);
        $check_email = "SELECT * FROM multilogin WHERE email='$email'";
        $run_sql = $mysql_db->query( $check_email);
        if($run_sql->num_rows > 0){
            $activation_code = substr(number_format(time() *  rand(),0,'',''),0,6);

            $insert_activation_code = "UPDATE multilogin SET activation_code = $activation_code WHERE email = '$email'";
            $run_query =  $mysql_db->query( $insert_activation_code);
            if($run_query){
                $subject = "Your FARMART account Password Reset activation code";

                $case = 'an Email verification for resetting password';
                $message .= $case;
                $message .=" for your account.<br><br>";
                $message .= 'This  is your activationcode </h3> </t>';
                $message .= "<h3>$activation_code</h3>"; 
                $message .="<br><br>You can either enter your activation code directly going to the page or enter the activation link below!<br><br>";
                $message .="<a href='http://localhost/food/farmer/reset-code.php?activation_code=$activation_code&email=$email'>Click here</a>";
                $sender ='From: 2emailme1234@gmail.com';
              $sent =send_mail($email, $subject, $message,$case, $sender);
                if(true){
                    $info = "We've sent a password reset otp to your email - $email";
                    // $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending activationcode!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_activation_code = $mysql_db->real_escape_string( $_POST['otp']);
        $check_activation_code = "SELECT * FROM multilogin WHERE activation_code = $otp_activation_code";
        $activation_code_res = $mysql_db->query( $check_activation_code);
        if($activation_code_res->num_rows > 0){
            $fetch_data = $activation_code_res->fetch_assoc();
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect activation code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = $mysql_db->real_escape_string( $_POST['password']);
        $confirmPassword = $mysql_db->real_escape_string( $_POST['confirmPassword']);
        if($password !== $confirmPassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $activation_code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE multilogin SET activation_code = $activation_code, password = '$encpass' WHERE email = '$email'";
            $run_query = $mysql_db->query( $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: index.php');
    }
?>