<?php
$conn=new mysqli("localhost","root","","qlkh");
if($conn->connect_error){
    echo "Ket noi that bai".$conn->connect_error;
}
?>