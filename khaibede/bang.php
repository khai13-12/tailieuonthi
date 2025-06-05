<?php
include "connect.php";
$sql="CREATE TABLE IF NOT EXISTS khachhang(
                    id INT(3) AUTO_INCREMENT PRIMARY KEY,
                    hoten VARCHAR(30),
                    email VARCHAR(30),
                    sdt VARCHAR(11),
                    trangthai VARCHAR(30))";
if($conn->query($sql)===true){
    echo "Thanh cong";
}else{
    echo "That bai".$conn->error;
}
?>