<?php

$age = 10;

if ($age >= 65 ) {
    $fee = 0;
} else {
    if ($age < 19) {
        $fee = 720;
    } else {
        if ($age <= 9) {
            $fee = 450;
        } else {
            $fee = 1250;
        }
    }
}

echo $age . "살의 지하철 요금은 = " . $fee . " 입니다.";