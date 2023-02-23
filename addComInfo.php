<?php

ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('dbconfig.php');

      
$comName = isset($comName) ? $comName : '';
$comAdd = isset($comAdd) ? $comAdd : '';
$comEmail = isset($comEmail) ? $comEmail : '';
$comNum = isset($comNum) ? $comNum : '';
$comTRN = isset($comTRN) ? $comTRN : '';
$comNIS = isset($fname) ? $comNIS : '';
$comLogo = isset($comLogo) ? $comLogo : '';
$userID = isset($userID) ? $userID : '';
$date = isset($date) ? $date : '';
$date = isset($date) ? $date : '';
$comCountry = isset($comCountry) ? $comCountry : '';

    
   
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                //$_SESSION["t"] = "btn selected";

                if(isset($_SESSION['userid'])){

                $comName = mysqli_real_escape_string($con, $_POST['comName']);
                $comAdd = mysqli_real_escape_string($con, $_POST['comAdd']);
                $comEmail = mysqli_real_escape_string($con, $_POST['comEmail']);
                $comNum = mysqli_real_escape_string($con, $_POST['comNum']);
                $comTRN = mysqli_real_escape_string($con, $_POST['comTRN']);
                $comNIS = mysqli_real_escape_string($con, $_POST['comNIS']);
                $comCountry = mysqli_real_escape_string($con, $_POST['comCountry']);
                
                $comTradeType = mysqli_real_escape_string($con, $_POST['comTradeType']);
                $userID = $_SESSION['userid'];
                date_default_timezone_set("Jamaica");
                $date = date("d/M/Y --- h:i:sa");

                // coompany logo upload 
                $storageDir = "Static/userUploads";
                $fileLocation = $storageDir . basename($_FILES["comLogo"]["name"]);
                $uploadOk = 1;
                $getFileType = strtolower(pathinfo($fileLocation, PATHINFO_EXTENSION));

                // check if file is an image
                $isImage = getimagesize($_FILES["comLogo"]["tmp_name"]);
                if($isImage == false){
                        $uploadOk = 0;
                        $warning = "Please upload image file from the list - JPG, JPEG, PNG";
                }

                // if($_FILES["comLogo"]["size"] > 1000000){
                //         //$warning = "Sorry, file size too large. Please chhise a file that is 5mb or less";

                // }

                if($uploadOk == 0){
                        $warning = "Sorry, there was an issue uploading the company logo.";

                }else{
                        $_SESSION["t"] = $comEmail;
                        if(move_uploaded_file($_FILES["comLogo"]["tmp_name"], $fileLocation)){

                                $comLogo = $fileLocation;
                                $result = mysqli_query($con, "INSERT INTO company (userid, company_name, company_email, company_tradeType, company_country, company_number, company_TRN, company_NIS, company_address, company_logo, datecreate) VALUE ('$userID', '$comName', '$comEmail', '$comTradeType', '$comCountry', '$comNum', '$comTRN', '$comNIS', '$comAdd', '$comLogo', '$date')");

                                if($result){
                                        //header("Location: signupmess.php");  
                                        echo "Company saved";  
                                }else{
                                        echo "Company not saved"; 
                                }
                        }
                }



                
                }
        }
    


?>
  