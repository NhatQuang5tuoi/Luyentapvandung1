<?php
$kWh = 120;
if ($kWh <= 50) {
    $tien_dien = $kWh * 1.678;
} elseif ($kWh <= 100) {
    $tien_dien = 50 * 1.678 + ($kWh - 50) * 1.734;
} else {
    $tien_dien = 50 * 1.678 + 50 * 1.734 + ($kWh - 100) * 2.014;
}

echo "Tổng tiền điện phải trả là: $tien_dien VNĐ<br>";
?>
