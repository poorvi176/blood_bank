<?php
require 'common.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Blood Bank</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial scale=1">
    </head>
    <body style='background-image: url(img/background456.png); background-repeat: no-repeat; width: 1500px; background-size: cover '>
        
            <center> 
                <?php
                include 'header.php';
                ?>
            
                <div class="content">
                    <div class="banner-image">
                        <div class="inner-banner-image">
                            <div class="banner_content">
                               
                                <h1>We Save Lives</h1>
                                <p></p>
                                <a href="donate.php" target="_blank" class="btn btn-danger btn-lg active">Donate now</a>
                                <a href="display.php" target="_blank" class="btn btn-danger btn-lg active">in need of blood?</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        
        
        
        <div>
        <?php
                include 'footer.php';
                ?>
        </div>             
    </body>
</html>
