<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
</head>
<body>
    <?php

    //String operator
    $a = "Hello";
    $b = "World!";
    $c = $a . $b;   //without space
    $d = $a . " ". $b;   //with space

    echo $c;
    echo "<br>";
    echo $d;
    echo "<br>";


    //Arithmetic Operator
    echo 1 + 2;
    echo "<br>";
    echo 1 * 2;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo 10 ** 3;
    echo "<br>";
    echo 1 + 2 * 4;
    echo "<br>";
    echo (1 + 2) * 4;
    echo "<br>";

    //Assignment operators
    $a = 2;
    $a += 4;
    echo $a;
    echo "<br>";

    //Comparison operators
    $a = 2;
    $b = 4;
    if ($a == $b) {
        echo "This statement is true!";
    }
    echo "<br>";
    echo "<br>";
    $a = 2;
    $b = 2;
    if ($a == $b) {
        echo "This statement is true!";
    }
    echo "<br>";
    echo "<br>";
    $a = 2;
    $b = "2";
    if ($a == $b) {
        echo "This statement is true!";
    }
    echo "<br>";
    echo "<br>";
    $a = 2;
    $b = "2";
    if ($a === $b) {
        echo "This statement is true!";
    }
    echo "<br>";
    echo "<br>";
    $a = 2;
    $b = 2;
    if ($a === $b) {
        echo "This statement is true!";
    }

    echo "<br>";
    echo "<br>";
    $a = 2;
    $b = 4;
    if ($a != $b) { //if not true --!=, ! stands for NOT
        echo "This statement is true!";
    }
    echo "<br>";

    // OTHER SIGNS ARE <,>, <=,
    //<> SAME AS != means not equal to

    //Logical operators
    $a = 4;
    $b = 4;

    $c = 2;
    $d = 6;
    if ($a == $b and $c == $d) {
        echo "This statement is true!";
    }
    echo "<br>";
    $a = 4;
    $b = 4;

    $c = 2;
    $d = 6;
    if ($a == $b or $c == $d) {
        echo "This statement is true!";
    }
    echo "<br>";
    if ($a == $b || $c == $d && $a == $c) {
        echo "This statement is true!";
    }
    echo "<br>";


    // use "or" or || use "and" or &&
    //the editor treats the && part first before the or ||


    //Incrementing?decrementing operators
    $a = 1;
    echo ++$a;
    echo "<br>";
    echo $a++;
    echo "<br>";
    echo $a;
    echo $a;
    echo ++$a;
    echo --$a;
    echo --$a;
    echo $a--;
    echo $a--;
    echo $a








    ?>



 
</body>
</html>