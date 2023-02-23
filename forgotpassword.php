<?php
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
        <a href="../index.php"><img src="static/img/logo.jpg" alt=""></a>
    </div>
    <div class="mainDivFP cardFP">
        <h2 class="title text-center mt-4">Forgot Password</h2>
        <p class="text-center">Please enter the email address to the account you are trying to reset</p>
        <?php
            echo '<div class="alert alert-success" role="alert">
            An email w sent to the provided email address with futher instructions. <a href="smartLoginView.php">Back to login</a>
            </div>';
            echo '<div class="alert alert-success" role="alert">
            An error occured. <a href="smartForgotP.php">Please Try again</a>
            </div>';
        ?>
        <form method="POST" autocomplete="off" action="index.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Account Email address</label>
                <input type="text" class="form-control resetEmail" id="resetEmail" aria-describedby="emailHelp" placeholder="Enter email" name="resetEmail" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="mb-3 bg-primary"style="border-radius: 10px;">
                <button type="submit" id="reserPwBtn" class="btn btn-block text-white text-uppercase reserPwBtn">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</body>

</html>
