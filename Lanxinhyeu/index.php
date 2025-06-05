<?php
include "connect.php";
$timkiem=$_GET['timkiem']??"";
$sql="SELECT * FROM sinhvien WHERE hoten LIKE '%$timkiem%' ";
$kq=$conn->query($sql);
?>
<form action="" method="GET">
    <input type="text" name="timkiem" placeholder="tim kiem theo ten">
    <button type="submit">Tim</button>
    <a href="them.php">Them sinh vien</a>
    
    
</form>
    
<link rel="stylesheet" href="style.css">
<table border="1px" cellpadding="8px">
    <tr>
        <th>Ho ten</th>
        <th>Diem</th>
        <th>Gioi tinh</th>
        <th>Hanh dong</th>
    </tr>
    <?php while($row=$kq->fetch_assoc()) {?>
        <tr>
            <td><?=$row['hoten']?></td>
            <td><?=$row['diem']?></td>
            <td><?=$row['gioitinh']?></td>
            <td>
                <a href="sua.php?id=<?=$row['id']?>">Sua </a> |
                <a href="xoa.php?id=<?=$row['id']?>" onclick="return confirm('Ban co muon xoa ko ')
                ">Xoa </a>
            </td>
        </tr>
    <?php } ?>
</table>
