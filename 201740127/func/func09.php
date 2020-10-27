<?php


function myname($first, $last, $univ) {
    // 함수에 전달되는 매겨변수의 개수
    $n = func_num_args();
    echo $n."개의 매개변수가 전달 받았습니다.";
    echo $first . $last;

    $args = func_get_args();
    print_r($args);
    $name = $first . $last;
    return $name; // 문자열
}

$my = myname("은", "다인", "대림대학교");
echo "<hr>";
echo $my;