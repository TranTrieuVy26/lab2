<?php
if (!isset($error_message)) {
    $error_message = 'Đã xảy ra lỗi không xác định.';
}

if (!isset($reason)) {
    $reason = '';
}

echo "<div style='color:red;'><strong>Lỗi:</strong> $error_message<br><small>Chi tiết: $reason</small></div>";
?>
