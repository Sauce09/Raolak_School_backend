<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
</head>
<body>
    <?php
    $_SESSION["username"] = "John";
    echo $_SESSION["username"];

    //all built-in superglobal variables
    $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILES[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""];
    ?>
</body>
</html>