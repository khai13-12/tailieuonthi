<?php
include "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM sinhvien1 WHERE id=$id");
    $student = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $ngaysinh = $_POST["ngaysinh"];
    $diachi = $_POST["diachi"];
    $gioitinh = $_POST["gioitinh"];
    $khoahoc = $_POST["khoahoc"];

    $sql = "UPDATE sinhvien1 SET
            hoten='$hoten',
            email='$email',
            sdt='$sdt',
            ngaysinh='$ngaysinh',
            diachi='$diachi',
            gioitinh='$gioitinh',
            khoahoc='$khoahoc'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cap nhat thanh cong !!!'); window.location.href='hienthi.php';</script>";
    } else {
        echo "Loi: " . $conn->error;
    }
}
?>
<form action="" method="POST">
    <p>Ho ten*</p>
    <input type="text" name="hoten" id="" value="<?= $student['hoten'] ?>" required> 
    <p>Email*</p>
    <input type="email" name="email" id="" value="<?= $student['email'] ?>" required>
    <p>So dien thoai</p>
    <input type="text" name="sdt" id="" value="<?= $student['sdt'] ?>">
    <p>Ngay sinh*</p>
    <input type="date" name="ngaysinh" id="" value="<?= $student['ngaysinh'] ?>" required>
    <p>Dia chi</p>
    <input type="text" name="diachi" id=""value="<?= $student['diachi'] ?>" >
    <p>Gioi tinh*</p>
    <input type="radio" name="gioitinh" id="" value="nam" <?= $student['gioitinh']=="Nam"?"checked":"" ?>>Nam
    <input type="radio" name="gioitinh" id="" value="nu" <?= $student['gioitinh']=="Nu"?"checked":"" ?>>Nu
    <input type="radio" name="gioitinh" id="" value="khac" <?= $student['gioitinh']=="Khac"?"checked":"" ?>>Khac
    <p>Khoa hoc*</p>
    <select name="khoahoc" id="" required>
        <option value="">--Chon--</option>
        <option value="Phat trien web" <?= $student['khoahoc']=="Phat trien Web"?"selected":"" ?>>Phat trien web</option>
        <option value="Khoa hoc du lieu" <?= $student['khoahoc']=="Khoa hoc du lieu"?"selected":"" ?>>Khoa hoc du lieu</option>
        <option value="Phat trien ung dung tren di dong" <?= $student['khoahoc']=="Phat trien ud tren di dong"?"selected":"" ?>>Phat trien ung dung di dong</option>
    </select><br><br>
    <input type="submit" name="submit" id="" value="Cap nhat">
</form>