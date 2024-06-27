<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>First php</title>
</head>
<body>
    <main>
        <form action="formhandler.php" method="post">
                    <h3>Accetance Fee</h3>
                    <label for="name">JAMB REG</label><br>
                    <input class="box1" type="text" name="name" placeholder="enter your JAMB Regitration Number"><br>
                    
                    <label for="e-mail">E-mail</label><br>
                    <input  class="box1" type="e-mail" name="e-mail" id="e-mail" placeholder="Enter your E-mial"><br>
                    
                    <label for="card Number">Card Number</label><br>
                    <input  class="box1" type="number" name="number" id="number" placeholder="enter your card number"><br>
                    
                    <div class="div1">
                        <label class="label1" for="Card Expiry">Card Month</label><br>
                        <input class="box2" type="month" name="Month" id="Month" placeholder="MM"><br>
                    </div>

                    <div class="div1">
                        <label class="label1" for="Card year">Card Expiry Year</label><br>
                        <input class="box2" type="Year" name="Year" id="Year" placeholder="YY"><br>
                    </div>

                    <div class="div1">
                        <label class="label1" for="CVC">Card CVC</label><br>
                        <input class="box2" type="cvc" name="cvc" id="cvc" placeholder="cvc"><br>
                    </div>

                    <div class="div2">
                        <label class="passwordlabel" for="password">Transcation Pin</label><br>
                        <input id="passwordbox" type="password" name="password" placeholder="enter your card pin"><br>
                    </div>

                    <div class="div2">
                        <button type="submit">pay</button>
                    </div>
                    
        </form>
    </main>
</body>
</html>