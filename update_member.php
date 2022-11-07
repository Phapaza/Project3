<?php
include 'condb.php'; //เรียกเชื่อมหน้าข้อมูล

$id     = $_POST['id_mem'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$phone  = $_POST['phone'];

$sql = "UPDATE member set name='$f_name', lastname='$l_name', phone='$phone' WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('อัพเดตข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='index.php';</script>";
}else{
    echo "<script>('อัพเดตข้อมูลล้มเหลว');</script>";
}
mysqli_close($conn);
?>