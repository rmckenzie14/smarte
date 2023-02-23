<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//includes
include_once('dbconfig.php');


//if($_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['logingbtn'])){

    $adminemail = mysqli_real_escape_string($con, $_POST['adminemail']);
    $adminpassword = mysqli_real_escape_string($con, $_POST['adminpassword']);

//adminFName, adminLName, adminPassword,adminEmail,  datecreated, timecreated


    if(!filter_var($adminemail, FILTER_VALIDATE_EMAIL)){

        $_SESSION[error] = "Invalid email address format";

    }else{

        $lookignForadminUser = mysqli_query($con, "SELECT user_email, user_password, user_Firstname, userid FROM users WHERE user_email = '$userLEmail'");
        if($lookignForadminUser){
            
            if(mysqli_num_rows($lookignForadminUser) > 0){
                while($rows = mysqli_fetch_assoc($lookignForadminUser)){
                    $dbemail= $rows['user_email'];
                    $dbpw = $rows['user_password'];
                    $dbfn = $rows['user_Firstname'];
                    $dbuserid = $rows['userid'];
                }

                //$isVerified = password_verify($userLPassword, $dbpw);
                
                if(password_verify($adminpassword, $dbpw)){

                    $_SESSION['name'] = "loggedin";
                    $_SESSION['dbfn'] = $dbfn;
                    $_SESSION['userid'] = $dbuserid;
                    header("Location:../index.php");

                }else{
                    $_SESSION['errorlg'] = "Incorrect email and or password";
                }
            }
        }
    }
}

?>