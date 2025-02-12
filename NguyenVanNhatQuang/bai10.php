<?php
$weight = 70;
$height = 1.75;
$bmi = $weight / ($height * $height);

echo "Chỉ số BMI là: $bmi<br>";

if ($bmi < 18.5) {
    echo "Thiếu cân<br>";
} elseif ($bmi < 24.9) {
    echo "Bình thường<br>";
} elseif ($bmi < 29.9) {
    echo "Thừa cân<br>";
} else {
    echo "Béo phì<br>";
}
?>
