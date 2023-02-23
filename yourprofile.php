<?php
session_start();
include_once('dbconfig.php');

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
      
      <div class="" style="margin: auto;width: 50%;">
      <div class="mb-10">
      <img class="h-64 w-64 rounded-lg" src="Static\img\avatarimg.png" alt="" >
      </div>
      
      <?php
        $user_Firstname = isset($user_Firstname) ? $user_Firstname : '';
        $user_Lastname = isset($user_Lastname) ? $user_Lastname : '';
        $userid = isset($userid) ? $userid : '';
       

    
   
        if(isset($_SESSION['dbfn']) && isset($_SESSION['userid'])){
  
            $userIdSession =  $_SESSION['userid'];
            $lookignForCom = mysqli_query($con, "SELECT user_Firstname, user_Lastname, userid FROM users WHERE userid = '$userIdSession'");
          
            if($lookignForCom){
          
                if(mysqli_num_rows($lookignForCom) > 0){
          
                    while($rows = mysqli_fetch_assoc($lookignForCom)){
                        $user_Firstname= $rows['user_Firstname'];
                        $user_Lastname = $rows['user_Lastname'];
                        $userid = $rows['userid'];
                        
                        //../Static/userUploadstopup failed in sep2622.jpg
                    }
                    echo'
                        <form action="">
                        <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Full Name</label>
                              <input class="form-control form-control-md" type="text" name="" value="'.$user_Firstname." ".$user_Lastname.'" id="" readonly>
                           </div>
                        <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Emp id #</label>
                              <input class="form-control form-control-md" type="text" name="" value="'.$userid.'" id="" readonly>
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Title</label>
                              <input class="form-control form-control-md" type="text" name="" value="Administrator" id="" readonly>
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Clearance</label>
                              <input class="form-control form-control-md" type="text" name="" value="Admin" id="" readonly>
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Department</label>
                              <input class="form-control form-control-md" type="text" name="" value="Procuremnt" id="" readonly>
                           </div>
                           <div class="grid grid-cols-2 gap-4 my-2">
                              <label>Location</label>
                              <input class="form-control form-control-md" type="text" name="" value="HQ" id="" readonly>
                           </div>
                           
                        </form>';
                  }
                }
              }
                
                        ?>
                     </div>
      </div>
</body>
</html>