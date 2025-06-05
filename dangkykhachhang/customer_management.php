<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM customers");
$customers = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Danh sách khách hàng</h2>
    <a href="add_customer.php" class="btn">+ Thêm khách hàng</a>
    <table>
        <tr>
            <th>ID</th><th>Họ tên</th><th>Email</th><th>Điện thoại</th><th>Trạng thái</th><th>Hành động</th>
        </tr>
        <?php foreach ($customers as $c): ?>
            <tr>
                <td><?= $c['customer_id'] ?></td>
                <td><?= htmlspecialchars($c['full_name']) ?></td>
                <td><?= htmlspecialchars($c['email']) ?></td>
                <td><?= htmlspecialchars($c['phone']) ?></td>
                <td><?= htmlspecialchars($c['status']) ?></td>
                <td>
                    <a href="update.php?id=<?= $c['customer_id'] ?>">Sửa</a> |
                    <a href="delete.php?id=<?= $c['customer_id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
