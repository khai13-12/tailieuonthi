<?php 
    include "connect.php";
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
        $hoten=$_POST['hoten'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
        $ngaysinh=$_POST['ngaysinh'];
        $diachi=$_POST['diachi'];
        $gioitinh=$_POST['gioitinh'];
        $khoahoc=$_POST['khoahoc'];

        $sql="INSERT INTO sinhvien1(hoten, email, sdt, ngaysinh, diachi, gioitinh, khoahoc) 
        VALUES ('$hoten','$email','$sdt','$ngaysinh','$diachi','$gioitinh','$khoahoc')";

        if($conn->query($sql)===true){
            echo "<script>alert('Dang ky thanh cong'); window.location.href='hienthi.php';</script> ";
        }else{
            echo "<script>alert('Lỗi khi đăng ký: " . $conn->error . "');</script>";
        }
        $conn->close();
    }
?>
