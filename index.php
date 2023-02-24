<?php
session_start();
//include_once('addToCart.php');
include_once('dbconfig.php');

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
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="index.php"><img class="logoImg" src="Static/img/logo.jpg"></a>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" name="searchFl" id="searchFl" style="width : 1200px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="serchfor" id="serchfor">Search</button>
        </form>
          
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
          
          
          <br>
         
        </div>
      </nav>
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
                             <img src="'.$rows['productimg'].'" alt="Product Image" id="logoImg">
                             <p name="itemATDes">'.$rows['productDes'].'</p>
                             <!--<ul id="amtpr">
                                 <li name="itemATCAmt">Amt : </li>
                                 <li name="itemATCQuantiy"><input type="number" name="quantiy" ></li>
                                 
                               </ul>-->
                               <ul  id="pricepr">
                                 <li name="itemATCP">Price : USD $</li>
                                 <li name="itemATCPrice">'.$rows['productUnitprice'].'</li>
                               </ul>
                               <button name="add_to_cart"><a  href="cart.php?id='.$rows['productid'].'">Add to Cart</a></button>
                           </section>
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
                               <p name="itemATCId" hidden>'.$rows['productid'].'</P>
                               <h1 name="itemATCName">'.$rows['productName'].'</h1>
                               <img src="'.$rows['productimg'].'" alt="Product Image" id="logoImg">
                               <p name="itemATDes">'.$rows['productDes'].'</p>
                               <!--<ul id="amtpr">
                                 <li name="itemATCAmt">Amt : </li>
                                 <li name="itemATCQuantiy"><input type="number" name="quantiy" ></li>
                                 
                               </ul>-->
                               <ul  id="pricepr">
                                 <li name="itemATCP">Price : USD $</li>
                                 <li name="itemATCPrice">'.$rows['productUnitprice'].'</li>
                               </ul>
                               
                               <button name="add_to_cart"><a  href="cart.php?id='.$rows['productid'].'">Add to Cart</a></button>
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

      </div>
      
</body>
</html>