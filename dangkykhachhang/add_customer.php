<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO customers (full_name, email, phone, status) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['status']]);
    header("Location: customer_management.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Thêm khách hàng</h2>
    <div class="add">
    <form method="post">
        <label>Họ tên:</label><input type="text" name="full_name" required><br>
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Điện thoại:</label><input type="text" name="phone" required><br>
        <label>Trạng thái:</label>
        <select name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select><br>
        <input type="submit" value="Thêm">
        <a href="customer_management.php">Quay lại</a>
    </form>
    </div>
</body>
</html>
