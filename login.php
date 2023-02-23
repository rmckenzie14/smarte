<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('loginUser.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Static/Css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <title>Smart-E-Login</title>
    <style>
        .logingbtn{
  background-color: #59A799;
}
    </style>
  
</head>

<body>
    <div id="logoImg" style="width:30%;">
        <a href="index.php"><img src="static/img/logo.jpg" alt=""></a> 
    </div>
    <div class="mainDiv card2" >
        <h3 class="title text-center mt-4">Smart-E</h3>
        <?php
                        //session_destroy();
        if(isset($_SESSION['errorlg'])){
            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['errorlg'].'
            sometech974@gmail.com
            </div>';
        }
                       
        ?>
        <form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="userlemail" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="userlpassword" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-block text-uppercase text-white logingbtn" name="logingbtn">Submit</button>
            </div>
            <hr class="my-4" />
            <div class="text-center mb-2">
            <a href="forgotpassword.php">Forgot Password</a>
                OR 
                <a href="register.php" class="register-link"> Click here to create your account</a>
            </div>
        </form>

    </div>
</body> 
</html>