<?php
include 'condb.php'; //เรียกเชื่อมหน้าข้อมูล
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$phone = $_POST['phone'];

$sql="INSERT INTO member(name,lastname,phone) VALUES('$f_name','$l_name','$phone')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='index.php';</script>";
}else{
    echo "<script>('บันทึกข้อมูลล้มเหลว');</script>";
}
mysqli_close($conn);
?>