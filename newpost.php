<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost</title>
</head>

<body>
    <h1>
        <center>Webboard Watchara<center>
    </h1>
    <hr>
    <div style="text-align:center;width:100%;">
    <?php
    if (isset($_SESSION["id"])) {
        echo "<table>
            <tr><td>ผู้ใช้ : $_SESSION[username]</td></tr>
            <tr><td align=left>หมวดหมู่ :
            <td align=left><select name=option>
                <option value=ทั้งหมด>--ทั้งหมด--</option>
                <option value=เรื่องทั่วไป>เรื่องทั่วไป</option>
                <option value=เรื่องเรียน>เรื่องเรียน</option>
            </select></td></tr>
            <tr><td align=left>หัวข้อ : <td align=left><input type=text name=Post size=50></td></tr>
            <tr><td align=left>เนื้อหา : <td align=left><textarea name=post rows=5 cols=50></textarea></td></tr>
            <tr><td><td align=left><input type=submit value=บันทึกข้อความ></td></tr>
            <tr><td><td><a href=index.php>กลับไปหน้าหลัก</a></td></tr>";
    } else {
        echo "<meta http-equiv=Refresh content=0;URL=index.php>";
    }
    ?>
    </div>
</body>

</html>