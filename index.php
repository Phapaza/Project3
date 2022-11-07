<?php
include 'condb.php'; //เรียกเชื่อมหน้าข้อมูล
?>

<!DOCTYPE html>
<html lnag = "en">
<link rel="stylesheet" href="index1.css">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title>Phapaza</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class = "container">
    <div class="h4 text-center alert text-bg-dark mb-4 mt-4 ">ข้อมูลสมาชิก</div>
    
    <a href ="fr_member.php" class="btn btn-success mb-4">Add</a>

    <table class="table table-dark table-hover">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $sql = "SELECT * FROM member";
        $result  = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["lastname"]?></td>
            <td><?=$row["phone"]?></td>
            <td><a href ="edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning">Edit</a></td>
            <td><a href ="delMember.php?id=<?=$row["id"]?>" class="btn btn-danger "onclick="Del(this.href);return false;">Delete</a></td>
        </tr>
<?php
}
mysqli_close($conn);
?>
    </table>
    </div>
</body>
</html>

<script language="JavaScript">
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลนี้ใช่หรือไม่");
    if(agree){
        window.location=mypage;
    }
}
</script>