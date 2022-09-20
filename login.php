<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <table style="border:2px solid black; width:40%">
            <tr>
                <td style="background-color:#6CD2FE;" colspan="2">เข้าสู่ระบบ</td>
            </tr>
            <form action="verify.php" method="post">
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="User" size="100"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="Password" size="100"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" value=Login></td>
                </tr>
            </form>
        </table>
        <p>
            ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a>
        </p>
    </center>
</body>

</html>