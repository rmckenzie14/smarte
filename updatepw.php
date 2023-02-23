<?php

ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('dbconfig.php');

      
$updatePw = isset($updatePw) ? $updatePw : '';
$confirmUpdate = isset($confirmUpdate) ? $confirmUpdate : '';
$userID = isset($userID) ? $userID : '';

    
   
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                $updatePw = mysqli_real_escape_string($con, $_POST['userpasswordupdate']);
                $confirmUpdate = mysqli_real_escape_string($con, $_POST['confirmuserpasswordupdate']);

                $uppC = preg_match('@[A-Z]@', $updatePw);
                $number = preg_match('@[0-9]@', $updatePw);


                if($updatePw != $confirmUpdate){

                        $_SESSION["warning"] = "Passwords do not match";

                }elseif(!$uppC || !$number || strlen($updatePw) < 6){

                        $_SESSION["warning"] = "Password should be at least 6 characters in length and should include at least one upper case letter and a number";

                }else{
                        if(isset($_SESSION['userid'])){

                                
                        
                        
                                $userID = $_SESSION['userid'];
                

                        

                                        $password_hashed = password_hash($updatePw, PASSWORD_DEFAULT);
                                        $result = mysqli_query($con, "UPDATE users SET user_password = '".$password_hashed."' WHERE userid = '".$userID."'");

                                        if($result){
                                                //header("Location: signupmess.php");  
                                                $_SESSION["warning"] = "password changed"; 
                                        }else{
                                                $_SESSION["warning"] = "There was an issue trying to to update your password";
                                        }
                        }
                }
        }



                
                
        
    


?>
  