<?php
session_start();
include_once('addProduct.php');
// if(isset($_POST['logout'])){
//   session_destroy();
//   header("Location:index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/Css/bootstrap-4.1.3-dist/css/bootstrap.min.css"></link>
    <script type="text/javascript" scr="Static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
    <script type="text/javascript" scr="Static\js\tail.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Home</title>
    <style>
      .grid-container {
        display: grid;
        gap: 50px 50px;
        grid-template-columns:30% 30% 30%;
        /* background-color: #2196F3; */
        padding: 30px;
        width: 95%;
        /* margin: auto; */
        margin-left: 80px;
      }
      .grid-item {
        /* background-color: rgba(255, 255, 255, 0.8); */
        background-color: #59A799;
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 50px;
        font-size: 30px;
        text-align: center;
        border-radius: 10px;
        text-color: white;
      }
    
      a:hover { text-decoration: none; }
      .savebtn{
        background-color: #59A799;
      }
      /* td{
        border: solid black 1px;
      } */
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="index.php"><img class="logoImg" src="Static\img\logo.jpg"></a>
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
      <div class="productLayoutInde">
      <p style="margin-left: 110px"><a href="userDash.php" >Your Account</a>/
        <?php 
          $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
          echo $current_page;
        ?>/ <a href="#">Edit a Product</a>
      </p>
      
      <div class="" style="margin: auto;width: 50%;">
      <div class="mb-10" style="margin-top: 90px;">
      <h1 style="font-size: 30px;">Add a product</h1>
      </div>
      <?php
          if(isset($_SESSION['success'])){
            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['success'].'
            <a href="login.php">try again</a>
            </div>';
          }elseif(isset($_SESSION['nosuccess'])){
            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['nosuccess'].'
            <a href="login.php">try again</a>
            </div>';
          }
      ?>
     
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" enctype="multipart/form-data" style="margin-top: 70px;">
                        
                       
                        <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Product Name</label>
                              <input class="form-control form-control-md" type="text" name="productname" value="" id="productname" >
                        </div>
                        <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Product Price</label>
                              <input class="form-control form-control-md" type="text" name="productprice" value="" id="productprice" >
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Product Quantity</label>
                              <input class="form-control form-control-md" type="text" name="productquantity" value="" id="productquantity" >
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Product Category</label>
                              <select class="form-control form-control-md" type="text" name="productcategory" value="" id="productcategory" >
                                <option></option>
                                <?php
                                   $lookignForCom = mysqli_query($con, "SELECT categoryid, categoryName FROM category");
          
                                   if($lookignForCom){
                                 
                                       if(mysqli_num_rows($lookignForCom) > 0){
                                 
                                           while($rows = mysqli_fetch_assoc($lookignForCom)){

                                            echo '<option value="'.$rows['categoryid'].'">'.$rows['categoryName'].' </option>';
                                               //../Static/userUploadstopup failed in sep2622.jpg
                                           }
                                           
                                          }
                                        }
                                ?>
                              </select>
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Product Description</label>
                              <input class="form-control form-control-md" type="text" name="productdes" value="" id="productdes" >
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Upload image file</label>
                              <input class="form-control form-control-md" type="file" name="productimage" value="" id="productimage" >
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                        <button type="submit" class="btn btn-primary savebtn btn-lg" >Add product</button>
                        </div>
                        </form>
                     </div>
                     <hr>
      </div>
</body>
</html>