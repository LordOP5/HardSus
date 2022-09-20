<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>
        <center>Webboard Watchara<center>
    </h1>
    <hr>
    <p>
        หมวดหมู่ :
        <select name="option">
            <option value="ทั้งหมด">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
    </p>
    <form action="delete.php" method="post">
        <?php
        if (isset($_SESSION["id"])) {
            if ($_SESSION["username"] == "admin") {
                echo "<div style=text-align:right>ผู้ใช้งานระบบ : $_SESSION[username] <a href=logout.php>ออกจากระบบ</a><br>";
                echo "<div style=text-align:left;><a href=newpost.php>สร้างกระทู้ใหม่</a></div>";
                $A = 1;
                $B = 11;
                while ($A < $B) {
                    if ($_SESSION["role"] == "a") {
                        echo "<div style=text-align:left;><ul><li><a href=post.php?id=$A>กระทู้ที่ $A</a> <a href=delete.php?id=$A> ลบ </a></li></ul></div>";
                        $A++;
                    } else {
                        echo "<div style=text-align:left;><ul><li><a href=post.php?id=$A>กระทู้ที่ $A</li></ul></a></div>";
                        $A++;
                    }
                }
            } else if ($_SESSION["username"] == "member") {
                echo "<div style=text-align:right>ผู้ใช้งานระบบ : $_SESSION[username] <a href=logout.php>ออกจากระบบ</a><br>";
                echo "<div style=text-align:left;><a href=newpost.php>สร้างกระทู้ใหม่</a></div>";
            }
        } else {
            echo "<div style=text-align:right><a href=login.php>เข้าสู่ระบบ</a></div>";
            $A = 1;
            $B = 11;
            while ($A < $B) {
                echo "<div style=text-align:left;><ul><li><a href=post.php?id=$A>กระทู้ที่ $A</li></ul></a></div>";
                $A++;
            }
        }
        ?>
    </form>


</body>

</html>