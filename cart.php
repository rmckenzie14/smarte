<?php
session_start();
include_once('dbconfig.php');
if(isset($_POST['Gotocart'])){
    header("Location:viewcart.php");
  }elseif(isset($_POST['Continueshopping'])){
    header("Location:index.php");
    
 }
// if(isset($_POST['logout'])){
//     header("Location:viewcart.php");
//   }elseif(isset($_POST['cancel'])){
//     header("Location:index.php");
    
//   }
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Static/Css/bootstrap-4.1.3-dist/css/bootstrap.min.css"></link>
    <script type="text/javascript" scr="static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
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
        grid-template-columns: 25% 25% 25% 25%;
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
  border: 1px solid black;
  border-radius:10px;
  background-color: #59A799;
  
}
.product-info h1, .product-info p, .product-info ul{
  color: #FFFFFF;
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
        transition: transform 0.3s; add transition for smooth animation
      }
      /* #logoImg:hover{
       
        transform: scale(3.0); /* scale up the image on hover 
      } */
    /***************** */
    main {
	max-width: 960px;
	margin: 20px auto;
	padding: 0 20px;
}

h1 {
	font-size: 36px;
	margin-bottom: 30px;
}

.product {
	display: flex;
	margin-bottom: 50px;
}

.product img {
	max-width: 400px;
	margin-right: 20px;
}

.product-info {
	flex: 1;
}

.product-info h2 {
	font-size: 24px;
	margin: 0 0 10px;
}

.product-info p {
	margin: 0 0 10px;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="number"] {
	width: 60px;
	margin-right: 10px;
}

button {
	background-color: #333;
	color: #fff;
	border: none;
	padding: 10px 20px;
	font-size: 18px;
	cursor: pointer;
}

footer {
	background-color: #333;
	color: #fff;
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 20px;
}


body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	display: flex;
	align-items: center;
	height: 80px;
	padding: 0 20px;
}

.logo {
	font-size: 24px;
	font-weight: bold;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

main {
	max-width: 100%;
	margin: 20px auto;
	padding: 0 20px;
}

h1 {
	font-size: 36
}



      
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="index.php"><img class="logoImg" src="Static\img\logo.jpg"></a>
        <form action="cart.php" method="POST" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" name="searchFl" id="searchFl" style="width : 1200px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="serchfor" id="serchfor">Search</button>
          
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

           if(isset($_GET['id']) && isset($_SESSION['userid'])){

                $productid =  $_GET['id'];
                $userid = $_SESSION['userid'];
              
            
             
             
             $getProducts = mysqli_query($con, "SELECT productid, productName,  productimg, productUnitprice, productDes FroM product WHERE productid = '$productid'");
   
               if($getProducts){
                   
                   if(mysqli_num_rows($getProducts) > 0){

                       while($rows = mysqli_fetch_assoc($getProducts)){
                        $productname = $rows['productName'];
                        $productprice = $rows['productUnitprice'];
                        $productimg = $rows['productimg'];

                       }

                       $createItemCart = mysqli_query($con, "INSERT INTO cart (userid, productid, productimage, productprice) VALUES ('$userid', '$productid', '$productimg', '$productprice')");
                       if($createItemCart){
                        echo ' <div class="mainDivFP cardFP">
                            <h2 class="title text-center mt-4">Item added to your cart.</h2>
                            
                            <img src="'.$productimg.'" alt="Product Image" id="logoImg" >
                            <p class="text-center">'.$productname.' was added to your cart.</p>
                            
                            
                                
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
            }else{
                echo '<div class="mainDivFP cardFP">
                <h2 class="title text-center mt-4">Sorry</h2>
                
                <p class="text-center">You need to be logged into your account to be able add an item to the shopping cart.</p>
                
                    
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
      
        ?>
        
</form>


</body>
</html>