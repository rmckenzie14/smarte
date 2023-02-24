
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
                    <h2 class="title text-center mt-4">Welcome To <a href="index.php"><img src="Static/img/logo.jpg" alt="" style="height:50px; width:150px;"></a></h2>
                    <h3 class="title text-center mt-4">Congratulation.</h3>
                    <p class="text-left text-black">Hi <?php 
                    include_once('addUserGet.php');
                    
                        if(isset($_SESSION['name'])){

                            echo $_SESSION['name'];

                            }
                        ?>,<br><br><text-indent>Thank <text-indent>you for registering with Smart-E. Your are almost there. An email was sent to the email address provided with further instructions on how to validate and activate you account.<br><br>
                            Smart-E </p>
                    
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>