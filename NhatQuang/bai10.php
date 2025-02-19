<?php
$weight = 70; // Cân nặng (kg)
$height = 1.75; // Chiều cao (m)

// Tính chỉ số BMI
$bmi = $weight / ($height * $height);

// Phân loại BMI
if ($bmi < 18.5) {
    $category = "Thiếu cân";
} elseif ($bmi < 24.9) {
    $category = "Bình thường";
} elseif ($bmi < 29.9) {
    $category = "Thừa cân";
} else {
    $category = "Béo phì";
}

// In kết quả
echo "Chỉ số BMI: " . number_format($bmi, 2) . "\n";
echo "Xếp loại: $category";
?>
