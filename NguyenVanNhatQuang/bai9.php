<?php
$income = 15000000;

if ($income <= 10000000) {
    $thue = $income * 0.05;
} elseif ($income <= 20000000) {
    $thue = $income * 0.10;
} else {
    $thue = $income * 0.20;
}

$thu_nhap = $income - $thue;

echo "Thuế phải nộp là: $thue<br>";
echo "Thu nhập ròng sau khi trừ thuế là: $thu_nhap<br>";
?>
