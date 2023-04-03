<?php

define("USER", 0);
define("MOD", 1);
define("ADMIN", 2);

function getRanked($username) {
    require('mysql.php');
    $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user");
    $stmt->bindParam(":user", $username, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch();
}

function isBanned($username) {
    if(getRanked($username) == -1) {
        return true;
    } else {
        return false;
    }
}

?>