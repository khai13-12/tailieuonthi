<?php
include "connect.php";
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    $hoten=$_POST['hoten'];
    $diem=$_POST['diem'];
    $gioitinh=$_POST['gioitinh'];
    $sql=" UPDATE sinhvien SET hoten='$hoten', diem='$diem',gioitinh='$gioitinh' WHERE id=$id ";
    if ($conn->query($sql)===true){
        header("Location:index.php");
    }
}
$kq=$conn->query("SELECT * FROM sinhvien WHERE id=$id");
$row=$kq->fetch_assoc();
?>
<form action="" method="POST">
    <p>hoten: </p>
    <input type="text" name="hoten" id="" value="<?=$row['hoten']?>">
    <p>diem: </p>
    <input type="text" name="diem" id="" value="<?=$row['diem']?>">
    <p>gioitinh: </p>
    <input type="text" name="gioitinh" id="" value="<?=$row['gioitinh']?>">
    <button type="submit"> sua </button>
</form>

<link href="style.css"></link>