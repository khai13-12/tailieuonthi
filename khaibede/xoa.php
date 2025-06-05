<?php
include "connect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_POST['email'];
    $tenmien="%".$email;
    $mt=$conn->prepare("DELETE FROM khachhang WHERE email LIKE ? ");
    $mt->bind_param("s",$tenmien);
    if($mt->execute()){
        echo "<script>alert('Xoa thanh cong');
        window.location.href='index.php';
        </script>";
    } else{
        echo "That bai".$mt->error;
    }

}
?>
<form action="" method="POST">
    <p>Nhap ten mien can xoa(VD:@gmail.com): </p>
    <input type="text" name="email" id="" required>
    <button type="submit">Xoa</button>
</form>

