<?php
session_start();
include_once('dbconfig.php');

if(isset($_POST['Gotocart'])){
    header("Location:increasecartAmt.php");
  }elseif(isset($_POST['Continueshopping'])){
    header("Location:index.php");
    
 }
// if(!isset($_SESSION['dbfn'])){
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
<?php
include_once("nav.php");
  ?>
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


            // $_SESSION['productid'] = $productid;
            // $_SESSION['productname'] = $productname;
            // $_SESSION['productprice'] = $productprice ;


            if(isset($_SESSION['userid']) && isset($_SESSION['productid']) && isset($_SESSION['productname'])){

              $userid = $_SESSION['userid'];
              $productid = $_SESSION['productid'];
              $productname = $_SESSION['productname'];
              $productprice =$_SESSION['productprice'];
              
              echo ' <div class="mainDivFP cardFP">
              <h2 class="title text-center mt-4">Provide the amount below.</h2>
           
              <p class="text-center"><input type="text" id="itemquantity" name="itemquantity"></p>
              
                  
                  <div class="mb-3 bg-primary"style="border-radius: 10px;">
                      <button type="submit" id="Gotocart" name="updatingquantity" class="btn btn-block text-white text-uppercase reserPwBtn">
                          Update Quantity
                      </button>
                  </div>
                  
                  </div>
                  
              
                 </div>';

              
              var_dump($userid);
              var_dump('proid '.$productid);
              
              if(isset($_POST['updatingquantity'])){

                $productq = mysqli_real_escape_string($con, $_POST['itemquantity']);
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
                         <h2 class="title text-center mt-4">Item update.</h2>
                      
                         <p class="text-center">'.$newquantity.' were added to you care '.$productname .' with a tolal of '.$itemcost.'</p>
                         
                             
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Gotocart" name="Gotocart" class="btn btn-block text-white text-uppercase reserPwBtn">
                                     Go To Cart
                                 </button>
                             </div>
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Continueshopping" name="Continueshopping" class="btn btn-block text-white text-uppercase reserPwBtn">
                                 Continue Shopping
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
                                     Go to cart.
                                 </button>
                             </div>
                             <div class="mb-3 bg-primary"style="border-radius: 10px;">
                                 <button type="submit" id="Continueshopping" name="Continueshopping" class="btn btn-block text-white text-uppercase reserPwBtn">
                                     Continue shopping.
                                 </button>
                             </div>
                         
                           </div>';
                       }

                   }
             
               }
              }
            
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