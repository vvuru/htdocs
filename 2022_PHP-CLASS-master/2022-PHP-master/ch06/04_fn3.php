<?php
$start_num = 1;
$end_num = 100;

$result = sum_from_to($start_num, $end_num);

print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

function sum_from_to($snum, $enum)
{
    $sum = 0;
    for ($i = $snum; $i <= $enum; $i++) {
        $sum += $i;
    }
    return $sum;
}
