<?php

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

    <title>Password Reset</title>
</head>

<body>
    <div>
        <a href="../index.php"><img src="static/img/logo.jpg" alt=""></a>
    </div>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="card-body">
                    <h2 class="title text-center mt-4">Password Reset</h2>
                    <p class="text-center">Please enter your information</p>
                    <form class="form-box px-3" method="post">
                        <div class="form-input">
                            <div class="container">
                                <div class="row">


                                    <div class="form-input">
                                        <span><i class="fa fa-envelope-o"></i></span>
                                        <label for="email" class="form-label">Enter Account Email</label>
                                        <input type="email" name="email" id="email" placeholder="Email"
                                            class="form-control" required />
                                    </div>
                                    <div class="form-input">
                                        <span><i class="fa fa-key"></i></span>
                                        <label for="password" class="form-label">Enter New Password</label>
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="form-control" required />
                                    </div>

                                    <div class="col-md-5">
                                        <label for="inputState" class="form-label">Security Question</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>In what city were you born?</option>
                                            <option>What is the name of your favorite pet?</option>
                                            <option>What high school did you attend?</option>
                                            <option>What is the name of your first school?</option>
                                            <option>What was the make of your first car?</option>
                                            <option>What was your favorite food as a child?</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="answer" class="form-label">Answer</label>
                                        <input type="text" class="form-control" id="answer">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block text-uppercase">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1" name="" />
                                <label class="custom-control-label" for="cb1">Remember me</label>
                            </div>
                        </div> -->



                        <hr class="my-4" />

                        <div class="text-center mb-2">
                            Already have an account?
                            <a href="login.php" class="register-link"> Click here to sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>