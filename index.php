<?php
    session_start();

    $_SESSION["eigenschap"] = 'hoi';
?>

<!DOCTYPE HTML>

<html>
    <head>

    </head>
    <body>
        <h1>Ik test even iets uit:</h1>
        <?php echo $_SESSION["eigenschap"]; ?>
    </body>
</html>
