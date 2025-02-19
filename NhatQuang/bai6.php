<?php
$a = 10;
$b = 20;
$c = 30;

// Tính toán
$sum = $a + $b + $c;
$difference = $a - $b - $c;
$product = $a * $b * $c;
$quotient = $a / ($b * $c); // Tránh chia cho 0 nếu $b hoặc $c là 0

// In kết quả
echo "Tổng: $sum\n";
echo "Hiệu: $difference\n";
echo "Tích: $product\n";
echo "Thương: $quotient\n";
?>
