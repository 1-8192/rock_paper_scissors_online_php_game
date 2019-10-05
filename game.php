<?php
    if ( !isset($_GET["name"]) ) {
        die('Name parameter missing');
    }
    if ( isset($_POST['cancel'])) {
        header('Location: index.php');
        return;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alessandro Allegranzi's Rock Paper Scissors Game</title>
        <?php require_once "bootstrap_styling.php" ?>
    </head>
    <body>
        <h1>Rock Paper Scissors</h1>
        <p>Welcome: name </p>
        <form method="POST">
        <select name="">
        <option value="0">Select</option>
        <option value="1">Rock</option>
        <option value="2">Paper</option>
        <option value="3">Scissors</option>
        <option value="4">Test</option>
        </select>
        <input type="submit" value="Play">
        <input type="submit" name="cancel" value="Lougout">
        </form>
        <p>
            Please select a strategy and press Play.
        </p>
    </body>
</html>