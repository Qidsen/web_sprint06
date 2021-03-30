<?php namespace Space\Quantum;
function calculate_time() {
    $startDate = date_create('1939-01-01');
    $endDate = date_create('now');
    $difference = date_diff($startDate, $endDate);
    $arr = preg_split('/\s+/', (string)$difference->format('%Y %m %d'));
    $total_days = (floatval($arr[0]) * 365) + (floatval($arr[1] * 30) + floatval($arr[2]));
    $remainder_days = $total_days % (365 * 7);
    $quantum_year = ($total_days - $remainder_days) / (365 * 7);
    $remainder_days2 = $remainder_days % (30 * 7);
    $quantum_month = ($remainder_days - $remainder_days2) / (30 * 7);
    $remainder_days3 = $remainder_days2 % (1 * 7);
    $quantum_days = ($remainder_days2 - $remainder_days3) / (1 * 7);
    $arr[0] = $quantum_year;
    $arr[1] = $quantum_month;
    $arr[2] = $quantum_days;
    return $arr;
}
?>
