<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>
        <p style="text-align:center"> สมัครสมาชิก </p>
    </h1>
    <hr width="100%" size="2">
    <p>
    <table style="border: 2px solid black; width:40%" align="center">
        <tr>
            <td style="background-color:#6CD2FE;" colspan="2"> กรอกข้อมูล</td>
        </tr>
        <tr>
            <td>ชื่อบัญชี :
            <td><input type="text" name="Username" size="50"></td>
        <tr>
            <td>รหัสผ่าน :
            <td><input type="password" name="password" size="50"></td>
        <tr>
            <td>ชื่อ-นามสกุล :
            <td><input type="text" name="Name" size="50"></td>
        <tr>
            <td>
            <td><input type="radio" name="ชาย" value="m">ชาย</td>
        </tr>
        <tr>
            <td>เพศ :</td>
            <td><input type="radio" name="หญิง" value="f">หญิง</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" name="อื่นๆ" value="etc">อื่นๆ</td>
        </tr>
        <tr>
            <td>อีเมล :
            <td><input type="text" name="mail" size="50"></td>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td>
        </tr>
    </table>
    </p>
    <center>
        <p><a href="index.php">กลับไปหน้าหลัก</a></p>
    </center>

</body>

</html>