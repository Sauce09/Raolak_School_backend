<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
</head>
<body>
    <?php
    $name = "John";
    $test = $name; 
    ?>

    <p>My name is <?php echo "$name";?> , and I'm learning PHP</p>
    <p>Hi! My name is <?php echo "$test";?> , and I'm learning PHP</p>
    
</body>
</html>