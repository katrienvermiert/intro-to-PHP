<?php
$length = rand(2, 4);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>nickname generator</title>
    </head>
    <body>
        <form action="nickname.php" method="post">
            <h2>Cool nickname generator</h2>
            <div class="input">
                <input type="text" pattern=".{1, }" required title="1 character minimum" name="input">
                <input type="submit" name="submit">
            </div>
            <div class="results">
                <h3 style='text-align:center'>
                    <?php
                        echo strrev($_POST['input']);
                    ?> 
                </h3> 
                <h3 style='text-align:center'>
                    <?php
                        echo strtoupper(strrev($_POST['input']));
                    ?> 
                </h3> 
                <h3 style='text-align:center'>
                    <?php
                        echo strtoupper($_POST['input']);
                    ?> 
                </h3> 
                <h3 style='text-align:center'>
                    <?php
                        echo "--".strtoupper($_POST['input'])."--";
                    ?> 
                </h3>
                <h3 style='text-align:center'>
                    <?php
                        echo "x".strtoupper($_POST['input']);
                    ?> 
                </h3>
                <h3 style='text-align:center'>
                    <?php
                        echo substr(md5(microtime()),rand(0,26),$length).strtoupper($_POST['input']);
                    ?> 
                </h3>
                <h3 style='text-align:center'>
                    <?php
                        echo "[".substr(md5(microtime()),rand(0,26),$length)."]".strtoupper($_POST['input']);
                    ?> 
                </h3>
                <h3 style='text-align:center'>
                    <?php
                        echo "[".substr(md5(microtime()),rand(0,26),$length)."]".strtolower($_POST['input']);
                    ?> 
                </h3>
            </div>
        </form>

        
       
    </body>
</html>
