<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["token"])) {
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE TOKEN = :token"); //Username überprüfen
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count != 0) {
            if(isset($_POST["submit"])) {
                if($_POST["pw1"] == $_POST["pw2"]) {
                    $hash = password_hash($_POST["pw1"], PASSWORD_BCRYPT);
                    $stmt = $myswl-> prepare("UPDATE accounts SET PASSWORD = :pw, TOKEN = null WHERE TOKEN = : token");
                    $stmt->bindParam(":pw", $_POST["pw1"]);
                    $stmt->bindParam(":token", $_GET["token"]);
                    $stmt->execute();
                    echo 'Dein Password wurde geändert <br>
                    <a href="index.html"></a>';

                }
            }
            ?>
            <h1>Neues Passwort setzen</h1>
            <form action="SetPassword.php" method = "POST">
                <input type="password" name = "pw1" placeholder = "Passwort" required><<br>
                <input type="password" name = "pw1" placeholder = "Passwort" required><<br>
                <button type = "submit" name = "submit">Password zurücksetzen</button>
            </form>

            <?php

        } else {
            echo "Fehler";
        }
    } else {
        echo "fgehler";
    }
    ?>
</body>
</html>