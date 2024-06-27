<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
</head>
<body>
    <?php
    //TO CHECK LOCATION OF THE WEBSITE INSIDE OUR COMPUTER
     echo $_SERVER["DOCUMENT_ROOT"];
     echo "<br>";
     //TO CHECK ROOT FOLDER OF OUR WEBSITE
     echo $_SERVER["PHP_SELF"];
     echo "<br>";
     //TO CHECK SERVER NAME
     echo $_SERVER["SERVER_NAME"];
     echo "<br>";
     //TO CHECK REQUEST METHOD
     echo $_SERVER["REQUEST_METHOD"];
    ?>
</body>
</html>