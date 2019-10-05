<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alessandro Allegranzi's Rock Paper Scissors Game</title>
        <?php require_once "bootstrap_styling.php" ?>
    </head>
    <body>
        <h1>Please Log In</h1>
        <form method="POST">
            <label for="name">User Name</label>
            <input type="text" name="who" id="name">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="Log In">
            <input type="submit" name="cancel" value="Cancel">
            <p>
            For a password hint, view source and find a password hint in the HTML comments.
            <!-- Hint: The password is the three character name of the 
            programming language used in this class (all lower case) 
            followed by 123. -->
            </p>
        </form>
    </body>
</html>