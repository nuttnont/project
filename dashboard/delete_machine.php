<?php

include ('../connection.php');

$Machine_Id=$_GET['Machine_Id'];
$deletequery = "delete from machine where Machine_Id=$Machine_Id";
$query = mysqli_query($conn,$deletequery);

if($query){
    header('location:machine.php?msg=del');
    // echo '<script>alert("ลบข้อมูลเรียบร้อย")</script>';
    // alert("Deleted successfully");
    // header('location:machine.php');
}else{
    header('location:machine.php?msg=cantdel');
    // echo '<script>alert("เครื่องจักรนี้กำลังถูกใช้งาน")</script>';
    // alert("Not Deleted successfully");
    // header('location:machine.php');
}
 echo '<meta http-equiv="refresh" content="0.01;url=machine.php">';

?>