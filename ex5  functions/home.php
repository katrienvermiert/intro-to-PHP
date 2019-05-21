<?php
require('security.php');
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    <div class="container">
        <div class="box">
            <input type="submit" name="submit1" value="generate object">
        </div>
        <div class="box">
            <input type="submit" name="submit2" value="reverse object">
        </div>
        <div class="box">
            <form action="" method="post">
                <input class="text" type="text" name="input">
                <input type="submit" name="submit3" value="get nickname">
            </form>
        </div>
    </div><br><br>

    <h3>result</h3>
    <div>
        <?php
        if(isset($_POST['submit1'])){
            object_generate();
        };
        ?>
    </div>
    <div class="result">
        <?php
            if(isset($_POST['submit3'])){
               nickname_generate($nickname);
            };
        ?> 
            
    </div>
    </body>
    </html>