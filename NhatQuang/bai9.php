<?php
$income = 15000000; // Thu nhập (VNĐ)
$tax = 0; // Khởi tạo thuế phải nộp

// Xác định thuế suất theo mức thu nhập
if ($income <= 10000000) {
    $tax = $income * 0.05;
} elseif ($income <= 20000000) {
    $tax = $income * 0.10;
} else {
    $tax = $income * 0.20;
}

// Tính thu nhập ròng sau thuế
$net_income = $income - $tax;

// In kết quả ra màn hình
echo "Thuế phải nộp là: " . number_format($tax, 0, ',', '.') . " VNĐ\n";
echo "Thu nhập ròng sau khi trừ thuế là: " . number_format($net_income, 0, ',', '.') . " VNĐ\n";
?>
