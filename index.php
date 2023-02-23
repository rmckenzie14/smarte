<?php
session_start();

include_once('dbconfig.php');

// if(isset($_POST['add_to_cart'])){

//   $_SESSION['productid'] = $_POST['itemATCId'];
//   $_SESSION['itemATCPrice'] = $_POST['itemATCPrice'];
//   $_SESSION['productq'] = $_POST['itemATCQuantiy'];

//   header("Location:cart.php");
// }
$j = "";
if(isset($_POST['quantiy'])){
  $j = $_POST['quantiy'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/Css/bootstrap-4.1.3-dist/css/bootstrap.min.css"></link>
    <script type="text/javascript" scr="Static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
/* .grid-container {
        display: grid;
        gap: 10px 20px;
        grid-template-columns: 25% 25% 25% 25%;
        
        padding: 30px; 
        width: 95%;
         margin: auto; 
        
      }
      .grid-item {
        
        background-color: #59A799;
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 30px; 
        font-size: 30px;
        text-align: center;
        border-radius: 10px;
        text-color: white;
        width: 85%;
        height: 350px;
      } 
      */
    /* Product section styling */
    .grid-container {
        display: grid;
        gap: 10px 20px;
        grid-template-columns: 16% 16% 16% 16%  16%  16%;
        width: 95%;
         margin: auto;
    }
    #amtpr li, #pricepr li{
      display: inline-block;
    }

    input[type='number']{
    width: 60px;
    border-radius:5px;
    background-color: #F6AE2D;
    } 
   
.product-info {
	margin: 50px auto;
	width: 80%;
  height: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
  /* border: 1px solid black; */
  border-radius:10px;
  /* background-color: #59A799; */
  
}
.product-info h1, .product-info p, .product-info ul{
  color: #59A799;/*#FFFFFF; */
} 
.product-info h1 {
	font-size: 36px;
	margin-bottom: 20px;
  
}

.product-info img {
	max-width: 100%;
  height: 150px;
	//height: auto;
  margin-bottom: 20px;
}

.product-info p {
	font-size: 18px;
	line-height: 1.5;
	margin-bottom: 20px;
  
}

.product-info ul {
	margin: 0;
	padding: 0;
	list-style: none;
  margin-bottom: 20px;
  
}

.product-info li {
	margin-bottom: 10px;
}

.product-info button {
	background-color: #F6AE2D;
	color: #fff;
	border: none;
	padding: 10px 20px;
	font-size: 18px;
	cursor: pointer;
  border-radius: 10px;
  
}

.product-info button:hover {
	background-color: #555;
}
.mainsection{
  width: 95%;
  margin:auto;
}
      a:hover { text-decoration: none; }
      #logoImg{
        width: 150px;
        
        height: 150px; /* set height to auto to maintain aspect ratio */
        transition: transform 0.3s; /* add transition for smooth animation */
      }
      #logoImg:hover{
       
        transform: scale(3.0); /* scale up the image on hover */
      }


      /* Hide the default select arrow */
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /* add a background image for the custom arrow */
    background-image: url('arrow.svg');
    background-repeat: no-repeat;
    background-position: right center;
    background-size: 20px;
    /* Add some padding to make room for the arrow */
    padding-right: 30px;
  }
  /* Style the option elements */
  option {
    background-color: #F4F4F4;
    color: #333;
  }
      </style>
</head>
<body>
  <?php
include_once("nav.php");
  ?>
   
      <hr>
      
      <div class="grid-container">
      
        <?php

           
           $searchFl = isset($searchFl) ? $searchFl : '';
           $productid = isset($productid) ? $productid : '';
           if(isset($_POST['serchfor'])){
             
             $searchFl = mysqli_real_escape_string($con, $_POST['searchFl']);
             $getProducts = mysqli_query($con, "SELECT productid, productName, productimg, productUnitprice, productDes FroM product WHERE productName LIKE '%$searchFl%'");
   
               if($getProducts){
                   
                   if(mysqli_num_rows($getProducts) > 0){
                       while($rows = mysqli_fetch_assoc($getProducts)){
                        
                           echo '
                           <main class="mainsection">
                           <section class="product-info">
                             <input type="hidden" name="itemATCId" value="'.$rows['productid'].'">
                             <h1 name="itemATCName">'.$rows['productName'].'</h1>
                             <img src="'.substr($rows['productimg'],3).'" alt="Product Image" id="logoImg">
                             <p name="itemATDes">'.$rows['productDes'].'</p>
                             <!--<ul id="amtpr">
                                 <li name="itemATCAmt">Amt : </li>
                                 <li name="itemATCQuantiy"><input type="number" name="quantiy" ></li>
                                 
                               </ul>-->
                               <ul  id="pricepr">
                               <li name="itemATCP">Price : USD $</li>
                               <li name="itemATCPrice" id="itemATCPrice" value="">'.$rows['productUnitprice'].'</li>
                             </ul>
                             <a class="btn btn-block text-uppercase text-black" href="cart.php?id='.$rows['productid'].'&price='.$rows['productUnitprice'].'&name='.$rows['productName'].'" id="add_to_cart" name="add_to_cart" style="border: black solid 1px;background-color: #F6AE2D;">Add to Cart</a>
                             <!--<button name="add_to_cart"><a>Add to Cart</a></button>--></section>
                           <hr>
                       </main>
                       ';
                           
                       }
                   }else{
                     echo "No reconrds found of the item you are searching for.  ";
                   }
             
               }
           }else{
             
             $getProducts = mysqli_query($con, "SELECT productid, productName, productimg, productUnitprice, productDes FROM product");
   
               if($getProducts){

                
                   
                   if(mysqli_num_rows($getProducts) > 0){
                       while($rows = mysqli_fetch_assoc($getProducts)){
                        $_SESSION['productid']  = $rows['productid'];
                           //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
                           echo '
                           <main class="mainsection">
                             <section class="product-info">
                               <input name="itemATCId" id="itemATCId" value="'.$rows['productid'].'" hidden>
                               <h1 name="itemATCName">'.$rows['productName'].'</h1>
                               <img src="'.substr($rows['productimg'],3).'" alt="Product Image" id="logoImg">
                               <p name="itemATDes">'.$rows['productDes'].'</p>
                               <ul id="amtpr">
                                 <li name="itemATCAmt">Amt : </li>
                                 <li name="itemATCQuantiy"><input type="number" name="quantiy" id="quantiy" ></li>
                                 
                               </ul>
                               <ul  id="pricepr">
                                 <li name="itemATCP">Price : USD $</li>
                                 <li name="itemATCPrice" id="itemATCPrice" value="">'.$rows['productUnitprice'].'</li>
                               </ul>
                               <!--<button type="submit" class="btn btn-block text-uppercase text-white" name="add_to_cart" name="add_to_cart"><a href="cart.php?id='.$rows['productid'].'&price='.$rows['productUnitprice'].'&name='.$rows['productName'].'" id="add_to_cart" name="add_to_cart" >Add to Cart</a></button>-->
                              <a class="btn btn-block text-uppercase text-black" href="cart.php?id='.$rows['productid'].'&price='.$rows['productUnitprice'].'&name='.$rows['productName'].'" id="add_to_cart" name="add_to_cart" style="border: black solid 1px;background-color: #F6AE2D;">Add to Cart</a>
                              <!--<button name="add_to_cart"><a>Add to Cart</a></button>-->
                             </section>
                             <hr>
                         </main>
                         ';
   
                        
                           
                       }
                   }
             // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
               }
           }
      
        ?>
 </form>
      </div>
      
</body>
</html>