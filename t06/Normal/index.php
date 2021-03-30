<?php namespace Space\Normal;
function calculate_time() {
    $startDate = date_create('1939-01-01');
    $endDate = date_create('now');
    $difference = date_diff($startDate, $endDate);
    return $difference;
}
?>

<DOCTYPE !html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quantum space</title>
</head>

<body>
    <p><?php $time = calculate_time(); echo "In real life you were absent for " . $time->format("%Y") . " years, " . $time->format("%m") .
    " months, " . $time->format("%d") . " days"; ?></p></body>

</html>
