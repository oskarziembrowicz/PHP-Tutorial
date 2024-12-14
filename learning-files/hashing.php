<?php
    $password = "passwd123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if(password_verify("passwd123", $hash)) {
        echo "You are logged in! <br>";
    } else {
        echo "Incorrect password <br>";
    }
?>