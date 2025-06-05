<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $hoten=$_POST['hoten'];
    $diem=$_POST['diem'];
    $gioitinh=$_POST['gioitinh'];
    $sql="INSERT INTO sinhvien(hoten,diem,gioitinh) VALUES ('$hoten','$diem','$gioitinh')";
    if ($conn->query($sql)===true){
        header("Location:index.php");
    }
}
?>
<form action="" method="POST">
    <p>hoten: </p>
    <input type="text" name="hoten" id="">
    <p>diem: </p>
    <input type="text" name="diem" id="">
    <p>gioitinh: </p>
    <input type="text" name="gioitinh" id="">
    <button type="submit"> them </button>
</form>
<link href="style.css"></link>

