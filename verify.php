<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <h1>
        <center>Webboard Watchara<center>
    </h1>
    <hr>
    <?php
    $l = $_POST["User"];
    $p = $_POST["Password"];
    if ($l == "admin" && $p == "ad1234") {
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = "session_id()";
        echo "<p align=center>ยินดีต้อนรับคุณ ADMIN</p>";
        echo "<p align=center><a href=index.php>กลับไปหน้าหลัก</a></p>";
    } elseif ($l == "member" && $p == "mem1234") {
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = "session_id()";
        echo "<p align=center>ยินดีต้อนรับคุณ MEMBER</p>";
        echo "<p align=center><a href=index.php>กลับไปหน้าหลัก</a></p>";
    } else {
        echo "<p align=center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>";
        echo "<p align=center><a href=index.php>กลับไปหน้าหลัก</a></p>";
    }
    ?>
</body>

</html>