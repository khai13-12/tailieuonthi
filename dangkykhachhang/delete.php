<?php
require 'db.php';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM customers WHERE customer_id = ?");
    $stmt->execute([$_GET['id']]);
}
header("Location: customer_management.php");
exit;
