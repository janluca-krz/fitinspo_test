<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        require("mysql.php");
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0){
          //Username ist frei
          $stmt = $mysql->prepare("SELECT * FROM accounts WHERE EMAIL = :email"); //Username überprüfen
          $stmt->bindParam(":email", $_POST["email"]);
          $stmt->execute();
          $count = $stmt->rowCount();
          if($count == 0){
            if($_POST["pw"] == $_POST["pw2"]){
              //User anlegen
              $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD, EMAIL, TOKEN) VALUES (:user, :pw, :email, null)");
              $stmt->bindParam(":user", $_POST["username"]);
              $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
              $stmt->bindParam(":pw", $hash);
              $stmt->bindParam(":email", $_POST["email"]);
              $_SESSION['email'] = $stmt->bindParam(":email", $_POST["email"]);
              $stmt->execute();
              echo "Dein Account wurde angelegt";
              header("Location: login.php");
            } else {
              echo "Die Passwörter stimmen nicht überein";
            }
          } else {
            echo "Email bereits vergeben";
          }
        } else {
          echo "Der Username ist bereits vergeben";
        }
      }
    ?>
    <h1>Acount erstellen</h1>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <input name = "username" placeholder="Gebe deinen Namen ein" required type="text"><br>
        <input name = "email" placeholder="Gebe deine Email ein" required type="text"><br>
        <input type="password" name="pw" placeholder="Gebe dein Passwort ein" required><br>
        <input type="password" name="pw2" placeholder="Gebe dein Passwort erneut an" required><br>
        <button type="submit" name="submit">Erstellen</button> <br>
        <a href="login.php">Zurück</a>
    </form>
    <br>
    <a href="index.php"></a>
</body>
</html>