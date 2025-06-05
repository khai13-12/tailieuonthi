<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $trangthai=$_POST['trangthai'];
    $sdtmoi=$_POST['sdt'];
    $mt=$conn->prepare("UPDATE khachhang SET sdt=? WHERE trangthai=?");
    $mt->bind_param("ss",$sdtmoi,$trangthai);
    if($mt->execute()){
        echo "<script>alert('Sua thanh cong');
        window.location.href='index.php';
        </script>";
    } else{
        echo "That bai".$mt->error;
    }

}
?>
<form action="" method="POST">
    <p>Chon trang thai:</p>
    <select name="trangthai" id="" required>
        <option value="">---Chon trang thai---</option>
        <option value="da kich hoat">da kich hoat</option>
        <option value="chua kich hoat">chua kich hoat</option>
    </select>
    <p>Nhap SDT moi: </p>
    <input type="text" name="sdt" id="" required>
    <button type="submit">Sua</button>
    <button type="reset">Xoa</button>
</form>

