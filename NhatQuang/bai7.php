<?php
$num1 = 50;
$num2 = 30;

// So sánh
$isGreater = $num1 > $num2;  // Kiểm tra num1 có lớn hơn num2 không
$isEqual = $num1 == $num2;   // Kiểm tra num1 có bằng num2 không
$isNotEqual = $num1 != $num2; // Kiểm tra num1 có khác num2 không

// In kết quả
echo "num1 > num2: " . ($isGreater ? "true" : "false") . "\n";
echo "num1 == num2: " . ($isEqual ? "true" : "false") . "\n";
echo "num1 != num2: " . ($isNotEqual ? "true" : "false") . "\n";
?>
