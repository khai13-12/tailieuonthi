<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $trangthai=$_POST['trangthai'];
    $mt=$conn->prepare("INSERT INTO khachhang(hoten,email,sdt,trangthai)
     VALUES (?,?,?,?)");
    $mt->bind_param("ssss",$hoten,$email,$sdt,$trangthai);
    if($mt->execute()){
        echo "<script>alert('Them thanh cong');
        window.location.href='index.php';
        </script>";
    } else{
        echo "That bai".$mt->error;
    }

}
?>
<form action="" method="POST">
    <p>Ho ten: </p>
    <input type="text" name="hoten" id="" required>
    <p>Email: </p>
    <input type="text" name="email" id="" required>
    <p>SDT: </p>
    <input type="text" name="sdt" id="" required>
    <p>Trang thai:</p>
    <select name="trangthai" id="" required>
        <option value="">---Chon trang thai---</option>
        <option value="da kich hoat">da kich hoat</option>
        <option value="chua kich hoat">chua kich hoat</option>
    </select>
    <button type="submit">Them</button>
    <button type="reset">Xoa</button>

</form>

