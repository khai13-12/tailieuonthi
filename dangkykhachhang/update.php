<?php
require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM customers WHERE customer_id = ?");
$stmt->execute([$id]);
$customer = $stmt->fetch();

if (!$customer) {
    die("Không tìm thấy khách hàng.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE customers SET full_name=?, email=?, phone=?, status=? WHERE customer_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['status'], $id]);
    header("Location:customer_management.php ");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sửa khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Sửa khách hàng</h2>
    <form method="post">
        <label>Họ tên:</label><input type="text" name="full_name" value="<?= htmlspecialchars($customer['full_name']) ?>" required><br>
        <label>Email:</label><input type="email" name="email" value="<?= htmlspecialchars($customer['email']) ?>" required><br>
        <label>Điện thoại:</label><input type="text" name="phone" value="<?= htmlspecialchars($customer['phone']) ?>" required><br>
        <label>Trạng thái:</label>
        <select name="status">
            <option value="Active" <?= $customer['status'] == 'Active' ? 'selected' : '' ?>>Active</option>
            <option value="Inactive" <?= $customer['status'] == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
        </select><br>
        <input type="submit" value="Cập nhật">
        <a href="customer_management.php">Quay lại</a>
    </form>
</body>
</html>
