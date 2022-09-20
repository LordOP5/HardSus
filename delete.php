<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
        if ($_SESSION["username"] != "admin" && $_SESSION["role"] != "a"){
            echo "<meta http-equiv=Refresh content=0;URL=index.php>";
        }
    ?>
</body>
</html>