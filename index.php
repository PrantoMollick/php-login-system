<?php
    //Allow the config
    define('__CONFIG__', true);

    //required the config file
    require_once("inc/config.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.18/css/uikit.min.css" integrity="sha512-UmBu02JHsKZr8Bzy5IqX1QE5qgIe8RuKDVMc27tYNzx8wBWKbIWz8p2/oDdoVBW6zM2O/63juzUYXu8oV93Lwg==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <?php
                echo "Hello -world today is";
                echo date("y / m / d");
            ?>
            <p>
                <a href="./login.php">Login</a>
                <a href="./register.php">Join US</a>

            </p>

        </div>
    </div>

    <?php require_once ('inc/footer.php') ?>
</body>
</html>

