<?php
include_once('addComInfo.php');
// if(isset($_POST['logout'])){
//   session_destroy();
//   header("Location:index.php");
// }

// if(isset($_SESSION["t"])){
//   echo $_SESSION["t"];
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Static/Css/bootstrap-4.1.3-dist/css/bootstrap.min.css"></link>
    <script type="text/javascript" scr="static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
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

      .savecom{
        background-color: #59A799;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img class="logoImg" src="static\img\logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <?php
        
            if(isset($_SESSION['dbfn'])){
                echo '
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  '.$_SESSION['dbfn'].'
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="userDash.php"  >Your Account</a>
                  <hr>
                  <a class="dropdown-item" href="\logout.php" >Company Details</a>
                  <hr>
                  <a class="dropdown-item" href="\logout.php" >Security</a>
                  <hr>
                  <a class="dropdown-item" href="logout.php" >Logout</a>
                  <hr>
                </div>
              </li>
            </ul>';
            }else{
              echo '<ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Are you a member?
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="smartUser\login.php">Login</a>
                  <hr>
                  <a class="dropdown-item" href="smartUser\register.php">Register</a>
                  <hr>
                  <a class="dropdown-item" href="#">Contact us</a>
                </div>
              </li>
            </ul>';
            }
              
          ?>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <br>
          <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Login</a>
                  <hr>
                  <a class="dropdown-item" href="#">Register</a>
                  <hr>
                  <a class="dropdown-item" href="#">Contact us</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Login</a>
                  <hr>
                  <a class="dropdown-item" href="#">Register</a>
                  <hr>
                  <a class="dropdown-item" href="#">Contact us</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Login</a>
                  <hr>
                  <a class="dropdown-item" href="#">Register</a>
                  <hr>
                  <a class="dropdown-item" href="#">Contact us</a>
                </div>
              </li>
          </ul>
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
      
      <div class="" style="margin: auto;width: 50%;">

                  
                          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                      <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Company Name</label>
                                            <input class="form-control form-control-md" type="text" name="comName" value="" id="" >
                                        </div>
                                      <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Company Address</label>
                                            <input class="form-control form-control-md" type="text" name="comAdd" value="" id="" >
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Company Email</label>
                                            <input class="form-control form-control-md" type="text" name="comEmail" value="" id="" >
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Country</label>
                                            <select class="form-control form-control-md" type="text" name="comCountry" value="" id="">
                                              <option></option>
                                              <option>Technology</option>
                                              <option>Food Service</option>
                                              <option>Colothing</option>
                                             </select>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Trade Type / Industry</label>
                                            <select class="form-control form-control-md" type="text" name="comTradeType" value="" id="">
                                              <option></option>
                                              <option>Technology</option>
                                              <option>Food Service</option>
                                              <option>Colothing</option>
                                             </select>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Contact Number</label>
                                            <input class="form-control form-control-md" type="text" name="comNum" value="" id="" >
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Company TRN</label>
                                            <input class="form-control form-control-md" type="text" name="comTRN" value="" id="" >
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Company NIS</label>
                                            <input class="form-control form-control-md" type="text" name="comNIS" value="" id="" >
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 my-2">
                                            <label>Add company logo</label>
                                            <input class="form-control form-control-md" type="file" name="comLogo" value="" id="" >
                                        </div>
                                        <button class="btn btn-primary btn-lg savecom" name="saveComInfo">
                                            Save company information
                                          </button>
                                      </form>'
       </div>
      </div>
 </body>                       
</html>