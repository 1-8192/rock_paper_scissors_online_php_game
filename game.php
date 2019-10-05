<?php
    // error message if no user name 
    if ( !isset($_GET["name"]) ) {
        die('Name parameter missing');
    }

    // redirect to index page on Log out click
    if ( isset($_POST['cancel'])) {
        header('Location: index.php');
        return;
    }

    // game logic 
    $player = isset($_POST["player"]) ? $_POST["player"] : 4;
    $rps_array = ["Rock", "Paper", "Scissors"];
    $computer = "";

    function check($player) {
        global $computer;
        $computer = rand(0,2);
        if ($player == 0) {
            if ($computer == 0) {
                return "Tie";
            } else if ($computer == 1) {
                return "You Lose";
            } else if ($computer == 2) {
                return "You Win";
            }
        } else if ($player == 1) {
            if ($computer == 0) {
                return "You Win";
            } else if ($computer == 1) {
                return "Tie";
            } else if ($computer == 2) {
                return "You Lose";
            }
        } else if ($player == 2) {
            if ($computer == 0) {
                return "You Lose";
            } else if ($computer == 1) {
                return "You Win";
            } else if ($computer == 2) {
                return "Tie";
            }
        } else {
            return false;
        }
    }

    $result = check($player);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alessandro Allegranzi's Rock Paper Scissors Game</title>
        <?php require_once "bootstrap_styling.php" ?>
    </head>
    <body>
        <h1>Rock Paper Scissors</h1>
        <!-- checking to make sure HTML injection doesn't happen -->
        <p>Welcome: <?= htmlentities($_GET['name']) ?> 
        </p>
        <form method="POST">
        <select name="player">
        <option value="4">Select</option>
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissors</option>
        <option value="3">Test</option>
        </select>
        <input type="submit" value="Play">
        <input type="submit" name="cancel" value="Lougout">
        </form>
        <p>
            <?php
            if ($player == 4) {
                print "Please select a strategy and press Play.";
            } else {
                print "Your play=$rps_array[$player] Computer's play=$rps_array[$computer] Result=$result \n";
            }
            ?>
        </p>
    </body>
</html>