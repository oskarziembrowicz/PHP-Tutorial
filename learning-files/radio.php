<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm"  value="Confirm">
    </form>
</body>
</html>
<?php
    // Check if confirm was pressed (set)
    if (isset($_POST["confirm"])) {

        $credit_card = null;

        if (isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card) {
            case "Visa":
                echo "You selected Visa<br>";
                break;
            case "Mastercard":
                echo "You selected Mastercard<br>";
                break;
            case "American Express":
                echo "You selected American Express<br>";
                break;
            default:
                echo "Please make a selection<br>";
        }
    }
?>