<?php
    setcookie("fav_food", "bread", time() + (86400*2), "/");
    setcookie("fav_drink", "lemonade", time() + (86400*3), "/");
    setcookie("fav_dessert", "dounut", time() + (86400*4), "/");

    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value}<br>";
    }

    if(isset($_COOKIE["fav_food"])) {
        echo "Buy some {$_COOKIE["fav_food"]}!<br>";
    } else {
        echo "I don't know your favourite food<br>";
    }
?>