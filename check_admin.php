<?php
session_start();

echo 'Đã bắt đầu session.<br>';

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: login.php');  // Chuyển hướng đến trang đăng nhập
    exit();
}
?>
