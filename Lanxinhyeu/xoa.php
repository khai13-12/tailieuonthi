<?php
include "connect.php";
$id=$_GET['id'];

 
    $sql=" DELETE FROM sinhvien WHERE id=$id ";
    if ($conn->query($sql)===true){
        header("Location:index.php");
    }




