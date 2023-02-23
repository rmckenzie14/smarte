<?php
include_once('updatepw.php');
//include_once('../config/dbconfig.php');
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
    <script type="text/javascript" scr="static\bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
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
<?php
include_once("nav.php");
  ?>
      <hr>
      <div class="productLayoutInde">
      <p style="margin-left: 110px"><a href="userDash.php" >Your Account</a>/
        <?php 
          $current_page = basename($_SERVER['PHP_SELF'], ".php"); 
          echo $current_page;
        ?>
      </p>
      
      <div class="" style="margin: auto;width: 50%; ">
      
      <?php
       
      
        if(isset($_SESSION["warning"])){
          echo '<div class="alert alert-warning" role="alert">'.$_SESSION["warning"].'
          <a href="login.php">try again</a>
          </div>';
        }    
                                    
      ?>
                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                            <div class="grid grid-cols-2 gap-4 my-2">
                               <label>Password</label>
                               <input class="form-control form-control-md" type="password" name="userpasswordupdate" value="" id="userpasswordupdate" >
                            </div>

                            <div class="grid grid-cols-2 gap-4 my-2">
                               <label>Confirm Password</label>
                               <input class="form-control form-control-md" type="password" name="confirmuserpasswordupdate" value="" id="confirmuserpasswordupdate" >
                            </div>
                          
                            <div class="grid grid-cols-2 gap-4 my-2">
                              <button type="submit" name="upw" class="btn btn-primary savebtn btn-lg" >Save changes</button>
                            </div>
                         </form>
                  </div>
      </div>
</body>
</html>