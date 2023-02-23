<?php
session_start();
include_once('dbconfig.php');

// if(isset($_POST['Gotocart'])){
//     header("Location:increasecartAmt.php");
//   }elseif(isset($_POST['Continueshopping'])){
//     header("Location:index.php");
    
// }
// // if(!isset($_SESSION['dbfn'])){
//     header("Location: error.html");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Static/Css/forgotP.css">
    <link rel="stylesheet" type="text/css" href="Static/Css/forgotP2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Static/Css/bootstrap-4.1.3-dist/css/bootstrap.min.css"></link>
    <script type="text/javascript" scr="static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="index.php"><img class="logoImg" src="Static\img\logo.jpg"></a>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="form-inline my-2 my-lg-0">
            
          <?php
              if(isset($_SESSION['dbfn'])){
                echo '
                <ul class="navbar-nav mr-auto"  >
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  '.$_SESSION['dbfn'].'
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <a class="dropdown-item" href="userDash.php" >Your Account</a>
                  <hr>
                  <a class="dropdown-item" href="companydetail.php" >Company Details</a>
                  <hr>
                  <a class="dropdown-item" href="logout.php" >Security</a>
                  <hr>
                  <a class="dropdown-item" href="logout.php" >Logout</a>
                  <hr>
                </div>
              </li>
            </ul>';
            }else{
                echo '<ul class="navbar-nav mr-auto" >
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Are you a member?
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php">Login</a>
                    <hr>
                    <a class="dropdown-item" href="register.php">Register</a>
                    <hr>
                    <a class="dropdown-item" href="#">Contact us</a>
                  </div>
                </li>
              </ul>';
              }
    
          ?>
          <hr>
          
          <br>
         
        </div>
      </nav>
      <hr>
      
      
      
      <main>
      
        <?php
          
           $productid = isset($productid) ? $productid : '';
           $userid = isset($userid) ? $userid : '';
           $productname = isset($productname) ? $productname : '';
           $productprice = isset($productprice) ? $productprice : '';
           $productimg = isset($productimg) ? $productimg : '';
           $productq = isset($productq) ? $productq : '';
           $newquantity = isset($newquantity) ? $newquantity : '';
           $itemcost = isset($itemcost) ? $itemcost : '';
           //if(isset($_GET['id']) && isset($_SESSION['userid'])){
            

            

            
            if(isset($_SESSION['userid'])){
              $userid = $_SESSION['userid'];
              
              if(isset($_GET['id']) && isset($_GET['price']) && isset($_GET['name'])){

                $productid = $_GET['id'];
                $productprice = $_GET['price'];
                $productname = $_GET['name'];
                $productq = 1;

                $_SESSION['productid'] = $productid;
                $_SESSION['productname'] = $productname;
                $_SESSION['productprice'] = $productprice ;
               
                
              }
             
             
                //$productq = mysqli_real_escape_string($con, $_POST['itemquantity']);
             //&& isset($_SESSION['productq']) && isset( $_SESSION['itemATCPrice'])
             
                
              var_dump("ID ".$productid);
              var_dump("Price ".$productprice);
             var_dump("quantity  ".$productq);
             
             $getProductsFromCart = mysqli_query($con, "SELECT productquantity FROM cart WHERE productid = '$productid'");
   
               if($getProductsFromCart){
                   
                   if(mysqli_num_rows($getProductsFromCart) > 0){

                       while($rows = mysqli_fetch_assoc($getProductsFromCart)){
                        $productquantity = $rows['productquantity'];
                       }

                       $newquantity = (float)$productq + (float)$productquantity;
                       $itemcost = (float)$newquantity * (float)$productprice;

                       $updatecart = mysqli_query($con, "UPDATE cart SET  productquantity = '$newquantity', productprice = '$itemcost' WHERE productid = '$productid'");

                       if($updatecart){
                        echo ' <div class="mainDivFP cardFP">
                         <h2 class="title text-center mt-4">Item added to your cart.</h2>
                         <p class="text-center"> Cart was updated with '.$productq.' '.$productname.'</p>

                         <p class="text-center"> Do you wish to increase the amount</p>
                         <!--<form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">-->
                             
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 <a href="increasecartAmt.php" class="btn btn-block text-white text-uppercase reserPwBtn">Yes</a>
                                 </button>
                             </div>
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Continueshopping" name="Continueshopping" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 <a href="index.php" class="btn btn-block text-white text-uppercase reserPwBtn">No</a>
                                 </button>
                             </div>
                         
                            </div>';
                       }else{
                        echo ' <div class="mainDivFP cardFP">
                         <h2 class="title text-center mt-4">Item added to your cart.</h2>
                         
                         <p class="text-center">Your cart was not updated. Please try again.</p>
                         <!--<form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">-->
                             
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 <a href="viewcart.php" class="btn btn-block text-white text-uppercase reserPwBtn">Go to cart</a>
                                 </button>
                             </div>
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Continueshopping" name="Continueshopping" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 <a href="index.php" class="btn btn-block text-white text-uppercase reserPwBtn">Continue shopping</a>
                                 </button>
                             </div>
                         
                           </div>';
                       }

                   }else{

                    $itemcost = (float)$productprice * (float)$productq;
                    
                    $createItemCart = mysqli_query($con, "INSERT INTO cart (userid, productid, productprice, productquantity) VALUES ('$userid', '$productid', '$productprice', '$productq')");
                    if($createItemCart){

                      
                     echo ' <div class="mainDivFP cardFP">
                         <h2 class="title text-center mt-4">Item added to your cart.</h2>
                         <p class="text-center">'.$productname.' was added to your cart.</p>
                         <!--<form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">-->
                             
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 <a href="index.php" class="btn btn-block text-white text-uppercase reserPwBtn">Go to cart</a>
                                 </button>
                             </div>
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                             <button type="submit" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                             <a href="index.php" class="btn btn-block text-white text-uppercase reserPwBtn">Continue shopping</a>
                             </button>
                                 
                             </div>
                         
                 </div>';
                     }
                   }
             
               }
            
            }else{
              
                echo '<div class="mainDivFP cardFP">
                <h2 class="title text-center mt-4">Sorry</h2>
                
                <p class="text-center">You need to be logged into your account to be able add an item to the shopping cart.</p>
                     
                  <!--action="<?php echo $_SERVER["PHP_SELF"]; ?>"-->
                
                    
                    <div class="mb-3 bg-primary"style="border-radius: 10px;">
                        <a href="login.php" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                            Log into my account
                        </a>
                    </div>
                    <h1 class="text-center" >OR</h1.
                    <div class="mb-3 bg-primary"style="border-radius: 10px;">
                        <a  href="register.php" id="Continueshopping" name="Continueshopping" class="btn btn-block text-white text-uppercase reserPwBtn">
                            Register to Smarte
                        </a>
                    </div>
                
                </div>';
              }
            
        //        echo '<tr style="background-color: #59A799;">
        //        <td><img src="'.substr($rows['productimg'],3).'" alt="Product Image" id="logoImg" style="border-radius: 10px; "></td>
        //        <td>'.$rows['productName'].'</td>
        //        <td>'.$rows['productUnitprice'].'</td>
        //        <td><input type="number" value="1"></td>
        //        <td>$19.99</td>
        //        <td><button>Remove</button></td>
        //    </tr>
        //    ';
       
        ?>
        

        </form>
       
</body>
</html>