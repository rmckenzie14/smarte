<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//includes
include_once('dbconfig.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';



    
    $fname = isset($fname) ? $fname : '';
    $lname = isset($lname) ? $lname : '';
    $userEmail = isset($userEmail) ? $userEmail : '';
    $userpassword = isset($userpassword) ? $userpassword : '';
    $confUserPassword = isset($confUserPassword) ? $confUserPassword : '';
    $userContactNumber = isset($userContactNumber) ? $userContactNumber : '';   
    $verificationCode = isset($verificationCode) ? $verificationCode : '';
    $verification = isset($verification) ? $verification : '';

    //if($_SERVER['REQUEST_METHOD'] == "POST")
    if(isset($_POST['signupbtn']))
    {

        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $userEmail = mysqli_real_escape_string($con, $_POST['userEmail']);
        $userpassword = mysqli_real_escape_string($con, $_POST['userpassword']);
        $confUserPassword = mysqli_real_escape_string($con, $_POST['confUserPassword']);
        $userContactNumber = mysqli_real_escape_string($con, $_POST['userContactNumber']);
       

        $uppC = preg_match('@[A-Z]@', $userpassword);
        $number = preg_match('@[0-9]@', $userpassword);

        if($userpassword != $confUserPassword){

            $_SESSION['error'] = "Passwords do not match";

        }elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {

            $_SESSION['error'] = "Invalid email format";

        }elseif(!$uppC || !$number || strlen($userpassword) < 1){

            $_SESSION['error'] = "Password should be at least 6 characters in length and should include at least one upper case letter and a number";

        }else{

            $result = mysqli_query($con,"SELECT user_email FROM users WHERE user_email = '".$userEmail."'");
            if(mysqli_num_rows($result ) > 0){
                $_SESSION['error'] = "Email address already exist.";
                while($data  = mysqli_fetch_assoc($result)){
                    
                }
                
            }else{

                $password_hashed = password_hash($userpassword, PASSWORD_DEFAULT);
                date_default_timezone_set("Jamaica");
                $date = date("d/M/Y");
                $time = date("h:i:sa");

                $createUser = mysqli_query($con, "INSERT INTO users (user_Firstname, user_Lastname, user_email, user_password, telephone_no, datecreated, timecreated) VALUES ('$fname', '$lname', '$userEmail', '$password_hashed', '$userContactNumber', '$date', '$time')");

                if($createUser){
                    $verification = md5(uniqid(rand(), true));
                    $verificationCode = substr($verification, 0, 6);
                    $updateWithVC = mysqli_query($con, "UPDATE users SET verificationCode = '".$verificationCode."', isVerified = 'false' WHERE user_email = '".$userEmail."'");

                    if($updateWithVC){
                        
                        $mail = new PHPMailer();
                        $mail->IsSMTP();
                        $mail->Mailer = "smtp";

                        $mail->SMTPDebug  = 1;  
                        $mail->SMTPAuth   = TRUE;
                        $mail->SMTPSecure = "tls";
                        $mail->Port       = 587;
                        $mail->Host       = "smtp.gmail.com";
                        $mail->Username   = "rmckenzie14@stu.ucc.edu.jm";
                        $mail->Password   = "20183095";

                        $mail->IsHTML(true);
                        $mail->AddAddress($userEmail, $fname);
                        $mail->SetFrom("rmckenzie14@stu.ucc.edu.jm", "SMART-E");
                        $mail->AddReplyTo("rmckenzie14@stu.ucc.edu.jm", "SMART-E");

                        //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
                        $mail->Subject = "TWelccome to SMART-E";
                        $content = "<p> Thank you for registering with Smart-E. Your are almost there. Please use the link below to verfify your account by selecting.</p> <br>";
                        $content .= "https://carishield.com/hwBackup/smarte/verified.php?id=$verificationCode";
                        $content .= "<p>Regards, </p>";
                        $content .= "<p>SmartE</p>";

                        $mail->MsgHTML($content); 
                        if(!$mail->Send()) {
                        echo "Error while sending Email.";
                        var_dump($mail);
                        } else {
                        echo "Email sent successfully";
                        $_SESSION['name'] = $fname;
                        header("Location: signupmess.php");
                        }

                        // $to = $userEmail;
                        // //$sendEmail = new EmailUser();
                        // $subject = "Welcome";
                        // $message = "<p>'.$fname.',</p>";
                        // $message.="<p> Thank you for registering with Smart-E. Your are almost there. Please use the link below to verfify your account by selecting.</p> <br>";
                        // $emailMessage .= "verified.php?id=$verificationCode";
                        // $message .= "<p>Regards, </p>";
                        // $message .= "<p>SmartE</p>";
                        // $headers = "From: Smart-E \r\n";
                        // $headers .= "Content-type: text/html\r\n";
                        // $headers .= "Reply-To: no-reply\r\n";

                        // if(mail($to, $subject, $message, $headers)){
                        //     $_SESSION['name'] = $fname;
                           
                           // header("Location: signupmess.php");
                        //}
                   }
                }
            }
        }
    }


 

    
