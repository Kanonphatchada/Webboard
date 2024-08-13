
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post comment Page</title>
</head>
<body>
    <div style="text-align: center;">
    ต้องการดูกระทู้หมายเลข <?php echo "$_GET[id]"?> <br>
    <?php
    if($_GET['id']%2==0){
        echo "เป็นกระทู้หมายเลขคู่";    
    }else{
        echo "เป็นกระทู้หมายเลขคี่";     
    }
    ?>
    </div>
    <br>
    <table style="border: 2px solid black;width: 40%;text-align: center;" align="center">
    <tr><td colspan="2" style="background-color: #6CD2FE;"> แสดงความคิดเห็น</td></tr>
    <tr><td><textarea name="message" cols="30" rows="10"> </textarea></td></tr>
    <tr><td style="text-align: center;" colspan="2"><input type="submit"></td><td></td></tr>
    

    </table>
    <br>
    <div style="text-align: center;">
    <a href="index.php">กลับสู่หน้าหลัก</a>
    </div>
</body>
</html>