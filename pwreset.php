<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST["submit"])) {
    require("mysql.php");
    $stmt = $mysql->prepare("SELECT * FROM accounts WHERE EMAIL = :email"); //Username überprüfen
    $stmt->bindParam(":email", $_POST["email"]);
    $stmt->execute();
    $count = $stmt->rowCount();
        if($count != 0) {
            $token = generateRandomString(25);
            $stmt = $mysql->prepare("UPDATE accounts SET TOKEN = :token WHERE EMAIL = :email");
            $stmt->bindParam(":token", $token);
            $stmt->bindParam(":email", $_POST["email"]);
            $stmt->execute();
            mail($_POST["email"], "Password zurücksetzen", "http://localhost/penis/setPassword.php?token=" . '<div class="1"></div>token');
            

        } else {
            echo "Diese Email ist nicht vorhanden";
        }
}

function generateRandomString($lenght = 10) {
    $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characterLenght = strlen($character);
    $randomString = '';
    for($i = 0; $i < $lenght; $i++) {
        $randomString .=$character[rand(0, $characterLenght -1)];
    }
    return $randomString;
}

?>
    <h1>Passwort Vergessen</h1>
    <form action="pwreset.php" method="POST">
        <input type="email" name="email" placeholder= "Email" required>
        <button type = "submit" name = "submit">Senden</button> <br>
    </form>
</body>
</html>