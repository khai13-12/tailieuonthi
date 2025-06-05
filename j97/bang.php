<?php
    include "connect.php";
    $sql="CREATE TABLE IF NOT EXISTS sinhvien1(
                    id INT(3) AUTO_INCREMENT PRIMARY KEY,
                    hoten VARCHAR(30),
                    email VARCHAR(100),
                    sdt VARCHAR(11),
                    ngaysinh DATE,
                    diachi VARCHAR(255),
                    gioitinh VARCHAR(20),
                    khoahoc VARCHAR(100))";
    if($conn->query($sql)===true){
        echo "Tao bang thanh cong";
    }else{
        echo "That bai".$conn->error;
    }
?>