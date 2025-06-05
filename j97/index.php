<?php
include "connect.php";
?>
<form action="them.php" method="POST">
    <p>Ho ten*</p>
    <input type="text" name="hoten" id="" required> 
    <p>Email*</p>
    <input type="email" name="email" id="" required>
    <p>So dien thoai</p>
    <input type="text" name="sdt" id="">
    <p>Ngay sinh*</p>
    <input type="date" name="ngaysinh" id=""required>
    <p>Dia chi</p>
    <input type="text" name="diachi" id="">
    <p>Gioi tinh*</p>
    <input type="radio" name="gioitinh" id="" value="nam" required>Nam
    <input type="radio" name="gioitinh" id="" value="nu" required>Nu
    <input type="radio" name="gioitinh" id="" value="khac" required>Khac
    <p>Khoa hoc*</p>
    <select name="khoahoc" id="" required>
        <option value="">--Chon--</option>
        <option value="Phat trien web">Phat trien web</option>
        <option value="Khoa hoc du lieu">Khoa hoc du lieu</option>
        <option value="Phat trien ung dung di dong">Phat trien ung dung di dong</option>
    </select><br><br>
    <input type="submit" name="submit" id="" value="Dang ky">
    <input type="reset" name="" id="" value="Xoa from">
</form>
