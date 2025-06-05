<?php
    $conn=new mysqli("localhost","root","");
    if($conn->connect_error){
            echo "Ket noi that bai".$conn->connect_error;
    }
    $sql="CREATE DATABASE IF NOT EXISTS qlsvien";
    if($conn->query($sql)===true){
        echo "Tao database thanh cong";
    }else{
        echo "That bai".$conn->error;
    }

?>