<?php
session_start();
if(isset($_POST['logout'])){
    session_destroy();
    header("Location:index.php");
  }elseif(isset($_POST['cancel'])){
    header("Location:index.php");
    
  }

    if(!isset($_SESSION['dbfn'])){
        header("Location:error.html");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Static/Css/forgotP.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <title>Smart-E-Login</title>
    <style>
        .dd{
            background-color: green;
        }
    </style>
</head>

<body>
    <div id="logoImg">
        <a href="index.php"><img src="Static/img/logo.jpg" alt=""></a>
    </div>
    <div class="mainDivFP cardFP">
        <h2 class="title text-center mt-4">You are about to logout of your account.</h2>
        <p class="text-center">Do you wish to continue logging out?</p>
        <form method="POST" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
            <div class="mb-3 bg-primary"style="border-radius: 10px;">
                <button type="submit" id="logout" name="logout" class="btn btn-block text-white text-uppercase reserPwBtn">
                    Yes, please log me out.
                </button>
            </div>
            <div class="mb-3 bg-primary"style="border-radius: 10px;">
                <button type="submit" id="cancel" name="cancel" class="btn btn-block text-white text-uppercase reserPwBtn">
                    No, cancel.
                </button>
            </div>
        </form>
    </div>
</body>

</html>
