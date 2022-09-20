<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="0;URL=index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loout</title>
</head>
<body>
    <?php
        unset($_SESSION["username"]);
        unset($_SESSION["role"]);
        unset($_SESSION["id"]);
    ?>
</body>
</html>