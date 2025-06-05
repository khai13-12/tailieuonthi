<?php
include "connect.php";
$timkiem=$_GET['timkiem']??"";
$sql="SELECT * FROM khachhang WHERE trangthai LIKE 'da kich hoat' AND hoten LIKE'%$timkiem%'";
$kq=$conn->query($sql);
?>
<form action="" method="GET">
    <input type="text" name="timkiem" id="">
    <button type="submit">Tim</button>
    <a href="them.php">Them khach hang</a>
    <a href="sua.php?">Sua sdt theo trang thai</a>
    <a href="xoa.php">Xoa theo ten mien</a>

</form>
<table border="1px" cellpadding="8">
    <tr>
        <th>Ho ten</th>
        <th>Email</th>
        <th>SDT</th>
        <th>Trang thai</th>
    </tr>
    <?php while($row=$kq->fetch_assoc()){ ?>
        <tr>
            <td><?=$row['hoten']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['sdt']?></td>
            <td><?=$row['trangthai']?></td>
        </tr>
     <?php } ?>
      <?php $conn->close(); ?>
</table>