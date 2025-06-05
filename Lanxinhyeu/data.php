<?php
    $conn=new mysqli("localhost","root","");
    if($conn->connect_error){
        echo "Ket noi that bai".$conn->connect_error;
    }
    $sql="CREATE DATABASE IF NOT EXISTS qlsv";
    if($conn->query($sql)===true){
        echo "tao database thanh cong";
    }else{
        echo "That bai".$conn->error;
    }
?>