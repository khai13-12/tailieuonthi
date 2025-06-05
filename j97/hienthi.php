<?php
include "connect.php";
$result = $conn->query("SELECT * FROM sinhvien1");
?>
<table border="1" cellpadding="8">
    <tr>
        <th>Ho ten</th>
        <th>Email</th>
        <th>SDT</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Gioi tinh</th>
        <th>Khoa hoc</th>
        <th>Hanh dong</th>
    </tr>
    <?php while($row= $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['hoten']?> </td>
        <td><?= $row['email']?> </td>
        <td><?= $row['sdt']?> </td>
        <td><?= $row['ngaysinh']?> </td>
        <td><?= $row['diachi']?> </td>
        <td><?= $row['gioitinh']?> </td>
        <td><?= $row['khoahoc']?> </td>
        <td>
            <a href="sua.php?id=<?= $row['id'] ?>">Sua</a> |
            <a href="xoa.php?id=<?= $row['id'] ?>" onclick="return confirm('Xoa sinh vien nay ?');">Xoa</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>