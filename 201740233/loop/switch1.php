<?php
// 지하철 요금표
// 일반 1250원
// 청소년 720원
// 어린이 450원
// 노인 무료

$age = 10;
$price = 0;

if ($age >= 65) { // 노인
    $price = 0;
} else if ($age > 18 && $age <65) { // 일반
    $price = 1250;
} else if ($age > 9 && $age < 19) { // 청소년
    $price = 720;
} else if ($age < 10) { // 어린이
    $price = 450;
}

echo $age . "살의 지하철 요금은 = " . $price . "입니다.";

