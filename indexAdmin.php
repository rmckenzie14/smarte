<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//includes
include_once('dbconfig.php');


//if($_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['loginAdmin'])){

    $adminemail = mysqli_real_escape_string($con, $_POST['adminemail']);
    $adminpassword = mysqli_real_escape_string($con, $_POST['adminpassword']);




    if(!filter_var($adminemail, FILTER_VALIDATE_EMAIL)){

        $_SESSION['error'] = "Invalid email address format";

    }else{

        $lookignForadminUser = mysqli_query($con, "SELECT adminid, adminName, adminPassword, adminEmail FROM adminuser WHERE adminEmail = '$adminemail'");
        if($lookignForadminUser){
            
            if(mysqli_num_rows($lookignForadminUser) > 0){
                while($rows = mysqli_fetch_assoc($lookignForadminUser)){
                    $dbemail= $rows['adminEmail'];
                    $dbpw = $rows['adminPassword'];
                    $dbfn = $rows['adminName'];
                    $dbuserid = $rows['adminid'];
                }

                //$isVerified = password_verify($userLPassword, $dbpw);
                
                if(password_verify($adminpassword, $dbpw)){

                    $_SESSION['name'] = "loggedin";
                    $_SESSION['dbfn'] = $dbfn;
                    $_SESSION['adminuserid'] = $dbuserid;
                    header("Location:adminDash.php");

                }else{
                    $_SESSION['error'] = "Incorrect email and or password";
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bg-cyan{
            background-color: #2fab99;
        }
    </style>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="row" style="height: 100vh" >
            <div class="col-5 text-center pt-5">
                <a class="navbar-brand" href="index.php"><img class="logoImg" src="static\img\logo.jpg"></a>
                <img src="./logo.png" class="w-75" alt="">
                <h1>Admin</h1>
            </div>
            <div class="col-7 p-5 bg-cyan">
                <h4 class="text-center underline">Login</h4>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" style="margin-top: 85px;">
                    <div class="form-group">
                      <label for="exampleInputEmail1"class="fs-5" >Email your email</label>
                      <input type="email" class="form-control py-3" id="exampleInputEmail1" name="adminemail" aria-describedby="emailHelp" placeholder="Enter email">
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleInputPassword1" class="fs-5">Password</label>
                      <input type="password" class="form-control py-3" id="exampleInputPassword1" name="adminpassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3 mt-5" name="loginAdmin" id="loginAdmin" onclick="Submit()">Submit</button>
                  </form>
                  <br><br>
                  <?php
                        //session_destroy();
                        if(isset($_SESSION['error'])){
                            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['error'].'
                            <a href="login.php">try again</a>
                            </div>';
                        }
                       
                     ?>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function Submit(e){
        e.preventDefault();
        console.log('Submit,.....\'______\'')
    }
</script>
</html>