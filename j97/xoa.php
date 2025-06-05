<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $conn->query("DELETE FROM sinhvien1 WHERE id=$id");
}
header("Location: hienthi.php");
?>