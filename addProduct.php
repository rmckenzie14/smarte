<?php

ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('dbconfig.php');

      
$productname = isset($productname) ? $productname : '';
$productprice = isset($productprice) ? $productprice : '';
$productcategory = isset($productcategory) ? $productcategory : '';
$productquantity = isset($productquantity) ? $productquantity : '';
$companyid = isset($companyid) ? $companyid : '';
$productdes = isset($productdes) ? $productdes : '';
//$productimage = isset($productimage) ? $productimage : '';


    
   
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                //$_SESSION["t"] = "btn selected";

                if(isset($_SESSION['userid'])){

                        $productname = mysqli_real_escape_string($con, $_POST['productname']);
                        $productprice = mysqli_real_escape_string($con, $_POST['productprice']);
                        $productcategory = mysqli_real_escape_string($con, $_POST['productcategory']);
                        $productquantity = mysqli_real_escape_string($con, $_POST['productquantity']);
                        $productdes = mysqli_real_escape_string($con, $_POST['productdes']);

                        $userID = $_SESSION['userid'];
                        $procompanyid = 2;//$_SESSION['companyid'];
                        
                        date_default_timezone_set("Jamaica");
                        $date = date("d/M/Y");
                        $time = date("h:i:sa");

                        // coompany logo upload 
                        $storageDir = "Static/userUploads";
                        $fileLocation = $storageDir . basename($_FILES["productimage"]["name"]);
                        $uploadOk = 1;
                        $getFileType = strtolower(pathinfo($fileLocation, PATHINFO_EXTENSION));

                        // check if file is an image
                        $isImage = getimagesize($_FILES["productimage"]["tmp_name"]);
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
                                //$_SESSION["t"] = $comEmail;
                                if(move_uploaded_file($_FILES["productimage"]["tmp_name"], $fileLocation)){

                                        $productimage = $fileLocation;
                                        $result = mysqli_query($con, "INSERT INTO product (categoryid, Companyid, productName, productAmount, productUnitprice, productimg,productDes, dateadded,timeadded) VALUE ('$productcategory', '$procompanyid', '$productname', '$productquantity', '$productprice', '$productimage', '$productdes', '$date', '$time')");

                                        if($result){
                                                //header("Location: signupmess.php");  
                                                $_SESSION['success'] = "Product saved";  
                                        }else{
                                                $_SESSION['nosuccess'] = "roduct did not saved"; 
                                        }
                                }
                        }

                
                }else{
                        $_SESSION['nosuccess'] = "no session found";
                }
        }
    


?>
  