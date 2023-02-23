<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('addUserGet.php');

    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <link rel="stylesheet" href="Static/Css/style.css">
    <link rel="stylesheet" href="Static/Css/signup.css">

    <title>Smart-E-Signup</title>
    <style>
        body{
        overflow: auto;
        }
        #signupbtn{
            background-color: #59A799;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="card-body">
                    <h2 class="title text-center mt-4">Welcome To <a href="index.php"><img src="static/img/logo.jpg" alt="" style="height:50px; width:150px;"></a></h2>
                    <h3 class="title text-center mt-4">Let's get started</h3>
                    <p class="text-center">Please enter your information</p>
                    <?php
                        //
                        if(isset($_SESSION['error'])){
                            echo '<div class="alert alert-warning" role="alert">'.$_SESSION['error'].'
                            <a href="register.php">try again</a>
                            </div>';
                        }
                        //session_destroy();
                    ?>
                    <form class="form-box px-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-input">
                            <div class="container">
                                <div class="row">
                                    <span><i class="fa fa-key"></i></span>
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" id="fname" placeholder="Enter first name" required />
                                    </div>
                                    <div class="col">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" id="lname" placeholder="Enter last name" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail">Email</label>
                                        <input type="email" class="form-control" id="userEmail" placeholder="Email" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userPassword">Password</label>
                                        <input type="password" class="form-control" id="userPassword" placeholder="Password" name="userpassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confUserPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confUserPassword" placeholder="Confirm Password" name="confUserPassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userContactNumber">Contact Number</label>
                                        <input type="number" class="form-control" id="userContactNumber" placeholder="Contact Number" name="userContactNumber" required>
                                    </div> 
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="signupbtn" id="signupbtn" class="btn btn-block text-uppercase text-white" >
                                            Create account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="text-center mb-2">
                            Already have an account?
                            <a href="login.php" class="register-link text-primary"> Click here to sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>