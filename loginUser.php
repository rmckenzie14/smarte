<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//includes
include_once('dbconfig.php');


//if($_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['logingbtn'])){

    $userLEmail = mysqli_real_escape_string($con, $_POST['userlemail']);
    $userLPassword = mysqli_real_escape_string($con, $_POST['userlpassword']);




    if(!filter_var($userLEmail, FILTER_VALIDATE_EMAIL)){

        $_SESSION[error] = "Invalid email address format";

    }else{

        $lookignForUser = mysqli_query($con, "SELECT user_email, user_password, user_Firstname, userid, isverified FROM users WHERE user_email = '$userLEmail'");
        if($lookignForUser){
            $password_hashed = password_hash($userLPassword, PASSWORD_DEFAULT);
            if(mysqli_num_rows($lookignForUser) > 0){
                while($rows = mysqli_fetch_assoc($lookignForUser)){
                    $dbemail= $rows['user_email'];
                    $dbpw = $rows['user_password'];
                    $dbfn = $rows['user_Firstname'];
                    $dbuserid = $rows['userid'];
                    $isverified = $rows['isverified'];
                }


                if($isverified == "true"){
                //$isVerified = password_verify($userLPassword, $dbpw);
                
                    if(password_verify($userLPassword, $dbpw)){

                        $_SESSION['name'] = "loggedin";
                        $_SESSION['dbfn'] = $dbfn;
                        $_SESSION['userid'] = $dbuserid;
                        header("Location:index.php");

                    }else{
                        $_SESSION['errorlg'] = "Incorrect email and or password";
                    }
                }else{
                    $_SESSION['errorlg'] = "Account not verified. Please check your email inbox or spam folder for the activation email.";
                }
            }
        }
    }
}

?>