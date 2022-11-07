<?php
include 'condb.php'; //เรียกเชื่อมหน้าข้อมูล
$id=$_GET['id'];
$sql="DELETE FROM member WHERE id='$id' ";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='index.php';</script>";
    }else
    {
        echo "Error : " .$sql. "<br>" . mysqli_error($conn);
        echo "<script>alert('การลบข้อมูลล้มเหลว');</script>";
    } 
    mysqli_close($conn);
?>