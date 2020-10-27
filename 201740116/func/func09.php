<?php
function myname($first, $last, $univ) 
{
    // 함수에 전달되는 매개변수의 갯수 확인 가능
    $n = func_num_args();
    echo $n . "개의 매개변수를 전달 받았습니다.";

    // 값도 확인 가능
    $args = func_get_args();
    print_r($args);
    $name = $first . $last;
    return $name;
}

$my = myname("박", "상훈", "대림대학교");
echo "<hr>";
echo $my; 