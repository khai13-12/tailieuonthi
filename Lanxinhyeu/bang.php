<?php
include "connect.php"; 
$sql="CREATE TABLE IF NOT EXISTS sinhvien(
                id INT(3) AUTO_INCREMENT PRIMARY KEY,
                hoten VARCHAR(30),
                diem FLOAT(5),
                gioitinh VARCHAR(5),
                khoahoc VARCHAR(30))";
  if($conn->query($sql)===true){
        echo "tao bang thanh cong";
    }else{
        echo "That bai".$conn->error;
    }
?>  