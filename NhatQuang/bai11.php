<?php
function tinhTienDien($so_kwh) {
    $gia_bac_1 = 1678;
    $gia_bac_2 = 1734;
    $gia_bac_3 = 2014;
    
    if ($so_kwh <= 50) {
        $tong_tien = $so_kwh * $gia_bac_1;
    } elseif ($so_kwh <= 100) {
        $tong_tien = (50 * $gia_bac_1) + (($so_kwh - 50) * $gia_bac_2);
    } else {
        $tong_tien = (50 * $gia_bac_1) + (50 * $gia_bac_2) + (($so_kwh - 100) * $gia_bac_3);
    }
    
    return $tong_tien;
}

// Test chương trình
$so_kwh = 120;
$tong_tien = tinhTienDien($so_kwh);

echo "Số điện tiêu thụ: $so_kwh kWh\n";
echo "Tổng tiền điện phải trả: " . number_format($tong_tien, 0, ',', '.') . " VNĐ";
?>
