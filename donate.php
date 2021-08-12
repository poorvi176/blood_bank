<?php
  require 'common.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | Jeevandaan</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial scale=1">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
               <img src="./img/signuppage.jpg">
            </div>

            <div class="col-sm-5">

                <h2 style="color:orange">Donate</h2>

                    <form  action="donate_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="bloodgroup" class="form-control" placeholder="bloodgroup" name="bloodgroup" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  
                        </div>

                </form>
        </div>
    </div>
    </div>

      <?php include 'footer.php'; ?>
    </body>
</html>
