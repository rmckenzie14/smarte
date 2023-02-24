<?php
session_start();
include_once('getorders.php');

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
        ?>
      </p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">No.</th>
            <th scope="col" style="text-align: center">Invoice</th>
            <th scope="col" style="text-align: center">Order Quantity</th>
            <th scope="col" style="text-align: center">Company Name</th>
            <th scope="col" style="text-align: center">Order Date</th>
            <th scope="col" style="text-align: center">Order Time</th>
            <th scope="col" style="text-align: center">Ship TO</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
            
              // $getOrders = mysqli_query($con, "SELECT invoiceNumber, orderQuantity, orderShipToAdd, orderTime, orderDate, company_name FroM orders JOIN company ON orders.buyerCompanyId = company.companyid ");

              //   if($getOrders){
              //       $count = 1;
              //       if(mysqli_num_rows($getOrders) > 0){
              //           while($rows = mysqli_fetch_assoc($getOrders)){

                           
                          
              //               //echo '<a href="orders.php"><div class="grid-item text-uppercase text-white"><img class="logoImg" src="'.substr($rows['productimg'],3).'""></div></a>';
              //               echo ' <tr>
              //               <th scope="row" style="text-align: center">'.$count.'</th>
              //               <td style="text-align: center">'.$rows['invoiceNumber'].'</td>
              //               <td style="text-align: center">'.$rows['orderQuantity'].'</td>
              //               <td style="text-align: center">'.$rows['company_name'].'</td>
              //               <td style="text-align: center">'.$rows['orderShipToAdd'].'</td>
              //               <td style="text-align: center" >'.$rows['orderTime'].'</td>
              //               <td style="text-align: center" >'.$rows['orderDate'].'</td>
              //             </tr>';

              //             $count++;
                            
              //           }

                       

              //       }else{
              //         echo "No reconrds found of the item you are searching for.  ";
              //       }
              // // <a href="orders.php"><div class="grid-item text-uppercase text-white">Orders</div></a>
              //     }
              getAllOrders();
        ?>
        </tbody>
    </table>
      </div>
</body>
</html>