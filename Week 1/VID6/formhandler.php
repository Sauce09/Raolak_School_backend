<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $reg_number = htmlspecialchars($_POST["name"]);
    $e_mail = htmlspecialchars($_POST["e-mail"]);
    $card_number = htmlspecialchars($_POST["number"]);
    $card_expiryM = htmlspecialchars($_POST["Month"]);
    $card_expiryY = htmlspecialchars($_POST["Year"]);
    $cvc = htmlspecialchars($_POST["cvc"]);
    $card_pin = htmlspecialchars($_POST["password"]);

    if (empty($reg_number)) {
        exit();
        header("Location: index.php");
    }

}

echo "These are the data, that the user submitted.";
echo "<br>";
echo $reg_number,
echo "<br>";
echo $e_mail;
echo "<br>";
echo $card_number;
echo "<br>";
echo $card_expiryM;
echo "<br>";
echo $card_expiryY;
echo "<br>";
echo $cvc;
echo "<br>";
echo $card_pin;