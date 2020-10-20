<?php


function myname($first, $last, $univ) : string {

    $n = func_num_args();
    echo $n."개의 매개변수가 전달 받았습니다.";
    echo $first . $last;

    $args = func_get_args();
    print_r($args);
    $name = $first . $last;
    return $name;
    // 함수의 동작이 종료가 됨
    $name = "aaaaaa"; // 동작 X
}

$my = myname("은", "다인", "대림대학교");
echo "<hr>";
echo $my;

$my = myname("대림대학교", "다인", "은");
echo "<hr>";
echo $my;