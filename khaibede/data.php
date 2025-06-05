<?php
$conn=new mysqli("localhost","root","");
if($conn->connect_error){
    echo "Ket noi that bai".$conn->connect_error;
}
$sql="CREATE DATABASE qlkh";
if($conn->query($sql)===true){
    echo "Thanh cong";
}

?>