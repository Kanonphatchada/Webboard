<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <table style="border: 2px solid black;" align="center">
        <tr><td colspan="2" style="background-color: #6cd2fe;">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text" name="name"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password" name="password"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text"></td></tr>
        <tr><td>เพศ :</td><td><input type="radio" name="gender" value="m">ชาย<br>
                              <input type="radio" name="gender" value="g">หญิง<br>
                              <input type="radio" name="gender" value="a">อื่นๆ</td></tr>
        <tr><td>อีเมล :</td><td><input type="text"></td></tr>
        <tr><td colspan="2" style="text-align:center ;"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table>
    <p style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></p>
</body>
</html>