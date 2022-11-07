<?php
include 'condb.php'; //เรียกเชื่อมหน้าข้อมูล
$id=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$id' ";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lnag = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title>Add Member</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="index2.css">
    </head>
<body>
<div class = "container">
<div class = "row">
<div class="container col-sm-6">
<div class="h4 text-center alert text-bg-dark mb-4 mt-4 " role="alert">แก้ไขข้อมูลสมาชิก</div>
    <form method="POST" action="update_member.php">
    <label >รหัสสมาชิก:</label>
    <input type="text" name="id_mem" class="form-control" readonly value=<?=$row['id']?>>
    <label >ชื่อ:</label>
    <input type="text" name="fname" class="form-control" value=<?=$row['name']?>>
    <label>นามสกุล:</label>
    <input type="text" name="lname" class="form-control" value=<?=$row['lastname']?>>
    <label>เบอร์โทรศัพท์:</label>
    <input type="number" name="phone" class="form-control" value=<?=$row['phone']?>><br>
    <input type="submit" value="Update" class="btn btn-success">
    <a href ="index.php" class="btn btn-danger">Cancel</a>
</form>
</div>
</div>
</div>
</body>
</html>