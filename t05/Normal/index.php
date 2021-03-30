<?php namespace Space\Normal;
function calculate_time() {
    $startDate = date_create('1939-01-01');
    $endDate = date_create('now');
    $difference = date_diff($startDate, $endDate);
    return $difference;
}
?>
